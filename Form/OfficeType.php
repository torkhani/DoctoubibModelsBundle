<?php

namespace Doctoubib\ModelsBundle\Form;

use Doctoubib\ModelsBundle\Entity\PaymentMean;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OfficeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('phone')
            ->add('address')
            ->add('region')
            ->add('city')
            ->add('floor')
            ->add('intercom')
            ->add('digicode')
            ->add('elevator')
            ->add('handicapAccess')
            ->add('paymentMeans', EntityType::class, array(
                'class' => PaymentMean::class,
                'multiple' => true,
                'expanded' => true,
            ))
            ->add('openingHours');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doctoubib\ModelsBundle\Entity\Office'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doctoubib_modelsbundle_office';
    }


}
