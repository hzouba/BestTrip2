<?php

namespace BT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Admin\AdminBundle\Entity\ExperienceObject;
use Admin\AdminBundle\Form\ExperienceObjectType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
class ExperienceObjectController extends Controller
{
    public function addExperienceObjectAction()
    {
        $experienceObject = new ExperienceObject;
        
        $form = $this->createForm(new ExperienceObjectType, $experienceObject);
        
        $request = $this->getRequest();
        
        if($request->isMethod('post')){
            
            $form->handleRequest($request);
            
            if($form->isValid()){
                
                $experienceObject = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                 $file=$form['picture']->getData();
               //  $file->move('.',$file);
                 $dir = './uploads';
                $file->move($dir, $file->getClientOriginalName());
                 $video=$form['video']->getData();
               //  $file->move('.',$file);
                 $dir = './uploads';
                $video->move($dir, $video->getClientOriginalName());
                $experienceObject->setPicture($file->getClientOriginalName());
                $em->persist($experienceObject);
                $em->flush();
               
                return $this->redirect($this->generateURL('bt_front_homepage'));
                
            }
            
        }
        
        return $this->render('BTFrontBundle:Experience:addExperienceObject.html.twig', array('form'=>$form->createView()));
    }
}
