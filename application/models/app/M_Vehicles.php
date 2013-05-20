<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Vehicles
 * @author Al Elliott
 * Table Name: vehicles
 * 
 * Description goes here
 * 
 */
class M_Vehicles extends App_Model {

    //Define vars used throught the process
    public $table_name = 'vehicles';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Vehicles.php */
/* Location: ./application/models/app/M_Vehicles.php */