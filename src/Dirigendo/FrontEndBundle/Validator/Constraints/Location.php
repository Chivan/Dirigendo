<?php

namespace Dirigendo\FrontEndBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Location extends Constraint {

    public $message = 'This is not a valid city name or zipcode.';

    public function validatedBy() {
        return 'locationValidator';
    }

}

?>
