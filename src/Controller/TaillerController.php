<?php

namespace App\Controller;

use App\Entity\Tailler;
use App\Form\TaillerType;
use App\Repository\TaillerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/tailler')]
final class TaillerController extends AbstractController
{
    #[Route(name: 'app_tailler_index', methods: ['GET'])]
    public function index(TaillerRepository $taillerRepository): Response
    {
        return $this->render('tailler/index.html.twig', [
            'taillers' => $taillerRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_tailler_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $tailler = new Tailler();
        $form = $this->createForm(TaillerType::class, $tailler);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($tailler);
            $entityManager->flush();

            return $this->redirectToRoute('app_tailler_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tailler/new.html.twig', [
            'tailler' => $tailler,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tailler_show', methods: ['GET'])]
    public function show(Tailler $tailler): Response
    {
        return $this->render('tailler/show.html.twig', [
            'tailler' => $tailler,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tailler_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tailler $tailler, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TaillerType::class, $tailler);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_tailler_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('tailler/edit.html.twig', [
            'tailler' => $tailler,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_tailler_delete', methods: ['POST'])]
    public function delete(Request $request, Tailler $tailler, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$tailler->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($tailler);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_tailler_index', [], Response::HTTP_SEE_OTHER);
    }
}
