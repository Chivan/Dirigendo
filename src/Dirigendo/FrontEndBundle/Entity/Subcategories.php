<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategories
 *
 * @ORM\Table(name="subcategories")
 * @ORM\Entity
 */
class Subcategories
{
     public function __construct() {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \Categories
     *
     * @ORM\ManyToOne(targetEntity="Categories")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="CategoryID", referencedColumnName="ID")
     * })
     */
    private $categoryid;

        /**
     * @ORM\ManyToMany(targetEntity="Services")
     * @ORM\JoinTable(name="subcategoryservices",
     *      joinColumns={@ORM\JoinColumn(name="SubcategoryID", referencedColumnName="ID")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="ServiceID", referencedColumnName="ID")}
     *      )
     */
    private $services;


    
    public function getServices()
    {
        return $this->services;
    }
    
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
     * @return Subcategories
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
     * Set categoryid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Categories $categoryid
     * @return Subcategories
     */
    public function setCategoryid(\Dirigendo\FrontEndBundle\Entity\Categories $categoryid = null)
    {
        $this->categoryid = $categoryid;
    
        return $this;
    }

    /**
     * Get categoryid
     *
     * @return \Dirigendo\FrontEndBundle\Entity\Categories 
     */
    public function getCategoryid()
    {
        return $this->categoryid;
    }
}