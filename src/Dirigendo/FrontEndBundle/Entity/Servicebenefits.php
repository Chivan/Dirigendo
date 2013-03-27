<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicebenefits
 *
 * @ORM\Table(name="servicebenefits")
 * @ORM\Entity
 */
class Servicebenefits
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
     * @ORM\Column(name="Header", type="string", length=255, nullable=false)
     */
    private $header;

    /**
     * @var string
     *
     * @ORM\Column(name="Text", type="text", nullable=false)
     */
    private $text;

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
     * Set header
     *
     * @param string $header
     * @return Servicebenefits
     */
    public function setHeader($header)
    {
        $this->header = $header;
    
        return $this;
    }

    /**
     * Get header
     *
     * @return string 
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Servicebenefits
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
     * Set serviceid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Services $serviceid
     * @return Servicebenefits
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