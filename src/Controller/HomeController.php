<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeControllerPhpController extends AbstractController
{
    #[Route('/src/controller/php', name: 'app_home_controller')]
    public function index(): Response
    {
        return $this->render('acceuil.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
