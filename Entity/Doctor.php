<?php

namespace Doctoubib\ModelsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Doctor
 *
 * @ORM\Table(name="doctor")
 * @ORM\Entity(repositoryClass="Doctoubib\ModelsBundle\Repository\DoctorRepository")
 */
class Doctor
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=50)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="civility", type="string", length=6)
     */
    private $civility;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Doctoubib\ModelsBundle\Entity\Speciality")
     * @ORM\JoinColumn(nullable=false)
     */
    private $speciality;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Doctoubib\ModelsBundle\Entity\Insurance")
     * @ORM\JoinColumn(nullable=false)
     */
    private $insurance;

    /**
     * @var string
     *
     * @ORM\Column(name="formation", type="text", nullable=true)
     */
    private $formation;

    /**
     * @var string
     *
     * @ORM\Column(name="hospital_carrer", type="text", nullable=true)
     */
    private $hospitalCareer;

    /**
     * @var string
     *
     * @ORM\Column(name="skills", type="text", nullable=true)
     */
    private $skills;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text")
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=5)
     */
    private $zipcode;

    /**
     * @ORM\ManyToOne(targetEntity="Doctoubib\ModelsBundle\Entity\Region")
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;

    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=12)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="office_phone_number", type="string", length=12)
     */
    private $officePhoneNumber;

    /**
     * @ORM\OneToMany(targetEntity="Doctoubib\ModelsBundle\Entity\DoctorConsultation", mappedBy="doctor")
     *
     */
    private $consultations;

    /**
     * @var integer
     *
     * @ORM\Column(name="consultation_price_min", type="integer")
     */
    private $consultationPriceMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="consultation_price_max", type="integer", nullable=true)
     */
    private $consultationPriceMax;


    public function __construct()
    {
        $this->consultations = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Doctor
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Doctor
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Doctor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Doctor
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Doctor
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Doctor
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set region
     *
     * @param string $region
     *
     * @return Doctor
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Doctor
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @return string
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param string $speciality
     * @return Doctor
     */
    public function setSpeciality($speciality)
    {
        $this->speciality = $speciality;
        return $this;
    }

    /**
     * @return string
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * @param string $insurance
     * @return Doctor
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * @param string $formation
     * @return Doctor
     */
    public function setFormation($formation)
    {
        $this->formation = $formation;
        return $this;
    }

    /**
     * @return string
     */
    public function getOfficePhoneNumber()
    {
        return $this->officePhoneNumber;
    }

    /**
     * @param string $officePhoneNumber
     * @return Doctor
     */
    public function setOfficePhoneNumber($officePhoneNumber)
    {
        $this->officePhoneNumber = $officePhoneNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getCivility()
    {
        return $this->civility;
    }

    /**
     * @param string $civility
     * @return Doctor
     */
    public function setCivility($civility)
    {
        $this->civility = $civility;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getConsultations()
    {
        return $this->consultations;
    }

    public function addConsultation(DoctorConsultation $consultations)
    {
        $this->consultations[] = $consultations;

        return $this;
    }

    public function removeConsultation(DoctorConsultation $consultations)
    {
        $this->consultations->removeElement($consultations);
    }

    /**
     * @return int
     */
    public function getConsultationPriceMin()
    {
        return $this->consultationPriceMin;
    }

    /**
     * @param int $consultationPriceMin
     * @return Doctor
     */
    public function setConsultationPriceMin($consultationPriceMin)
    {
        $this->consultationPriceMin = $consultationPriceMin;
        return $this;
    }

    /**
     * @return int
     */
    public function getConsultationPriceMax()
    {
        return $this->consultationPriceMax;
    }

    /**
     * @param int $consultationPriceMax
     * @return Doctor
     */
    public function setConsultationPriceMax($consultationPriceMax)
    {
        $this->consultationPriceMax = $consultationPriceMax;
        return $this;
    }

    /**
     * @return string
     */
    public function getHospitalCareer()
    {
        return $this->hospitalCareer;
    }

    /**
     * @param string $hospitalCareer
     * @return Doctor
     */
    public function setHospitalCareer($hospitalCareer)
    {
        $this->hospitalCareer = $hospitalCareer;
        return $this;
    }

    /**
     * @return string
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param string $skills
     * @return Doctor
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
        return $this;
    }
}

