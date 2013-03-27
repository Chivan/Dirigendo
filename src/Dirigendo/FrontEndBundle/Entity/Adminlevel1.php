<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adminlevel1
 *
 * @ORM\Table(name="adminlevel1")
 * @ORM\Entity
 */
class Adminlevel1
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
     * @ORM\Column(name="CountryName", type="string", length=255, nullable=true)
     */
    private $countryname;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geom", type="geometry", nullable=true)
     */
    private $geom;

    /**
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CountryID", referencedColumnName="ID")
     * })
     */
    private $countryid;

    /**
     * @var \Adminleveltypes
     *
     * @ORM\ManyToOne(targetEntity="Adminleveltypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminLevelTypeID", referencedColumnName="ID")
     * })
     */
    private $adminleveltypeid;



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
     * Set countryname
     *
     * @param string $countryname
     * @return Adminlevel1
     */
    public function setCountryname($countryname)
    {
        $this->countryname = $countryname;
    
        return $this;
    }

    /**
     * Get countryname
     *
     * @return string 
     */
    public function getCountryname()
    {
        return $this->countryname;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Adminlevel1
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
     * Set geom
     *
     * @param geometry $geom
     * @return Adminlevel1
     */
    public function setGeom($geom)
    {
        $this->geom = $geom;
    
        return $this;
    }

    /**
     * Get geom
     *
     * @return geometry 
     */
    public function getGeom()
    {
        return $this->geom;
    }

    /**
     * Set countryid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Countries $countryid
     * @return Adminlevel1
     */
    public function setCountryid(\Dirigendo\FrontEndBundle\Entity\Countries $countryid = null)
    {
        $this->countryid = $countryid;
    
        return $this;
    }

    /**
     * Get countryid
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Countries 
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set adminleveltypeid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminleveltypes $adminleveltypeid
     * @return Adminlevel1
     */
    public function setAdminleveltypeid(\Dirigendo\FrontEndBundle\Entity\Adminleveltypes $adminleveltypeid = null)
    {
        $this->adminleveltypeid = $adminleveltypeid;
    
        return $this;
    }

    /**
     * Get adminleveltypeid
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Adminleveltypes 
     */
    public function getAdminleveltypeid()
    {
        return $this->adminleveltypeid;
    }
}