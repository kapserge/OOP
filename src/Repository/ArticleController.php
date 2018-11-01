<?php

namespace App\Controller;
use App\Entity\Article;
use FOS\RestBundle\Controller\FOSRestController;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class ArticleController extends FOSRestController
{


	private $articleRepository;
	private $em;
	public function __construct(ArticleRepository $articleRepository,EntityManagerInterface $em)   {
	$this->articleRepository = $articleRepository;
	$this->em = $em;
	   }

public function postArticlesAction()
   {
   	//$this->em->persist($article);
	//$this->em->flush();
	//return $this->view($article);
	return new Response($this->renderer->render('helloworld.html.twig'));
   }

}
