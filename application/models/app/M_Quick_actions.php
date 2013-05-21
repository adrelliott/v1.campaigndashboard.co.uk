<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_QuickActions
 * @author Al Elliott
 * Table Name: quick_actions
 * 
 */
class M_Quick_actions extends App_Model {

    //Define vars used throught the process
    public $table_name = 'quick_actions';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Quick_actions.php */
/* Location: ./application/models/app/M_Quick_actions.php */