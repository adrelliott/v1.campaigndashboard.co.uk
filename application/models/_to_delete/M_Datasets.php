<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Datasets
 * @author Al Elliott
 * Table Name: configDatasets
 * 
 * Description goes here
 * 
 */
class M_Datasets extends Base_Model {

    //Define vars used throught the process
    public $table_name = 'configDatasets';
    public $cols = array
        (
            'Id' => 'Id', 
            'Name' => 'Name', 
            'Slug' => 'Slug', 
            'Type' => 'Type', 
            'Table' => 'Table', 
            'Model' => '', 
            'Method' => '', 
            'Params' => '', 
            'ControllerFilePath' => 'Directory', 
            'ControllerName' => 'Controller', 
            'ControllerMethod' => 'Method', 
            'Fields' => '', 
            'dID' => 'Dataowner Id',
        );

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here
    //Define vars used in the scope of this model only:

    public function __construct() {
        parent::__construct();
        
        //Set up cols to be retrieved
        $this->db->select(array_keys($this->cols));
    }

}

/* End of file M_Datasets.php */
/* Location: ./application/models/????????????????????/M_Datasets.php */