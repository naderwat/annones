<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MarqueController extends Controller
{

	public function indexAction()
	{

		return $this->render('AdminBundle:Marque:index.html.twig')

	}

	public function editAction($id, Request $request)
	{

	}

	public function addAction()
	{

	}

	public function deleteAction($id, Request $request)
	{

	}
}
