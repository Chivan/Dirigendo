<?php

namespace Dirigendo\FrontEndBundle\Validator\Constraints;

use \Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ServiceValidator extends ConstraintValidator {

    protected $_entityManager;
    
    public function __construct(EntityManager $entityManager) {
        $this->_entityManager = $entityManager;
    }
    
    public function validate($value, Constraint $constraint) {
               
            $service = $this->_entityManager->getRepository('DirigendoFrontEndBundle:Services')->findOneBy(
                array('name' => $value)
                );
            
            if (!isset($service))
            {
                $this->context->addViolation($constraint->message, array('%string%' => $value));
            }
    }

}

?>
