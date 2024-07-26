<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderSoinController extends AbstractController
{
    #[Route('/render/soin', name: 'app_render_soin')]
    public function index(): Response
    {
        return $this->render('render_soin/index.html.twig', [
            'controller_name' => 'RenderSoinController',
        ]);
    }
}
