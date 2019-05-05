<?php

namespace App\Controller;

use App\Form\CoordonneeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Coordonnee;

class CoordonneeController extends AbstractController
{
    /**
     * @Route("/coordonnee", name="coordonnee")
     */
    public function index()

    {
        $coordonnee = new Coordonnee();
        $form = $this->createForm(CoordonneeType::class,$coordonnee);

        return $this->render('coordonnee/coordonnee.html.twig', [
            'controller_name' => 'CoordonneeController',
            'form' => $form->createView()
        ]);
    }
}
