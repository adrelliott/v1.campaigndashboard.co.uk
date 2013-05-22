<?php 

    //Set up vars - edit these here
    $table_setup = array
        (
            'table_name' => 'relationships',
            'controller_name' => 'relationship',
            'view_file' => 'v_relationship_edit',
            'button_label' => 'Create New Relationship',
            'tab_name' => 'tab-3',
            'link_class' => 'iframe',
            'table_setup' => array(), //supply other stuff here
        );
    
    //Don;t edit below
    $attributes = 'class="' . $link_class . '" data-table-id="' . $tab_name . '"';
    $table = create_table_array();
    $table_data_source = html_escape (base_url () . $this->uri->uri_string () . '/' . $table_name);
    $this->table->set_template_custom($table_setup);    
    $this->table->set_heading_custom($table['headings']);
    $table = $this->table->generate_custom($table['data']);
    $new_record_link = site_url('app/' . $controller_name . '/v_' . $controller_name . '_edit/new/' . $this->contact_id);
    //Don't edit above here
    
?>
<div class="dataTable-container" data-table-source="<?php echo $table_data_source ?>">
    <?php echo generate_table() ?>
</div>
<div class="clearfix margin_top_15">
   <a href="<?php echo site_url($new_record_link); ?>" class="large blue button right iframe" data-table-id="<?php echo $tab_name; ?>">
       <span><?php echo $button_label; ?></span>
   </a>
</div>