<?php
namespace PPE\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormBuilderInterface;



class RapportDeVisiteType extends AbstractType {
	public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder->add('codeMotif', 'entity', array('class' => 'PPEGSBBundle:Motif',
                                           'property' => 'libelle_motif'));

            $builder->add('matriculePraticien', 'entity', array('class' 	=> 'PPEGSBBundle:Praticien',
                                           						'property' 	=> 'nomPraticien'));

            $builder->add('date_rapport', 'date', array(
                'widget' => 'single_text',
			    'format' => 'ddMMyyyy'
			));

			$builder->add('date_visite', 'date', array(
                'widget' => 'single_text',
			    'format' => 'ddMMyyyy'
			));

			$builder->add('depotLegalPres', 'entity', array('class' 	=>	'PPEGSBBundle:Medicament',
									                        'property'	=>	'depotLegal',
                                           					'multiple'	=>	false));

            $builder->add('bilan_visite', 'textarea');
            $builder->add('AJOUTER', 'submit');

	}


	public function getName() {
		return 'ppe_gsb_rapportdevisitetype';
	}

	
	public function getDefaultOptions(array $options) {
		return array('data_class' => 'EPSI\CommandeBundle\Entity\RapportDeVisite');
	}

}


?>