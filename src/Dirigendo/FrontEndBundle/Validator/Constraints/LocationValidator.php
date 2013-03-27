<?php

namespace Dirigendo\FrontEndBundle\Validator\Constraints;

use \Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class LocationValidator extends ConstraintValidator {

    protected $_entityManager;
    
    public function __construct(EntityManager $entityManager) {
        $this->_entityManager = $entityManager;
    }
    
    public function validate($value, Constraint $constraint) {
            
            if(preg_match('/^[1-9][0-9]{3} ?[a-zA-Z]{2}$/', $value))
            {
                //zip code
                return;
            }     
            
            $location = $this->_entityManager->getRepository('DirigendoFrontEndBundle:Adminlevel3')->findOneBy(
                array('name' => $value)
                );
            
            if (!isset($location))
            {
                $this->context->addViolation($constraint->message, array('%string%' => $value));
            }
    }

}

?>
