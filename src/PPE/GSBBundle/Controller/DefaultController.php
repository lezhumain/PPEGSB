<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PPE\GSBBundle\Entity;
use PPE\GSBBundle\Entity\Visiteur;
use Symfony\Component\Form\FormBuilder;
use PPE\GSBBundle\Entity\RapportDeVisite;
use PPE\GSBBundle\Entity\Medicament;
use Symfony\Component\HttpFoundation\Request;
use PPE\GSBBundle\Form\RapportDeVisiteType;
use PPE\GSBBundle\Form\RapportDeVisiteHandler;

class DefaultController extends Controller
{
    public function adminAction()
    {
        return $this->render('PPEGSBBundle:Default:admin.html.twig');
    }

    /**
     * Index renvoi a la liste des rapports
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rapports = $em->getRepository('PPEGSBBundle:RapportDeVisite')->FindAll();

        return $this->render('PPEGSBBundle:Default:liste_rp.html.twig', array('rapports' => $rapports));
    }

    /**
     * \brief 
     *      Fonction d'affichage du formulaire dun rapport de visite
     * \param new
     *      0 affichage read only
     *      1 nouveau rapport   
     */
    public function ficheRpAction($new, Request $request)
    {
        $rp = new RapportDeVisite();
        $form = $this->createForm(new RapportDeVisiteType, $rp);

        $formHandler = new RapportDeVisiteHandler($form, $this->get('request'), $this->getDoctrine()->getManager());

        if ($formHandler->process()) {
            return $this->redirect($this->generateUrl('ppegsb_homepage'));
        }

        return $this->render('PPEGSBBundle:Default:fiche_rp.html.twig', array('new' => $new, 'form' => $form->createView() ));
    }   
/******************************/



/*BLOC GESTION DES PRATICIEN*/
    public function listePraAction()
    {
        $em = $this->getDoctrine()->getManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();
        return $this->render('PPEGSBBundle:Default:liste_prat.html.twig', array('praticiens' => $praticien));
    }

    /**
     * \brief Fonction d'affichage du formulaire dun praticien
     * \param 
     *      new
     *          0 affichage read only
     *          1 praticien
     *      id
     *          l'id du praticien
     */
    public function fichePraAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindOneBy(array("matriculePraticien" => $id));

        if (empty($praticien)) {
            throw $this->createNotFoundException("Praticien inconnu :(");
        }

        $tab = $this->getMapFromAdress($praticien->getAdressePraticien()." ".$praticien->getCpPraticien()." ".$praticien->getVillePraticien());

        return $this->render('PPEGSBBundle:Default:fiche_prat.html.twig', array("gps" => $tab, 'praticien' => $praticien ));
    }

/*    public function mapPraAction()
    {
        $em = $this->getDoctrine()->getManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();

        if (empty($praticien))
        {
            throw $this->createNotFoundException("Pas de praticien à localiser :(");
        }

        $adresses = '';
        foreach ($praticien as $data)
        {
            $adresses .= $data->getAdressePraticien()." ".$data->getCpPraticien()." ".$data->getVillePraticien()."/";
        }
        
//        print_r($adresses);

//        $adresses = json_encode($adresses);

//        print_r($adresses);

        return $this->render('PPEGSBBundle:Default:map.html.twig', array('adresses' => $adresses, 'praticiens' => $praticien));
    }*/

    public function mapPraAction()
    {
        $em = $this->getDoctrine()->getManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();

        if (empty($praticien))
            throw $this->createNotFoundException("Pas de praticien à localiser :(");

        foreach ($praticien as $data)
        {
            $gpsCoo[] = $this->getMapFromAdress($data->getAdressePraticien()." ".$data->getCpPraticien()." ".$data->getVillePraticien());
        }
        
        return $this->render('PPEGSBBundle:Default:map.html.twig', array('gpsCoo' => $gpsCoo, 'praticiens' => $praticien));
    }

    /**
     * \brief 
     *      Retourne les coordonnees gps d'une adresse
     * \param 
     *      string $adresse
     * \return 
     *      array("lat/lng"=>valeur) $tab
     *          lat : la latitude
     *          lng : la longitude
     */
    public function getMapFromAdress($adresse)
    {
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($adresse)."&sensor=false";
        $req = file_get_contents($url);
        $gps = json_decode($req, true);


        if ($gps['status'] !=  'ZERO_RESULTS')
        {
            $lat = $gps['results'][0]['geometry']['location']['lat'];
            $lng = $gps['results'][0]['geometry']['location']['lng'];
            $tab["lat"] = $lat;
            $tab["lng"] = $lng;
            return $tab;
         }
         else
         {
            return 0;
         }
         

    }
