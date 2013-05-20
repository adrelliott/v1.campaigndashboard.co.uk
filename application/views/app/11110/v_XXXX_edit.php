<?php 
        //Set up arrays for data
    //$record = $this->data['datasets']['contacts_get_record']; 
    //$all_contacts = $this->data['datasets']['contacts_get'];
    /*$users_dropdown = create_dropdown_array
            ($this->data['datasets']['contacts_get'], 
            array('FirstName', 'LastName'), 
            'Id',
            TRUE);
    */
?>
<div class="col_6"><!-- Start Column 1-->	
    <?php //foreach($notifications as $vehicle) { foreach ($vehicle as $n => $html) { echo $html; }} ?>
    <div class="row clearfix">
        <div class="row"><!-- Tabs begin -->
            <div class="widget clearfix tabs">
                <ul>
                    <li>
                        <h2><a href="#tab-1">Details</a></h2>
                    </li>
                    <li style="<?php echo $display_none; ?>">
                        <h2><a href="#tab-2">Notes</a></h2>
                    </li>
                    <li style="<?php echo $display_none; ?>">
                        <h2><a href="#tab-3">Relationships</a></h2>
                    </li>
                </ul>
                <div class="widget_inside">
                    <div id="tab-1">
                        <div class="form">
                            <?php include('fieldset/v_fieldset_section_1'); ?>
                            <span class="notification done" style="display:none">Record Updated!</span>
                        </div>
                    </div><!-- End of form div-->
                    <p id="option1_toggle" class="button left">
                        <span>View Opt In Settings</span>
                    </p> 
                    <div class="hide_toggle" id="option1">
                        <div class="form margin_top_30">
                            <?php include('fieldset/v_fieldset_optin'); ?>
                        </div>
                    </div>
                    <div id="tab-2">
                         <?php echo form_open('contact/append_note/0/' . $rID . '/' . $ContactId . '/' . $fieldset, 'class="ajax"'); ?>
                            <p>These are the notes for this record.</p>
                            <?php echo display_field($fields['ContactNotes']); ?>
                           <!-- Start field "Add a Note:" -->
                           <div class="clearfix">
                               <h4>Add your new note below</h4>
                               <div class="input">
                                   <textarea class="xxxxlarge green-highlight" type="text"  name="add_a_note" rows="5" placeholder="Your note will be automatically datestamped & appended to the notes above" /></textarea>
                               </div>
                           </div>
                           <!-- End field "Add a Note:" -->	
                           <div class="clearfix margin_top_15">
                               <input name='submit' type='submit' class='button red right large' style='float:right' value='Save'></input>
                           </div>
                        <?php echo form_close(); ?>	
                    </div>
                    <div id="tab-3">
                        <div class="dataTable-container" data-table-source="<?php echo html_escape (base_url () . $this->uri->uri_string () . '/relationships') ?>">
                        <?php include ('v_contact_edit/relationships.php') ?>
                        <?php //$this->load->view ('custom/22222/contact/v_contact_edit/relationships') ?>
                        </div>
                        <div class="clearfix margin_top_15">
                           <a href="<?php echo site_url("/contactjoin/view/edit/new/$ContactId"); ?>" class="large red button right iframe" data-table-id="tab-3">
                               <span>Create New Relationship</span>
                           </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Start Column 2-->
<div class="col_6 last" style="<?php echo $display_none; ?>">
    
<span class="notification information">
    <h4><strong>Transferring</strong> this contact? Quote Contact Id <strong><?php echo $ContactId; ?></strong></h4>
</span>
    <div class="row clearfix"> 
        <div class="row"><!-- Tabs begin -->
            
            <div class="widget clearfix tabs">
                <ul>
                    <li><h2><a href='#tab-5'>Purchases</a></h2></li>
                    <li><h2><a href='#tab-6'>Comms</a></h2></li>
                    <li><h2><a href='#tab-7'>Roles</a></h2></li>
                </ul>
                <div class="widget_inside">
                    <div id="tab-5">
                        <div class="dataTable-container" data-table-source="<?php echo html_escape (base_url () . $this->uri->uri_string () . '/orders') ?>">
                            <?php include ('v_contact_edit/orders.php') ?>
                        </div>
                        <div class="clearfix margin_top_15">
                           <a href="<?php echo site_url("order/view/edit/new/$ContactId"); ?>" class="large red button right iframe" data-table-id="tab-5">
                               <span>Create New Purchase</span>
                           </a>
                       </div>
                    </div>
                    <div id="tab-6">
                        <div class="dataTable-container" data-table-source="<?php echo html_escape (base_url () . $this->uri->uri_string () . '/comms') ?>">
                            <?php include ('v_contact_edit/comms.php') ?>
                        </div>
                        <div class="clearfix margin_top_15">
                            <a href="<?php echo site_url("comms/view/new/new/$ContactId"); ?>" class="large red button right iframe" data-table-id="tab-6">
                                <span>Create New Comm</span>
                            </a>
                        </div>
                    </div>
                    <div id="tab-7">
                        <div class="dataTable-container" data-table-source="<?php echo html_escape (base_url () . $this->uri->uri_string () . '/roles') ?>">
                            <?php include ('v_contact_edit/roles.php') ?>
                        </div>
                        <div class="clearfix margin_top_15">
                            <a href="<?php echo site_url("contactaction/view/edit_role/new/$ContactId"); ?>" class="large red button right iframe" data-table-id="tab-7">
                                <span>Create New Roles</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="widget clearfix  form">
                <h2>Quick Actions</h2>
                <div class="clearfix">
                    <div class="input">
                        <label>Choose an action:</label>
                        <select id="quick_action">
                            <option value="1">Send Email</option>
                            <option value="2">Send membership Enquiry Pack</option>
                            <option value="3">Send membership pack</option>
                        </select>
                        <input type="hidden" id="quick_action_url" value="<?php echo site_url() ; ?>/quickaction/action/edit/<?php echo $rID . '/' . $ContactId; ?>/" />
                        <a id="quick_action_button" href="<?php echo site_url(); ?>/quickaction/action/edit/<?php echo $rID . '/' . $ContactId; ?>/0" class="large red button iframe">GO!</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>






<?php if ($this->session->flashdata('message')) echo '<h4 style="color:red">' . $this->session->flashdata('message') . '</h4>'; ?>
<div class="form">
    <?php echo form_open('app/contact/add/edit/' .  element('clone', $_GET, $this->id)); ?>
    <div class="clearfix" id="">
        <label for="Title" class="" id="">Title</label>
        <div class="input " id="">
            <?php echo form_dropdown('Title', array('Mr' => 'Mr', 'Mrs' => 'Mrs', 'Miss' => 'Miss', 'Ms' => 'Ms', 'Dr' => 'Dr'), element('Title', $record, 'Mr'), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="FirstName" class="" id="">First Name</label>
        <div class="input " id="">
             <input class="large" id="FirstName" type="text" name="FirstName" length="" value="<?php echo element('FirstName', $record, ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="LastName" class="" id="">Last Name</label>
        <div class="input " id="">
             <input class="large" id="LastName" type="text" name="LastName" length="" value="<?php echo element('LastName', $record, ''); ?>">
        </div>
    </div>
    <?php echo form_submit('_::_submit', 'Save'); ?>
    <?php echo form_close();

echo 'this si the contact page:';

print_array($this->data);

print_array($record, 0, 'this si record');