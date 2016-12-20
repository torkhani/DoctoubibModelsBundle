<?php

namespace Doctoubib\ModelsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
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
     * @Gedmo\Slug(fields={"firstname", "lastname"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;

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
     * @ORM\ManyToMany(targetEntity="Doctoubib\ModelsBundle\Entity\Speciality", cascade={"persist"})
     */
    private $specialities;

    /**
     * @var integer
     * @ORM\Column(name="insurance", type="boolean", options={"default":true}, nullable=true)
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
     * @ORM\Column(name="description", type="text", nullable=true)
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
     * @ORM\Column(name="zipcode", type="string", length=4, nullable=true)
     */
    private $zipcode;

    /**
     * @ORM\ManyToOne(targetEntity="Doctoubib\ModelsBundle\Entity\Region")
     * @ORM\JoinColumn(nullable=true)
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="Doctoubib\ModelsBundle\Entity\City")
     * @ORM\JoinColumn(nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="string", length=50, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="string", length=50, nullable=true)
     */
    private $latitude;


    /**
     * @var string
     *
     * @ORM\Column(name="phone_number", type="string", length=12, nullable=true)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="office_phone_number", type="string", length=12, nullable=true)
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
     * @ORM\Column(name="consultation_price_min", type="integer", nullable=true)
     */
    private $consultationPriceMin;

    /**
     * @var integer
     *
     * @ORM\Column(name="consultation_price_max", type="integer", nullable=true)
     */
    private $consultationPriceMax;

    /**
     * @var \DateTime $createdAt
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;


    public function __construct()
    {
        $this->consultations = new ArrayCollection();
        $this->specialities = new ArrayCollection();
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
     * Set city
     *
     * @param string $city
     *
     * @return Doctor
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     * @return Doctor
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
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
    public function getSpecialities()
    {
        return $this->specialities;
    }

    /**
     * @param Speciality $speciality
     * @return $this
     */
    public function addSpeciality(Speciality $speciality)
    {
        $this->specialities[] = $speciality;

        return $this;
    }

    public function removeSpeciality(Speciality $speciality)
    {
        $this->specialities->removeElement($speciality);
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

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     * @return Doctor
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     * @return Doctor
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     * @return Doctor
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Doctor
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     * @return Doctor
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function __toString()
    {
        return $this->getFirstname() . $this->getLastname();
    }

}

