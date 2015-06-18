<?php

namespace BT\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BTFrontBundle:Default:index.html.twig');
    }
}
