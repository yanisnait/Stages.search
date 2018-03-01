<?php

namespace SS\PlatformBundle\Controller;

use SS\PlatformBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SS\PlatformBundle\Entity\Offre;
use SS\PlatformBundle\Entity\Entreprise;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class AdvertController extends Controller
{
    public function indexAction($page)
    {
        // On ne sait pas combien de pages il y a
        // Mais on sait qu'une page doit être supérieure ou égale à 1

        $page = ($page == "") ? 1 : $page;
        if ($page < 1) {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
            throw new NotFoundHttpException('Page "' . $page . '" inexistante.');
        }
        $user=$this->getUser();
        $listOffres=$user->getOffres();
        $total=count($listOffres);
            // Ici, on récupérera la liste des annonces, puis on la passera au template
            // Notre liste d'annonce en dur

            $listAdverts = $this->getDoctrine()->getManager()->getRepository('SSPlatformBundle:Offre')->findAll();

        return $this->render('SSPlatformBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts,'listOffres'=>$listOffres,'total'=>$total));

    }

    public function viewAction($id, Request $request)
    {
        // On récupère l'objet voulu
        $offre = $this->getDoctrine()
            ->getManager()
            ->find('SSPlatformBundle:Offre', $id);

        $commentaire=new Commentaire();

        $commentBox=$this->get('form.factory')->createBuilder(FormType::class,$commentaire)
            ->add('contenu',TextareaType::class,array('label'=>'Ton commentaire'))
            ->add('Publier',SubmitType::class)
            ->getForm();

        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $offre) {
            throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
        }

        $entreprise=$offre->getEntreprise();
        $logo=$entreprise->getLogo();

        if($request->isMethod('POST')) {
            $commentBox->handleRequest($request);

            if ($commentBox->isValid()) {
                $user = $this->getUser();
                $user->addCommentaires($commentaire);
                $offre->addAvis($commentaire);

                $em = $this->getDoctrine()->getManager();

                $em->persist($commentaire);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice_C', 'Commentaire bien enregistré.');

                // Le render ne change pas, on passait avant un tableau, maintenant un objet
                return $this->redirectToRoute('ss_platform_view', array('id' => $offre->getId()));

            }
        }

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('SSPlatformBundle:Advert:view.html.twig', array(
            'offre' => $offre,'logo'=>$logo,'commentBox'=>$commentBox->createView()));
    }

    public function addOAction(Request $request)
    {

        $offre = new Offre();

        $listEntreprise = $this->getDoctrine()
            ->getManager()
            ->getRepository('SSPlatformBundle:Entreprise')
            ->findAll();

        $formBuilderOffre=$this->get('form.factory')->createBuilder(FormType::class,$offre)
            ->add('intitule',      TextType::class)
            ->add('domaine',      TextType::class)
            ->add('missions',     TextareaType::class)
            ->add('profil',   TextareaType::class)
            ->add('duree',    TextType::class)
            ->add('entreprise',ChoiceType::class,['choices'=>$listEntreprise,'choice_label'=>'nom','label'=>'Entreprise'])
            ->add('Enregistrer',SubmitType::class)
            ->getForm()
        ;

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {

            $formBuilderOffre->handleRequest($request);


            if ($formBuilderOffre->isValid()) {
                // On récupère l'utilisateur courant
                $user=$this->getUser();
                //On récupère l'objet entreprise
                $entreprise=$formBuilderOffre['entreprise']->getData();

                //Ajout de l'offre
                $user->addOffres($offre);
                $entreprise->addOffres($offre);

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();

                // Étape 1 : On « persiste » l'entité, Elle est gérée par doctrine
                $em->persist($offre);

                // Étape 2 :Exécutions des requêtes sur ses objets
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice_O', 'Offre bien enregistrée.');


                // Puis on redirige vers la page de visualisation de cettte annonce
                return $this->redirectToRoute('ss_platform_view', array('id' => $offre->getId()));
            }
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('SSPlatformBundle:Advert:add.html.twig',array('formOffre'=>$formBuilderOffre->createView(),'vue'=>'O'));
    }

    public function addEAction(Request $request)
    {
        $entreprise =new Entreprise();

        $formBuilderEntreprise=$this->get('form.factory')->createBuilder(FormType::class,$entreprise)
            ->add('nom',      TextType::class)
            ->add('adresse',      TextType::class)
            ->add('email',     EmailType::class)
            ->add('tel',   NumberType::class)
            ->add('logo',    FileType::class,['required'=>false])
            ->add('domaine',TextType::class)
            ->add('description',TextareaType::class)
            ->add('Enregistrer',SubmitType::class)
            ->getForm()
        ;

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {

            $formBuilderEntreprise->handleRequest($request);
            // On peut ne pas définir ni la date ni la publication,
            // car ces attributs sont définis automatiquement dans le constructeur
            if ($formBuilderEntreprise->isValid()) {

                $em = $this->getDoctrine()->getManager();

                // Étape 1 : On « persiste » l'entité, Elle est gérée par doctrine
                $em->persist($entreprise);

                // Étape 2 :Eexécutions des requêtes sur ses objets

                $em->flush();

                $request->getSession()->getFlashBag()->add('notice_E', 'Entreprise bien enregistrée.');

                // Si on n'est pas en POST, alors on affiche le formulaire

                return $this->redirectToRoute('ss_platform_home');
            }

        }
        return $this->render('SSPlatformBundle:Advert:add.html.twig', array('formEntreprise' => $formBuilderEntreprise->createView(),'vue'=>'E'));

    }

    public function editOAction($id, Request $request)
    {
        $offre = $this->getDoctrine()->getManager()->find('SSPlatformBundle:Offre',$id);
        $offre->setDateOffre(new \DateTime());

        $listEntreprise = $this->getDoctrine()
            ->getManager()
            ->getRepository('SSPlatformBundle:Entreprise')
            ->findAll();

        $formBuilderOffre=$this->get('form.factory')->createBuilder(FormType::class,$offre)
            ->add('intitule',      TextType::class)
            ->add('domaine',      TextType::class)
            ->add('missions',     TextareaType::class)
            ->add('profil',   TextareaType::class)
            ->add('duree',    TextType::class)
            ->add('entreprise',ChoiceType::class,['choices'=>$listEntreprise,'choice_label'=>'nom','label'=>'Entreprise'])
            ->add('Enregistrer',SubmitType::class)
            ->getForm()
        ;

        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {

            $formBuilderOffre->handleRequest($request);
            // On peut ne pas définir ni la date ni la publication,
            // car ces attributs sont définis automatiquement dans le constructeur


            if ($formBuilderOffre->isValid()) {

                // On récupère l'EntityManager
                $em = $this->getDoctrine()->getManager();

                // Étape 1 : On « persiste » l'entité, Elle est gérée par doctrine
                $em->persist($offre);

                // Étape 2 :Eexécutions des requêtes sur ses objets
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice_O', 'Offre bien enregistrée.');


                // Puis on redirige vers la page de visualisation de cettte annonce
                return $this->redirectToRoute('ss_platform_view', array('id' => $offre->getId()));
            }
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('SSPlatformBundle:Advert:add.html.twig',array('formOffre'=>$formBuilderOffre->createView(),'vue'=>'O'));

    }

    public function deleteOAction($id, Request $request)
    {
        $offre=$this->getDoctrine()->getManager()->find('SSPlatformBundle:Offre',$id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($offre);
        $em->flush();

        $request->getSession()->getFlashBag()->add('notice_O_Delete', 'Offre supprimée.');


        return $this->redirectToRoute('ss_platform_home');
    }

    public function menuAction($limit)
    {
        // On fixe en dur une liste ici, bien entendu par la suite
        // on la récupérera depuis la BDD !
        $listAdverts = $this->getDoctrine()->getManager()->getRepository('SSPlatformBundle:Offre')->findAll();


        return $this->render('SSPlatformBundle:Advert:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listAdverts' => $listAdverts
        ));
    }

}
?>