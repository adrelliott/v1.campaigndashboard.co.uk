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

}

/* End of file App_Model.php */
/* Location: ./application/models/XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/App_Model.php */