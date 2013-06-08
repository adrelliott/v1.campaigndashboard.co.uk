<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Base_Controller
 * @author Al Elliott
 * 
 * This extends Codeigniter's base contrlller class, and adds all kinds of 
 * functionality here. All other controller classes extend this.
 * 
 * We use this to declare (and run) methods that are used throughout the app. 
 * The other classes, such as App_Controller, declaer & run methods that are 
 * specific to thier context. 
 * 
 */
class Base_Controller extends CI_Controller {
    
    /**
     * General array used to hold all data required by the page
     * @var array
     */
    public $data = array();
    
    /**
     * This is the id of the record being manipulated 
     * (it may also be the Contact Id if the record is in the table contacts)
     * @var array
     */
    public $id = '';
    
    /**
     * This is the contact's Id. May also be the same as $id if dealing just
     * in contacts table.
     * @var string
     */
    public $contact_id = ''; 
    
    /**
     * This is the ID that links each record to their respective owners
     * E.g. Every FC Utd contact record has the dID of 22232
     * @var string
     */
    public $dID = '';
    
    /**
     * This contains the contents of $_POST
     * Its used if we want to manipulate $_POST before adding to database
     * @var array
     */
    public $input_data = array();
    
    public function __construct() {
        parent::__construct();
        //PHP Session started in index.php
        
        //Test for login
        //?????????????? add me here!!!!!!!!   ??????????????????????
        
        //Set up vars to be used through the app
        $this->data['view_setup'] = $this->_set_up_vars();
        
$_SESSION['dID'] = 11110;  //delet me!

        $this->dID = $_SESSION['dID'];
        
        //Allow the use of $_GET parameters in the URL
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        
        //Show debug info if asked:
        if (isset($_GET['debug']) && strpos(ENVIRONMENT, 'development')) 
                $this->output->enable_profiler(TRUE);
        
    }
    
    ##################  SET UP THE VIEW/PAGE ##############################
    
    protected function _set_up_vars() {
        $segments = $this->uri->segment_array();
        $retval = array 
        (
           'ControllerFilePath' => strtolower(element(1, $segments, 'app')),
           'ControllerName' => strtolower(element(2, $segments, 'contact')),
           'ControllerMethod' => strtolower(element(3, $segments, 'index')),
        );
        
        return $retval;
    }
    
    protected function _load_view($view_file) {
        //is it modal?
        $ext = '';
        $pos = strpos($view_file, '_modal');
        if ($pos) 
        {
            $ext = '_modal';
            $view_file = substr_replace($view_file, '', $pos);
        }       
        
        //is the view file in the 'app' directory? (we store these views differently)
        extract($this->data['view_setup']);
        if ($ControllerFilePath == 'app') 
            $ControllerFilePath = $ControllerFilePath . '/' . $this->dID;
        
        //load views
        $this->load->vars($this->data);
        $this->load->view($ControllerFilePath . '/common/header' . $ext);
        //$this->load->view($ControllerFilePath . '/common/navbar' . $ext);
        $this->load->view($ControllerFilePath . '/' . $ControllerName . '/v_' . $ControllerName . '_' . $view_file);
        $this->load->view($ControllerFilePath . '/common/footer' . $ext);
        
        return;
    }
    
    
    

    ##################  APP SECURITY METHODS ##############################
    
    
   /* This method is designed to test for a valid logged in session, and log out
    * if one is not found. Redirects the user to login screen if there is an issue. 
    * 
    * Note, by passing in an (optional) paramater, we can also restrict access 
    * to a page by testing the passed param against the logged in user's admin
    * level. In this case, a boolean is returned.
    * 
    * $min_permission is the minimum admin permission a user has to have to
    * view this page (tested against $_SESSION['CrmUserAdminLevel'])
    * 
    * @param string $min_permission The logged in user's admin level has to 
    * exceed this (optional, default = NULL)
    * @return boolean (only if a param is passed)
    * @author Al Elliott
    */
    protected function _is_logged_in($min_permission = NULL) {
        $retval = FALSE;
        $redirect = FALSE;
        $mandatory_session_fields = array
            ('Id', 'FirstName'. 'LastName', 'dID', 'EmailAddress1', 'CrmUserAdminLevel');
        
        //is 'logged_in flag intact & set?
        if ($_SESSION('is_logged_in'))
        {
            //check session data is intact
            foreach ($mandatory_session_fields as $key)
            {
                if ( ! element($_SESSION[$key], $_SESSION, FALSE)) 
                        $redirect = TRUE;
            }
        }
        else $redirect = TRUE;
        
        //Finally, if passed, does the user have permission to view this page?
        if ($_SESSION['CrmUserAdminLevel'] >= $min_permission) $retval = TRUE;
        
        //Redirect, or return boolean
        //if ($redirect) $this->log_out();
        if ($redirect) redirect (site_url('login/log_out'));
        else return $retval;
    }
    
   

    ##################### MANIPULATING DATA ################
    
    
    /* 'Deletes' a record.
     * (To avoid orphaned recods, it only marks the col 'ActiveRecordYN' as 0
     * 
     * @param string, array $id the id of the record to delete
     * @param $redirect a URI in the format of '/seg1/seg2/seg3'
     * @return nothing
     * @author Al Elliott
     * 
     */
    public function delete($id, $redirect = FALSE) {
        //Get redirect
        if ( ! $redirect) $redirect = $_GET['redirect'];
        
        //Make record inactive
        $model = $this->model_name;
        $this->$model->make_inactive($id);
        
        //now redirect (if no GET param passed then just load index
        if ($redirect) redirect(site_url($redirect));
        else $this->index();
        
        return;
    }
    

}

/* End of file Base_Controller.php */
/* Location: ./application/core_classes/Base_Controller.php */