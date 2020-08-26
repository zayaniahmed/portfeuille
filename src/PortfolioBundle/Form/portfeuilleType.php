<?php

namespace PortfolioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class portfeuilleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('fullName')->add('birthDate')->add('email')->add('education1')->add('descrip1')->add('education2')->add('descrp2')->add('education3')->add('descrp3')->add('workExperience1')->add('descrp4')->add('workExperience2')->add('descrip5')->add('workExperience3')->add('descrip6')->add('photo',FileType::class,array('label'=>'veuillez selectionner votre photo','data_class'=>null))->add('skill1')->add('pourcentage1')->add('skill2')->add('pourcent2')->add('skill3')->add('pourcent3')->add('skill4')->add('pourcent')->add('skill5')->add('pourcent5')->add('interest1')->add('descript1')->add('interest2')->add('descript2');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PortfolioBundle\Entity\portfeuille'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'portfoliobundle_portfeuille';
    }


}
