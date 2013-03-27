<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subcategoryaliases
 *
 * @ORM\Table(name="subcategoryaliases")
 * @ORM\Entity
 */
class Subcategoryaliases
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
     * @ORM\Column(name="Alias", type="string", length=255, nullable=false)
     */
    private $alias;

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
     * Set alias
     *
     * @param string $alias
     * @return Subcategoryaliases
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set subcategoryid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Subcategories $subcategoryid
     * @return Subcategoryaliases
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