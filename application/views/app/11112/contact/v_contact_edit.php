<div class="col_6"><!-- Start Column 1-->	
    <?php include('other/v_notifications_garage.php'); ?>
    <?php echo flashdata_message($this->session->flashdata('message')); ?>
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
                        <?php //include('fieldset/v_fieldset_mainfields'); ?>
                        <a href="<?php echo site_url("/contact/delete_record/"); ?>" class="open_dialog small button green left" onclick="return deletechecked();">Delete this record</a>
                        <span class="notification done" style="display:none">Record Updated!</span>
                    </div><!-- End of form div-->
                    <p id="option_toggle" title="testing" class="button left">
                        <span>View Opt In Settings</span>
                    </p> 
                    <div class="hide_toggle option" id="testing ">
                        <div class="form margin_top_30">
                            <?php //include('fieldset/v_fieldset_optin.php'); ?>
                            found me!
                        </div>
                    </div>
                    <p id="option1_toggle" title="testing" class="button left">
                        <span>test toggle</span>
                    </p>
                    <div class="hide_toggle" id="option1">
                        <div class="form margin_top_30">
                            found me1!
                        </div>
                    </div>
                    <p id="" title="testing" class="button left option_toggle">
                        <span>test toggle 2</span>
                    </p>
                    <div class="hide_toggle" id="testing">
                        <div class="form margin_top_30">
                            found me2!
                        </div>
                    </div>
                    <div id="tab-2">
                        <?php //include('fieldset/v_fieldset_contactnotes.php'); ?>
                    </div>
                    <div id="tab-3">
                        <?php //include('tables/v_table_relationships.php'); ?>
                        <div class="clearfix margin_top_15">
                            <a href="<?php echo site_url('url_goes_here'); ?>" class="large blue button right iframe" data-table-id="">
                                <span>Button_text</span>
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
        <h4><strong>Discussing</strong> this contact? Quote Contact Id <strong><?php echo $this->contact_id; ?></strong></h4>
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
                        <?php //include('tables/v_table_relationships.php'); ?>
                    </div>
                    <div id="tab-6">
                        <?php //include('tables/v_table_relationships.php'); ?>
                    </div>
                    <div id="tab-7">
                        <?php //include('tables/v_table_relationships.php'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='row'>
            <div class="widget clearfix  form">
                <h2>Quick Actions</h2>
                    <?php //include('fieldset/v_fieldset_quickactions.php'); ?>
            </div>
        </div>        
    </div>
</div>