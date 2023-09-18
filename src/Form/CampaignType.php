<?php

namespace App\Form;

use App\Entity\Campaign;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CampaignType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextareaType::class, [
                'label' => 'Titre de votre campagne',
                'label_attr' => [
                    'class' => 'input-field col s12 l8'
                ],
            ])

            ->add('content', TextareaType::class, [
                'label' => 'Décrivez à vos amis pourquoi vous faites une campagne',
                'label_attr' => [
                    'class' => 'input-field col s12'
                ],
            ])
            // ->add('created_At')
            // ->add('updated_At')
            ->add('goal', NumberType::class, [
                'label' => 'Votre objectif en euros',
                'label_attr' => [
                    'class' => 'input-field col s12 l6'
                ],
            ])
            ->add('name', TextType::class, [
                'label' => 'Votre Nom',
                'label_attr' => [
                    'class' => 'input-field col s12 l6'
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Campaign::class,
        ]);
    }
}
