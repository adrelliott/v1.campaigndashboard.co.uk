<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Broadcasts
 * @author Al Elliott
 * Table Name: broadcasts
 * 
 * Description goes here
 * 
 */
class M_Broadcasts extends App_Model {

    //Define vars used throught the process
    public $table_name = 'broadcasts';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Broadcasts.php */
/* Location: ./application/models/app/M_Broadcasts.php */