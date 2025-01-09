<?php

namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/')]
    public function index()
    {
// $contents = $this->renderView('home/index.html.twig');

// return new Response ($contents);

return $this->render('home/index.html.twig');


    }
}