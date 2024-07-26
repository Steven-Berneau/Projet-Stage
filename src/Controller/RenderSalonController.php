<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderSalonController extends AbstractController
{
    #[Route('/render/salon', name: 'app_render_salon')]
    public function index(): Response
    {
        return $this->render('render_salon/index.html.twig', [
            'controller_name' => 'RenderSalonController',
        ]);
    }
}
