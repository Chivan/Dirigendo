<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicepagesmoreinfo
 *
 * @ORM\Table(name="servicepagesmoreinfo")
 * @ORM\Entity
 */
class Servicepagesmoreinfo
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
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Keywords", type="text", nullable=false)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="TagLine", type="string", length=255, nullable=false)
     */
    private $tagline;

    /**
     * @var integer
     *
     * @ORM\Column(name="TaglineTextSize", type="integer", nullable=false)
     */
    private $taglinetextsize;

    /**
     * @var string
     *
     * @ORM\Column(name="ContentBox1", type="text", nullable=false)
     */
    private $contentbox1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="TimeStamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var \Services
     *
     * @ORM\ManyToOne(targetEntity="Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ServiceID", referencedColumnName="ID")
     * })
     */
    private $serviceid;



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
     * @return Servicepagesmoreinfo
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
     * Set title
     *
     * @param string $title
     * @return Servicepagesmoreinfo
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
     * Set keywords
     *
     * @param string $keywords
     * @return Servicepagesmoreinfo
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
     * Set description
     *
     * @param string $description
     * @return Servicepagesmoreinfo
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
     * Set tagline
     *
     * @param string $tagline
     * @return Servicepagesmoreinfo
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    
        return $this;
    }

    /**
     * Get tagline
     *
     * @return string 
     */
    public function getTagline()
    {
        return $this->tagline;
    }

    /**
     * Set taglinetextsize
     *
     * @param integer $taglinetextsize
     * @return Servicepagesmoreinfo
     */
    public function setTaglinetextsize($taglinetextsize)
    {
        $this->taglinetextsize = $taglinetextsize;
    
        return $this;
    }

    /**
     * Get taglinetextsize
     *
     * @return integer 
     */
    public function getTaglinetextsize()
    {
        return $this->taglinetextsize;
    }

    /**
     * Set contentbox1
     *
     * @param string $contentbox1
     * @return Servicepagesmoreinfo
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return Servicepagesmoreinfo
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
     * Set serviceid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Services $serviceid
     * @return Servicepagesmoreinfo
     */
    public function setServiceid(\Dirigendo\FrontEndBundle\Entity\Services $serviceid = null)
    {
        $this->serviceid = $serviceid;
    
        return $this;
    }

    /**
     * Get serviceid
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Services 
     */
    public function getServiceid()
    {
        return $this->serviceid;
    }
}