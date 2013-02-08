<?php

namespace YM\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AlbumType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('songs', 'textarea', array('required' => false))
            ->add('file')
            ->add('artist', 'entity', array('class'    => 'YMTestBundle:Artist',
                                            'property' => 'name',
                                            'data'     => 'Default value',
                                            'multiple' => false,
                                            'expanded' => false ));
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'YM\TestBundle\Entity\Album'
        ));
    }

    public function getName()
    {
        return 'ym_testbundle_albumtype';
    }
}
