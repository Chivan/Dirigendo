<?php
namespace Dirigendo\FrontEndBundle\Business;

use Symfony\Component\Validator\Constraints as Assert;
use Dirigendo\FrontEndBundle\Validator\Constraints as DirigendoAssert;

class Request {
  
    /**
     * @Assert\NotBlank
     * @DirigendoAssert\Location
     */
    private $location;
    
    /**
     * @Assert\NotBlank
     * @DirigendoAssert\Service
     */
    private $service;
    
    public function getLocation()
    {
        return $this->location;
    }
    
    public function setLocation($location)
    {
        $this->location = $location;
    }
    
    public function getService()
    {
        return $this->service;
    }
    
    public function setService($service)
    {
        $this->service = $service;
    }
    
}

?>
