<?php

namespace App\Controller; 

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;
use App\Form\RegistrationType;

class ExempleController extends AbstractController
{
    /**
    * @Route("/", name="homepage")
    **/
    public function index() {
        return $this->render('base.html.twig', [
            'title' => 'Homepage !'
        ]);
    }

    /**
    * @Route("/saymyname/{name}", name="saymyname")
    **/
    public function random($name) {
        return new Response('Hello ' . $name . ' !'); 
    }

    /**
    * @Route("/api", name="api_index")
    **/
    public function api() {
        $data = [
            'test' => 'hello world',
            'table' => ['Elle est impressionante mais la mienne est plus grosse','C est pas faux']
            ];

        return new JsonResponse($data);
    }
}