<?php

namespace App\Controller;


use App\Entity\Actualite;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ActualiteController extends AbstractController
{
    #[Route('/actus', name: 'actualites')]
    public function index(EntityManagerInterface $em): Response
    {
        $actualites = $em->getRepository(Actualite::class)->findAll();

        return $this->render('actualites/index.html.twig', [
            'actualites' => $actualites,
        ]);
    }
}
