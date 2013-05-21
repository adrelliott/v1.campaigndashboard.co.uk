<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_TagJoins
 * @author Al Elliott
 * Table Name: tag_joins
 * 
 */
class M_Tag_joins extends App_Model {

    //Define vars used throught the process
    public $table_name = 'tag_joins';

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
    }

}

/* End of file M_Tag_joins.php */
/* Location: ./application/models/app/M_Tag_joins.php */