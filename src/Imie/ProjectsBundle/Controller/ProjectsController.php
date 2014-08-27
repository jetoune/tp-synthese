<?php

namespace Imie\ProjectsBundle\Controller;

use Imie\ProjectsBundle\Entity\Projects;
use Imie\ProjectsBundle\Form\ProjectsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ProjectsBundle:Default:index.html.twig');
    }

    public function addAction()
    {
		$projects = new Projects();
		// Faire le formulaire
		$form = $this->createForm(new ProjectsType(), $projects,
		array('action' => $this->generateUrl('projects_add')));
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
	        $em->persist($projects);
	        $em->flush();
	        // On définit un message flash
	        $this->get('session')->getFlashBag()->add('info', 'Projet bien ajouté');
	        // On redirige vers la page de visualisation de l'article nouvellement créé
	        return $this->redirect($this->generateUrl('projects_homepage'));
	      }
	    }

        return $this->render('ProjectsBundle:Default:add.html.twig', ['form' =>  $form->createView()]);
    }
}
