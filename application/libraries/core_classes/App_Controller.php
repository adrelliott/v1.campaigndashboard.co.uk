<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - App_Controller
 * @author Al Elliott
 * 
 * Description goes here
 * 
 */
class App_Controller extends Base_Controller {
    
    public $model_name = '';

    public function __construct() {
        parent::__construct();
        //Extract the view_setup array to allow us to use vars here
        extract($this->data['view_setup']);
    }

    public function index($view_file = 'list', $id = FALSE) {
        //retrive datasets for this view 
        $this->load->model('app/m_datasets');
        $this->data['datasets_config'] = $this->m_datasets->fetch_datasets();
        
        //Now get data using this dataset config
        $this->data['datasets'] = $this->m_datasets->do_dataset_query();
        
        //show in a table (with edit | delete )
        $this->_load_view($view_file);
    }
    
    public function view($view_file = 'edit', $id = 'new', $contact_id = NULL) {
        $this->id = $id;
        $this->contact_id = $contact_id;
        if ($if === 'new') 
            $this->data['display_none'] = 'class="display_none';
        
        //retrive datasets for this view 
        $this->load->model('app/m_datasets');
        $this->data['datasets_config'] = $this->m_datasets->fetch_datasets();
        
        //Now get data using this dataset config
        $this->data['datasets'] = $this->m_datasets->do_dataset_query();
        
        //show in a table (with edit | delete )
        $this->_load_view($view_file);
        
        //print_array($this->data);
       
    }
    
    public function add($view_file, $id = 'new', $contact_id = NULL) {
        //Set vars
        if (count($this->input_data)) $input = $this->input_data;
        else $input = $this->input->post();
        extract($this->data['view_setup']);
        $url = site_url($ControllerFilePath . '/' . $ControllerName . '/view/' . $view_file . '/' . $id . '/' . $contact_id);
        
        //ensure that the datawoner id is included in the array to be Inserted/updated
        $input['dID'] = $this->dID;
        
        //Insert or Update this record
        $model = $this->model_name;
        $this->load->model('app/' . $model);
        $id = $this->$model->save($input, $id);
        
         //Have we set any client-specific methods to run?
        $method_name = $this->dID . '_' . $ControllerName . '_add';
        if (method_exists($this, $method_name)) $this->$method_name($input, $rID);

        //Is it a redirect or an Ajax re-load?
        if ($this->input->is_ajax_request ()) 
            {
                $response = array ('success' => true,);

            if ($id === 'new') $response['redirect'] = $url;

            $this->output->set_content_type('application/json');
            $this->output->set_output(json_encode($response));
            return;
        }
        else redirect($url);
    }
    
    public function append_data($field_name, $view_file, $id = 'new', $contact_id = NULL) {
        //Set up vars
        $this->input_data = $this->input->post();
        $extra_info = "\n:::: On " . date('d-m-Y H:i') . ', ' . 
                    $this->session->userdata('FirstName') . ' ' . 
                    $this->session->userdata('LastName') . " wrote:::: \n";
        $field_data = element($field_name, $this->input_data, FALSE);
        
        if ($field_data) $this->input_data[$field_name] = $extra_info . $field_data;
        
        $this->add($view_file, $id, $contact_id);
    }


}

/* End of file App_Controller.php */
/* Location: ./application/core_classes/App_Controller.php */