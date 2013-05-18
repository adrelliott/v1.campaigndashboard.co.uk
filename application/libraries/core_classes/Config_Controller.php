<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Config_Controller
 * @author Al Elliott
 * 
 * 
 */
class Config_Controller extends Base_Controller {

    public function __construct() {
        parent::__construct();
        
        //We don't use dID in the config context
        if(isset($this->dID)) unset($this->dID);
    }

    public function index() {
        //Code here
    }

}

/* End of file Config_Controller.php */
/* Location: ./application/core_classes/Config_Controller.php */