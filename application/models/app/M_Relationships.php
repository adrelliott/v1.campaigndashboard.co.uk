<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Relationships
 * @author Al Elliott
 * Table Name: relationships
 * 
 */
class M_Relationships extends App_Model {

    //Define vars used throught the process
    public $table_name = 'relationships';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Relationships.php */
/* Location: ./application/models/app/M_Relationships.php */