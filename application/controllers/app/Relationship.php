<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Relationship
 * @author Al Elliott
 * 
 * Records a relationship between contacts
 * 
 */
class Relationship extends App_Controller {

    public $model_name = 'M_Relationships';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Relationship.php */
/* Location: ./application/controllers/app/Relationship.php */