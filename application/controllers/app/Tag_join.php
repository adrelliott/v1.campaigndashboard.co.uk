<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Tag_join
 * @author Al Elliott
 * 
 * Table to determine which contacts have a tag attached to them
 * 
 */
class Tag_join extends App_Controller {

    public $model_name = 'M_Tag_joins';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Tag_join.php */
/* Location: ./application/controllers/app/Tag_join.php */