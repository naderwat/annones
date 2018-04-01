<?php

namespace FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller
{
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }


    public function asideAction()
    {
    	return $this->render('FrontBundle:Default:aside.html.twig');
    }

    
}
