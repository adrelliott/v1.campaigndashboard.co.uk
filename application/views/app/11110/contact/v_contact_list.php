<div class="row clearfix">
    <div class="col_12">
        <div class="margin_bottom_30 clearfix">
            <?php echo flashdata_message($this->session->flashdata('message')); ?>
        </div>
        <div class="widget clearfix">            
            <h2>Find Fans</h2>
            <div class="widget_inside">  
                <h4>You can search by any of the columns you see below in the table:</h4>
                    <?php include('tables/v_table_allcontacts.php'); ?>
                <h3 class="index toggle_icon" id="option1_toggle">Looking for an Organisation?</h3>
                <div class="hide_toggle" id="option1">
                    <h4>You can search by any of the columns you see below in the table:</h4>
                    <?php include('tables/v_table_allcontacts.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>