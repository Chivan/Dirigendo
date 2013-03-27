<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adminlevel2
 *
 * @ORM\Table(name="adminlevel2")
 * @ORM\Entity
 */
class Adminlevel2
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
     * @var string
     *
     * @ORM\Column(name="AdminLevel1Name", type="string", length=255, nullable=true)
     */
    private $adminlevel1name;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geom", type="geometry", nullable=true)
     */
    private $geom;

    /**
     * @var \Adminlevel1
     *
     * @ORM\ManyToOne(targetEntity="Adminlevel1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminLevel1ID", referencedColumnName="ID")
     * })
     */
    private $adminlevel1id;

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
     * @var \Countries
     *
     * @ORM\ManyToOne(targetEntity="Countries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CountryID", referencedColumnName="ID")
     * })
     */
    private $countryid;



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
     * @return Adminlevel2
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
     * @return Adminlevel2
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
     * Set adminlevel1name
     *
     * @param string $adminlevel1name
     * @return Adminlevel2
     */
    public function setAdminlevel1name($adminlevel1name)
    {
        $this->adminlevel1name = $adminlevel1name;
    
        return $this;
    }

    /**
     * Get adminlevel1name
     *
     * @return string 
     */
    public function getAdminlevel1name()
    {
        return $this->adminlevel1name;
    }

    /**
     * Set geom
     *
     * @param geometry $geom
     * @return Adminlevel2
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
     * Set adminlevel1id
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminlevel1 $adminlevel1id
     * @return Adminlevel2
     */
    public function setAdminlevel1id(\Dirigendo\FrontEndBundle\Entity\Adminlevel1 $adminlevel1id = null)
    {
        $this->adminlevel1id = $adminlevel1id;
    
        return $this;
    }

    /**
     * Get adminlevel1id
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Adminlevel1 
     */
    public function getAdminlevel1id()
    {
        return $this->adminlevel1id;
    }

    /**
     * Set adminleveltypeid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminleveltypes $adminleveltypeid
     * @return Adminlevel2
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

    /**
     * Set countryid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Countries $countryid
     * @return Adminlevel2
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
}