<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Form type class for creating and editing users.
 *
 * This class defines the form fields and their types for creating and editing users.
 */
class UserType extends AbstractType
{
    /**
     * Build the form.
     *
     * This method defines the form fields and their types for creating and editing users.
     *
     * @param FormBuilderInterface $builder The form builder instance.
     * @param array                $options The form options.
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', TextType::class, ['label' => "Username"])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'invalid_message' => 'The two passwords must match.',
                'required' => true,
                'first_options'  => ['label' => 'Password'],
                'second_options' => ['label' => 'Confirm Password'],
            ])
            ->add('email', EmailType::class, ['label' => 'Email Address'])
            ->add(
                'roles', ChoiceType::class, [
                    'choices' => ['Admin' => 'ROLE_ADMIN', 'Standard' => 'ROLE_USER'],
                    'expanded' => true,
                    'multiple' => true,
                ]
            )
        ;
    }
}
