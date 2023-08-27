<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

/**
 * Form type class for creating and editing tasks.
 *
 * This class defines the form fields and their types for creating and editing tasks.
 */
class TaskType extends AbstractType
{
    /**
     * Build the form.
     *
     * This method defines the form fields and their types for creating and editing tasks.
     *
     * @param FormBuilderInterface $builder The form builder instance.
     * @param array                $options The form options.
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('content', TextareaType::class)
        ;
    }
}
