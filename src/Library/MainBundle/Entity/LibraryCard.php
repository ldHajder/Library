<?php

namespace Library\MainBundle\Entity;


/**
 * LibraryCard
 */
class LibraryCard
{
    /**
     * @var integer
     */
    private $id;
    
    /**
     *
     * @var Library\UserBundle\Entity\User
     */
    protected $user;
    
    /**
     *
     * @var Book
     */
    protected $book;
    
    /**
     * @var \DateTime
     */
    private $date;

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
     * Set date
     *
     * @param \DateTime $date
     * @return LibraryCard
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set user
     *
     * @param \Library\UserBundle\Entity\User $user
     * @return LibraryCard
     */
    public function setUser(\Library\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Library\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set book
     *
     * @param \Library\MainBundle\Entity\Book $book
     * @return LibraryCard
     */
    public function setBook(\Library\MainBundle\Entity\Book $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \Library\MainBundle\Entity\Book 
     */
    public function getBook()
    {
        return $this->book;
    }
    
    /**
     * Sets current timestamp @ prepersist
     */
    public function setCurrentDate() {
        $this->date = new \DateTime("now");
    }
}