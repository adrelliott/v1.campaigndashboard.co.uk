<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_OrderItems
 * @author Al Elliott
 * Table Name: order_items
 * 
 * Description goes here
 * 
 */
class M_Order_items extends App_Model {

    //Define vars used throught the process
    public $table_name = 'order_items';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Order_items.php */
/* Location: ./application/models/app/M_Order_items.php */