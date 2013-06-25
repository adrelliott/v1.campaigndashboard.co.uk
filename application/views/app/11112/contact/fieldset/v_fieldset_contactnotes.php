
<?php echo form_open('contact/append_data/ContactNotes/edit' . $rID . '/' . $ContactId . '/' . $fieldset, 'class="ajax"'); ?>
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