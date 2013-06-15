<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - ajax
 * @author Al Elliott
 * 
 * This class listens for AJAX reqwuests and uses the library Datatables to 
 * output them
 * 
 */
class Ajax extends Base_Controller {

    public $fields = '';
    public $field_array = array();
    private $_allowed_fields = array (
        'Id', 'FirstName', 'LastName', 'dID'
    );

    public function __construct() {
        parent::__construct();
        $this->load->library('Datatables');
    }
    
    public function get_table($table) {
        $fields = $this->_clean_get();
        $this->datatables->select($fields);
        $this->datatables->from($table);
        echo $this->datatables->generate();
    }
    
    public function get_list($table) {
        $fields = $this->_clean_get();
        $this->load->model('app/m_' . $table, 'dropdown');
        $results = $this->dropdown->ajax_get($fields);
        
        return $results;
    }
    
    //function autocomplete($table, $parenthesised = FALSE) {
    function autocomplete($table, $value_field) {
        $results = $this->get_list($table);
        $value = '';
        $list = array();
        //print_array($results);
        
        foreach ($results as $row => $array)
        {
            $value = $array[$value_field];
            $label = '';
            foreach ($array as $k => $v)
            {
                if ($k !== $value_field) $label .= $v . ' ';
            }
            
            $list[$row]['label'] = $label;
            $list[$row]['value'] = $value;
        }
        
        
        echo json_encode($list);
        
        
        
        //now put together the array
        /*foreach ($results as $row => $array)
        {
            $label = '';
            foreach ($array as $col => $value)
            {
                if ($col === $value_field) 
                    $list[]['value'] = $array[$value_field];
                else $label = $label . $label . ' '; 
                
            }
            $list[]['label'] = $label;
            /*$item = '';
            foreach ($array as $col => $value)
            {
                if ($col === $parenthesised) $value = '(' . $value . ')';
                $item = $item . $value . ' '; 
            }
            $list[] = $item;*/
        
        
    }
    
    function dropdown($table, $value, $label1 = NULL, $label2 = NULL, $label3 = NULL) {
        //Get the data
        $label= '';
        $options = array();
       $results = $this->get_list($table);
        print_array($results);
        
        if ($label1)
        {
            //format into a dropdown
            foreach ($results as $row => $array)
            {
                //work out the label
                $label = $array[$label1];
                if ($label2) $label .= ' ' .$array[$label2];

                //now work out the value (and exclude those with no label
                if ($label) $options[$array[$value]] = $label;
            }
        }
        else
        {
            foreach ($results as $row => $array)
            {
                if ($array[$value]) $options[$array[$value]] = '';
            }
        }
        echo json_encode($options);
    }
    
    function form() {
            print_array($this->input->post());
        }
    
    private function _clean_get() {
        //tests $_GET and removes fields that are incorrect or not allowed
        $fields = array();
        foreach ($_GET as $col => $v)
        {
            if (in_array($col, $this->_allowed_fields)) $fields[] = $col;
        }
        $this->field_array = $fields;
        $fields = implode(', ', $fields);
        
        return $fields;
    }
    

}

/* End of file ajax.php */
/* Location: ./application/controllers/app/ajax.php */