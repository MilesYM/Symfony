<?php

namespace YM\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArtistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name',        'text')
            ->add('biography',   'textarea', array('required' => false))
            ->add('file')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'YM\TestBundle\Entity\Artist'
        ));
    }

    public function getName()
    {
        return 'ym_testbundle_artisttype';
    }
}
