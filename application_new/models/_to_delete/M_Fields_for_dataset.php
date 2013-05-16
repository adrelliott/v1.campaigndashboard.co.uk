<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - M_Fields_for_dataset
 * @author Al Elliott
 * Table Name: fields_dataset_join
 * 
 * Description goes here
 * 
 */
class M_Fields_for_dataset extends CRM_Model {

    //Define vars used throught the process
    public $table_name = 'fields_dataset_join';
    //public $ContactId = ''; //This si the ID of the current contact.
    //public $order_by = '';   //FieldName ASC or DESC or RAND
    //public $primary_key = 'xxxxxxx'; This is set in CRM_Model. Overwrite here if needs be
    
    //Define vars used in the scope of this model only:
    public $data = array();    //This is the var that holds returned data
    public $options = array();     //This array holds query options for select (e.g 'Id' => 1)
    public $field_config = array    //The default config for each field used in the app
        (
            'database_name' => '',
            'label' => '',
            'input_id' => '',
            'input_class' => '',
            'extra_html' => '',
            'type' => '',
            'length' => '',
            'options' => array(),
            'default_value' => '',
            'value' => '',
        );

    
    
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_fields($dataset_id = NULL) {
        $retval = array();
        $field_list = array();
        
        $field_list = $this->get_field_list();
        //if id is passed then get all fields that match that dataset_id
        if ($dataset_id === NULL)
        {
            foreach ($field_list as $field => $atts)
            {
                //array_merge($retval[]);
            }
            
        }
        
        //Otherwise, just get alist of all database field with empty attributes
        
        //return as array
    }
    

}

/* End of file M_Fields_for_dataset.php */
/* Location: ./application/models/app/M_Fields_for_dataset.php */