<?php

namespace BT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Admin\AdminBundle\Form\SearcheType;
class DefaultController extends Controller
{
    public function indexAction()
    {  
         
  
        $repository = $this->getDoctrine()
                           ->getEntityManager()
                           ->getRepository('AdminAdminBundle:ExperienceObject');
        $repo=$this->getDoctrine()
                           ->getEntityManager()->createQuery('SELECT distinct(e.name),o.picture,e.name,o.description FROM Admin\AdminBundle\Entity\Experience e, Admin\AdminBundle\Entity\ExperienceObject o WHERE e.idExperience = o.idExperience group by e.name');
         
        
            $liste_objet = $repo->getResult();
       
         
        return $this->render('BTFrontBundle:Default:index.html.twig', array(
            'liste_objet' => $liste_objet
        ));
    }
}
