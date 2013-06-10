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
class M_Datasets_config extends Config_Model {

    //Define vars used throught the process
    public $table_name = 'config_datasets';
    public $order_by = 'Name ASC';   //This is set in CRM_Model. Overwrite here if needs be
    //public $primary_key = 'xxxxxxx'; This is set in CRM_Model. Overwrite here if needs be
    public $cols = array
        (
            'Id' => 'Id',
            'ControllerFilePath' => 'Directory', 
            'ControllerName' => 'Controller', 
            'ControllerMethod' => 'Method', 
            'Table' => 'Table', 
            'Model' => 'Model', 
            'Method' => 'Method', 
            'Params' => 'params',  
            'Name' => '', 
            'Slug' => 'Slug', 
            'Type' => 'Type', 
            'Fields' => '', 
            'ActiveRecordYN' => 'Active?',
            'dID' => 'Dataowner Id',
        );
    
    public $model_names = array
        (
            'M_Broadcasts', 'M_Campaigns', 'M_Comms', 'M_ContactActions', 'M_Contacts', 'M_Datasets', 'M_Leads', 'M_Links', 'M_OrderItems', 'M_Orders', 'M_Products', 'M_QuickActions', 'M_Relationships', 'M_Steps', 'M_TagJoins', 'M_Tags', 'M_Templates', 'M_Vehicles'
        );
    
    public $controller_names = array
        (
            'Broadcast', 'Campaign', 'Comm', 'ContactAction', 'Contact', 'Dataset', 'Lead', 'Link', 'OrderItem', 'Order', 'Product', 'QuickAction', 'Relationship', 'Step', 'TagJoin', 'Tag', 'Template', 'Vehicle'
        );
    
    //public $table_names = array();
    
    public $table_template = array
        (
            'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable" width="100%">',
            'cell_start' => '<td style="text-align:center;background-color:#ddd">',
            'cell_alt_start' => '<td style="text-align:center">',
        );
    
    public function __construct() {
        parent::__construct();
        
    }
    
    
    public function get_all_datasets($dID = NULL) {
        if ($dID) $this->db->where('dID', $dID);
        if ( ! isset($_GET['show_deleted']))
        {
            $this->condition = array_merge(
                $this->condition, 
                $this->active_records_only
                );
        }
        $retval = array();
        $q = $this->get();
        
        //now add a link to each row to edit/delete
        foreach ($q as $key => $array)
        {
            $retval[$key] = $array;
            
            //Now add a link to edit or delete this dataset
            $edit = anchor('config/dataset/view/edit/' . $array['Id'], 'Edit');
            $clone = anchor('config/dataset/view/edit/' . $array['Id'] .'?clone=new', 'Clone');
            $delete = anchor('config/dataset/delete/' . $array['Id'] . '?redirect=' . uri_string(), 'Delete');
            $retval[$key]['_::_Action'] = $edit . ' | ' . $delete. ' | ' . $clone;
        }
        return $retval;
    }
    
    public function save_dataset($input, $id){
        $input['Table'] = strtolower(substr($input['Model'], 2));
        //set up slug
        $this->load->helper('inflector');
        
        //Create from elements of the record
        //$slug = $input['ControllerFilePath'] . '_';
        //$slug .= $input['ControllerName'] . '_';
        //$slug .= $input['ControllerMethod'] . '_';
        $slug = $input['Table'] . '_';
        $slug .= $input['Method'];
        
        //Does this name exists?
        //$unique = count($this->get_by(array('Slug' => $slug, 'dID' => $input['dID'])));
        //if ($unique) $slug = $slug . '_' . $unique;
        $input['Slug'] = $slug;
        
        //Do the UPDATE or INSERT
        return $this->save($input, $id);
    }
    
    public function get_all_tables($assoc = TRUE) {
        $retval = array();
        //get all tables
        $table_names = $this->db->list_tables();
        
        //now make them into assoc
        //i.e. a list turns into 'contacts' => 'contacts'
        if ($assoc)
            foreach ($table_names as $table) $retval[$table] = $table;
        else $retval = $table_names;
    
        return $retval;
    }
    
    public function get_all_models() {
        $retval = array();
        $list = $this->model_names;
        //Make the list into assoc
        //i.e. a list turns into 'contacts' => 'contacts'
        foreach ($list as $item) $retval[$item] = $item;
    
        return $retval;
    }
    
    public function get_all_controllers() {
        $retval = array();
        $list = $this->controller_names;
        //Make the list into assoc
        //i.e. a list turns into 'contacts' => 'contacts'
        foreach ($list as $item) 
        {
            $item = strtolower ($item);
            $retval[$item] = $item;
        }
        return $retval;
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