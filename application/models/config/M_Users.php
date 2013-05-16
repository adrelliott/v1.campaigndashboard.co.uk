<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Users
 * @author Al Elliott
 * Table Name: XXXXXXXX
 * 
 * Description goes here
 * 
 */
class M_Users extends Config_Model {

    //Define vars used throught the process
    public $table_name = 'contacts';
    public $order_by = 'FirstName ASC';   //FieldName ASC or DESC or RAND
    //public $primary_key = 'xxxxxxx'; This is set in CRM_Model. Overwrite here if needs be
    //
    //Define vars used in the scope of this model only:
    public $cols = array
        (
        'Id' => 'Id', 
        'FirstName' => 'First Name', 
        'LastName' => 'Last Name',
        'Nickname' => 'Known As',
        'Username' => 'Username',
        'CrmUserAdminLevel' => 'Admin Level',
        'CrmUserSuspendReason' => '',
        'dID' => 'Dataowner Id',
        );
    
     public $table_template = array
        (
            'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" width="100%">',
            'cell_start' => '<td style="text-align:center;background-color:#ddd">',
            'cell_alt_start' => '<td style="text-align:center">',
        );

    public function __construct() {
        parent::__construct();
        $this->db->select(array_keys($this->cols));
        $this->db->where('CrmUserYN', 1);
    }
    
    public function get_all_users($dID = FALSE) {
        if ($dID) $this->db->where('dID', $dID);
        $retval = array();
        $q = $this->get();
        
        //now add a link to each row to edit/delete
        foreach ($q as $key => $array)
        {
            $retval[$key] = $array;
            
            //Now add a link to edit or delete this dataset
            $edit = anchor('config/user/view/edit/' . $array['Id'], 'Edit');
            $delete = anchor('config/user/delete/index/list/' . $array['Id'], 'Delete');
            $retval[$key]['_::_Action'] = $edit . ' | ' . $delete;
        }
        return $retval;
    }
    
    

}

/* End of file M_Users.php */
/* Location: ./application/models/app/M_Users.php */