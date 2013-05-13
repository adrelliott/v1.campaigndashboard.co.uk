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
    
    public function datasets($view_file = 'edit_datasets', $id = FALSE, $contact_id = FALSE) {
        //is ID set? then retrieve this dataset for editing
        
        //is post set? then submit as new data?
        
        //neither of these? OK, show a table of 
        
        $this->_load_view($view_file);
    }
    
    

}

/* End of file setup.php */
/* Location: ./application/controllers/config/setup.php */