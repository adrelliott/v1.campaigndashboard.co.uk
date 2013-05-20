<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Tag
 * @author Al Elliott
 * 
 * A tag (description of a tag, not the assignation of a tag to a contact - 
 * look in TagJoin for that)
 * 
 */
class Tag extends App_Controller {

    public $model_name = 'M_Tags';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Tag.php */
/* Location: ./application/controllers/app/Tag.php */