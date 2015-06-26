<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ExperienceAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('dateAdd', null, array('label' => 'Add date'))
            ->add('isValid', null, array('label' => 'Enable'))
            ->add('idGuide', null, array('label' => 'Guide'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
            ->add('dateAdd', null, array('label' => 'Add date'))
            ->add('isValid', null, array('label' => 'Enable'))
            ->add('idGuide', null, array('label' => 'Guide'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->add('dateAdd', null, array('label' => 'Add date'))
            ->add('idUser', 'entity',array('class' => 'Application\Sonata\UserBundle\Entity\User','label' => 'User'))
            ->add('isValid', null, array('editable' => true,'label' => 'Enable'))
            ->add('idGuide', null, array('label' => 'Guide'))
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }
}