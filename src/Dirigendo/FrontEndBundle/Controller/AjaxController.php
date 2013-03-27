<?php

namespace Dirigendo\FrontEndBundle\Controller;

use \Doctrine\ORM\EntityManager;
use Dirigendo\FrontEndBundle\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Dirigendo\FrontEndBundle\Validator\Constraints;

class AjaxController extends Controller {

    public function findServiceAction() {
        $request = $this->getRequest();
        $term = $request->query->get('term');
        
        if (!isset($term)) {
            return new Response();
        }

        $results = $this->getDoctrine()->getEntityManager()
                ->createQueryBuilder()
                ->select('s.alias as value')
                ->from('DirigendoFrontEndBundle:Servicealiases', 's')
                ->where("s.alias LIKE '%" . $term . "%'")
                ->setMaxResults(10)
                ->getQuery()
                ->getArrayResult();

        $returnObject = array();
        
        foreach ($results as $result) {
            $returnObject[] = array('label' => $result['value'], 'value' => strtolower($result['value']));
        }
        return new Response(json_encode($returnObject));
    }
    
    public function validateLocationAction()
    {
        $request = $this->getRequest();
        $value = $request->query->get('value');
        
        if (!isset($value)) {
            return new Response(json_encode(FALSE));
        }
        
        $constraint = new Constraints\Location();
        $errors = $this->get("validator")->validateValue($value, $constraint);
        
        if (count($errors) !== 0) {
             return new Response(json_encode(FALSE));
        }
        
        return new Response(json_encode(TRUE));
    }
    
    public function validateServiceAction()
    {
        $request = $this->getRequest();
        $value = $request->query->get('value');
        
        if (!isset($value)) {
            return new Response(json_encode(FALSE));
        }
        
        $constraint = new Constraints\Service();
        $errors = $this->get("validator")->validateValue($value, $constraint);
        
        if (count($errors) !== 0) {
             return new Response(json_encode(FALSE));
        }
        
        return new Response(json_encode(TRUE));
    }

    public function findLocationAction() {
        
        //TO DO: Alleen koppelbare locaties
        //locatieonafhangkelijk

        $request = $this->getRequest();
        $term = $request->query->get('term');
        
        if (!isset($term)) {
            return new Response();
        }
        
        $results = $this->getDoctrine()->getEntityManager("geodata")
                ->createQueryBuilder()
                ->select('a.name as value')
                ->from('DirigendoFrontEndBundle:Adminlevel3', 'a')
                ->where("a.name LIKE '%" . $term . "%'")
                ->setMaxResults(10)
                ->getQuery()
                ->getArrayResult();

        $returnObject = array();
        
        foreach ($results as $result) {
            $returnObject[] = array('label' => $result['value'], 'value' => strtolower($result['value']));
        }
                
        return new Response(json_encode($returnObject));
        
    }

}

?>
