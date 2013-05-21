<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_ContactActions
 * @author Al Elliott
 * Table Name: contact_actions
 * 
 */
class M_Contact_actions extends App_Model {

    //Define vars used throught the process
    public $table_name = 'contact_actions';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Contact_actions.php */
/* Location: ./application/models/app/M_Contact_actions.php */