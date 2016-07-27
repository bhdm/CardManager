<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", nullable=true)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string")
     */
    protected $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string")
     */
    protected $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="surName", type="string", nullable=true)
     */
    protected $surName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    protected $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    protected $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sex", type="string", nullable=true)
     */
    protected $sex;

    /**
     * @var string
     *
     * @ORM\Column(name="workPlace", type="string", nullable=true)
     */
    protected $workPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="workPost", type="string", nullable=true)
     */
    protected $workPost;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country", inversedBy="users")
     */
    protected $country;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\City", inversedBy="users")
     */
    protected $city;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="user", cascade={"all"})
     */
    private $orders;

    public function __toString()
    {
        return $this->getName();
    }

    public function __construct()
    {
        $this->username = $this->email;
        $this->orders = new ArrayCollection();
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getSurName()
    {
        return $this->surName;
    }

    /**
     * @param mixed $surName
     */
    public function setSurName($surName)
    {
        $this->surName = $surName;
    }

    /**
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param mixed $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    /**
     * @return mixed
     */
    public function getWorkPlace()
    {
        return $this->workPlace;
    }

    /**
     * @param mixed $workPlace
     */
    public function setWorkPlace($workPlace)
    {
        $this->workPlace = $workPlace;
    }

    /**
     * @return mixed
     */
    public function getWorkPost()
    {
        return $this->workPost;
    }

    /**
     * @param mixed $workPost
     */
    public function setWorkPost($workPost)
    {
        $this->workPost = $workPost;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getName(){
        return $this->getFirstName().' '.$this->getLastName();
    }

    public function setEmail($email)
    {
        $this->username = $email;
        return parent::setEmail($email); // TODO: Change the autogenerated stub
    }

    public function setUsername($username)
    {
        $this->email = $username;
        return parent::setUsername($username); // TODO: Change the autogenerated stub
    }


}