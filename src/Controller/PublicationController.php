<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PublicationController extends AbstractController
{
    /**
     * @Route("/publication", name="publication")
     */
    public function publication(): Response
    {
        return $this->render('publication/publication.html.twig', [
            'controller_name' => 'PublicationController',
        ]);
    }
}
