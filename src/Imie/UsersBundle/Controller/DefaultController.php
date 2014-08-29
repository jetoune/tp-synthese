<?php

namespace Imie\UsersBundle\Controller;

use Imie\UsersBundle\Entity\Users;
use Imie\UsersBundle\Form\UsersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('UsersBundle:Default:index.html.twig', array('name' => $name));
    }

	public function loginAction()
	{
	    // Si le visiteur est déjà identifié, on le redirige vers l'accueil
	    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
	      return $this->redirect($this->generateUrl('home_homepage_bis'));
	    }

	    $request = $this->getRequest();
	    $session = $request->getSession();

	    // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
	    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	    } else {
	      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
	      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
	    }

	    return $this->render('UsersBundle:Default:login.html.twig', array(
	      // Valeur du précédent nom d'utilisateur entré par l'internaute
	      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
	      'error'         => $error,
	    ));
	}

	public function listAction() {
		$repo = $this->getDoctrine()
					->getRepository('UsersBundle:Users');
		$users = $repo->findAll();
		return $this->render('UsersBundle:Default:list.html.twig', array('users' => $users));
	}

	public function profilAction() {
        return $this->render('UsersBundle:Default:profil.html.twig');
	}

	public function updateProfilAction() {
		$user= $this->get('security.context')->getToken()->getUser();
		// Faire le formulaire
		$form = $this->createForm(new UsersType(), $user,
		array('action' => $this->generateUrl('users_profil_update')));
	    // On récupère la requête
	    $request = $this->getRequest();
	    // On vérifie qu'elle est de type POST
	    if ($request->getMethod() == 'POST') {
	      // On fait le lien Requête <-> Formulaire
	      $form->bind($request);
	      // On vérifie que les valeurs entrées sont correctes
	      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
	      if ($form->isValid()) {
	        // On enregistre notre objet $article dans la base de données
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($user);
	        $em->flush();
	        // On définit un message flash
	        $this->get('session')->getFlashBag()->add('info', 'Modification effectuée');
	        // On redirige vers la page de visualisation de l'article nouvellement créé
	        return $this->redirect($this->generateUrl('users_profil'));
	      }
	    }

        return $this->render('UsersBundle:Default:update.html.twig', ['form' => $form->createView()]);
	}

	public function importAction() {
		
        return $this->render('UsersBundle:Default:import.html.twig');
	} 
}
