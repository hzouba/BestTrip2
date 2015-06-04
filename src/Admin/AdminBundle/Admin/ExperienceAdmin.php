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
            ->add('dateAdd')
            ->add('idUser', 'entity',array('class' => 'Admin\AdminBundle\Entity\User'))
            ->add('useUser', 'entity',array('class' => 'Admin\AdminBundle\Entity\User'))
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('dateAdd')
            ->add('idUser')
            ->add('useUser')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('dateAdd')
            ->add('idUser', 'entity',array('class' => 'Admin\AdminBundle\Entity\User'))
            ->add('useUser', 'entity',array('class' => 'Admin\AdminBundle\Entity\User'))
        ;
    }
}