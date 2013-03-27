<?php

namespace Dirigendo\FrontEndBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Service extends Constraint {

    public $message = 'This is not a valid service name.';

    public function validatedBy() {
        return 'serviceValidator';
    }

}

?>