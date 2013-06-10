<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Template
 * @author Al Elliott
 * 
 * HTML email template
 * 
 */
class Template extends App_Controller {

    public $model_name = 'M_Templates';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Template.php */
/* Location: ./application/controllers/app/Template.php */