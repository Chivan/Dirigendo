<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adminlevel4
 *
 * @ORM\Table(name="adminlevel4")
 * @ORM\Entity
 */
class Adminlevel4
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
     * @ORM\Column(name="Name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="XCOORD", type="string", length=255, nullable=true)
     */
    private $xcoord;

    /**
     * @var string
     *
     * @ORM\Column(name="YCOORD", type="string", length=255, nullable=true)
     */
    private $ycoord;

    /**
     * @var string
     *
     * @ORM\Column(name="PC4CODE", type="string", length=255, nullable=true)
     */
    private $pc4code;

    /**
     * @var string
     *
     * @ORM\Column(name="PC3CODE", type="string", length=255, nullable=true)
     */
    private $pc3code;

    /**
     * @var string
     *
     * @ORM\Column(name="PC2CODE", type="string", length=255, nullable=true)
     */
    private $pc2code;

    /**
     * @var string
     *
     * @ORM\Column(name="PC1CODE", type="string", length=255, nullable=true)
     */
    private $pc1code;

    /**
     * @var string
     *
     * @ORM\Column(name="AdminLevel1Name", type="string", length=255, nullable=true)
     */
    private $adminlevel1name;

    /**
     * @var string
     *
     * @ORM\Column(name="AdminLevel2Name", type="string", length=255, nullable=true)
     */
    private $adminlevel2name;

    /**
     * @var string
     *
     * @ORM\Column(name="AdminLevel3Name", type="string", length=255, nullable=true)
     */
    private $adminlevel3name;

    /**
     * @var geometry
     *
     * @ORM\Column(name="geom", type="geometry", nullable=true)
     */
    private $geom;

    /**
     * @var \Adminlevel3
     *
     * @ORM\ManyToOne(targetEntity="Adminlevel3")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminLevel3ID", referencedColumnName="ID")
     * })
     */
    private $adminlevel3id;

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
     * @var \Adminlevel1
     *
     * @ORM\ManyToOne(targetEntity="Adminlevel1")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="AdminLevel1ID", referencedColumnName="ID")
     * })
     */
    private $adminlevel1id;

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
     * @return Adminlevel4
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
     * Set xcoord
     *
     * @param string $xcoord
     * @return Adminlevel4
     */
    public function setXcoord($xcoord)
    {
        $this->xcoord = $xcoord;
    
        return $this;
    }

    /**
     * Get xcoord
     *
     * @return string 
     */
    public function getXcoord()
    {
        return $this->xcoord;
    }

    /**
     * Set ycoord
     *
     * @param string $ycoord
     * @return Adminlevel4
     */
    public function setYcoord($ycoord)
    {
        $this->ycoord = $ycoord;
    
        return $this;
    }

    /**
     * Get ycoord
     *
     * @return string 
     */
    public function getYcoord()
    {
        return $this->ycoord;
    }

    /**
     * Set pc4code
     *
     * @param string $pc4code
     * @return Adminlevel4
     */
    public function setPc4code($pc4code)
    {
        $this->pc4code = $pc4code;
    
        return $this;
    }

    /**
     * Get pc4code
     *
     * @return string 
     */
    public function getPc4code()
    {
        return $this->pc4code;
    }

    /**
     * Set pc3code
     *
     * @param string $pc3code
     * @return Adminlevel4
     */
    public function setPc3code($pc3code)
    {
        $this->pc3code = $pc3code;
    
        return $this;
    }

    /**
     * Get pc3code
     *
     * @return string 
     */
    public function getPc3code()
    {
        return $this->pc3code;
    }

    /**
     * Set pc2code
     *
     * @param string $pc2code
     * @return Adminlevel4
     */
    public function setPc2code($pc2code)
    {
        $this->pc2code = $pc2code;
    
        return $this;
    }

    /**
     * Get pc2code
     *
     * @return string 
     */
    public function getPc2code()
    {
        return $this->pc2code;
    }

    /**
     * Set pc1code
     *
     * @param string $pc1code
     * @return Adminlevel4
     */
    public function setPc1code($pc1code)
    {
        $this->pc1code = $pc1code;
    
        return $this;
    }

    /**
     * Get pc1code
     *
     * @return string 
     */
    public function getPc1code()
    {
        return $this->pc1code;
    }

    /**
     * Set adminlevel1name
     *
     * @param string $adminlevel1name
     * @return Adminlevel4
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
     * @return Adminlevel4
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
     * Set adminlevel3name
     *
     * @param string $adminlevel3name
     * @return Adminlevel4
     */
    public function setAdminlevel3name($adminlevel3name)
    {
        $this->adminlevel3name = $adminlevel3name;
    
        return $this;
    }

    /**
     * Get adminlevel3name
     *
     * @return string 
     */
    public function getAdminlevel3name()
    {
        return $this->adminlevel3name;
    }

    /**
     * Set geom
     *
     * @param geometry $geom
     * @return Adminlevel4
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
     * Set adminlevel3id
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminlevel3 $adminlevel3id
     * @return Adminlevel4
     */
    public function setAdminlevel3id(\Dirigendo\FrontEndBundle\Entity\Adminlevel3 $adminlevel3id = null)
    {
        $this->adminlevel3id = $adminlevel3id;
    
        return $this;
    }

    /**
     * Get adminlevel3id
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Adminlevel3 
     */
    public function getAdminlevel3id()
    {
        return $this->adminlevel3id;
    }

    /**
     * Set adminleveltypeid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminleveltypes $adminleveltypeid
     * @return Adminlevel4
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
     * Set adminlevel1id
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminlevel1 $adminlevel1id
     * @return Adminlevel4
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
     * Set adminlevel2id
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Adminlevel2 $adminlevel2id
     * @return Adminlevel4
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
}