<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ModifierHaieController extends AbstractController
{
    #[Route('/modifier/haie', name: 'app_modifier_haie')]
    public function index(): Response
    {
        return $this->render('modifier_haie/index.html.twig', [
            'controller_name' => 'ModifierHaieController',
        ]);
    }
}
