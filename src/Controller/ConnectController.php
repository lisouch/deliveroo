<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConnectController extends AbstractController
{
    /**
     * @Route("/connect", name="connect")
     */
    public function connect(): Response
    {
        return $this->render('connect/connect.html.twig', [
            'controller_name' => 'ConnectController',
        ]);
    }
}
