<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Contacts
 * @author Al Elliott
 * Table Name: contacts
 * 
 * Description goes here
 * 
 */
class M_Contacts extends App_Model {

    //Define vars used throught the process
    public $table_name = 'contacts';
    public $condition = array('CrmUserYN !=' => 1);

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here

    public function __construct() {
        parent::__construct();
    }
    
    public function get_users() {
        $this->condition = array('CrmUserYN =' => 1);
        return $this->get();
    }

}

/* End of file M_Contacts.php */
/* Location: ./application/models/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/M_Contacts.php */