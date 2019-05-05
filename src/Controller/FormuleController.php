<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormuleController extends AbstractController
{
    /**
     * @Route("/formule", name="formule")
     */
    public function index()
    {
        return $this->render('formule/formule.html.twig', [
            'controller_name' => 'FormuleController',
        ]);
    }
}
