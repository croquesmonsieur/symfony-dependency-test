<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StringController extends AbstractController
{
    #[Route('/string', name: 'string')]
    public function index(): Response
    {
        return $this->render('string/index.html.twig', [
            'controller_name' => 'StringController',
        ]);
    }
}
