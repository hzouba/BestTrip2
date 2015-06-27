<?php

namespace Admin\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExperienceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('name', 'choice', array(
    'choices'   => array('Tunisia' => 'Tunisia',
        'France' => 'France',
        'USA' => 'USA',
        'Kenya' => 'Kenya',
        'Liban' => 'Liban',
        'Turkey' => 'Turkey',
        'Italy' => 'Italy',
        ),
    'required'  => true,
))
            ->add('dateAdd')
            ->add('idUser')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Admin\AdminBundle\Entity\Experience'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_adminbundle_experience';
    }
}
