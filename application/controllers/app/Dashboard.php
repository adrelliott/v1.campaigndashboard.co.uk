<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Dashboard
 * @author Al Elliott
 * 
 * Dashboard for the application
 * 
 */
class Dashboard extends App_Controller {

    public $model_name = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
    public function __construct() {
        parent::__construct();
    }
    
    function index() {
        echo "hello, im dashboard";
    }
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/app/Dashboard.php */