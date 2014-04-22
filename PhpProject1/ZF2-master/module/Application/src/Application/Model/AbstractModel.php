<?php

namespace Application\Model;

/**
 * é uma classe abstrata dos modelos
 * 
 */
abstract class AbstractModel 
{

    public function __get($name) 
    {
        return $this->$name;
    }
    
    public function __set($name, $value) 
    {
        $this->$name = $value;
    }
    
}

?>

