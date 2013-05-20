<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Products
 * @author Al Elliott
 * Table Name: products
 * 
 */
class M_Products extends App_Model {

    //Define vars used throught the process
    public $table_name = 'products';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Products.php */
/* Location: ./application/models/app/M_Products.php */