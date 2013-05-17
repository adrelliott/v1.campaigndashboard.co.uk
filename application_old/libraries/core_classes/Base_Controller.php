<?php


THIS CLASS IS DESIGNED OT HOLD 98% OF ALL THE STUFF THAT APP_CONTROLLER AND CONFIG`-CONTROLLER USES.
    
THEN, CONFIG & APP CTROLLERS SNPLY EXTEND THIS ONE






if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Base_Controller
 * @author Al Elliott
 * 
 * Description goes here
 * 
 */
class Base_Controller extends CRM_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        //Code here
    }

}

/* End of file Base_Controller.php */
/* Location: ./application/controllers/app/Base_Controller.php */