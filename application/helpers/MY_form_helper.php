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

//SHOULD THIS BE IN THE TABLE FILE????????
function create_table_array($table_data, $controller, $view_file, $attr = NULL, $delete = FALSE, $radio_button = FALSE, $checkbox = FALSE) {
    $retval = array();
    //create the table headers
    $retval['headings'] = '';
    
    //now create the table_body
    
    //create delete button
    //create radio button
    //create checkbox
    //create ???
    
    //add the link
    
    //add the delete button
    
    
    $retval['data'] = '';
    
    //return the values
    return $retval;
    
}

function flashdata_message($message){
    //if () echo '<h4 style="color:red">' . $this->session->flashdata('message') . '</h4>';
}

        
/* End of file MY_form_helper.php */
/* Location: ./application/helpers/MY_form_helper.php */