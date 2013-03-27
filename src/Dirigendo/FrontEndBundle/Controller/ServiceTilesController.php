<?php

namespace Dirigendo\FrontEndBundle\Controller;

use \Doctrine\ORM\EntityManager;
use Dirigendo\FrontEndBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* @Route(service = "DirigendoFrontEndBundle.ServiceTilesController")
*/
class ServiceTilesController extends Controller {
    
    protected $_entityManager;
    
    public function __construct(EntityManager $entityManager) {
        $this->_entityManager = $entityManager;
    }
    
     /**
     * @Template()
     */
    public function serviceTilesAction()
    {
        $serviceTiles = $this->_entityManager->getRepository('DirigendoFrontEndBundle:Services')->findBy(
                array(),
                array('name' => 'DESC')
                );
        
        return array ('servicetiles' => $serviceTiles);
    }
}

?>
