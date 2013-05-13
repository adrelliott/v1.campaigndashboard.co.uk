<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CRM_Controller {

    public function __construct()    {
         parent::__construct();

    }

    public function index($view_file = 'index') {
        $this->load->model('app/m_Contacts', 'contacts');
        $q = $this->contacts->get();
        $this->_load_view($view_file);
        
    }
    
    
}

/* End of file dashboard.php */
/* Location: ./application/controllers/app/dashboard.php */