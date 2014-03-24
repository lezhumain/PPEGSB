<?php

namespace PPE\GSBBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormBuilder;
use PPE\GSBBundle\Entity\RapportDeVisite;
use PPE\GSBBundle\Entity\Motif;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function adminAction()
    {
        return $this->render('PPEGSBBundle:Default:admin.html.twig');
    }

/*BLOC DE GESTION DES RP*/
    /**
     * Index renvoi a la liste des rapports
     */
    public function indexAction(){
        return $this->render('PPEGSBBundle:Default:liste_rp.html.twig');
    }


    /**
     * Fonction d'affichage du formulaire dun rapport de visite
     *      Paramettre : new
     *                      =>  0 affichage read only
     *                      =>  1 nouveau rapport   
     */
    public function ficheRpAction($new, Request $request){

            // just setup a fresh $task object (remove the dummy data)
        $task = new RapportDeVisite();

        

        $form = $this->createFormBuilder($task)
            ->add('date_rapport', 'date')
            ->add('date_visite', 'date')
            ->add('bilan_visite', 'textarea')
            ->add('save', 'submit')
            ->add('Motif', 'entity', array('class' => 'PPEGSBBundle:Motif',
                                           'property' => 'libelle_motif'))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd

            return $this->redirect($this->generateUrl('ppegsb_homepage'));
        }




        return $this->render('PPEGSBBundle:Default:fiche_rp.html.twig', array('new' => $new, 'form' => $form->createView() ));
    }   
/******************************/



/*BLOC GESTION DES PRATICIEN*/
    public function listePraAction(){
        $em = $this->getDoctrine()->getEntityManager();
        $praticien = $em->getRepository('PPEGSBBundle:praticien')->FindAll();
        return $this->render('PPEGSBBundle:Default:liste_prat.html.twig', array('praticiens' => $praticien));
    }

    /**
     * Fonction d'affichage du formulaire dun praticien
     *      Paramettre : new
     *                      =>  0 affichage read only
     *                      =>  1 praticien 
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

        $i = 0;
        foreach ($praticien as $data) {
            $coo = $this->getMapFromAdress($data->getAdressePraticien()." ".$data->getCpPraticien()." ".$data->getVillePraticien());
            if ($coo == 0) {
                $i++;
            } else {
                $gpsCoo[] = $coo;
            }
        }
        echo $i;
        return $this->render('PPEGSBBundle:Default:map.html.twig', array('gpsCoo' => $gpsCoo, 'praticiens' => $praticien));
    }

    public function getMapFromAdress($adresse) {
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=".urlencode($adresse)."&sensor=false";
        $req = file_get_contents($url);
        $gps = json_decode($req, true);
         

        if ($gps['status'] !=  'ZERO_RESULTS') {
            $lat = $gps['results'][0]['geometry']['location']['lat'];
            $lng = $gps['results'][0]['geometry']['location']['lng'];
            $tab["lat"] = $lat;
            $tab["lng"] = $lng;
            return $tab;
         }
         else{
            return 0;
         }
         

    }
/******************************/


/*BLOC GESTION DES MEDICAMENT*/
    public function listeMedAction(){
        return $this->render('PPEGSBBundle:Default:liste_medicament.html.twig');
    }

    /**
     * Fonction d'affichage du formulaire dun medicamentz
     *      Paramettre : new
     *                      =>  0 affichage read only
     *                      =>  1 praticien 
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
