<?php

namespace Dirigendo\FrontEndBundle\Controller;

use \Doctrine\ORM\EntityManager;
use Dirigendo\FrontEndBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* @Route(service = "DirigendoFrontEndBundle.CarousselController")
*/
class CarousselController extends Controller {
    
    protected $_entityManager;
    
    public function __construct(EntityManager $entityManager) {
        $this->_entityManager = $entityManager;
    }
    
     /**
     * @Template()
     */
    public function carousselAction()
    {
        $images = $this->_entityManager->getRepository('DirigendoFrontEndBundle:Carrousel')->findBy(
                array(),
                array('order' => 'ASC'),
                5,
                0
                );
        
        return array ('images' => $images);
    }
}

?>
