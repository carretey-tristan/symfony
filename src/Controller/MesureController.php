<?php

namespace App\Controller;

use App\Repository\HaieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

final class MesureController extends AbstractController
{
    #[Route('/mesure', name: 'app_mesure')]
    public function index(Request $request, HaieRepository $haieRepository): Response
    {
        $choix = $request->get('radiochoix');
        $session = $request->getSession();
        $session->set('monChoix', $choix);

        $haies = $haieRepository->findAll();
        return $this->render('mesure/index.html.twig', [
            'controller_name' => 'MesureController',
            'mesHaies' => $haies,
        ]);
    }
}