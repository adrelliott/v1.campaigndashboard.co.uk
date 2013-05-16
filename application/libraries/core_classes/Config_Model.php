<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Config_Model extends CI_Model {
    
     /**
     * The database table to use.
     * @var string
     */
    public $table_name = '';
    
    /**
     * Primary key field
     * @var string
     */
    public $primary_key = 'Id';
    
    /**
     * The filter that is used on the primary key. Since most primary keys are 
     * autoincrement integers, this defaults to intval. On non-integers, you would 
     * typically use something like xss_clean of htmlentities.
     * @var string
     */
    public $primaryFilter = 'intval'; // htmlentities for string keys
    
    /**
     * Order by fields. Default order for this model.
     * @var string
     */
    public $order_by = 'Id DESC';
    
    function __construct() {
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
        
        //ONLY get records that are ACTIVE, and belong to this user
        $condition = $this->table_name . ".ActiveRecordYN = 1";
        $this->db->where($condition);   
        
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
        
        //ONLY get records that are ACTIVE, and belong to this user
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
        if ( $id == 'new' ) {
            
            // This is an insert
            $this->db->set($data)->insert($this->table_name);
            $id = $this->db->insert_id();
        }
        else {
            
            // This is an update
            $filter = $this->primaryFilter;
            $this->db->set($data)->where($this->primary_key, $filter($id))->update($this->table_name);
        }
        // Return the ID
        return $id;
    }
    
    public function make_inactive($ids) {
        if ( ! $ids ) return FALSE;
        
        //Turn single id into an array
        $ids = ! is_array($ids) ? array($ids) : $ids;
        $r = array();
        
        //Cycle through each one in the array and set the 'ActiveRecordYN' field to 0
        foreach ( $ids as $id ) 
        {
            $this->db->where('Id', $id);
            $r[$id] = $this->db->update($this->table_name, array('ActiveRecordYN' => 0));
        }
        
        return $r;
    }
    
    
    public function clean_post_data($data) {
        $retval = array();
        
        //remove any non-db fields (they are prepended with '_::_'
        foreach ($data as $col => $value )
        {
            if (substr($col, 0, 4) !== '_::_')
                    $retval[$col] = $value;
        }
        
        //maybe put some verification here that we're only going to accept data
        //that matches field names from the database?
        
        return $retval;
    }
    
    
    
    
    
    //================================= tested up to here ==========================/
    
     /**
     * Get one or more records as a key=>value pair array.
     *
     * @param string $key_field The field that holds the key
     * @param string $value_field The field that holds the value
     * @param mixed $id An ID or an array of IDs (optional, default = FALSE)
     * @uses get
     * @return array
     * @author Joost van Veen
     */
    public function get_key_value ($key_field, $value_field, $ids = FALSE){
        
        // Get records
        $this->db->select($key_field . ', ' . $value_field);
        $result = $this->get($ids);
        
        // Turn results into key=>value pair array.
        $data = array();
        if (count($result) > 0) {
            
            if ($ids != FALSE && !is_array($ids)) {
                $result = array($result);
            }
            
            foreach ($result as $row) {
                $data[$row[$key_field]] = $row[$value_field];
            }
        }
        
        return $data;
    }
    
    /**
     * Return records as an associative array, where the key is the value of the 
     * first key for that record. Typical return array:
     * $return[18] = array(18 => array('id' => 18,'title' => 'Example record')
     * 
     * @param integer $id An ID or an array of IDs (optional, default = 0)
     * @uses get
     * @return array
     * @author Joost van Veen
     */
    public function get_assoc ($ids = FALSE){
        // Get records
        $result = $this->get($ids);
        
        // Turn results into an associative array.
        if ($ids != FALSE && !is_array($ids)) {
            $result = array($result);
        }
        $data = $this->to_assoc($result);
        
        return $data;
    }
    
    /**
     * Turn a multidimensional array into an associative array, where the index 
     * equals the value of the first index. 
     * 
     * Example output:
     * array(0 => array('pag_id' => 23, 'pag_title' => 'foo'))
     * becomes
     * array(23 => array('pag_id' => 23, 'pag_title' => 'foo'))
     * @param $array
     * @return array
     * @author Joost van Veen
     */
    public function to_assoc($result = array()){
        
        $data = array();
        if (count($result) > 0) {
            
            foreach ($result as $row) {
                $tmp = array_values(array_slice($row, 0, 1));
                $data[$tmp[0]] = $row;
            }
        }  

        return $data;
    }
    
   
    /**
     * Delete one or more records by ID
     * @param mixed $ids
     * @return void
     * @author Joost van Veen
     */
    public function delete_deprecated($ids){
        
        $filter = $this->primaryFilter; 
        $ids = ! is_array($ids) ? array($ids) : $ids;
        
        foreach ($ids as $id) {
            $id = $filter($id);
            if ($id) {
                //$this->db->where('_dID', $this->dID);
                $this->db->where($this->primary_key, $id)->limit(1)->delete($this->table_name);
            }
        }
    }
    
    
    
    public function make_inactive_deprecated($ids = FALSE, $id_field_name) {
        if ( ! $ids ) return FALSE;
        
        //Turn single id into an array
        $ids = ! is_array($ids) ? array($ids) : $ids;
        $data = array();
        
        foreach ( $ids as $id ) 
        {
            //do a check to ensure that this record belongs to this client
            $this->db->select('_dID');
            $dID = $this->get_by($id_field_name, $id, FALSE, TRUE);
            if( $dID['_dID'] && $dID['_dID'] == DATAOWNER_ID )
            {
                //Build the UPDATE query
                $data[$id] = array($id_field_name => $id,'_ActiveRecordYN' => 0);
                //Do the query
                $data[$id]['result'] = $this->save($data[$id], $id);
            }                
            else $data[$id]['result'] = 'You do not have permission to delete this record';
        }
        
        return $data;
    }

    /**
     * Delete one or more records by another key than the ID
     * @param string $key
     * @param mixed $value
     * @return void
     * @author Joost van Veen
     */
    public function delete_by($key, $value){
        
        if (empty($key)) {
            return FALSE;
        }
        
        $this->db->where(htmlentities($key), htmlentities($value))->delete($this->table_name);
    }
    
    
    /* ======================== All bespoke model methods for this app =========*/
    
    public function get_all_records($where = NULL) {
        //get all records. $where set up in dataset['model_params']
        if ($where != NULL) { $this->db->where($where); }
        return $this->get();
    }
    
    public function get_all_contacts_records($where = NULL) {
        //get all records. $where set up in dataset['model_params']
        if ($where != NULL) { $this->db->where($where); }
        $this->db->where(
                $this->contactId_fieldname, 
                $this->current_ContactId
                );
        return $this->get();
    }
    
    public function get_email_fields($recipients, $fields, $permission_field = '_OptinEmailYN') {
        //Do the query
        $this->db->where($permission_field . ' !=', 0);
        $this->db->where_in('Id', $recipients);
        $this->db->select($fields);
        $results = $this->get();
        //print_array($results, 0, 'results from query of contacts');
        //
        //now add the table name back to the results ready for PostageApp
        $retval = array();
        foreach ($results as $key => $array)
        {
            if ( isset($array['Email']) && $array['Email'] )
            {
                $key = $array['Email'];
                foreach ($array as $k => $v)
                {
                   //Need to send all data as lowercase to PostageApp
                    $key = strtolower($key);
                   $table_name = strtolower($this->table_name);
                   $k = strtolower($k);
                    $retval[$key]["$table_name.$k"] = $v;
                }
            }            
        }
                
        return $retval;
    }
    
    
   
    
     public function get_single_record($rID, $where = NULL) {
        //get the record with rID. $where set up in dataset['model_params']
        if ($where != NULL) { $this->db->where($where); }
        return $this->get($rID);
        
    }
    
    
    /**
     * Get records joined on Contact.Id
     * @param array (this is the where condition as set in the config file) 
     * @return void
     * @author Al Elliott
     */
     public function joinon_Contact($where = NULL) {
        //get all records $where joined on contact (ie get fields from contact table too)
        if ($where != NULL) { $this->db->where($where); }        
        $this->db->join(
                'contact', 
                'contact.Id = ' . $this->table_name. '.' . $this->contactId_fieldname, 
                'left outer'
                );        
        return $this->get();
    } 
    
    
    
    
    
    
    
    
    
    
}

/* End of file Config_Model.php */
/* Location: ./application/libraries/core_classes/Config_Model.php */