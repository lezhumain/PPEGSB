<?php
namespace PPE\GSBBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use PPE\GSBBundle\Entity;

/**
 * @Route("/demo/secured")
 */
class SecurityController extends Controller
{
    /**
     * @Route("/login", name="ppegsb_login")
     * @Template()
     */
	public function loginAction()
    {   
		$request = $this->getRequest();
		$session = $request->getSession();
        
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR))
        	$error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        else
        {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        return $this->render('PPEGSBBundle:Default:ap_connexion.html.twig', 
        					array(
					            // last username entered by the user
					            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
					            'error'         => $error,
					        ));
    }
}

