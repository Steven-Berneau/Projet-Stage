<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderEventController extends AbstractController
{
    #[Route('/render/event', name: 'app_render_event')]
    public function index(): Response
    {
        return $this->render('render_event/index.html.twig', [
            'controller_name' => 'RenderEventController',
        ]);
    }
}
 