<?php
/**
 * Created by PhpStorm.
 * User: Utisateur
 * Date: 25/02/2019
 * Time: 11:30
 */

namespace App\Form;


use App\Entity\Vehicule;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;


class VehiculeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('marque')
            ->add('modele')
            ->add('dateCirculation')
            ->add('motorisation')
            ->add('garage')
            ->add('bonusMalus');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicule::class,
        ]);
    }
}