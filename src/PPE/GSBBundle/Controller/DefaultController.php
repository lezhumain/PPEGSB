<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
    	echo "sislèièPLOPi";
        return $this->render('PPEGSBBundle:Default:index.html.twig', array('name' => $name));
    }
}
