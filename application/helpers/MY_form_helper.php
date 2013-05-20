<?php

/*
 * This 'extends' the form_helper. (Course, it doesn't 'extend' in the OOP sense)
 */

function create_dropdown_array($dropdown_array, $label_field, $value_field, $blank_entry = FALSE) {
    //set default output
    if ($blank_entry) $retval = array('' =>'');
    else $retval = array();

    //cycle through dropdown array and create the dropdown
    foreach ($dropdown_array as $key => $array)
    {
        //what are the labels?
        if (is_array($label_field))
        {
            $label = '';
            foreach ($label_field as $l)
            {
                $label .= $array[$l] . ' ';
            }
            $label = trim($label);
        }
        else $label = $label_field;

        //Set up the array
        $retval[$label] = $array[$value_field];
    }

    return $retval;
}

        
/* End of file MY_form_helper.php */
/* Location: ./application/helpers/MY_form_helper.php */