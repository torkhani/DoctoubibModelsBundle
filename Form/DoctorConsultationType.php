<?php

namespace Doctoubib\ModelsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DoctorConsultationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('slotDuration')
            ->add('bookingDelayBefore', ChoiceType::class, array(
                'choices' => array(
                    '0h' => '0',
                    '1h' => '1',
                    '2h (défaut)' => '2',
                    '4h' => '4',
                    '6h' => '6',
                    '8h' => '8',
                    '10h' => '10',
                    '12h' => '12',
                    '1 jour' => '24',
                    '2 jours' => '48',
                    '3 jours' => '72',
                    '4 jours' => '96',
                    '5 jours' => '120',
                    '6 jours' => '144',
                    '7 jours' => '168',
                    '2 semaines' => '336',
                    '3 semaines' => '504',
                    '1 mois' => '720'
                )
            ))
            ->add('bookingDelayUntil', ChoiceType::class, array(
                'choices' => array(
                    '0h' => '0',
                    '1h' => '1',
                    '2h (défaut)' => '2',
                    '4h' => '4',
                    '6h' => '6',
                    '8h' => '8',
                    '10h' => '10',
                    '12h' => '12',
                    '1 jour' => '24',
                    '2 jours' => '48',
                    '3 jours' => '72',
                    '4 jours' => '96',
                    '5 jours' => '120',
                    '6 jours' => '144',
                    '7 jours' => '168',
                    '2 semaines' => '336',
                    '3 semaines' => '504',
                    '1 mois' => '720'
                )
            ))
            ->add('onlineBooking');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Doctoubib\ModelsBundle\Entity\DoctorConsultation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'doctoubib_modelsbundle_doctorconsultation';
    }


}
