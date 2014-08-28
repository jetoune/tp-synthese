<?php

namespace Imie\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }

    public function adminAction()
    {
        return $this->render('HomeBundle:Default:index.html.twig');
    }
}
