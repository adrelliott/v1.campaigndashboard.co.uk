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

    public function index() {
        $this->load->view('config/setup');
    }
    
    public function datasets($id = FALSE) {
        //is ID set? then retrieve this dataset for editing
        
        //is post set? then submit as new data?
        
        //neither of these? OK, show a table of 
        $this->load->view('config/setup');
    }

}

/* End of file setup.php */
/* Location: ./application/controllers/setup.php */