<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{

	public function indexAction()
	{

		//return new Response('Adexcel consulting');
		return $this->render('AdminBundle:Security:index.html.twig');

	}


}
