<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - Campaign
 * @author Al Elliott
 * 
 */
class Campaign extends App_Controller {

    public $model_name = 'M_Campaigns';

    public function __construct() {
        parent::__construct();
    }

}

/* End of file Campaign.php */
/* Location: ./application/controllers/app/Campaign.php */