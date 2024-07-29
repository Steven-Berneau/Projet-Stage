<?php

namespace App\Controller;

use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderEventController extends AbstractController
{
    #[Route('/render/event', name: 'app_render_event')]
    public function index(EvenementRepository $evenementRepository): Response
    {

        $evenements = $evenementRepository->findAll();
        return $this->render('render_event/index.html.twig', [
            'controller_name' => 'RenderEventController','evenements'=> $evenements
        ]);
    }
}
