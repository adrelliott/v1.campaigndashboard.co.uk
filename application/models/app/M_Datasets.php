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
class M_Datasets extends App_Model {

    //Define vars used throught the process
    public $table_name = 'configDatasets';
    public $cols = array
        (
            'Id' => 'Id', 
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
            'ActiveRecordYN' => 'Active?',
            'dID' => 'Dataowner Id',
        );

    //public $order_by = '';   //This is set in CRM_Model. Overwrite here 
    //public $primary_key = ''; //This is set in CRM_Model. Overwrite here


    public function __construct() {
        parent::__construct();
        /*$this->condition = array_merge(
                $this->condition, 
                array($this->table_name . '.ActiveRecordYN' => 1));*/
    }
    
    public function fetch_datasets() {  
        //???????? if we use this in other contexts, we can move to base_controller???
        //first set up vars
        $retval = array();
        $conditions = $this->data['view_setup'];
        $conditions['dID'] = $this->dID;
        
        $q = $this->get_by($conditions);
        $q = $this->to_assoc($q, 'Slug');
        
        return $q;
        //now do each query
    }
    
    public function do_dataset_query() {
        $retval = array();
        
        //now go through each dataset_config and perform the query
        foreach ($this->data['datasets_config'] as $dataset => $attr)
        {
            //load the model for this dataset
            $model_url = $attr['ControllerFilePath'] . '/' . $attr['Model'];
            $this->load->model($model_url, 'dataset_model');
            
            //set up the fields to retrieve
            $field_array = $this->convert_fieldlist($attr['Fields']);
            if ($field_array) $this->db->select(array_keys($field_array));
            
            //Set up this query (and some defaults)
            $model_name = element('Model', $attr, 'M_Contacts');
            $model_url = element('ControllerFilePath', $attr, 'app');
            $model_url .= '/' . element('Model', $attr, 'M_Contacts');
            $method_name = element('Method', $attr, 'get');
            $method_params = element('Params', $attr, FALSE);
            
            //Have we got any placeholders in the parameter?
            if ($method_params)
            {
                $method_params = str_replace(
                        '%%Id%%', 
                        $this->id, 
                        $method_params);
                $method_params = str_replace(
                        '%%ContactId%%', 
                        $this->contact_id,
                        $method_params);
            }
            
            //Do query
            $this->load->model($model_url, $model_name);
            $retval[$dataset] = $this->$model_name->$method_name($method_params);
            
        }
        
        return $retval;
    }
    
    public function convert_fieldlist($field_list = NULL, $direction = 'to_array'){
        if( ! $field_list) return FALSE;
        $tmp = array();
        $retval = array();
        
        if ($direction === 'to_array')
        {
            //explode by comma
            $tmp['boom_1'] = explode(',', $field_list);

            //now explode by double pipe '||'
            foreach ($tmp['boom_1'] as $k => $v)
            {
                $tmp['boom_2'] = explode('||', $v);
                $retval[$tmp['boom_2'][0]] = $tmp['boom_2'][1];
            }
        }
        
        //???????????now add a reverse function here
        
        return $retval;
    }

}

/* End of file M_Datasets.php */
/* Location: ./application/models/app/M_Datasets.php */