<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Contact_action
 * @author Al Elliott
 * 
 * Any action (other than purchases & leads) that we want to store
 * for a contact.
 * 
 * e.g Notes, appointments, tasks, roles, etc, etc
 * 
 */
class Contact_action extends App_Controller {

    public $model_name = 'M_Contact_actions';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Contact_action.php */
/* Location: ./application/controllers/app/Contact_action.php */