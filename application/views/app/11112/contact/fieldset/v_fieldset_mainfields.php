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
    <?php echo form_close(); ?>
</div>