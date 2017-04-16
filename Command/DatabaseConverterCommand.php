<?php

namespace Doctoubib\ModelsBundle\Command;

use Doctoubib\ModelsBundle\Entity\Doctor;
use Doctoubib\ModelsBundle\Entity\DoctorInfo;
use Doctoubib\ModelsBundle\Entity\Experience;
use Doctoubib\ModelsBundle\Entity\Office;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Debug\Exception\ContextErrorException;

class DatabaseConverterCommand extends ContainerAwareCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('doctoubib_models:database_converter_command')
            ->setDescription('Hello PhpStorm');
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine.orm.default_entity_manager');
        $doctorRepo = $em->getRepository(Doctor::class);

        $doctors = $doctorRepo->findAll();

        foreach ($doctors as $doctor) {
            $doctorInfo = new DoctorInfo();
            $doctorInfo->setId($doctor->getId());
            $doctorInfo->setFirstname($doctor->getFirstname());
            $doctorInfo->setLastname($doctor->getLastname());
            $doctorInfo->setEmail($doctor->getEmail());
            $doctorInfo->setCivility($doctor->getCivility());
            $doctorInfo->setInsurance(true);
            $doctorInfo->setIsVisible(true);
            $doctorInfo->setEnabled(true);

            if (!empty($doctor->getFormation())) {
                try {
                    $formations = unserialize($doctor->getFormation());
                    foreach ($formations as $formation) {
                        $experience = new Experience();
                        $experience->setDoctor($doctorInfo);
                        $experience->setTitle($formation);
                        $em->persist($experience);
                    }
                } catch (ContextErrorException $e) {
                    //
                }

            }
            $office = new Office();
            $office->setDoctor($doctorInfo);
            $office->setAddress($doctor->getAdress());
            $office->setName('Dr ' . $doctor->getFirstname() . ' ' . $doctor->getLastname());
            $office->setPhone($doctor->getOfficePhoneNumber());
            $office->setPhoneSecond($doctor->getOfficePhoneNumber());
            $office->setLongitude($doctor->getLongitude());
            $office->setLatitude($doctor->getLatitude());
            $office->setZipcode($doctor->getZipcode());
            $office->setRegion($doctor->getRegion());
            $office->setCity($doctor->getCity());


            $em->persist($doctorInfo);
            $em->persist($office);
            $em->flush();
        }
    }
}
