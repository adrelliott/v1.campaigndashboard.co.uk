<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Link
 * @author Al Elliott
 * 
 * Stores all URLs for link tracking module
 * 
 */
class Link extends App_Controller {

    public $model_name = 'M_Links';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Link.php */
/* Location: ./application/controllers/app/Link.php */