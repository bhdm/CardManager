<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderCard
 *
 * @ORM\Table(name="order_card")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderCardRepository")
 */
class OrderCard
{
    # Статусы
    const STATUS_NEW = 0;
    const STATUS_COMPLETED = 1;
    const STATUS_PAYMENT = 2;
    const STATUS_PRODUCTION = 3;
    const STATUS_MANUFACTURED = 4;
    const STATUS_SENT = 5;
    const STATUS_RECEIVED = 6;
    const STATUS_DENIED = 7;

    # Типы карт
    const TYPE_SKZI = 0;
    const TYPE_ESTR = 1;
    const TYPE_RU = 2;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="orders")
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var OrderStatus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OrderStatus", inversedBy="orders")
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="count", type="integer")
     */
    private $count;

    /**
     * @var OrderType
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OrderType", inversedBy="orders")
     */
    private $type;

    /**
     * @var OrderCategory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\OrderCategory", inversedBy="orders")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;


    public function __construct()
    {
        $this->created = new \DateTime();
        $this->updated = new \DateTime();

        $this->status = $this::STATUS_NEW;
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return OrderCard
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return OrderCard
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return OrderCard
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return OrderStatus
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return OrderCard
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return OrderCard
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return OrderType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return OrderCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param OrderCategory $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }



}

