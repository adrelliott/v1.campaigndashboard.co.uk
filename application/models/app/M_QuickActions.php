<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_QuickActions
 * @author Al Elliott
 * Table Name: quickActions
 * 
 */
class M_QuickActions extends App_Model {

    //Define vars used throught the process
    public $table_name = 'quickActions';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_QuickActions.php */
/* Location: ./application/models/app/M_QuickActions.php */