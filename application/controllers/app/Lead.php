<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Lead
 * @author Al Elliott
 * 
 * Opportunity records for contacts
 * 
 */
class Lead extends App_Controller {

    public $model_name = 'M_Leads';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Lead.php */
/* Location: ./application/controllers/app/Lead.php */