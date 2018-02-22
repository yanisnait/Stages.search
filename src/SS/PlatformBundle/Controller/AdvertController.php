<?php

namespace SS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


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
                'id'      => 1,
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

        return $this->render('SSPlatformBundle:Advert:view.html.twig',array('id'=>$id));

    }

    /* Récupérer des informations sur la session
    public function viewAction($id, Request $request)
    {
        // Récupération de la session
        $session = $request->getSession();

        // On récupère le contenu de la variable user_id
        $userId = $session->get('user_id');

        // On définit une nouvelle valeur pour cette variable user_id
        $session->set('user_id', 91);

        // On n'oublie pas de renvoyer une réponse
        return new Response("<body>Je suis une page de test, je n'ai rien à dire</body>");
    }*/

    /* Redirection de Page
    public function viewAction($id,Request $request)
    {
        $url=$this->get('router')->generate('ss_platform_home');

        return new RedirectResponse($url);
                    ou
        return $this->redirect($url);
                    ou
        return $this->redirectToRoute('ss_platform_home');

    }
    */

    /*Obtenir un paramètre dans l'url
     public function viewAction($id,Request $request)
	{   $tag = $request->query->get('tag');
		return new Response("Affichage de l'annonce d'id : ".$id.", avec le tag:".$tag);
	}*/

   /*
    public function viewAction($id)
    {   $response=new Response();
        $response->setContent("Ceci est une page d'erreur 404");
        $response->setStatusCode(Response::HTTP_NOT_FOUND);
        return $response;
    }*/

    public function addAction(Request $request)
    {
        // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
        // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')) {
            // Ici, on s'occupera de la création et de la gestion du formulaire
            if (!$this->get('security.authorization_checker')->isGranted('ROLE_AUTEUR')) {
                throw new AccessDeniedException('Accès limité aux auteurs.');
            }
            else {
                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

                // Puis on redirige vers la page de visualisation de cettte annonce
                return $this->redirectToRoute('ss_platform_view', array('id' => 5));
            }
        }


        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('SSPlatformBundle:Advert:add.html.twig');
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