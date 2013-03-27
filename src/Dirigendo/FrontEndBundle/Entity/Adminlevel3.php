<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adminlevel3
 *
 * @ORM\Table(name="adminlevel3")
 * @ORM\Entity
 */
class Adminlevel3
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
     * @ORM\Column(name="CountryName", type="string", length=255, nullable=false)
     */
    private $countryname;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=28, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="AdminLevel1Name", type="string", length=255, nullable=true)
     */
    private $adminlevel1name;

    /**
     * @var string
     *
     * @ORM\Column(name="AdminLevel2Name", type="string", length=30, nullable=true)
     */
    private $adminlevel2name;

    /**
     * @var \Adminlevel2
     *
     * @ORM\ManyToOne(targetEntity="Adminlevel2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminLevel2ID", referencedColumnName="ID")
     * })
     */
    private $adminlevel2id;

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
     * @var \Adminlevel1
     *
     * @ORM\ManyToOne(targetEntity="Adminlevel1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminLevel1ID", referencedColumnName="ID")
     * })
     */
    private $adminlevel1id;



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
     * @return Adminlevel3
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
     * @return Adminlevel3
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
     * @return Adminlevel3
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
     * Set adminlevel2name
     *
     * @param string $adminlevel2name
     * @return Adminlevel3
     */
    public function setAdminlevel2name($adminlevel2name)
    {
        $this->adminlevel2name = $adminlevel2name;
    
        return $this;
    }

    /**
     * Get adminlevel2name
     *
     * @return string 
     */
    public function getAdminlevel2name()
    {
        return $this->adminlevel2name;
    }

    /**
     * Set adminlevel2id
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminlevel2 $adminlevel2id
     * @return Adminlevel3
     */
    public function setAdminlevel2id(\Dirigendo\FrontEndBundle\Entity\Adminlevel2 $adminlevel2id = null)
    {
        $this->adminlevel2id = $adminlevel2id;
    
        return $this;
    }

    /**
     * Get adminlevel2id
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Adminlevel2 
     */
    public function getAdminlevel2id()
    {
        return $this->adminlevel2id;
    }

    /**
     * Set adminleveltypeid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminleveltypes $adminleveltypeid
     * @return Adminlevel3
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
     * @return Adminlevel3
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
     * Set adminlevel1id
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminlevel1 $adminlevel1id
     * @return Adminlevel3
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
}