<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Haie;
use Doctrine\ORM\EntityManagerInterface;

final class VoirHaieController extends AbstractController
{
    #[Route('/voir/haie', name: 'app_voir_haie')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $haies = $entityManager->getRepository(Haie::class)->findAll();
        return $this->render('voir_haie/index.html.twig', [
            'controller_name' => 'VoirHaieController',
            'haies' => $haies,    
        ]);
    }
}
