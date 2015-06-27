<?php

namespace BT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Admin\AdminBundle\Entity\Experience;
use Admin\AdminBundle\Form\ExperienceType;
use Admin\AdminBundle\Form\SearcheType;
use Application\Sonata\UserBundle\Entity\User;

class ExperienceController extends Controller
{
    public function addExperienceAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $user->getId();
        $experience = new Experience;
        
        $form = $this->createForm(new experienceType, $experience);
        
        $request = $this->getRequest();
        
        if($request->isMethod('post')){
            
            $form->handleRequest($request);
            
            if($form->isValid()){
                
                $experience = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist($experience);
                $experience->setIdUser($user);
                $experience->setIsValid(0);
                $em->flush();
                
                return $this->redirect($this->generateURL('bt_front_experience_object'));
                
            }
            
        }
        
        return $this->render('BTFrontBundle:Experience:addExperience.html.twig', array('form'=>$form->createView()));
    }
    
    
    public function findbycountryAction()
    {
       
        $experience = new Experience;
        
        $form = $this->createForm(new SearcheType, $experience);
        
        $request = $this->getRequest();
        
        if($request->isMethod('post')){
            
            $form->handleRequest($request);
            
            if($form->isValid()){
                
                $experience = $form->getData();
                
              
                
                return $this->redirect($this->generateURL('bt_front_experience_object'));
                
            }
            
        }
        
        return $this->render('BTFrontBundle:Experience:experienceBycoutries.html.twig', array('form'=>$form->createView()));
    }
    
    
    
    
    
}
