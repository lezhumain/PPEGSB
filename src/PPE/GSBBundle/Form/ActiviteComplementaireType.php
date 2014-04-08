<?php

namespace PPE\GSBBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ActiviteComplementaireType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('themeAct');
        $builder->add('montantAct');
        $builder->add('dateAct', 'date', array(
            'widget' => 'single_text',
            'format' => 'd/M/y',
        ));
        $builder->add('lieuAct');

        //Ici c'est le coll qui est CONNECTE
        // $builder->add('matriculeColAct', 'hidden', array('data' => '1'));   
                                                        
                                                          
        $builder->add('matriculeColOrg', 'entity', array('class'     =>  'PPEGSBBundle:Collaborateur',
                                                        'property'  =>  'nomCol',
                                                        'multiple'  =>  true));
        $builder->add('matriculePraticien', 'entity', array('class'     =>  'PPEGSBBundle:Praticien',
                                                        'property'  =>  'nomPraticien',
                                                        'multiple'  =>  true));
        $builder->add('AJOUTER', 'submit', array('attr' => array('class' => 'btn btn-primary col-md-12')));
        
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PPE\GSBBundle\Entity\ActiviteComplementaire'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ppe_gsbbundle_activitecomplementaire';
    }
}
