<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Templates
 * @author Al Elliott
 * Table Name: templates
 * 
 * Description goes here
 * 
 */
class M_Templates extends App_Model {

    //Define vars used throught the process
    public $table_name = 'templates';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Templates.php */
/* Location: ./application/models/app/M_Templates.php */