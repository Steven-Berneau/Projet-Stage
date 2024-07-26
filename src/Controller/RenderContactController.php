<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderContactController extends AbstractController
{
    #[Route('/render/contact', name: 'app_render_contact')]
    public function index(): Response
    {
        return $this->render('render_contact/index.html.twig', [
            'controller_name' => 'RenderContactController',
        ]);
    }
}
