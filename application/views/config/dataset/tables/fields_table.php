<?php 
    $tmpl = $this->M_Datasets->table_template;
    $table_headers = array('Field Name', 'Dropdown/Table Label', 'Include in Dataset?');
    $table_data = $datasets['field_list'];

    $this->table->set_template($tmpl);
    $this->table->set_heading($table_headers);
    echo $this->table->generate($table_data);
    
/* End of file datasets_table.php */
/* Location: ./application/views/config/datasets/tables/datasets_table.php */