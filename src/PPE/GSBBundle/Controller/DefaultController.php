<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PPE\GSBBundle\Entity;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PPEGSBBundle:Default:index.html.twig');
    }
}
