<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - User
 * @author Al Elliott
 * 
 * CRUD of Users
 * 
 */
class User extends Config_Controller {
    
    public $model_name = 'M_Users';
    
    public function __construct() {
        parent::__construct();
        $this->load->model('config/M_Users');
    }

    public function index($view_file = 'list', $dID = FALSE) { //Show all datasets for this owner
        //retrive every single dataset, and sort by dID 
        $this->data['datasets']['all_users'] = $this->M_Users->get_all_users($dID);
        
        //show in a table (with edit | delete )
        $this->_load_view($view_file);
    }
    
    public function view($view_file, $id = 'new') { //Edit a dataset, or show empty form
        $this->id = $id;
        
        if ($id !== 'new')
        {
            //retrieve the user info
             $this->data['datasets']['record'] = $this->M_Users->get($id);
             
        }
        else $this->data['datasets']['record'] = array();   //set up the blank data
        
        //load the view
        $this->_load_view($view_file);
    }
    
    public function add($view_file, $id = 'new') { //adds a new dataset
        //Create or Update the data
        //print_array($this->input->post());
        $id = $this->M_Users->save($this->input->post(), $id);
        
        //Return user to the page
        if ($id === 'new') $this->session->set_flashdata('message','Update Failed! Try Again.');
        else $this->session->set_flashdata('message','Dataset Updated! (Id is ' . $id .')');
        redirect('config/user/view/' . $view_file . '/' . $id, 'refresh');
        
    }
    
    
    
    /**
    * Delete function
    * @author Al Elliott
    * 
    * Doesnt actually delete, just sets field 'ActiveRecordYN' to 0
    * 
    * @param $record_id (This is the id of the record to be deleted)
     * @param $current_id (if this is NOT passed then redirect to index()
     * But, if this is passed, along wiht a view_path, then redirect to that
     * path siing that id.
     * 
     * e.g. view_path = 'app_contact_view_edit  
    * 
    */
    /*public function delete($method_name, $view_file, $record_id = array(), $current_id = NULL) {
        $message = 'Success! Records Deleted';
        
        $result = $this->M_Users->make_inactive($record_id);
        //put some error reporting in here
        
        $this->session->set_flashdata('message', $message);
        
        redirect('config/users/' . $method_name . '/' . $view_file . '/' . $current_id);
    }
*/
}

/* End of file User.php */
/* Location: ./application/controllers/config/User.php */