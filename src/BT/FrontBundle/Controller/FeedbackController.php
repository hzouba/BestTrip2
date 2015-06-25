<?php

namespace BT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Admin\AdminBundle\Entity\Feedback;
use Admin\AdminBundle\Form\FeedbackType;
use Application\Sonata\UserBundle\Entity\User;

class FeedbackController extends Controller
{
    public function addFeedbackAction()
    {
         $user = $this->container->get('security.context')->getToken()->getUser();
        $user->getId();
        $feedback = new Feedback;
        
        $form = $this->createForm(new FeedbackType, $feedback);
        
        $request = $this->getRequest();
        
        if($request->isMethod('post')){
            
            $form->handleRequest($request);
            
            if($form->isValid()){
                
               $feedback = $form->getData();
                
                $em = $this->getDoctrine()->getManager();
                $em->persist( $feedback );
                 $feedback->setIdUser($user);
                $em->flush();
                
                return $this->redirect($this->generateURL('bt_front_homepage'));
                
            }
            
        }
        
      return $this->render('BTFrontBundle:Experience:addFeedback.html.twig', array('form'=>$form->createView()));
    }
}
