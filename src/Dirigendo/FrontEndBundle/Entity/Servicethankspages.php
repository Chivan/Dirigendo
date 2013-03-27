<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicethankspages
 *
 * @ORM\Table(name="servicethankspages")
 * @ORM\Entity
 */
class Servicethankspages
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
     * @ORM\Column(name="AdwordsCC", type="text", nullable=false)
     */
    private $adwordscc;

    /**
     * @var string
     *
     * @ORM\Column(name="AnalyticsCC", type="text", nullable=false)
     */
    private $analyticscc;

    /**
     * @var string
     *
     * @ORM\Column(name="HeaderImage", type="string", length=255, nullable=false)
     */
    private $headerimage;

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
     * Set title
     *
     * @param string $title
     * @return Servicethankspages
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
     * @return Servicethankspages
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
     * @return Servicethankspages
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
     * Set adwordscc
     *
     * @param string $adwordscc
     * @return Servicethankspages
     */
    public function setAdwordscc($adwordscc)
    {
        $this->adwordscc = $adwordscc;
    
        return $this;
    }

    /**
     * Get adwordscc
     *
     * @return string 
     */
    public function getAdwordscc()
    {
        return $this->adwordscc;
    }

    /**
     * Set analyticscc
     *
     * @param string $analyticscc
     * @return Servicethankspages
     */
    public function setAnalyticscc($analyticscc)
    {
        $this->analyticscc = $analyticscc;
    
        return $this;
    }

    /**
     * Get analyticscc
     *
     * @return string 
     */
    public function getAnalyticscc()
    {
        return $this->analyticscc;
    }

    /**
     * Set headerimage
     *
     * @param string $headerimage
     * @return Servicethankspages
     */
    public function setHeaderimage($headerimage)
    {
        $this->headerimage = $headerimage;
    
        return $this;
    }

    /**
     * Get headerimage
     *
     * @return string 
     */
    public function getHeaderimage()
    {
        return $this->headerimage;
    }

    /**
     * Set tagline
     *
     * @param string $tagline
     * @return Servicethankspages
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
     * @return Servicethankspages
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
     * @return Servicethankspages
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
     * @return Servicethankspages
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
     * @return Servicethankspages
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
     * @return Servicethankspages
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