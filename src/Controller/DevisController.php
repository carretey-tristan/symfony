<?php

namespace App\Controller;

use App\Repository\HaieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

final class DevisController extends AbstractController
{
    #[Route('/devis', name: 'app_devis')]
    public function index(Request $request, HaieRepository $haieRepository): Response
    {
        $session = new Session();
        $maVariable= $session->get('monChoix');
        $hauteur = $request->get('hauteur');
        $longueur = $request->get('longueur');
        $type = $haieRepository->find($request->get('type_de_haie'));
        return $this->render('devis/index.html.twig', [
            'controller_name' => 'DevisController',
            'monChoix' => $maVariable,
            'hauteur' => $hauteur,
            'longueur' => $longueur,
            'type_de_haie' => $type,
        ]);
    }
}
