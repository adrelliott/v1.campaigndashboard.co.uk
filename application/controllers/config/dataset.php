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
class Dataset extends Config_Controller {
    
    public $model_name = 'm_datasets_config';
    
    public function __construct() {
        parent::__construct();
        $this->load->model('config/m_datasets_config');
    }

    public function index($view_file = 'list', $dID = FALSE) { //Show all datasets for this owner
        //retrive every single dataset, and sort by dID 
        $this->data['datasets']['all_datasets'] = $this->m_datasets_config->get_all_datasets($dID);
        
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
             $this->data['datasets']['record'] = $this->m_datasets_config->get($id);
             
             //is the col 'Table' set yet? (We'll get field list of that table if so)
             $table_name = element('Table', $this->data['datasets']['record'], FALSE);
        }
        else $this->data['datasets']['record'] = array();   //set up the blank data
        
        //Set up the fields table for this dataset
        if ($table_name) 
        {
            $field_list = element('Fields', $this->data['datasets']['record'], array()); 
            $this->data['datasets']['field_list'] = $this->m_datasets_config->get_fields($table_name, $field_list);
        }
        
        //Set up the drop downlists
        $this->data['datasets']['table_list'] = $this->m_datasets_config->get_all_tables();
        $this->data['datasets']['model_list'] = $this->m_datasets_config->get_all_models();
        $this->data['datasets']['controller_list'] = $this->m_datasets_config->get_all_controllers();
                
        //load the view
        $this->_load_view($view_file);
    }
    
    public function add($view_file, $id = 'new') { //adds a new dataset
        $this->load->model('config/m_datasets_config');
        $input = $this->input->post();
        
        //Turn the table into a CSV value for column 'Fields'
        if ($this->input->post('_::_used')) 
            $input['Fields'] = $this->m_datasets_config->process_field_table($input);
        
        //Create or Update the data
        $id = $this->m_datasets_config->save_dataset($input, $id);
        
        //Return user to the page
        if ($id === 'new') $this->session->set_flashdata('message','Update Failed! Try Again.');
        else $this->session->set_flashdata('message','Dataset Updated! (Id is ' . $id .')');
        redirect('config/dataset/view/' . $view_file . '/' . $id, 'refresh');
        
    }
    
   

}

/* End of file Dataset.php */
/* Location: ./application/controllers/app/Dataset.php */