<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - App_Model
 * @author Al Elliott
 * Table Name: XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
 * 
 * Description goes here
 * 
 */
class App_Model extends Base_Model {

    public $table_name = '';
    public $condition = array();
    
    public function __construct() {
        parent::__construct();
        //Set up query to always get the active records
        $this->condition = array_merge(
                $this->condition, 
                array
                    (
                        $this->table_name . '.ActiveRecordYN' => 1,
                        $this->table_name . '.dID' => $this->dID,
                    )
                );
    }
    
    
    public function get_record() {
        return $this->get($this->id);
    }
    
    public function get_records_for_contact() {
        $this->db->where('ContactId', $this->contact_id);
        return $this->get();
    }

}

/* End of file App_Model.php */
/* Location: ./application/models/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/App_Model.php */