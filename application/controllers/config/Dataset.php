<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Datasets
 * @author Al Elliott
 * 
 * CRUD of Datasets
 * 
 */
class Dataset extends CRM_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('config/M_Datasets');
    }

    public function index($view_file = 'list', $dID = FALSE) { //Show all datasets for this owner
        //retrive every single dataset, and sort by dID 
        $this->data['datasets']['all_datasets'] = $this->M_Datasets->get_all_datasets($dID);
        
        //show in a table (with edit | delete )
        $this->_load_view($view_file);
    }
    
    public function view($view_file, $id = 'new') { //Edit a dataset, or show empty form
        $this->id = $id;
        $table_name = FALSE;
        $field_list = array();
        
        if ($id !== 'new')
        {
            //retrieve the dataset info
             $this->data['datasets']['record'] = $this->M_Datasets->get($id);
             
             //is the col 'Table' set yet? (We'll get field list of that table if so)
             $table_name = element('Table', $this->data['datasets']['record'], FALSE);
        }
        else $this->data['datasets']['record'] = array();   //set up the blank data
        
        //Set up the fields table for this dataset
        if ($table_name) 
        {
            $field_list = element('Fields', $this->data['datasets']['record'], array()); 
            $this->data['datasets']['field_list'] = $this->M_Datasets->get_fields($table_name, $field_list);
        }
                
        //load the view
        $this->_load_view($view_file);
    }
    
    public function add($view_file, $id = 'new') { //adds a new dataset
        $this->load->model('config/M_Datasets');
        $input = $this->input->post();
        
        //Turn the table into a CSV value for column 'Fields'
        if ($this->input->post('_::_used')) 
            $input['Fields'] = $this->M_Datasets->process_field_table($input);
        
        //Create or Update the data
        $id = $this->M_Datasets->save_dataset($input, $id);
        
        //Return user to the page
        if ($id === 'new') $this->session->set_flashdata('message','Update Failed! Try Again.');
        else $this->session->set_flashdata('message','Dataset Updated! (Id is ' . $id .')');
        redirect('config/dataset/view/' . $view_file . '/' . $id, 'refresh');
        
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
    public function delete($method_name, $view_file, $record_id = array(), $current_id = NULL) {
        $message = 'Success! Records Deleted';
        
        $result = $this->M_Datasets->make_inactive($record_id);
        //put some error reporting in here
        
        $this->session->set_flashdata('message', $message);
        
        redirect('config/dataset/' . $method_name . '/' . $view_file . '/' . $current_id);
    }

}

/* End of file Dataset.php */
/* Location: ./application/controllers/app/Dataset.php */