<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_Controller extends CI_Controller {
    
     /**
     * General array used to hold all data required by the page
     * @var array
     */
    public $data = array();
    
    /**
     * This is the id of the record being manipulated 
     * (it may also be the Contact Id if the record is in the table contacts)
     * @var string
     */
    public $id = '';
    
    /**
     * This is the contact's Id. May also be the same as $id if dealing just
     * in contacts table.
     * @var string
     */
    public $contact_id = ''; 
    
    /**
     * This is the ID that links each record to their respective owners
     * E.g. Every FC Utd contact record has the dID of 22232
     * @var string
     */
    public $dID = '';
    
    
    function __construct() {
        parent::__construct();
        
        //General set up for this app
        parse_str($_SERVER['QUERY_STRING'], $_GET); //Allow the use of Query Strings
        
        
        //Set up the templating vars so we can load the right view files
        $this->data['page_setup'] = $this->set_up_page_vars();
        /*if ( $this->uri->segment(3) ) $seg_3 = $this->uri->segment(3);
        else $seg_3 = 'index';
        $this->data['page_setup'] = array 
            (
               'ControllerFilePath' => strtolower( $this->uri->segment(1) ),
               'ControllerName' => strtolower( $this->uri->segment(2) ),
               'ControllerMethod' => strtolower( $seg_3 )
            );
        */
        //do a config_dataset query to find out what datasets to load
        //(Not applicable to controllers in the 'config' directory)
        if ($this->data['page_setup']['ControllerFilePath'] !== 'config')
        {
            $this->load->model('config/m_Datasets', 'datasets');
            $this->data['datasets']['config'] = $this->datasets->get_by($this->data['page_setup']);
        }
        
        
       
        //Debug
        if( isset($_GET['debug']) && ! strpos(ENVIRONMENT, 'production') ) $this->output->enable_profiler(TRUE);
        
    }
    
    public function set_up_page_vars() {
        $segments = $this->uri->segment_array();
        $retval = array 
        (
           'ControllerFilePath' => strtolower(element(1, $segments, 'app')),
           'ControllerName' => strtolower(element(2, $segments, 'contact')),
           'ControllerMethod' => strtolower(element(3, $segments, 'index')),
        );
        
        return $retval;
    }
    
    
    public function test() {
           echo "this is test in cofig controler talking";
    }
    
    /**
     * Set up the page config
     * 
     * @param string $page_name The name of the page we are loading
     * 
     * @return array - this is the config values drawn from the database
     * @author Al Elliott
     */
    public function set_up_page($page_name = 'dashboard') {
        $retval = array();
        //Load the config model
        //get the values from the config table
        
        
        return $retval;
    }
    
    protected function _load_view($view_file) {
        //is it modal?
        $ext = '';
        $pos = strpos($view_file, '_modal');
        if ( $pos ) 
        {
            $ext = '_modal';
            $view_file = substr_replace($view_file, '', $pos);
        }       
        
        //is the view file in the 'app' directory? (we store these views differently)
        extract( $this->data['page_setup'] );
        if ( $ControllerFilePath == 'app' ) 
            $ControllerFilePath = $ControllerFilePath . '/' . $this->dID;
        
        //load views
        $this->load->vars( $this->data );
        $this->load->view( $ControllerFilePath . '/common/header' . $ext );
        $this->load->view( $ControllerFilePath . '/common/navbar' . $ext );
        $this->load->view( $ControllerFilePath . '/' . $ControllerName . '/v_' . $ControllerName . '_' . $view_file );
        $this->load->view( $ControllerFilePath . '/common/footer' . $ext );
    }
    
    public function check_permissions($min_admin_level = 3) {
        //firstly, check we are still logged in
        
        //Now check that the user's admin level equals, or exceeds that passed
        
        //if not, either log in again, or go back to error page
        
        //if so, then carry on
    }
   
}

/* End of file CRM_Controller.php */
/* Location: ./application/libraries/core_classes/CRM_Controller.php */