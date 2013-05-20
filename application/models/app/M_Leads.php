<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Leads
 * @author Al Elliott
 * Table Name: leads
 * 
 */
class M_Leads extends App_Model {

    //Define vars used throught the process
    public $table_name = 'leads';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Leads.php */
/* Location: ./application/models/app/M_Leads.php */