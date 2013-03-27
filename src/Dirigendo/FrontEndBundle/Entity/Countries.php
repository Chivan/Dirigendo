<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
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
     * @ORM\Column(name="ISO", type="string", length=255, nullable=true)
     */
    private $iso;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="NameLocal", type="string", length=255, nullable=true)
     */
    private $namelocal;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geom", type="geometry", nullable=true)
     */
    private $geom;

    /**
     * @var integer
     *
     * @ORM\Column(name="AdminLevels", type="integer", nullable=false)
     */
    private $adminlevels;



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
     * Set iso
     *
     * @param string $iso
     * @return Countries
     */
    public function setIso($iso)
    {
        $this->iso = $iso;
    
        return $this;
    }

    /**
     * Get iso
     *
     * @return string 
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Countries
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
     * Set namelocal
     *
     * @param string $namelocal
     * @return Countries
     */
    public function setNamelocal($namelocal)
    {
        $this->namelocal = $namelocal;
    
        return $this;
    }

    /**
     * Get namelocal
     *
     * @return string 
     */
    public function getNamelocal()
    {
        return $this->namelocal;
    }

    /**
     * Set geom
     *
     * @param geometry $geom
     * @return Countries
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
     * Set adminlevels
     *
     * @param integer $adminlevels
     * @return Countries
     */
    public function setAdminlevels($adminlevels)
    {
        $this->adminlevels = $adminlevels;
    
        return $this;
    }

    /**
     * Get adminlevels
     *
     * @return integer 
     */
    public function getAdminlevels()
    {
        return $this->adminlevels;
    }
}