<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - ContactAction
 * @author Al Elliott
 * 
 * Any action (other than purchases & leads) that we want to store
 * for a contact.
 * 
 * e.g Notes, appointments, tasks, roles, etc, etc
 * 
 */
class ContactAction extends App_Controller {

    public $model_name = 'M_ContactAction';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file ContactAction.php */
/* Location: ./application/controllers/app/ContactAction.php */