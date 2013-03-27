<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Services
 *
 * @ORM\Table(name="services")
 * @ORM\Entity
 */
class Services
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
     * @ORM\Column(name="Name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="TileImage", type="string", length=255, nullable=false)
     */
    private $tileimage;



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
     * @return Services
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
     * Set tileimage
     *
     * @param string $tileimage
     * @return Services
     */
    public function setTileimage($tileimage)
    {
        $this->tileimage = $tileimage;
    
        return $this;
    }

    /**
     * Get tileimage
     *
     * @return string 
     */
    public function getTileimage()
    {
        return $this->tileimage;
    }
}