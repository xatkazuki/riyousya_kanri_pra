<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaltController extends AbstractController
{
    /**
     * @Route("/defalt", name="defalt")
     */
    public function index()
    {
        return $this->render('defalt/index.html.twig', [
            'controller_name' => 'DefaltController',
        ]);
    }
}
