<?php 
    //Set up the variables to be used here 
     
    //open the form
    echo form_open('app/contact/add/edit/' . $this->id, 'class=" form_val"'); 
        //add ajax back in!
    
?>
    <?php //display_field($fields['_OptinPref']); ?>
    <?php //display_field($fields['_OptinEmailYN']); ?>
    <?php //display_field($fields['_OptinSmsYN']); ?>
    <?php //display_field($fields['_OptinSurfaceMailYN']); ?>
    <?php //display_field($fields['_OptinNewsletterYN']);   ?>
    <?php //display_field($fields['_OptinMerchandiseYN']); ?>
    <?php //display_field($fields['__ClubEventsYN']); ?>
    <?php //display_field($fields['__AwayMatchYN']); ?>
    <div class="clearfix">
        <input name='submit' type='submit' class='button blue right small' style='float:right' value='Save'></input>
    </div>
<?php echo form_close(); ?>