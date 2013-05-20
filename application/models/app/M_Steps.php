<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Steps
 * @author Al Elliott
 * Table Name: steps
 * 
 */
class M_Steps extends App_Model {

    //Define vars used throught the process
    public $table_name = 'steps';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Steps.php */
/* Location: ./application/models/app/M_Steps.php */