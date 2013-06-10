<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Contact
 * @author Al Elliott
 * 
 * Deals with all contacts
 * 
 */
class Contact extends App_Controller {

    public $model_name = 'M_Contacts';
    
    public function __construct() {
        parent::__construct();
    }

}

/* End of file Contact.php */
/* Location: ./application/controllers/????????????/Contact.php */