<?php 
    $tmpl = $this->M_Users->table_template;
    $table_headers = $this->table->get_table_headers($this->M_Users->cols, array('Action'));
    $table_data = $this->table->get_table_data($this->M_Users->cols, $datasets['all_users']);

    $this->table->set_template($tmpl);
    $this->table->set_heading($table_headers);
    echo $this->table->generate($table_data);
    
/* End of file datasets_table.php */
/* Location: ./application/views/config/datasets/tables/datasets_table.php */