<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CRM_Controller {

	public $controller_name = 'dashboard';
        
	public function index()
	{
            echo "<h1>This is the dashboard</h1>";
            $this->load->model('app/m_Contacts', 'contacts');
            $q = $this->contacts->get();
            $this->data['datasets']['contacts'] = $q;
            
            print_r($this->data);
            //$this->load->view('welcome_message');
	}
}

/* End of file dashboard.php */
/* Location: ./application/controllers/app/dashboard.php */