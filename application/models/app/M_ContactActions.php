<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_ContactActions
 * @author Al Elliott
 * Table Name: contactActions
 * 
 */
class M_ContactActions extends App_Model {

    //Define vars used throught the process
    public $table_name = 'contactActions';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_ContactActions.php */
/* Location: ./application/models/app/M_ContactActions.php */