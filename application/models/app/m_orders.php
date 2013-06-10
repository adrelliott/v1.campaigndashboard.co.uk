<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Orders
 * @author Al Elliott
 * Table Name: orders
 * 
 * 
 */
class M_Orders extends App_Model {

    //Define vars used throught the process
    public $table_name = 'orders';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Orders.php */
/* Location: ./application/models/app/M_Orders.php */