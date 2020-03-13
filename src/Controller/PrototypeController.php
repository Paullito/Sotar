<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PrototypeController extends AbstractController
{
    public function index()
    {
        return $this->render('prototype/index.html.twig', [
            'controller_name' => 'PrototypeController',
        ]);
    }
}
