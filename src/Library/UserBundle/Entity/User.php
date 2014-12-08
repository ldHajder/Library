<?php

namespace Library\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $surname;
    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $libraryCard;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->libraryCard = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
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
     * Set surname
     *
     * @param string $surname
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string 
     */
    public function getSurname()
    {
        return $this->surname;
    }
    /**
     * Add libraryCard
     *
     * @param \Library\MainBundle\Entity\LibraryCard $libraryCard
     * @return User
     */
    public function addLibraryCard(\Library\MainBundle\Entity\LibraryCard $libraryCard)
    {
        $this->libraryCard[] = $libraryCard;

        return $this;
    }

    /**
     * Remove libraryCard
     *
     * @param \Library\MainBundle\Entity\LibraryCard $libraryCard
     */
    public function removeLibraryCard(\Library\MainBundle\Entity\LibraryCard $libraryCard)
    {
        $this->libraryCard->removeElement($libraryCard);
    }

    /**
     * Get libraryCard
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLibraryCard()
    {
        return $this->libraryCard;
    }
}
