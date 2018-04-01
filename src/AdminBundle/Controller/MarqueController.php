<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MarqueController extends Controller
{

	public function indexAction()
	{
		$em =$this->getDoctrine()->getManager();
		$marques = $em->getRepository('AdminBundle:Marque')->findAll();
		return $this->render('AdminBundle:Marque:index.html.twig',array('marques' =>$marques));

	}

	public function editAction($id, Request $request)
	{

	}

	public function addAction()
	{

		return $this->render('AdminBundle:Marque:add.html.twig');

	}

	public function deleteAction($id, Request $request)
	{

	}
}
