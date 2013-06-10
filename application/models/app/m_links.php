<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Links
 * @author Al Elliott
 * Table Name: links
 * 
 * Description goes here
 * 
 */
class M_Links extends App_Model {

    //Define vars used throught the process
    public $table_name = 'links';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Links.php */
/* Location: ./application/models/app/M_Links.php */