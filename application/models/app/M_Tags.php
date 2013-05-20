<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Tags
 * @author Al Elliott
 * Table Name: tags
 * 
 */
class M_Tags extends App_Model {

    //Define vars used throught the process
    public $table_name = 'tags';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Tags.php */
/* Location: ./application/models/app/M_Tags.php */