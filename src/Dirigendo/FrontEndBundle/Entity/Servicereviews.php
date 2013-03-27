<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicereviews
 *
 * @ORM\Table(name="servicereviews")
 * @ORM\Entity
 */
class Servicereviews
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
     * @ORM\Column(name="Date", type="string", length=150, nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="Star1", type="integer", nullable=false)
     */
    private $star1;

    /**
     * @var integer
     *
     * @ORM\Column(name="Star2", type="integer", nullable=false)
     */
    private $star2;

    /**
     * @var integer
     *
     * @ORM\Column(name="Star3", type="integer", nullable=false)
     */
    private $star3;

    /**
     * @var integer
     *
     * @ORM\Column(name="Star4", type="integer", nullable=false)
     */
    private $star4;

    /**
     * @var integer
     *
     * @ORM\Column(name="Star5", type="integer", nullable=false)
     */
    private $star5;

    /**
     * @var string
     *
     * @ORM\Column(name="Opinion", type="text", nullable=false)
     */
    private $opinion;

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
     * Set name
     *
     * @param string $name
     * @return Servicereviews
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
     * Set date
     *
     * @param string $date
     * @return Servicereviews
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set star1
     *
     * @param integer $star1
     * @return Servicereviews
     */
    public function setStar1($star1)
    {
        $this->star1 = $star1;
    
        return $this;
    }

    /**
     * Get star1
     *
     * @return integer 
     */
    public function getStar1()
    {
        return $this->star1;
    }

    /**
     * Set star2
     *
     * @param integer $star2
     * @return Servicereviews
     */
    public function setStar2($star2)
    {
        $this->star2 = $star2;
    
        return $this;
    }

    /**
     * Get star2
     *
     * @return integer 
     */
    public function getStar2()
    {
        return $this->star2;
    }

    /**
     * Set star3
     *
     * @param integer $star3
     * @return Servicereviews
     */
    public function setStar3($star3)
    {
        $this->star3 = $star3;
    
        return $this;
    }

    /**
     * Get star3
     *
     * @return integer 
     */
    public function getStar3()
    {
        return $this->star3;
    }

    /**
     * Set star4
     *
     * @param integer $star4
     * @return Servicereviews
     */
    public function setStar4($star4)
    {
        $this->star4 = $star4;
    
        return $this;
    }

    /**
     * Get star4
     *
     * @return integer 
     */
    public function getStar4()
    {
        return $this->star4;
    }

    /**
     * Set star5
     *
     * @param integer $star5
     * @return Servicereviews
     */
    public function setStar5($star5)
    {
        $this->star5 = $star5;
    
        return $this;
    }

    /**
     * Get star5
     *
     * @return integer 
     */
    public function getStar5()
    {
        return $this->star5;
    }

    /**
     * Set opinion
     *
     * @param string $opinion
     * @return Servicereviews
     */
    public function setOpinion($opinion)
    {
        $this->opinion = $opinion;
    
        return $this;
    }

    /**
     * Get opinion
     *
     * @return string 
     */
    public function getOpinion()
    {
        return $this->opinion;
    }

    /**
     * Set serviceid
     *
     * @param \Dirigendo\FrontEndBundle\Entity\Services $serviceid
     * @return Servicereviews
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