<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Vehicle
 * @author Al Elliott
 * 
 */
class Vehicle extends App_Controller {

    public $model_name = 'M_Vehicles';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Vehicle.php */
/* Location: ./application/controllers/app/Vehicle.php */