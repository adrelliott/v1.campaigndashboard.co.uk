<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_NextSteps
 * @author Al Elliott
 * Table Name: nextSteps
 * 
 * Description goes here
 * 
 */
class M_NextSteps extends App_Model {

    //Define vars used throught the process
    public $table_name = 'next_steps';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_NextSteps.php */
/* Location: ./application/models/app/M_NextSteps.php */