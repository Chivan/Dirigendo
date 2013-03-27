<?php

namespace Proxies\__CG__\Dirigendo\FrontEndBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Countries extends \Dirigendo\FrontEndBundle\Entity\Countries implements \Doctrine\ORM\Proxy\Proxy
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

    public function setIso($iso)
    {
        $this->__load();
        return parent::setIso($iso);
    }

    public function getIso()
    {
        $this->__load();
        return parent::getIso();
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

    public function setNamelocal($namelocal)
    {
        $this->__load();
        return parent::setNamelocal($namelocal);
    }

    public function getNamelocal()
    {
        $this->__load();
        return parent::getNamelocal();
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

    public function setAdminlevels($adminlevels)
    {
        $this->__load();
        return parent::setAdminlevels($adminlevels);
    }

    public function getAdminlevels()
    {
        $this->__load();
        return parent::getAdminlevels();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'iso', 'name', 'namelocal', 'geom', 'adminlevels');
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