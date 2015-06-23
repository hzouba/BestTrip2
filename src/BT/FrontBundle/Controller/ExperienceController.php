<?php

namespace BT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Admin\AdminBundle\Entity\Experience;

class ExperienceController extends Controller
{
    public function addExperienceAction()
    {
        return $this->render('BTFrontBundle:Experience:addExperience.html.twig');
    }
}
