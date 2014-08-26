<?php

namespace Imie\WorkgroupsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WorkgroupsController extends Controller
{
    public function indexAction()
    {
        return $this->render('WorkgroupsBundle:Default:index.html.twig');
    }
}
