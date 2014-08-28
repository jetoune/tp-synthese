<?php

namespace Imie\WorkgroupsBundle\Controller;

use Imie\WorkgroupsBundle\Entity\Workgroups;
use Imie\WorkgroupsBundle\Form\WorkgroupsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkgroupsController extends Controller
{
    public function indexAction()
    {
    	$workgroups = $this->getAllWorkgroupsAction();
        return $this->render('WorkgroupsBundle:Default:index.html.twig', array('workgroups' => $workgroups));
    }

    public function addAction()
    {
		$workgroups = new Workgroups();
		// Faire le formulaire
		$form = $this->createForm(new WorkgroupsType(), $workgroups,
		array('action' => $this->generateUrl('workgroups_add')));
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
	        $em->persist($workgroups);
	        $em->flush();
	        // On définit un message flash
	        $this->get('session')->getFlashBag()->add('info', 'Groupe de travail créé');
	        // On redirige vers la page de visualisation de l'article nouvellement créé
	        return $this->redirect($this->generateUrl('workgroups_homepage'));
	      }
	    }

        return $this->render('WorkgroupsBundle:Default:add.html.twig', ['form' =>  $form->createView()]);
    }

    public function getAllWorkgroupsAction(){
    	//On met l'accès au repo dans une variable
    	$repo = $this->getDoctrine()
					->getRepository('WorkgroupsBundle:Workgroups');
		//Dans la variable projects, on récupère nos valeurs (Tous les détails d'un projet)
    	return $projects = $repo->findAll();
    }

}
