<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RenderPortfolioController extends AbstractController
{
    #[Route('/render/portfolio', name: 'app_render_portfolio')]
    public function index(): Response
    {
        return $this->render('render_portfolio/index.html.twig', [
            'controller_name' => 'RenderPortfolioController',
        ]);
    }
}
