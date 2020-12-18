<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main")
     */
    public function index()
    {
        return $this->render('main.html.twig');
    }

    /**
     * @Route("/app/{volby?}", name="app")
     */
    public function app(Request $request, $volby)
    {
        /*if ($volby == "ps2017") {
            return new Response("ahoj");
        }*/
        return $this->render('app.html.twig', [
            'volby' => $volby
        ]);
    }
}
