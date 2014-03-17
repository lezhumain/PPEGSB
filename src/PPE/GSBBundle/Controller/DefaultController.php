<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
<<<<<<< HEAD
        return $this->render('PPEGSBBundle:Default:index.html.twig');
=======

        return $this->render('PPEGSBBundle:Default:index.html.twig', array('name' => $name));
>>>>>>> d9e932f4fd1e87449a492bbb03706655790aa4e8
    }
}
