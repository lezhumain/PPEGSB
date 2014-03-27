<?php
namespace PPE\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use PPE\GSBBundle\Entity\RapportDeVisite;



class RapportDeVisiteType extends AbstractType {

	protected $em;
    public function __construct($em) {
        $this->em=$em;
    }


	public function buildForm(FormBuilderInterface $builder, array $options) {


            $builder->add('codeMotif', 'entity', array('class' => 'PPEGSBBundle:Motif',
                                           'property' => 'libelle_motif'));

            $builder->add('matriculePraticien', 'entity', array('class' 	=> 'PPEGSBBundle:Praticien',
                                           						'property' 	=> 'nomPraticien'));

            $builder->add('date_rapport', 'date', array(
                'widget' => 'single_text',
			    'format' => 'd/M/y',
			));

			$builder->add('date_visite', 'date', array(
                'widget' => 'single_text',
			    'format' => 'd/M/y',
			));


			$builder->add('depotLegalPres', 'entity', array('class' 	=>	'PPEGSBBundle:Medicament',
									                        'property'	=>	'depotLegal',
                                           					'multiple'	=>	true));

			//$civilites=array();
	        $query = $this->em->getRepository('PPEGSBBundle:Medicament')->FindAll();

	        foreach ($query as $med) 
	        {
	        	foreach ($med->getMatriculeColAvo() as $echantillon) {
	        			$builder->add('date_visite', 'date', array(
			                'widget' => 'single_text',
						    'format' => 'd/M/y',
						));
	        	}
	        }


/*	        foreach ($query as $ref) {
	            $civilites[$ref->geCode()]=$ref->getLibelle();
	        }
	 
	        $builder
	        ->add('civilite','choice',array( 'label' => 'Civilité',
	                                         'choices' => $civilites*/




            $builder->add('bilan_visite', 'textarea', array('attr' => array('rows' => 5) ));
            $builder->add('AJOUTER', 'submit', array('attr' => array('class' => 'btn btn-primary col-md-12')));


	}


	public function getName() {
		return 'ppe_gsb_rapportdevisitetype';
	}

	
	public function getDefaultOptions(array $options) {
		return array('data_class' => 'EPSI\CommandeBundle\Entity\RapportDeVisite');
	}

}


?>