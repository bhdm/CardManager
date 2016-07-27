<?php
namespace AppBundle\Entity;

use
	Doctrine\ORM\Mapping as ORM,
	Symfony\Component\Validator\Constraints as Assert,
	Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity()
 * @ORM\Table(name = "geoCountry")
 */
class Country
{
	const RUSSIA_COUNTRY_ID = 1;

	/**
	 * @ORM\Id
	 * @ORM\Column(type = "integer")
	 * @ORM\GeneratedValue
	 */
	protected $id;

	/**
	 * @ORM\OneToMany(targetEntity = "City", mappedBy = "country")
	 */
	protected $cities;


	/**
	 * @var string
	 * @ORM\Column(type = "string", length = 63)
	 * @Assert\NotBlank(message = "Укажите название страны.")
	 * @Assert\Length(max = 63, maxMessage = "Название страны должно быть не длиннее 63 знаков.")
	 */
	protected $title;

	/**
	 * @ORM\Column(name="shortTitle", type = "string", length = 4, nullable = true)
	 * @Assert\Length(max = 4, maxMessage = "Сокращенное название страны должно быть не длиннее 4 знаков.")
	 */
	protected $shortTitle;

	/**
	 * @ORM\OneToMany(targetEntity="AppBundle\Entity\User", mappedBy="country")
	 */
	protected $users;


	public function __construct()
	{
		$this->cities       = new ArrayCollection();
		$this->users       = new ArrayCollection();
	}

	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->title;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getCities()
	{
		return $this->cities;
	}

	public function setCities(ArrayCollection $cities)
	{
		$this->cities = $cities;

		return $this;
	}


	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;

		return $this;
	}

	public function getShortTitle()
	{
		return $this->shortTitle;
	}

	public function setShortTitle($shortTitle)
	{
		$this->shortTitle = $shortTitle;

		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getUsers()
	{
		return $this->users;
	}

	/**
	 * @param mixed $users
	 */
	public function setUsers($users)
	{
		$this->users = $users;
	}



}