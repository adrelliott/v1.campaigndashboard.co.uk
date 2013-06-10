<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Comms
 * @author Al Elliott
 * Table Name: comms
 * 
 * 
 */
class M_Comms extends App_Model {

    //Define vars used throught the process
    public $table_name = 'comms';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Comms.php */
/* Location: ./application/models/app/M_Comms.php */