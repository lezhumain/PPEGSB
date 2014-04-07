<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use PPE\GSBBundle\Entity;
use PPE\GSBBundle\Entity\Visiteur;
use PPE\GSBBundle\Entity\RapportDeVisite;
use PPE\GSBBundle\Entity\ActiviteComplementaire;
use PPE\GSBBundle\Entity\Medicament;
use PPE\GSBBundle\Form\RapportDeVisiteType;
use PPE\GSBBundle\Form\RapportDeVisiteHandler;
use PPE\GSBBundle\Form\ActiviteComplementaireType;
use PPE\GSBBundle\Form\ActiviteComplementaireHandler;
use PPE\GSBBundle\Form\Avoir;
use PPE\GSBBundle\Form\Offre;

class DefaultController extends Controller
{
    public function adminAction()
    {
        //$this->cryptCollabs();
        return $this->render('PPEGSBBundle:Default:admin.html.twig');
    }

    /**
     * Index renvoi a la liste des rapports
     */
    public function indexAction()
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $matriculUtilisateur = $utilisateur->getMatriculeColVis()->getMatriculeCol();

        $em = $this->getDoctrine()->getManager();
        $rapports = $em->getRepository('PPEGSBBundle:RapportDeVisite')->FindBy(array('matriculeCol' => $matriculUtilisateur));

        return $this->render('PPEGSBBundle:Default:liste_rp.html.twig', array('rapports' => $rapports));
    }

    public function ficheRpAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $rp = new RapportDeVisite();
        $form = $this->createForm(new RapportDeVisiteType($em), $rp);

        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $matriculUtilisateur = $utilisateur->getMatriculeColVis()->getMatriculeCol();
        $medAvoir = $em->getRepository('PPEGSBBundle:Avoir')->FindBy(array('matriculeColAvo' => $matriculUtilisateur));



        $formHandler = new RapportDeVisiteHandler($form, $this->get('request'), $this->getDoctrine()->getManager());

        if ($formHandler->process()) {
            return $this->redirect($this->generateUrl('ppegsb_homepage'));
        }

        return $this->render('PPEGSBBundle:Default:fiche_rp.html.twig', array('form' => $form->createView(), 'medAvoir' => $medAvoir ));
    }

    public function getRpAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $rp = $em->find('PPEGSBBundle:RapportDeVisite', $id);

        if (empty($rp)) {
            throw $this->createNotFoundException("Identifiant inconnu");
        }

        return $this->render('PPEGSBBundle:Default:get_rp.html.twig', array('rp' => $rp));
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


    public function mapPraAction()
    {
        $em = $this->getDoctrine()->getManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();

        if (empty($praticien))
            throw $this->createNotFoundException("Pas de praticien à localiser :(");

        return $this->render('PPEGSBBundle:Default:map.html.twig');
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
    public function ficheMedAction($id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $medicament = $em->getRepository('PPEGSBBundle:Medicament')->FindOneBy( array('depotLegal' => $id) );
        return $this->render('PPEGSBBundle:Default:fiche_medicament.html.twig', array('medicament' => $medicament) );
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
    		return null;
    	else
    	{
    		$factory = $this->get('security.encoder_factory');
    		
    		$encoder = $factory->getEncoder($user);
    		
    		$oldpass = $user->getMdpCol();
    		
    		$password = $encoder->encodePassword($oldpass, $user->getSaltCol());
    		
    		$user->setMdpCol($password);
    		
    		return $user;
    	}
	}
   
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
	   		if($col->getSaltCol() == 1)
    			$col->setSaltCol( $this->genSalt() );

	   		//$col = $this->hachUserMdp($col);
			if( $col == null ) // erreur
			{
				$ret = "erreur";
				break;
			}
			else
				$em->persist($col);
                $col->setMdpCol($this->hachMdp('123Soleil', $col->getSaltCol(), $col));
    	}
    	$em->flush();
    	
    	$log .= "fin\n";
    	
    	$monfichier = fopen('log8.txt', 'w');
    	fputs($monfichier, $log);
    	fclose($monfichier);
    	
    	return $ret;
    }
/******************************/

    /****BLOC DE GESTION ACT COMP **/  

    public function listActCompAction()
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $matriculUtilisateur = $utilisateur->getMatriculeColVis()->getMatriculeCol();

        $em = $this->getDoctrine()->getManager();
        $act = $em->getRepository('PPEGSBBundle:ActiviteComplementaire')->FindBy(array('matriculeColAct' => $matriculUtilisateur));

        return $this->render('PPEGSBBundle:Default:list_act.html.twig', array('activites' => $act));
    }

    public function formActCompAction(Request $request)
    {
        $utilisateur = $this->container->get('security.context')->getToken()->getUser();
        $matriculUtilisateur = $utilisateur->getMatriculeColVis();

        $em = $this->getDoctrine()->getManager();
        $act = new ActiviteComplementaire();
        $form = $this->createForm(new ActiviteComplementaireType($em), $act);

        $act->setMatriculeColAct($matriculUtilisateur);

        $formHandler = new ActiviteComplementaireHandler($form, $this->get('request'), $this->getDoctrine()->getManager());

        if ($formHandler->process()) {
            return $this->redirect($this->generateUrl('ppegsb_homepage'));
        }

        return $this->render('PPEGSBBundle:Default:form_actComp.html.twig', array('form' => $form->createView() ));
    }

    public function updateActCompAction($id) {
        // On recherche l'avis
        $em = $this->getDoctrine()->getEntityManager();
        $act = $em->find('PPEGSBBundle:ActiviteComplementaire', $id) ;
        
        if ($act == null) {
            // S'il n'existe pas, on affiche une page 404
            throw $this->createNotFoundException("Cette activité n'existe pas");
        }
        else {
            // Création du formulaire
            $form = $this->createForm(new ActiviteComplementaireType, $act);
        
            // Traitement du formulaire
            $formHandler = new ActiviteComplementaireHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager()); 
            if ($formHandler->process()) {
                return $this->redirect($this->generateUrl('ppegsb_getFicheAct', array('id' => $id)));
            }

            // Affichage du formulaire
            return $this->render('PPEGSBBundle:Default:form_actComp.html.twig', array('form' => $form->createView()));
        }
    }
}
