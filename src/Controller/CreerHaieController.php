<?php

namespace App\Controller;

use App\Entity\Haie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Form\HaieType;

final class CreerHaieController extends AbstractController
{
    #[Route('/creer/haie', name: 'app_creer_haie')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $haie = new Haie();
        $form = $this->createForm(HaieType::class, $haie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $haie->setCode($form->get('code')->getData());
            $haie->setNom($form->get('nom')->getData());
            $haie->setPrix($form->get('prix')->getData());
            $entityManager->persist($haie);
            $entityManager->flush();
        }
        return $this->render('creer_haie/index.html.twig',
            array('form' => $form->createView())
        );
    }
}
