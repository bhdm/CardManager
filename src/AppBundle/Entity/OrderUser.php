<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * OrderUser
 *
 * @ORM\Table(name="order_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderUserRepository")
 */
class OrderUser
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
     * @Assert\NotBlank(message="Фамилия обязательна для заполнения")
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     * @Assert\NotBlank(message="Имя обязательно для заполнения")
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="surName", type="string", length=255, nullable=true)
     */
    private $surName;

    /**
     * @var \DateTime
     * @Assert\NotBlank(message="Дата рождения обязательна для заполнения")
     * @ORM\Column(name="birthDate", type="datetime")
     */
    private $birthDate;

    /**
     * @var string
     * @Assert\NotBlank(message="Гражданство обязательно для заполнения")
     * @ORM\Column(name="citizenship", type="string", length=255)
     */
    private $citizenship;

    /**
     * @var array
     * @Assert\NotBlank(message="Данные паспорта обязательны для заполнения")
     * @ORM\Column(name="passport", type="array")
     */
    private $passport;

    /**
     * @var string
     * @Assert\NotBlank(message="Номер СНИЛС обязателен для заполнения")
     * @ORM\Column(name="snils", type="string", length=255)
     */
    private $snils;

    /**
     * @var string
     * @Assert\NotBlank(message="Номер ИНН обязателен для заполнения")
     * @ORM\Column(name="inn", type="string", length=255)
     */
    private $inn;

    /**
     * @var array
     * @Assert\NotBlank(message="Данные вод. удостоверения обязательны для заполнения")
     * @ORM\Column(name="driverLicense", type="array")
     */
    private $driverLicense;

    /**
     * @var array
     *
     * @ORM\Column(name="delivery", type="array")
     */
    private $delivery;


    # Файлы

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $filePassportOne;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $filePassportTwo;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $fileDriverLicense;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $fileSnils;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $fileInn;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $fileSign;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile")
     */
    private $filePhoto;

    # Связи
    /**
     * @var
     */
    private $orderCard;

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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return OrderUser
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return OrderUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set surName
     *
     * @param string $surName
     *
     * @return OrderUser
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;

        return $this;
    }

    /**
     * Get surName
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     *
     * @return OrderUser
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set citizenship
     *
     * @param string $citizenship
     *
     * @return OrderUser
     */
    public function setCitizenship($citizenship)
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * Get citizenship
     *
     * @return string
     */
    public function getCitizenship()
    {
        return $this->citizenship;
    }

    /**
     * Set passport
     *
     * @param array $passport
     *
     * @return OrderUser
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;

        return $this;
    }

    /**
     * Get passport
     *
     * @return array
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * Set snils
     *
     * @param string $snils
     *
     * @return OrderUser
     */
    public function setSnils($snils)
    {
        $this->snils = $snils;

        return $this;
    }

    /**
     * Get snils
     *
     * @return string
     */
    public function getSnils()
    {
        return $this->snils;
    }

    /**
     * Set inn
     *
     * @param string $inn
     *
     * @return OrderUser
     */
    public function setInn($inn)
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * Get inn
     *
     * @return string
     */
    public function getInn()
    {
        return $this->inn;
    }

    /**
     * Set driverLicense
     *
     * @param array $driverLicense
     *
     * @return OrderUser
     */
    public function setDriverLicense($driverLicense)
    {
        $this->driverLicense = $driverLicense;

        return $this;
    }

    /**
     * Get driverLicense
     *
     * @return array
     */
    public function getDriverLicense()
    {
        return $this->driverLicense;
    }

    /**
     * Set delivery
     *
     * @param array $delivery
     *
     * @return OrderUser
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return array
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * @return mixed
     */
    public function getFilePassportOne()
    {
        return $this->filePassportOne;
    }

    /**
     * @param mixed $filePassportOne
     */
    public function setFilePassportOne($filePassportOne)
    {
        $this->filePassportOne = $filePassportOne;
    }

    /**
     * @return mixed
     */
    public function getFilePassportTwo()
    {
        return $this->filePassportTwo;
    }

    /**
     * @param mixed $filePassportTwo
     */
    public function setFilePassportTwo($filePassportTwo)
    {
        $this->filePassportTwo = $filePassportTwo;
    }

    /**
     * @return mixed
     */
    public function getFileDriverLicense()
    {
        return $this->fileDriverLicense;
    }

    /**
     * @param mixed $fileDriverLicense
     */
    public function setFileDriverLicense($fileDriverLicense)
    {
        $this->fileDriverLicense = $fileDriverLicense;
    }

    /**
     * @return mixed
     */
    public function getFileSnils()
    {
        return $this->fileSnils;
    }

    /**
     * @param mixed $fileSnils
     */
    public function setFileSnils($fileSnils)
    {
        $this->fileSnils = $fileSnils;
    }

    /**
     * @return mixed
     */
    public function getFileInn()
    {
        return $this->fileInn;
    }

    /**
     * @param mixed $fileInn
     */
    public function setFileInn($fileInn)
    {
        $this->fileInn = $fileInn;
    }

    /**
     * @return mixed
     */
    public function getFileSign()
    {
        return $this->fileSign;
    }

    /**
     * @param mixed $fileSign
     */
    public function setFileSign($fileSign)
    {
        $this->fileSign = $fileSign;
    }

    /**
     * @return mixed
     */
    public function getFilePhoto()
    {
        return $this->filePhoto;
    }

    /**
     * @param mixed $filePhoto
     */
    public function setFilePhoto($filePhoto)
    {
        $this->filePhoto = $filePhoto;
    }

}

