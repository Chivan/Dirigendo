<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategoryservices
 *
 * @ORM\Table(name="subcategoryservices")
 * @ORM\Entity
 */
class Subcategoryservices
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
     * @var \Services
     *
     * @ORM\ManyToOne(targetEntity="Services")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ServiceID", referencedColumnName="ID")
     * })
     */
    private $serviceid;

    /**
     * @var \Subcategories
     *
     * @ORM\ManyToOne(targetEntity="Subcategories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SubcategoryID", referencedColumnName="ID")
     * })
     */
    private $subcategoryid;



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
     * Set serviceid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Services $serviceid
     * @return Subcategoryservices
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

    /**
     * Set subcategoryid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Subcategories $subcategoryid
     * @return Subcategoryservices
     */
    public function setSubcategoryid(\Dirigendo\FrontEndBundle\Entity\Subcategories $subcategoryid = null)
    {
        $this->subcategoryid = $subcategoryid;
    
        return $this;
    }

    /**
     * Get subcategoryid
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Subcategories 
     */
    public function getSubcategoryid()
    {
        return $this->subcategoryid;
    }
}