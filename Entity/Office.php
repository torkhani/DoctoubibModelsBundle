<?php

namespace Doctoubib\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Office
 *
 * @ORM\Table(name="office")
 * @ORM\Entity(repositoryClass="Doctoubib\ModelsBundle\Repository\OfficeRepository")
 */
class Office
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="color", type="string", length=8, nullable=true)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=10)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="floor", type="string", length=20)
     */
    private $floor;

    /**
     * @var string
     *
     * @ORM\Column(name="intercom", type="string", length=50)
     */
    private $intercom;

    /**
     * @var string
     *
     * @ORM\Column(name="digicode", type="string", length=20)
     */
    private $digicode;

    /**
     * @var bool
     *
     * @ORM\Column(name="elevator", type="boolean")
     */
    private $elevator;

    /**
     * @var bool
     *
     * @ORM\Column(name="handicap_access", type="boolean")
     */
    private $handicapAccess;

    /**
     * @var bool
     *
     * @ORM\Column(name="payment_means", type="string", length=255)
     */
    private $paymentMeans;

    /**
     * @var bool
     *
     * @ORM\Column(name="opening_hours", type="text")
     */
    private $openingHours;

    /**
     * @var bool
     *
     * @ORM\Column(name="photos", type="text")
     */
    private $photos;


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
     * Set name
     *
     * @param string $name
     *
     * @return Office
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Office
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Office
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Office
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
     * Set floor
     *
     * @param string $floor
     *
     * @return Office
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Set intercom
     *
     * @param string $intercom
     *
     * @return Office
     */
    public function setIntercom($intercom)
    {
        $this->intercom = $intercom;

        return $this;
    }

    /**
     * Get intercom
     *
     * @return string
     */
    public function getIntercom()
    {
        return $this->intercom;
    }

    /**
     * Set digicode
     *
     * @param string $digicode
     *
     * @return Office
     */
    public function setDigicode($digicode)
    {
        $this->digicode = $digicode;

        return $this;
    }

    /**
     * Get digicode
     *
     * @return string
     */
    public function getDigicode()
    {
        return $this->digicode;
    }

    /**
     * Set elevator
     *
     * @param boolean $elevator
     *
     * @return Office
     */
    public function setElevator($elevator)
    {
        $this->elevator = $elevator;

        return $this;
    }

    /**
     * Get elevator
     *
     * @return bool
     */
    public function getElevator()
    {
        return $this->elevator;
    }

    /**
     * Set handicapAccess
     *
     * @param boolean $handicapAccess
     *
     * @return Office
     */
    public function setHandicapAccess($handicapAccess)
    {
        $this->handicapAccess = $handicapAccess;

        return $this;
    }

    /**
     * Get handicapAccess
     *
     * @return bool
     */
    public function getHandicapAccess()
    {
        return $this->handicapAccess;
    }

    /**
     * @return boolean
     */
    public function isPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * @param boolean $paymentMeans
     * @return Office
     */
    public function setPaymentMeans($paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isOpeningHours()
    {
        return $this->openingHours;
    }

    /**
     * @param boolean $openingHours
     * @return Office
     */
    public function setOpeningHours($openingHours)
    {
        $this->openingHours = $openingHours;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isPhotos()
    {
        return $this->photos;
    }

    /**
     * @param boolean $photos
     * @return Office
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;
        return $this;
    }
    
}

