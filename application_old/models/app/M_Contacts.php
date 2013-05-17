<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - m_Contacts
 * @author Al Elliott
 * Table Name: contacts
 * 
 * CRUD for Contacts Table
 * 
 */
class M_Contacts extends App_Model {

    //Define vars used throught the process
    public $table_name = 'contacts';
    //public $order_by = '';   //This is set in CRM_Model. Overwrite here if needs be
    //public $primary_key = 'xxxxxxx'; This is set in CRM_Model. Overwrite here if needs be
    
    //public $contact_id = ''; //*****This is the ID of the current contact.??? Flashdata? Session?
    
    //Define vars used in the scope of this model only:
    var $data = array();    //This is the var that holds returned data
    var $options = array();     //This array holds query options for select (e.g 'Id' => 1)

    public function __construct() {
        parent::__construct();
    }
    
    

}

/* End of file m_Contacts.php */
/* Location: ./application/models/app/m_Contacts.php */