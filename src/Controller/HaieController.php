<?php

namespace App\Controller;

use ReturnTypeWillChange;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Haie;

final class HaieController extends AbstractController
{
    #[Route('/haie/creer', name: 'app_haie_creer')]
    public function haie_creer(EntityManagerInterface $entityManager): Response
    {
        $haie = new Haie();
        $haie->setCode('AU');
        $haie->setNom('Aurelien');
        $haie->setPrix('0.01');
        $entityManager->persist($haie);
        $entityManager->flush();

        return new Response('Haie créée avec le code '.$haie->getCode().'.');
    }

     #[Route('/haie/{code}', name: 'app_haie_voir')]
    public function haie_voir(string $code, EntityManagerInterface $entityManager)
    {
        $haie = $entityManager->getRepository(Haie::class)->find($code);

        if (!$haie) {
           return new Response('Ce type de haie n\'existe pas : '.$code);
        }
        else {
            return new Response('Type de haie : '.$haie->getNom().' à '.$haie->getPrix().'€');
        }
    }
    #[Route('/haie/modifier/{code}', name: 'app_haie_modifier')]
    public function modifier_haie(string $code, EntityManagerInterface $entityManager)
    {

        $haie = $entityManager->getRepository(Haie::class)->find($code);
        if (!$haie) {
           return new Response('Ce type de haie n\'existe pas : '.$code);
        }
        else {
            $haie->setPrix('3500.00');
            $entityManager->flush();
        }
        return $this->redirectToRoute('app_haie_voir', ['code' => $code]);
    }
        
    #[Route('/haie/supprimer/{code}', name: 'app_haie_supprimer')]
    public function supprimer_haie(string $code, EntityManagerInterface $entityManager)
    {
        $haie = $entityManager->getRepository(Haie::class)->find($code);
        if (!$haie) {
            return new Response('Ce type de haie n\'existe pas : '.$code);
        }
        else {
            $entityManager->remove($haie);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_haie_voir', ['code' => $code]);
    }
}