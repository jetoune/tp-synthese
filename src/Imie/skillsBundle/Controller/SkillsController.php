<?php

namespace Imie\skillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SkillsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImieskillsBundle:Default:index.html.twig');
    }

    public function getAllSkillsAction(){
    	$repo = $this->getDoctrine()
					->getRepository('ImieskillsBundle:skills');

    	$skills = $repo->findAll();
    	
    	return $this->render('ImieskillsBundle:Default:skill.html.twig', array('skills' => $skills));
    }
}
