<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_OrderItems
 * @author Al Elliott
 * Table Name: orderItems
 * 
 * Description goes here
 * 
 */
class M_OrderItems extends App_Model {

    //Define vars used throught the process
    public $table_name = 'orderItems';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_OrderItems.php */
/* Location: ./application/models/app/M_OrderItems.php */