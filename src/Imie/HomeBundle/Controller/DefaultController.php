<?php

namespace Imie\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$repo = $this->getDoctrine()
					->getRepository('ProjectsBundle:Projects');
		//Dans la variable projects, on récupère nos valeurs (Tous les détails d'un projet)
		$potentialProject = $repo->findAll();
		$potentialProject = $potentialProject[array_rand($potentialProject, 1)];
		$newProjects = $repo->findOneBy(['rate' => '0']);
		
        return $this->render('HomeBundle:Default:index.html.twig', ['newProjects' => $newProjects, 'potentialProject' => $potentialProject]);
    }

    public function adminAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }
}
