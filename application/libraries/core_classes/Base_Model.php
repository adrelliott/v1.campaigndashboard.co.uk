<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Model - Base_Model
 * @author Al Elliott
 * Table Name: None - table name set at individual model level
 * 
 * Contains the CRUD functions used throughout the app
 * 
 */
class Base_Model extends CI_Model {

    /**
     * The database table to use. This is set at individual model level
     * @var string
     */
    public $table_name = '';
    
    /**
     * Primary key field
     * @var string
     */
    public $primary_key = 'Id';
    
    /**
     * The filter that is used on the primary key. 
     * @var string
     */
    public $primaryFilter = 'intval'; // htmlentities for string keys
    
    /**
     * Order by fields. Default order for this model. Can be overidden in
     * each individual model
     * @var string
     */
    public $order_by = 'Id DESC';
    
    /**
     * The cols to select. This is set in each model but default to just 'Id'
     * @var array
     */
    public $cols = array('Id');
    
    /**
     * the 'where()' condition. This is set in each model but also set in the 
     * constructor method below, so we only look at active records
     * @var array
     */
    public $condition = array();
    
    
    public function __construct() {
        parent::__construct();
    }
    
    
    /**
     * Get one record, based on ID, or get all records. You can pass a single 
     * ID, an array of IDs, or no ID (in which case the  method will return 
     * all records)
     * 
     * If you request a single ID the result will be returned as an associative array:
     * array('id' => 1, 'title' => 'Some title')
     * In all other cases the result wil be returned as an array of arrays
     * array(array('id' => 1, 'title' => 'Some title'), array('id' => 2, 'title' => 'Some other title'))
     * 
     * 
     * @param mixed $id An ID or an array of IDs (optional, default = FALSE)
     * @return array
     * @author Joost van Veen
     */
    public function get ($ids = FALSE){
        
        // Set flag - if we passed a single ID we should return a single record
        $single = $ids == FALSE || is_array($ids) ? FALSE : TRUE;
        
        // Limit results to one or more ids
        if ($ids !== FALSE) {
            
            // $ids should always be an array
            is_array($ids) || $ids = array($ids); 
            
            // Sanitize ids
            $filter = $this->primaryFilter;
            $ids = array_map($filter, $ids); 
            
            $col_name = $this->table_name .'.'.$this->primary_key;
            $this->db->where_in($col_name, $ids);
        }
        
        // Set order by if it was not already set
        count($this->db->ar_orderby) || $this->db->order_by($this->order_by);
        
        // Return results
        $single == FALSE || $this->db->limit(1);
        $method = $single ? 'row_array' : 'result_array';
        
        //ONLY get records that are ACTIVE
        //$condition = ;
        $this->db->where($this->condition);   
        
        //Go get 'em!
        return $this->db->get($this->table_name)->$method();
    }
    
    /**
     * Get records by one or more keys.
     * 
     * @param mixed $key can be a string, in which case the value is in $val. Can also ba a key => value pair array.
     * @param mixed $val The value for a set set $key
     * @param boolean $where_clause This can be where_in, or_where_in, where_not_in, or_where_not_in, etc etc. see  http://ellislab.com/codeigniter/user-guide/database/active_record.html
     * @param boolean $single
     * @return void
     * @author Joost van Veen
     */
    public function get_by ($key, $val = FALSE, $whereclause = NULL, $single = FALSE) {
        
        // Limit results
        if (! is_array($key)) {
            $this->db->where(htmlentities($key), htmlentities($val));
        }
        else {
            $key = array_map('htmlentities', $key); 
            $where_method = $whereclause == NULL ? 'where' : $whereclause;
            $this->db->$where_method($key);
        }
        
        // Return results
        $single == FALSE || $this->db->limit(1);
        $method = $single ? 'row_array' : 'result_array';
        
        //ONLY get records that are ACTIVE
        $condition = $this->table_name . ".ActiveRecordYN = 1";
        $this->db->where($condition);   
        
        return $this->db->get($this->table_name)->$method();
    }
    
     /**
     * Save or update a record.
     * 
     * @param array $data
     * @param mixed $id Optional
     * @return mixed The ID of the saved record
     * @author Joost van Veen & Al Elliott
     */
    public function save($data, $id = 'new') {
        //Get rid of unwanted fields & check submission
        $data = $this->clean_post_data($data);
        
        //Now test id and either INSERT or UPDATE
        if ( $id == 'new' )
        {
            // This is an insert
            $this->db->set($data)->insert($this->table_name);
            $id = $this->db->insert_id();
        }
        else
        {
            // This is an update
            $filter = $this->primaryFilter;
            $this->db->set($data)->where($this->primary_key, $filter($id))->update($this->table_name);
        }
        
        // Return the ID & set success message
        $this->session->set_flashdata('message', 'Record updated!');
        return $id;
    }
    
    public function clean_post_data($data) {
        $retval = array();
        
        //remove any non-db fields (they are prepended with '_::_' )
        foreach ($data as $col => $value )
        {
            if ( ! is_array($value))    //ignore arrays!
            if (substr($col, 0, 4) !== '_::_' OR strtolower($value) === 'submit')
                $retval[$col] = $value;
        }
        
        //Check the input against the cols defined in the model and remove if not
        if (count($this->cols))
        {
            //$retval = elements($this->cols, $retval, FALSE);
            foreach ($retval as $col)
                if ( ! isset($this->cols[$col])) unset($retval[$col]);
        }
        
        return $retval;
    }
    

}

/* End of file Base_Model.php */
/* Location: ./application/core_classes/Base_Model.php */