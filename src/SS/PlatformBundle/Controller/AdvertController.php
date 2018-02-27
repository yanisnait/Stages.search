<?php

namespace SS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use SS\PlatformBundle\Entity\Offre;
use SS\PlatformBundle\Entity\Entreprise;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
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
		$page=($page=="") ?1 : $page;
        if ($page < 1) {
            // On déclenche une exception NotFoundHttpException, cela va afficher
            // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)
            throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
        }

        // Ici, on récupérera la liste des annonces, puis on la passera au template
        // Notre liste d'annonce en dur

        $listAdverts = array(
            array(
                'title'   => 'Recherche développpeur Symfony',
                'id'      => 5,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Hugo',
                'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
                'date'    => new \Datetime()),
            array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Mathieu',
                'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
                'date'    => new \Datetime())
        );

        return $this->render('SSPlatformBundle:Advert:index.html.twig',array('listAdverts'=>$listAdverts));
    }

    public function viewAction($id)
    {
        // On récupère l'objet voulu
        $offre = $this->getDoctrine()
            ->getManager()
            ->find('SSPlatformBundle:Offre', $id);

        // $advert est donc une instance de OC\PlatformBundle\Entity\Advert
        // ou null si l'id $id  n'existe pas, d'où ce if :
        if (null === $offre) {
            throw new NotFoundHttpException("L'annonce d'id ".$id." n'existe pas.");
        }

               $entreprise=$offre->getIdEtr();
                 $logo=$entreprise->getLogo();

        // Le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render('SSPlatformBundle:Advert:view.html.twig', array(
            'offre' => $offre,'logo'=>$logo));
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
            ->add('id_etr',ChoiceType::class,['choices'=>$listEntreprise,'choice_label'=>'nom','label'=>'Entreprise'])
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
                $user=$this->getUser();

                $offre->setIdPers($user->getId());

                $em = $this->getDoctrine()->getManager();

                // Étape 1 : On « persiste » l'entité, Elle est gérée par doctrine
                $em->persist($offre);

                // Étape 2 :Eexécutions des requêtes sur ses objets
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


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
            ->add('logo',    TextType::class)
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

                $request->getSession()->getFlashBag()->add('notice', 'Entreprise bien enregistrée.');
                // Si on n'est pas en POST, alors on affiche le formulaire

                return $this->redirectToRoute('ss_platform_home');
            }

        }
        return $this->render('SSPlatformBundle:Advert:add.html.twig', array('formEntreprise' => $formBuilderEntreprise->createView(),'vue'=>'E'));

    }

    public function editAction($id, Request $request)
    {
        // Ici, on récupérera l'annonce correspondante à $id

        // Même mécanisme que pour l'ajout
        if ($request->isMethod('POST')) {
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

            return $this->redirectToRoute('ss_platform_view', array('id' => 5));
        }

        return $this->render('SSPlatformBundle:Advert:edit.html.twig');
    }

    public function deleteAction($id)
    {
        // Ici, on récupérera l'annonce correspondant à $id

        // Ici, on gérera la suppression de l'annonce en question

        return $this->render('SSPlatformBundle:Advert:delete.html.twig');
    }

    public function menuAction($limit)
    {
        // On fixe en dur une liste ici, bien entendu par la suite
        // on la récupérera depuis la BDD !
        $listAdverts = array(
            array('id' => 2, 'title' => 'Recherche développeur Symfony'),
            array('id' => 5, 'title' => 'Mission de webmaster'),
            array('id' => 9, 'title' => 'Offre de stage webdesigner')
        );

        return $this->render('SSPlatformBundle:Advert:menu.html.twig', array(
            // Tout l'intérêt est ici : le contrôleur passe
            // les variables nécessaires au template !
            'listAdverts' => $listAdverts
        ));
    }


	
	
}
?>