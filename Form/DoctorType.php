<?php

namespace Doctoubib\ModelsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DoctorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('civility', ChoiceType::class, array(
                'required' => true,
                'expanded' => true,
                'multiple' => false,
                'choices' => array('Mr.' => 'mr', 'Mme.' => 'mme'),
                'preferred_choices' => array('mr')
            ))
            ->add('email')
            ->add('insurance', CheckboxType::class, array(
                'label'    => 'Conventionné avec CNAM',
                'required' => false,
            ))
            ->add('description')
            ->add('phoneNumber')
            ->add('specialities')
            ->add('languages')
            ->add('formations', CollectionType::class, array(
                'entry_type' => FormationType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('experiences', CollectionType::class, array(
                'entry_type' => ExperienceType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('publications', CollectionType::class, array(
                'entry_type' => PublicationType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))
            ->add('associations', CollectionType::class, array(
                'entry_type' => AssociationType::class,
                'allow_add'    => true,
                'allow_delete' => true
            ))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doctoubib\ModelsBundle\Entity\Doctor'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doctoubib_modelsbundle_doctor';
    }


}
