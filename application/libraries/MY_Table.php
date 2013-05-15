<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Controller - MY_Table
 * @author Al Elliott
 * 
 * Description goes here
 * 
 */
class MY_Table extends CI_Table {

    public function __construct() {
        parent::__construct();
    }

    public function get_table_headers($cols, $extra_headers = array()) {
        $retval = array();
        if (count($cols))
        {
            $retval = $cols;
            foreach ($cols as $col => $header)
            {
                if ($header === '') unset($retval[$col]);
            }

            $retval = array_values($retval);
            if (count($extra_headers)) $retval = array_merge($retval, $extra_headers);
        }

        return $retval;
    }
    
     function get_table_data($cols, $results) {
        $retval = array();
        if (count($results) && count($cols))
        {
            $retval = $results;
            foreach ($results as $row => $array)
            {
                foreach ($cols as $col => $header)
                {
                    if ($header === '') unset($retval[$row][$col]);
                }
            }
        }
        
        return $retval;
    }

}

/* End of file MY_Table.php */
/* Location: ./application/controllers/app/MY_Table.php */