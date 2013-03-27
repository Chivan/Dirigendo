<?php

namespace Dirigendo\FrontEndBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contentpages
 *
 * @ORM\Table(name="contentpages")
 * @ORM\Entity
 */
class Contentpages
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
     * @ORM\Column(name="Placeholder", type="string", length=255, nullable=false)
     */
    private $placeholder;

    /**
     * @var string
     *
     * @ORM\Column(name="Content", type="text", nullable=false)
     */
    private $content;



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
     * @return Contentpages
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
     * Set placeholder
     *
     * @param string $placeholder
     * @return Contentpages
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    
        return $this;
    }

    /**
     * Get placeholder
     *
     * @return string 
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Contentpages
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}