<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - setup
 * @author Al Elliott
 * 
 * Description goes here
 * 
 */
class Setup extends CRM_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index($view_file = 'index') {
        $this->_load_view($view_file);
    }
    
    public function datasets($view_file = 'edit_datasets', $dataset_id = FALSE, $contact_id = FALSE) {
        //Set up
        $q = array();   //This holds the query
        $this->load->model('config/m_Datasets', 'datasets');
        
        //Do we have $dataset_id? If so, we're retrieving or updating a record
        
            //Do we have post data? if so, we're updating
        
        
        //Do we have POST 
        
        
        
        
        $this->data['datasets']['record'] = $this->datasets->empty_data();
        //is ID set? then retrieve this dataset for editing
        if ( $id )
        {
            $q = $this->datasets->get($id);
            
            //how do we store the config for eahc field???????
            if ( $q ) $this->data['datasets']['record'] = $q;
            $this->load->vars($this->data['datasets']['record']);
        }
        elseif ( $this->input->post() ) 
        {
            //submit data
            $r = $this->datasets->save( $this->clean_post() );
            $this->session->set_flashdata('message','Dataset Updated!');
            redirect('config/setup/datasets/' . $id,'refresh');
        }
        
        
        $this->_load_view($view_file);
    }
    
    

}

/* End of file setup.php */
/* Location: ./application/controllers/config/setup.php */