/******************************/


/*BLOC GESTION DES MEDICAMENT*/
    public function listeMedAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $medicaments = $em->getRepository('PPEGSBBundle:Medicament')->FindAll();
        return $this->render('PPEGSBBundle:Default:liste_medicament.html.twig', array('medicaments' =>  $medicaments));
    }

    /**
     * Fonction d'affichage du formulaire dun medicaments
     *      Paramettre : new
     *                      =>  0 affichage read only
     *                      =>  1 praticien 
     */
    public function ficheMedAction()
    {

        return $this->render('PPEGSBBundle:Default:fiche_medicament.html.twig');
    }
/******************************/





/*BLOC DE GESTION DE LUTILISATEUR*/
    public function connexionAction()
    {
        return $this->render('PPEGSBBundle:Default:ap_connexion.html.twig');
    }
    
    private function hachMdp($mdp, $salt, $user)
    {
    	$factory = $this->get('security.encoder_factory');
    	$encoder = $factory->getEncoder($user);
    	
    	return $encoder->encodePassword($mdp, $salt);
    }
    
    /**
     * \brief
     *      Le mot de passe d'un user avec 
     *      l'algo defini dans security.yml 
     *      via les methodes de Symfony
     * \param 
     *      PPE\GSBBundle\Entity\Visiteur $user
     * \return
     *      NULL | PPE\GSBBundle\Entity\Visiteur $user
     */
    private function hachUserMdp($user)
    {
    	if( get_class($user) != "PPE\GSBBundle\Entity\Collaborateur" )
    		return null;// throw exception...
			//return "no";
    	else
    	{
    		$factory = $this->get('security.encoder_factory');
    		
    		$encoder = $factory->getEncoder($user);
    		
    		$oldpass = $user->getMdpCol();
    		
    		$password = $encoder->encodePassword($oldpass, $user->getSaltCol());
    		
    		$user->setMdpCol($password);
    		
    		return $user;
    		//return $oldpass . " | " . $password . " <-> " . $user->getSalt();
    	}
	}

    /**
     * \brief
     *      Hash le mot de passe d'un user
     *      avec l'algo SHA512 via la fonction
     *      hash('SHA512', motDePasse.salt)
     * \param 
     *      PPE\GSBBundle\Entity\Visiteur $user
     * \return
     *      NULL | PPE\GSBBundle\Entity\Visiteur $user
     */
/*    private function hachUserMdp1($user)
    {
        if( get_class($user) != "PPE\GSBBundle\Entity\Visiteur" )
            //return null;// throw exception...
            return "no";
        else
        {
            $oldpass = $user->getPassword();
            $password = hash('sha512', $oldpass.$user->getSalt());
    
            //return $user->setPassword($password);
            return $oldpass . " | " . $password . " <-> " . $user->getSalt();
        }
    }
*/    
	/**
	 * \brief
	 * 		Genere un salt aleatoire
	 * \return string
	 */
    private function genSalt()
    {
    	return md5(time() + rand());
    }
    
    private function cryptCollabs()
    {
    	$log = "<DEB>\n";
    	$ret = "ok";
    	
    	$em = $this->getDoctrine()->getManager();
    	$collabs = $em->getRepository("PPEGSBBundle:Collaborateur")->findall();
    	
    	foreach( $collabs as $col )
    	{
    		/* Si pas de salt on le genere */
	   		//if($col->getSaltCol() == null or $col->getSaltCol() == "")
    		//	$col->setSaltCol( $this->genSalt() );

	   		//$col = $this->hachUserMdp($col);
			if( $col == null ) // erreur
			{
				$log .= "Erreur at " . $col->toString() . "\n";
				$ret = "erreur";
				break;
			}
			else
				//$em->persist($col);
				$log .= $col->toString() . "\n\t" . $this->hachMdp('123Soleil', $col->getSaltCol(), $col) . "\n";
				//$log .= $col->toString() . "\n";
    	}
    	//$em->flush(); // On declenche l'enregistrement
    	
    	$log .= "fin\n";
    	
    	$monfichier = fopen('log8.txt', 'w');
    	fputs($monfichier, $log);
    	fclose($monfichier);
    	
    	return $ret;
    }
/******************************/
}
