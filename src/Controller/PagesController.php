<?php

namespace App\Controller;

	use App\Entity\Pages;

	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Component\Routing\Annotation\Route;
	use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


	class PagesController extends AbstractController {

		/**
		*	@Route("/pages", name="pages") 
		*/
		public function index(){
			$pages = $this->getDoctrine()->getRepository(Pages::class)->findAll();
			return $this->render('page/page.html.twig',[
				'pages' => $pages
			]);
		}

		/**
		* @Route("/pages/add")
		*/

		public function addPages(){
			$entityManager = $this->getDoctrine()->getManager();
			$page = new Pages();

			$entityManager->persist($article);

			$entityManager->flush();

		}

	}