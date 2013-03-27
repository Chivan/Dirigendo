<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategorypages
 *
 * @ORM\Table(name="subcategorypages")
 * @ORM\Entity
 */
class Subcategorypages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Keywords", type="text", nullable=false)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="ContentBox1", type="text", nullable=false)
     */
    private $contentbox1;

    /**
     * @var string
     *
     * @ORM\Column(name="ContentBox2", type="text", nullable=false)
     */
    private $contentbox2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TimeStamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \Subcategories
     *
     * @ORM\ManyToOne(targetEntity="Subcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubcategoryID", referencedColumnName="ID")
     * })
     */
    private $subcategoryid;



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
     * Set title
     *
     * @param string $title
     * @return Subcategorypages
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Subcategorypages
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
     * Set keywords
     *
     * @param string $keywords
     * @return Subcategorypages
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    
        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set contentbox1
     *
     * @param string $contentbox1
     * @return Subcategorypages
     */
    public function setContentbox1($contentbox1)
    {
        $this->contentbox1 = $contentbox1;
    
        return $this;
    }

    /**
     * Get contentbox1
     *
     * @return string 
     */
    public function getContentbox1()
    {
        return $this->contentbox1;
    }

    /**
     * Set contentbox2
     *
     * @param string $contentbox2
     * @return Subcategorypages
     */
    public function setContentbox2($contentbox2)
    {
        $this->contentbox2 = $contentbox2;
    
        return $this;
    }

    /**
     * Get contentbox2
     *
     * @return string 
     */
    public function getContentbox2()
    {
        return $this->contentbox2;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Subcategorypages
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set subcategoryid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Subcategories $subcategoryid
     * @return Subcategorypages
     */
    public function setSubcategoryid(\Dirigendo\FrontEndBundle\Entity\Subcategories $subcategoryid = null)
    {
        $this->subcategoryid = $subcategoryid;
    
        return $this;
    }

    /**
     * Get subcategoryid
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Subcategories 
     */
    public function getSubcategoryid()
    {
        return $this->subcategoryid;
    }
}