<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - TagJoin
 * @author Al Elliott
 * 
 * Table to determine which conacts have a tag attached to them
 * 
 */
class TagJoin extends App_Controller {

    public $model_name = 'M_TagJoins';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file TagJoin.php */
/* Location: ./application/controllers/app/TagJoin.php */