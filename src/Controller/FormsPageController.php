<?php

namespace App\Controller;

use App\Form\DevisType;
use App\Form\TaillerType;
use App\Form\HaieType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/forms')]
final class FormsPageController extends AbstractController
{
    #[Route('/', name: 'app_forms_index', methods: ['GET','POST'])]
    public function index(Request $request): Response
    {
        // Create the forms but do not change their handling logic here.
        $devisForm = $this->createForm(DevisType::class);
        $taillerForm = $this->createForm(TaillerType::class);


        // Render a page that displays the three forms (for preview/testing).
        return $this->render('forms/index.html.twig', [
            'devisForm' => $devisForm->createView(),
            'taillerForm' => $taillerForm->createView(),
        ]);
    }
}
