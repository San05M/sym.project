<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/index', name: 'sym_index')]
    public function index()
    {
        return $this->render('galeria.view.html.twig');
    }
    #[Route('/galeria', name: 'sym_galeria')]
    public function galeria()
    {
        return $this->render('galeria.view.html.twig');
    }
    #[Route('/perfil', name: 'sym_perfil')]
    public function contact()
    {
        return $this->render('perfil.view.html.twig');
    }
    #[Route('/login', name: 'sym_login')]
    public function login()
    {
        return $this->render('login.view.html.twig');
    }
}
