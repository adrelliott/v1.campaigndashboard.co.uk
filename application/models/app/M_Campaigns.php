<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Campaigns
 * @author Al Elliott
 * Table Name: campaigns
 * 
 * Description goes here
 * 
 */
class M_Campaigns extends App_Model {

    //Define vars used throught the process
    private $table_name = 'campaigns';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Campaigns.php */
/* Location: ./application/models/app/M_Campaigns.php */