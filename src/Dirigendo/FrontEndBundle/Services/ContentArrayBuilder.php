<?php

namespace Dirigendo\FrontEndBundle\Services;

class ContentArrayBuilder {
    public static function Build(array $array)
    {
     $result =  array();
     
     if ($array)
     {
     foreach ($array as $field) {
         $result[$field->getPlaceholder()] = $field->getContent();
     }
     return $result;
     }
    }
}

?>
