<?php

namespace Admin\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Range;

class SearcheType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', 'choice', array(
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
           ;
    }
    
   

    /**
     * @return string
     */
    public function getName()
    {
        return 'admin_adminbundle_search';
    }
}
