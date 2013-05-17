<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Logins
 * @author Al Elliott
 * Table Name: contacts
 * 
 * Deals with logins
 * 
 */
class M_Logins extends Base_Model {

    //Define vars used throught the process
    public $table_name = 'contacts';
    public $cols = array
    (
        'Id' => 'Id', 
        'FirstName' => 'First Name', 
        'LastName' => 'Last Name',
        'Nickname' => 'Known As',
        'EmailAddress1' => 'Email Address',
        'Phone1Mobile' => 'Mobile No',
        'Phone3Work' => 'Work No',
        'Username' => 'Username',
        'CrmUserAdminLevel' => 'Admin Level',
        'CrmUserSuspendReason' => '',
        'dID' => 'Dataowner Id',
    );
    

    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Logins.php */
/* Location: ./application/models/M_Logins.php */