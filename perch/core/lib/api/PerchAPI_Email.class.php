<?php

class PerchAPI_Email extends PerchEmail
{
    public $app_id = false;
    public $version = 1.0;
    
    private $Lang = false;
    
    function __construct($version, $app_id, $Lang)
    {
        $this->app_id = $app_id;
        $this->version = $version;
        
        $this->Lang = $Lang;

        parent::__construct(false);
    }
   
}
