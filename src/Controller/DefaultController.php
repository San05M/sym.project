<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'sym_index')]
    public function index()
    {
        return $this->render('prueba1.html.twig');
    }

    #[Route('/about', name: 'sym_index')]
    public function about()
    {
        return $this->render('prueba1.html.twig');
    }
}
