<?php

namespace Proxies\__CG__\Dirigendo\FrontEndBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Servicereviews extends \Dirigendo\FrontEndBundle\Entity\Servicereviews implements \Doctrine\ORM\Proxy\Proxy
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

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setStar1($star1)
    {
        $this->__load();
        return parent::setStar1($star1);
    }

    public function getStar1()
    {
        $this->__load();
        return parent::getStar1();
    }

    public function setStar2($star2)
    {
        $this->__load();
        return parent::setStar2($star2);
    }

    public function getStar2()
    {
        $this->__load();
        return parent::getStar2();
    }

    public function setStar3($star3)
    {
        $this->__load();
        return parent::setStar3($star3);
    }

    public function getStar3()
    {
        $this->__load();
        return parent::getStar3();
    }

    public function setStar4($star4)
    {
        $this->__load();
        return parent::setStar4($star4);
    }

    public function getStar4()
    {
        $this->__load();
        return parent::getStar4();
    }

    public function setStar5($star5)
    {
        $this->__load();
        return parent::setStar5($star5);
    }

    public function getStar5()
    {
        $this->__load();
        return parent::getStar5();
    }

    public function setOpinion($opinion)
    {
        $this->__load();
        return parent::setOpinion($opinion);
    }

    public function getOpinion()
    {
        $this->__load();
        return parent::getOpinion();
    }

    public function setServiceid(\Dirigendo\FrontEndBundle\Entity\Services $serviceid = NULL)
    {
        $this->__load();
        return parent::setServiceid($serviceid);
    }

    public function getServiceid()
    {
        $this->__load();
        return parent::getServiceid();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'name', 'date', 'star1', 'star2', 'star3', 'star4', 'star5', 'opinion', 'serviceid');
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