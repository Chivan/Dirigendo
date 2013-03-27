<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Carrousel
 *
 * @ORM\Table(name="carrousel")
 * @ORM\Entity
 */
class Carrousel
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
     * @ORM\Column(name="Image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="Title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="Link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", nullable=false)
     */
    private $text;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Order", type="boolean", nullable=false)
     */
    private $order;

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
     * Set image
     *
     * @param string $image
     * @return Carrousel
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Carrousel
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
     * Set link
     *
     * @param string $link
     * @return Carrousel
     */
    public function setLink($link)
    {
        $this->link = $link;
    
        return $this;
    }

    /**
     * Get link
     *
     * @return string 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Carrousel
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set order
     *
     * @param boolean $order
     * @return Carrousel
     */
    public function setOrder($order)
    {
        $this->order = $order;
    
        return $this;
    }

    /**
     * Get order
     *
     * @return boolean 
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set serviceid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Services $serviceid
     * @return Carrousel
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