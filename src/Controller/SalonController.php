<?php

namespace App\Controller;

use App\Entity\Salon;
use App\Form\SalonType;
use App\Repository\SalonRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/salon')]
class SalonController extends AbstractController
{
    #[Route('/', name: 'app_salon_index', methods: ['GET'])]
    public function index(SalonRepository $salonRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        return $this->render('salon/index.html.twig', [
            'salons' => $salonRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_salon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        $salon = new Salon();
        $form = $this->createForm(SalonType::class, $salon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($salon);
            $entityManager->flush();

            return $this->redirectToRoute('app_salon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('salon/new.html.twig', [
            'salon' => $salon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salon_show', methods: ['GET'])]
    public function show(Salon $salon): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        return $this->render('salon/show.html.twig', [
            'salon' => $salon,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_salon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Salon $salon, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        $form = $this->createForm(SalonType::class, $salon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_salon_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('salon/edit.html.twig', [
            'salon' => $salon,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salon_delete', methods: ['POST'])]
    public function delete(Request $request, Salon $salon, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        if ($this->isCsrfTokenValid('delete'.$salon->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($salon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_salon_index', [], Response::HTTP_SEE_OTHER);
    }
}
