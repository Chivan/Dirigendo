<?php

namespace Proxies\__CG__\Dirigendo\FrontEndBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Adminlevel1 extends \Dirigendo\FrontEndBundle\Entity\Adminlevel1 implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setCountryname($countryname)
    {
        $this->__load();
        return parent::setCountryname($countryname);
    }

    public function getCountryname()
    {
        $this->__load();
        return parent::getCountryname();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setGeom($geom)
    {
        $this->__load();
        return parent::setGeom($geom);
    }

    public function getGeom()
    {
        $this->__load();
        return parent::getGeom();
    }

    public function setCountryid(\Dirigendo\FrontEndBundle\Entity\Countries $countryid = NULL)
    {
        $this->__load();
        return parent::setCountryid($countryid);
    }

    public function getCountryid()
    {
        $this->__load();
        return parent::getCountryid();
    }

    public function setAdminleveltypeid(\Dirigendo\FrontEndBundle\Entity\Adminleveltypes $adminleveltypeid = NULL)
    {
        $this->__load();
        return parent::setAdminleveltypeid($adminleveltypeid);
    }

    public function getAdminleveltypeid()
    {
        $this->__load();
        return parent::getAdminleveltypeid();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'countryname', 'name', 'geom', 'countryid', 'adminleveltypeid');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}