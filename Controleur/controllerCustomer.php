<?php

class ControllerCustomer{
    
    public function __construct() {
        
    }
    public function __toString()
    {
        return parent::__toString() . 
            //'. Son taux d\'interet est de ' . $this->tauxInteret * 100 . '%.';
    }
}