<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicepages
 *
 * @ORM\Table(name="servicepages")
 * @ORM\Entity
 */
class Servicepages
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
     * @var string
     *
     * @ORM\Column(name="FormHeader", type="text", nullable=false)
     */
    private $formheader;

    /**
     * @var string
     *
     * @ORM\Column(name="FormUrl", type="string", length=255, nullable=false)
     */
    private $formurl;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormHeight", type="integer", nullable=false)
     */
    private $formheight;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormWidth", type="integer", nullable=false)
     */
    private $formwidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormPaddingTop", type="integer", nullable=false)
     */
    private $formpaddingtop;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormPaddingLeft", type="integer", nullable=false)
     */
    private $formpaddingleft;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormPaddingRight", type="integer", nullable=false)
     */
    private $formpaddingright;

    /**
     * @var integer
     *
     * @ORM\Column(name="FormPaddingBottom", type="integer", nullable=false)
     */
    private $formpaddingbottom;

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
     * Set title
     *
     * @param string $title
     * @return Servicepages
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
     * @return Servicepages
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
     * @return Servicepages
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
     * Set headerimage
     *
     * @param string $headerimage
     * @return Servicepages
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
     * @return Servicepages
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
     * Set formheader
     *
     * @param string $formheader
     * @return Servicepages
     */
    public function setFormheader($formheader)
    {
        $this->formheader = $formheader;
    
        return $this;
    }

    /**
     * Get formheader
     *
     * @return string 
     */
    public function getFormheader()
    {
        return $this->formheader;
    }

    /**
     * Set formurl
     *
     * @param string $formurl
     * @return Servicepages
     */
    public function setFormurl($formurl)
    {
        $this->formurl = $formurl;
    
        return $this;
    }

    /**
     * Get formurl
     *
     * @return string 
     */
    public function getFormurl()
    {
        return $this->formurl;
    }

    /**
     * Set formheight
     *
     * @param integer $formheight
     * @return Servicepages
     */
    public function setFormheight($formheight)
    {
        $this->formheight = $formheight;
    
        return $this;
    }

    /**
     * Get formheight
     *
     * @return integer 
     */
    public function getFormheight()
    {
        return $this->formheight;
    }

    /**
     * Set formwidth
     *
     * @param integer $formwidth
     * @return Servicepages
     */
    public function setFormwidth($formwidth)
    {
        $this->formwidth = $formwidth;
    
        return $this;
    }

    /**
     * Get formwidth
     *
     * @return integer 
     */
    public function getFormwidth()
    {
        return $this->formwidth;
    }

    /**
     * Set formpaddingtop
     *
     * @param integer $formpaddingtop
     * @return Servicepages
     */
    public function setFormpaddingtop($formpaddingtop)
    {
        $this->formpaddingtop = $formpaddingtop;
    
        return $this;
    }

    /**
     * Get formpaddingtop
     *
     * @return integer 
     */
    public function getFormpaddingtop()
    {
        return $this->formpaddingtop;
    }

    /**
     * Set formpaddingleft
     *
     * @param integer $formpaddingleft
     * @return Servicepages
     */
    public function setFormpaddingleft($formpaddingleft)
    {
        $this->formpaddingleft = $formpaddingleft;
    
        return $this;
    }

    /**
     * Get formpaddingleft
     *
     * @return integer 
     */
    public function getFormpaddingleft()
    {
        return $this->formpaddingleft;
    }

    /**
     * Set formpaddingright
     *
     * @param integer $formpaddingright
     * @return Servicepages
     */
    public function setFormpaddingright($formpaddingright)
    {
        $this->formpaddingright = $formpaddingright;
    
        return $this;
    }

    /**
     * Get formpaddingright
     *
     * @return integer 
     */
    public function getFormpaddingright()
    {
        return $this->formpaddingright;
    }

    /**
     * Set formpaddingbottom
     *
     * @param integer $formpaddingbottom
     * @return Servicepages
     */
    public function setFormpaddingbottom($formpaddingbottom)
    {
        $this->formpaddingbottom = $formpaddingbottom;
    
        return $this;
    }

    /**
     * Get formpaddingbottom
     *
     * @return integer 
     */
    public function getFormpaddingbottom()
    {
        return $this->formpaddingbottom;
    }

    /**
     * Set taglinetextsize
     *
     * @param integer $taglinetextsize
     * @return Servicepages
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
     * @return Servicepages
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
     * @return Servicepages
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
     * @return Servicepages
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