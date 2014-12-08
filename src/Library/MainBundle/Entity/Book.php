<?php

namespace Library\MainBundle\Entity;


/**
 * Book
 */
class Book
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $year;

    /**
     * @var string
     */
    private $path;

    /**
     * @var string
     */
    private $author;
    
    /**
     *
     * @var string
     */
    private $publishing;

    /**
     * @var string
     */
    private $description;
    
    /**
     * Temporary value of path
     * @var string
     */
    private $temp;
    
    /**
     *
     * @var file
     */
    private $file;
    
    /**
     *
     * @var Category
     */
    protected $category;

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
     * @return Book
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
     * Set year
     *
     * @param integer $year
     * @return Book
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Book
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Book
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }
    
    /**
     * Set publishing
     *
     * @param string $publishing
     * @return Book
     */
    public function setPublishing($publishing)
    {
        $this->publishing = $publishing;

        return $this;
    }

    /**
     * Get publishing
     *
     * @return string 
     */
    public function getPublishing()
    {
        return $this->publishing;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Book
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
     * Sets file.
     *
     * @param UploadedFile $file
     */
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (isset($this->path)) {
            // store the old name to delete after the update
            $this->temp = $this->path;
            $this->path = null;
        } else {
            $this->path = 'initial';
        }
    }
    
    /**
     * Gets file.
     * @return UploadedFile
     */
    public function getFile() {
        return $this->file;
    }
    
    /**
     * Set category
     *
     * @param \Library\MainBundle\Entity\Category $category
     * @return Book
     */
    public function setCategory(\Library\MainBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Library\MainBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        return 'bundles/LibraryMainBundle/uploads';
    }
    
    /**
     * PrePersist and PreUpdate func
     * Called before saving the entity
     */
    public function preUpload()
    {
        if (null !== $this->getFile()) {
            // GENERACJA LOSOWEJ NAZWY
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }
    
    /**
     * PostPersist and PostUpdate func
     * Called after entity persistence
     */
    public function upload()
    {
        if (null === $this->getFile()) {
            return;
        }
        $this->getFile()->move($this->getUploadRootDir(), $this->path);
        
        if (isset($this->temp)) {
            unlink($this->getUploadRootDir().'/'.$this->temp);
            $this->temp = null;
        }
        $this->file = null;
    }

    /**
     * PostRemove func
     * Called before entity removal
     */
    public function removeUpload()
    {
        $file = $this->getAbsolutePath();
        if ($file) {
            unlink($file);
        }
    }
}
