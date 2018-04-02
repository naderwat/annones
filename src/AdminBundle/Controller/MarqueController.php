<?php

namespace AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AdminBundle\Entity\Marque;
use AdminBundle\Form\MarqueType;

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

	public function getUploadDir()
    {
        return 'uploads/logos/';
    }


    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }



	public function addAction(Request $request)
	{
		$marque = new Marque();
		$em = $this->getDoctrine()->getManager();
		$form = $this->get('form.factory')->create(MarqueType::class,$marque);

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

			var_dump($_FILES);
			die();

			 $target_file = $this->getUploadDir() . basename($_FILES["adminbundle_pdocs"]['name']["filename"]);
                 move_uploaded_file($_FILES["adminbundle_pdocs"]["tmp_name"]['filename'], $target_file);


			$marque->setDateAjout(new \Datetime());
			$marque->setDateEdit(new \Datetime());
			$marque->setUser($this->getUser());
			$marque->setLogo($_FILES['adminbundle_pdocs']['name']['filename'])
			$em->persist($marque);
			$em->flush();
			$session = new Session();
			 $session->getFlashBag()->add('notice', 'Marque ajoutée avec succés !');
             return $this->redirectToRoute('admin_marques');


		}
		return $this->render('AdminBundle:Marque:add.html.twig',array('form'=>$form->createView()));

	}

	public function deleteAction($id, Request $request)
	{

	}
}
