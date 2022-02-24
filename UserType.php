<?php

namespace App\Form;

use App\Entity\User;

use phpDocumentor\Reflection\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;



use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numero',NumberType::class,[
                'attr'=>[
                    'placeholder'=>'entre le numero',

                ]
            ])
            ->add('nom',TextType::class,
                [
                'attr'=>[
                'placeholder'=>'entre le nom'
                    ]
            ])
            ->add('prenom', TextType::class,
                [
                    'attr'=>[
                        'placeholder'=>'entre le prenom'
]
]
            )
            ->add('email', EmailType::class,[
               'attr'=>[
                   'placeholder'=>'entre le email'

               ]
            ])
            ->add('password', PasswordType::class, [
                'attr'=>[
                    'placeholder'=>'entre le password'

                ]
            ])


            ->add('confirm_password', PasswordType::class, [
                'attr'=>[
                    'placeholder'=>'entre de nov  le password'

                ]
            ])


            ->add('age', NumberType::class, [
                'attr'=>[
                    'placeholder'=>'entre le age'

                ]
            ])
            ->add('poste', TextType::class, [
                'attr'=>[
                    'placeholder'=>'entre la poste'

                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'class'=>'border p-3 w-100 my-2',
        ]);
    }
}
