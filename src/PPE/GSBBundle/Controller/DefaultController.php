<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PPE\GSBBundle\Entity;
use PPE\GSBBundle\Entity\Visiteur;

class DefaultController extends Controller
{
	public function adminAction()
	{
		return $this->render('PPEGSBBundle:Default:admin.html.twig');
	}

/*BLOC DE GESTION DES RP*/
	/**
	 * \brief Index renvoi a la liste des rapports
	 */
    public function indexAction()
    {
    	// Code pour recup un user
    	$repo = $this->get('doctrine')->getManager()->getRepository("PPEGSBBundle:Visiteur");
    	//$msg = get_class( $repo );
/*	 	$vi = $repo->findOneByUsername("Louis.Villechalane");
   	
    	$msg = get_class( $vi );    	
    	$msg1 = $this->hachUserMdp($vi);
    	$msg2 = $this->hachUserMdp1($vi);
    	
    	$salt = $vi->getSalt();
    	if($salt == "")
    		$msg .= " - vide";
    	else if($salt == null)
    		$msg .= " - null";
    	else
    		$msg .= " - autre...";
  	
    	$msg = $vi->getUsername();
*/    	//return $this->render('PPEGSBBundle:Default:liste_rp.html.twig', array("msg" => $msg));
        
        return $this->render('PPEGSBBundle:Default:liste_rp.html.twig');
    }


    /**
     * \brief Fonction d'affichage du formulaire dun rapport de visite
     * \param new
     *   	0 affichage read only
     * 		1 nouveau rapport	
     */
    public function ficheRpAction($new){
        return $this->render('PPEGSBBundle:Default:fiche_rp.html.twig', array('new' => $new ));
    }   
/******************************/



/*BLOC GESTION DES PRATICIEN*/
    public function listePraAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();
    	return $this->render('PPEGSBBundle:Default:liste_prat.html.twig', array('praticiens' => $praticien));
    }

    /**
     * \brief Fonction d'affichage du formulaire dun praticien
     * \param 
     * 		new
     *   		0 affichage read only
     * 			1 praticien
     * 		id
     * 			l'id du praticien
     */
    public function fichePraAction($new, $id){

        $em = $this->getDoctrine()->getEntityManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindOneBy(array("matriculePraticien" => $id));

        if (empty($praticien)) {
            throw $this->createNotFoundException("Praticien inconnu :(");
        }

        $tab = $this->getMapFromAdress($praticien->getAdressePraticien()." ".$praticien->getCpPraticien()." ".$praticien->getVillePraticien());

        return $this->render('PPEGSBBundle:Default:fiche_prat.html.twig', array('new' => $new, "gps" => $tab, 'praticien' => $praticien ));
    }

    public function mapPraAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();

        if (empty($praticien)) {
            throw $this->createNotFoundException("Pas de praticien à localiser :(");
        }

        foreach ($praticien as $data) {
            $gpsCoo[] = $this->getMapFromAdress($data->getAdressePraticien()." ".$data->getCpPraticien()." ".$data->getVillePraticien());
        }

        return $this->render('PPEGSBBundle:Default:map.html.twig', array('gpsCoo' => $gpsCoo, 'praticiens' => $praticien));
    }

    /**
     * \brief 
     * 		Retourne les coordonnees gps d'une adresse
     * \param 
     * 		string $adresse
     * \return 
     * 		array("lat/lng"=>valeur) $tab
     * 			lat : la latitude
     * 			lng : la longitude
     */
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
    
    /**
     * \brief
     * 		Le mot de passe d'un user avec 
     * 		l'algo defini dans security.yml 
     * 		via les methodes de Symfony
     * \param 
     * 		PPE\GSBBundle\Entity\Visiteur $user
     * \return
     * 		NULL | PPE\GSBBundle\Entity\Visiteur $user
     */
/*    private function hachUserMdp($user)
    {
    	if( get_class($user) != "PPE\GSBBundle\Entity\Visiteur" )
    		//return null;// throw exception...
			return "no";
    	else
    	{
    		$factory = $this->get('security.encoder_factory');
    		
    		$encoder = $factory->getEncoder($user);
    		
    		$oldpass = $user->getPassword();
    		
    		$password = $encoder->encodePassword($oldpass, $user->getSalt());
    		
    		//$user->setPassword($password);
    		
    		//return $user;
    		return $oldpass . " | " . $password . " <-> " . $user->getSalt();
    	}
    }
*/    
    /**
     * \brief
     * 		Hash le mot de passe d'un user
     * 		avec l'algo SHA512 via la fonction
     * 		hash('SHA512', motDePasse.salt)
     * \param 
     * 		PPE\GSBBundle\Entity\Visiteur $user
     * \return
     * 		NULL | PPE\GSBBundle\Entity\Visiteur $user
     */
 /*   private function hachUserMdp1($user)
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
    
    // dans constructeur de collaborateur
    private function genSalt()
    {
    	
    }
*/
/******************************/
}
