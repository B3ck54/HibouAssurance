<?php

namespace App\Controller;

use App\Form\VehiculeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Vehicule;



class VehiculeController extends AbstractController
{
    /**
     * @Route("/vehicule", name="vehicule")
     */
    public function index()
    {
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class,$vehicule);

        return $this->render('vehicule/vehicule.html.twig', [
            'controller_name' => 'VehiculeController',
            'form' => $form->createView(),
        ]);
    }
}
