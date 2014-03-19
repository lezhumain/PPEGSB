<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PPE\GSBBundle\Entity;

class DefaultController extends Controller
{


/*BLOC DE GESTION DES RP*/
	/**
	 * Index renvoi a la liste des rapports
	 */
    public function indexAction(){
        return $this->render('PPEGSBBundle:Default:liste_rp.html.twig');
    }


    /**
     * Fonction d'affichage du formulaire dun rapport de visite
     * 		Paramettre : new
     *   					=>	0 affichage read only
     * 						=>  1 nouveau rapport	
     */
    public function ficheRpAction($new){
        return $this->render('PPEGSBBundle:Default:fiche_rp.html.twig', array('new' => $new ));
    }   
/******************************/



/*BLOC GESTION DES PRATICIEN*/
    public function listePraAction(){
    	return $this->render('PPEGSBBundle:Default:liste_prat.html.twig');
    }

    /**
     * Fonction d'affichage du formulaire dun praticien
     * 		Paramettre : new
     *   					=>	0 affichage read only
     * 						=>  1 praticien	
     */
    public function fichePraAction($new){
        $tab = $this->getMapFromAdress("32 rue des granges Lyon");

        return $this->render('PPEGSBBundle:Default:fiche_prat.html.twig', array('new' => $new, "gps" => $tab ));
    }

    public function getMapFromAdress($adresse) {
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($adresse)."&sensor=false";
        $req = file_get_contents($url);
        $gps = json_decode($req, true);
         
        $lat = $gps['results'][0]['geometry']['location']['lat'];
        $lng = $gps['results'][0]['geometry']['location']['lng'];
         
        $tab["lat"] = $lat;
        $tab["lng"] = $lng;

        return $tab;
    }
/******************************/


/*BLOC GESTION DES MEDICAMENT*/
    public function listeMedAction(){
    	return $this->render('PPEGSBBundle:Default:liste_medicament.html.twig');
    }

    /**
     * Fonction d'affichage du formulaire dun medicamentz
     * 		Paramettre : new
     *   					=>	0 affichage read only
     * 						=>  1 praticien	
     */
    public function ficheMedAction($new){
        return $this->render('PPEGSBBundle:Default:fiche_medicament.html.twig', array('new' => $new ));
    }
/******************************/





/*BLOC DE GESTION DE LUTILISATEUR*/
    public function connexionAction()
    {
        return $this->render('PPEGSBBundle:Default:ap_connexion.html.twig');
    }
/******************************/
}
