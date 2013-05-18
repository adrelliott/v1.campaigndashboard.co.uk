<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - Config_Model
 * @author Al Elliott
 * Table Name: Nne
 * 
 * Description goes here
 * 
 */
class Config_Model extends Base_Model {

    public $active_records_only = '';
    
    public function __construct() {
        parent::__construct();
        
        //Set up cols to be retrieved
        $this->db->select(array_keys($this->cols));
        
        //Set up condition to restrict to just active records
        $this->active_records_only = array
            (
                $this->table_name . '.ActiveRecordYN' => 1
            );
        
    }

}

/* End of file Config_Model.php */
/* Location: ./application/core_classes/Config_Model.php */