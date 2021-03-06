<?php

namespace Admin\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class GuideAdmin extends Admin {

    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name')
                ->add('dateCreation', null, array('label' => 'Add Date'))
                ->add('idUser', null, array('label' => 'User'))

        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('name')
                ->add('dateCreation', null, array('label' => 'Add Date'))
                ->add('idUser', null, array('label' => 'User'))
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('name')
                ->add('dateCreation', null, array('label' => 'Add Date'))
                ->add('idUser', null, array('label' => 'User'))
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
