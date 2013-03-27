<?php
namespace Dirigendo\FrontEndBundle\Controller;

use \Doctrine\ORM\EntityManager;
use Dirigendo\FrontEndBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
* @Route(service = "DirigendoFrontEndBundle.MainMenuController")
*/
class MainMenuController extends Controller {
    
    protected $_entityManager;
    
    public function __construct(EntityManager $entityManager) {
        $this->_entityManager = $entityManager;
    }
     
     /**
     * @Template()
     */
    public function menuAction()
    {
        
        $subcategories = $this->_entityManager->getRepository("DirigendoFrontEndBundle:Subcategories")->findAll();
        
        foreach ($subcategories as $subcategory) {
            
            $menu[$subcategory->getName()] =  $subcategory->getServices();
        }
        return array('menu' => $menu);
    }
    
}

?>
