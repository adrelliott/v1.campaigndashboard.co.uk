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
class M_Datasets extends Config_Model {

    //Define vars used throught the process
    public $table_name = 'configDatasets';
    public $order_by = 'dID ASC';   //This is set in CRM_Model. Overwrite here if needs be
    //public $primary_key = 'xxxxxxx'; This is set in CRM_Model. Overwrite here if needs be
    public $cols = array
        (
        'Id' => 'Id', 
        'Name' => 'Name', 
        'Slug' => 'Slug', 
        'Type' => 'Type', 
        'Table' => 'Table', 
        'Model' => '', 
        'ControllerFilePath' => 'Directory', 
        'ControllerName' => 'Controller', 
        'ControllerMethod' => 'Method', 
        'Fields' => '', 
        'dID' => 'Dataowner Id',
        );
    public $table_template = array
        (
            'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" width="100%">',
            'cell_start' => '<td style="text-align:center;background-color:#ddd">',
            'cell_alt_start' => '<td style="text-align:center">',
        );
    
    public function __construct() {
        parent::__construct();
        $this->db->select(array_keys($this->cols));
    }
    
    public function get_all_datasets($dID) {
        if ($dID) $this->db->where('dID', $dID);
        $retval = array();
        $q = $this->get();
        
        //now add a link to each row to edit/delete
        foreach ($q as $key => $array)
        {
            $retval[$key] = $array;
            
            //Now add a link to edit or delete this dataset
            $edit = anchor('config/dataset/view/edit/' . $array['Id'], 'Edit');
            $delete = anchor('config/dataset/delete/index/list/' . $array['Id'], 'Delete');
            $retval[$key]['_::_Action'] = $edit . ' | ' . $delete;
        }
        return $retval;
    }
    
    public function save_dataset($input, $id){
        //set up slug
        $this->load->helper('inflector');
        if (strlen($input['Name']) < 3) $input['Slug'] = underscore('PLEASE RENAME ME');
        else $input['Slug'] = underscore($input['Name']);
        
        //Do the UPDATE or INSERT
        return $this->save($input, $id);
    }
    
    /* return an associative array of all fields with a 'data' dimension of '' 
     *  useful for displaying blank data
     */
    public function get_fields($table_name, $field_values = array()) {
        $field_list = $this->db->list_fields($table_name);
        $retval = array();
        
        //prepare the values
        if (count($field_values))
        {
            //explode by comma - this gives us an array like [0] => 'colname||label'
            $tmp['boom_1'] = explode(',', $field_values);
            
            //now explode by double pipe || - this gives array of 'colname' => 'label'
            foreach ($tmp['boom_1'] as $k => $a)
            {
                $tmp['boom_2'] = explode('||', $a);
                $tmp['results'][$tmp['boom_2'][0]] = $tmp['boom_2'][1];
            }
            
            //Ta daaa! Finished array
            $field_values = $tmp['results'];
        }
        
        //Prepare the array
        foreach ($field_list as $field)
        {
            //Set default values for this array
            $values = array();
            $label = form_input('_::_label[' . $field . ']',element($field, $field_values, ''));
            $used_checked = FALSE;
            
            //Is the field included in this dataset?
            if (array_key_exists($field, $field_values)) $used_checked = TRUE;
            
            //Prepare the field table
            $template = array
            (
                'field_name' => $field,
                'label' => $label,
                'used' => form_checkbox('_::_used[' . $field . ']', $field, $used_checked)
            );
            $retval[] = $template;
        }
        
        return $retval;
    }
    
    public function process_field_table($input = array()) {
        if( ! count($input)) return FALSE;
        
        //$fields_to_process = array('_::_used', '_::_label');
        $retval = array();
        foreach ($input['_::_used'] as $field => $value)
        {
            $label = $input['_::_label'][$field];
            $retval[] = $value . '||' . $label;
        }
        
        //now turn into csv for field
        return implode(',', $retval);
    }
    
   

}

/* End of file m_Datasets.php */
/* Location: ./application/models/config/m_Datasets.php */