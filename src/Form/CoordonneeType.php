<?php

namespace App\Form;

use App\Entity\Coordonnee;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CoordonneeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('civilite', ChoiceType::class,[
                'choices' => [
                    'Monsieur'=> true,
                    'Madame' =>false,
                ],
            ])

            ->add('nom')
            ->add('prenom')
            ->add('date')
            ->add('numeroVoie')
            ->add('complementAdresse')
            ->add('codePostal')
            ->add('ville')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Coordonnee::class,
        ]);
    }
}
