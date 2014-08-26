<?php

namespace Imie\skillsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SkillsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ImieskillsBundle:Default:index.html.twig');
    }
}
