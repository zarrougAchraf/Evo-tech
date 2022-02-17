<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcceuilController extends AbstractController
{
    /**
     * @Route("/acceuil", name="acceuil")
     * @return Response
     */
    public function index(): Response
    {
        return $this->render('acceuil/acceuil.html.twig', [
            'controller_name' => 'AcceuilController',
        ]);
    }

}
