<?php

namespace Imie\RolesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RolesBundle:Default:index.html.twig');
    }
}
