<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Helper - Data_cleanse_helper
 * @author Al Elliott
 * 
 * This helper manipulates data such as $_POST data
 * 
 */


function clean_post_data($input, $cols = array()) {
    $retval = array();

    //remove any non-db fields (they are prepended with '_::_'
    foreach ($input as $col => $value )
    {
        if (substr($col, 0, 4) !== '_::_')
            $retval[$col] = $value;
    }

    //maybe put some verification here that we're only going to accept data
    //that matches field names from the database?

    return $retval;
}