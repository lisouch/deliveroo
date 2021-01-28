<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeConnectionController extends AbstractController
{
    /**
     * @Route("/home/connection", name="home_connection")
     */
    public function index(): Response
    {
        return $this->render('home_connection/index.html.twig', [
            'controller_name' => 'HomeConnectionController',
        ]);
    }
}
