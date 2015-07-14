<?php

class phpCypher
{
    
    private $instance = null;
    
    
    function __construct()
    {
        
        
        $instance = this;
    }
    
    
    public function getInstance()
    {
        return $instance;
    }
    
}


?>