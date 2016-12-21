<?php

namespace Doctoubib\ModelsBundle\Service;

use Doctoubib\ModelsBundle\Repository\SponsorshipRepository;
use Doctoubib\ModelsBundle\Entity\Sponsorship;

class SponsorshipService
{
    /**
     * @var SponsorshipRepository
     */
    protected $sponsorshipRepository;

    public function __construct(SponsorshipRepository $sponsorshipRepository)
    {
        $this->sponsorshipRepository = $sponsorshipRepository;
    }

    public function save($params)
    {
        $sponsorship = new Sponsorship();
        $sponsorship->setUsername($params['username']);
        $sponsorship->setEmail($params['email']);
        $sponsorship->setDoctorName($params['doctor_name']);
        $sponsorship->setRegion($params['region']);


        $this->sponsorshipRepository->save($sponsorship);
    }
}