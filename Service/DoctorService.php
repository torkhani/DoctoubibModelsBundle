<?php

namespace Doctoubib\ModelsBundle\Service;

use Doctrine\ORM\EntityManager;

class DoctorService
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function save($params)
    {
        $this->em->persist();
        $this->em->flush();
    }
}