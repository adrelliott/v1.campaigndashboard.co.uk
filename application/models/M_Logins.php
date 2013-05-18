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
    
    /* Checks $_POST data against known users in the contact table
    * 
    * @return nothing
    * @author Al Elliott
    */
    public function validate_user() {
        $input = array();
        $q = array();
        $retval = array('message_flag' => 1, 'reference' => '');
        
        //clean post
        foreach ($this->input->post() as $key => $value)
        {
            $v = $this->security->xss_clean($value);
            if ($key == 'Password')
            {
               $input['Password'] = md5($v);
            }
            elseif ($key === 'Username') $input['Username'] = $value;
        }
        
        //do query
        if (count($input)) 
        {
            $this->db->select(array_keys($this->cols));
            $this->db->where('CrmUserYN', 1);
            $q = $this->get_by($input, FALSE, NULL, TRUE);
        }
        else return $retval;
        
        //Now check what's been returned
        if (count($q))
        {
            //Are we suspended?
            if ($q['CrmUserSuspendReason'])
            {
                $retval = array
                    (
                        'message_flag' => 2, 
                        'reference' => $q['CrmUserSuspendReason']
                    );
                return $retval;
            }
            else
            {
                //All good? Save to session, set flag and move on...
                $_SESSION['user_data'] = $q;
                $_SESSION['user_data']['is_logged_in'] = 1;
                return TRUE;
            }
        }
        else return $retval;
    }
    
    
    
    /* Logs out the user, deletes all session data and redirects to the login page
    * 
    * @return nothing
    * @author Al Elliott
    */
    public function log_out() {
        //destroy session variables
        $this->session->sess_destroy();
        session_destroy();  //destroys PHP session too
        
        $this->session->set_flashdata('message', 'You\'ve been logged out! Please log back in here.');
        
        //redirect to login page
        redirect(site_url('login', 'refresh'));
        
        return;
    }

}

/* End of file M_Logins.php */
/* Location: ./application/models/M_Logins.php */