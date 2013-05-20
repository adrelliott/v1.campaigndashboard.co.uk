<?php 
    //Set up the variables to be used here 
     
    //open the form
    echo form_open('app/contact/add/edit/' . $this->id, 'class=" form_val"'); 
        //add ajax back in!
?>

//fields go here

    <div class="clearfix">
        <input name='submit' type='submit' class='button red right medium' style='float:right' value='Save'></input>
        <a href="<?php echo site_url("app/contact/delete/" . $this->id . "?" . $this->uri->uri_string()); ?>" class="small button green left" onclick="return deletechecked();">
            <span>Delete this Contact</span>
        </a>
    </div>
<?php echo form_close(); ?>