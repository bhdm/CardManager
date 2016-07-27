<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderFile
 *
 * @ORM\Table(name="order_file")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderFileRepository")
 */
class OrderFile
{

    const TYPE_IMAGE = 0;
    const TYPE_DOC = 1;
    const TYPE_PDF = 2;

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var array
     *
     * @ORM\Column(name="file", type="array")
     */
    private $file;

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
     * @var OrderFile
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile", mappedBy="next", cascade={"all"})
     */
    private $previous;

    /**
     * @var OrderFile
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderFile", inversedBy="previous")
     */
    private $next;


    public function __construct()
    {
        $this->created = new \DateTime();
        $this->updated = new \DateTime();
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
     * Set name
     *
     * @param string $name
     *
     * @return OrderFile
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return OrderFile
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set file
     *
     * @param array $file
     *
     * @return OrderFile
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return array
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return OrderFile
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param OrderFile $previous
     */
    public function setPrevious($previous)
    {
        $this->previous = $previous;
    }

    /**
     * @return OrderFile
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param OrderFile $next
     */
    public function setNext($next)
    {
        $this->next = $next;
    }
}

