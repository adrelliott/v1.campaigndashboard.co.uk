<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CRM_Controller extends CI_Controller {
    
     /**
     * General array used to hold all data required by the page
     * @var array
     */
    public $data = array();
    
    /**
     * DESCRIPTION
     * @var string
     */
    public $var2 = 'Id';
    
    /**
     * DESCRIPTION
     * @var string
     */
    public $var3 = 'intval'; // htmlentities for string keys
    
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
        define('DATAOWNER_ID', 11);
        
        //Set up the page
        $page_config = $this->set_up_page();    //is this passed as a URL Parameter? Should this have its own fucntion?
        
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
   
}

/* End of file CRM_Controller.php */
/* Location: ./application/libraries/core_classes/CRM_Controller.php */