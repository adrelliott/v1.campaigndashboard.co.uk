<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_b extends Dashboard {

        public $controller_path = '11/';   //set this if its a bespoke
        
        public function __construct()    {
             parent::__construct();
             $this->page_setup['file_path'] = $this->uri->segment(1);
             $this->page_setup['model_path'] = $this->uri->segment(2);
             $this->page_setup['controller_name'] = $this->uri->segment(3);
             $this->page_setup['controller_method'] = $this->uri->segment(4);
        }
        
	public function index()
	{
            echo "<h1>This is the dashboard</h1>";
            $model_path = $this->page_setup['file_path'] . '/' . $this->page_setup['model_path'] . '/' . xxXXXX;
            $this->load->model('app/m_Contacts', 'contacts');
            $q = $this->contacts->get();
            $this->data['datasets']['contacts'] = $q;
            
            print_r($this->data);
            //$this->load->view('welcome_message');
	}
}

/* End of file dashboard_b.php */
/* Location: ./application/controllers/app/11/dashboard_b.php */