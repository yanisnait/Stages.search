<?php
// src/SS/UserBundle/Controller/UserController;

namespace SS\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use SS\UserBundle\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class UserController extends Controller
{

    public function signinAction(Request $request)
    {

        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirectToRoute('ss_platform_home');
        }


        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('SSUserBundle:User:login.html.twig', array(
            'last_username' => $authenticationUtils->getLastUsername(),
            'error'         => $authenticationUtils->getLastAuthenticationError(),
        ));


    }

    public function signupAction(Request $request)
    {
        $user=new User();
        $formUser=$this->get('form.factory')->createBuilder(FormType::class,$user)
            ->add('username',TextType::class,array('label'=>'Nom d\'Utilisateur'))
            ->add('password',PasswordType::class,array('label'=>'Mot de passe'))
            ->add('S\'inscrire',SubmitType::class)
            ->getForm();

        if ($request->isMethod('POST')) {

            $formUser->handleRequest($request);
            // On peut ne pas définir ni la date ni la publication,
            // car ces attributs sont définis automatiquement dans le constructeur
            $user->setSalt('');

            if ($formUser->isValid()) {
                // On récupère l'EntityManager

                $em = $this->getDoctrine()->getManager();

                // Étape 1 : On « persiste » l'entité, Elle est gérée par doctrine
                $em->persist($user);

                // Étape 2 :Eexécutions des requêtes sur ses objets
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');


                // Puis on redirige vers la page de visualisation de cettte annonce
                return $this->redirectToRoute('login', array('last_username' => $user->getUsername()));
            }
        }

        // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('SSUserBundle:User:formInscription.html.twig',array('formUser'=>$formUser->createView()));
    }




}
