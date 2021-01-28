<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MealDisplayController extends AbstractController
{
    /**
     * @Route("/affichage", name="affichage")
     */
    public function index(): Response
    {
        return $this->render('meal_display/mealdisplay.html.twig', [
            'controller_name' => 'MealDisplayController',
        ]);
    }
}
