<?php

namespace Imie\skillsBundle\Controller;

use Imie\skillsBundle\Entity\skills;
use Imie\skillsBundle\Form\skillsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SkillsController extends Controller
{
    public function indexAction()
    {
        $skills = $this->getAllSkillsAction();
        return $this->render('ImieskillsBundle:Default:index.html.twig', array('skills' => $skills));
    }

    public function addAction()
    {
        $skills = new Skills();
        // Faire le formulaire
        $form = $this->createForm(new SkillsType(), $skills,
        array('action' => $this->generateUrl('imieskills_skills_add')));
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
            $em->persist($skills);
            $em->flush();
            // On définit un message flash
            $this->get('session')->getFlashBag()->add('info', 'Compétence bien ajouté');
            // On redirige vers la page de visualisation de l'article nouvellement créé
            return $this->redirect($this->generateUrl('imieskills_skills_list'));
          }
        }

        return $this->render('ImieskillsBundle:Default:add.html.twig', ['form' =>  $form->createView()]);
    }

    public function getAllSkillsAction(){
    	$repo = $this->getDoctrine()
					->getRepository('ImieskillsBundle:skills');

    	return $skills = $repo->findAll();
    }
}
