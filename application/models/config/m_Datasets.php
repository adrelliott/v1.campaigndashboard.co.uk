<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - m_Setup
 * @author Al Elliott
 * Table Name: config_datasets
 * 
 * Description goes here
 * 
 */
class M_Datasets extends CRM_Model {

    //Define vars used throught the process
    public $table_name = 'config_datasets';
    public $order_by = '';   //FieldName ASC or DESC or RAND
    //public $primary_key = 'xxxxxxx'; This is set in CRM_Model. Overwrite here if needs be
    //
    //Define vars used in the scope of this model only:
    var $q = array();    //This is the var that holds returned data
    var $options = array();     //This array holds query options for select (e.g 'Id' => 1)

    public function __construct() {
        parent::__construct();
    }

}

/* End of file m_Datasets.php */
/* Location: ./application/models/config/m_Datasets.php */