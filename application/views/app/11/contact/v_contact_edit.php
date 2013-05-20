<?php 
    //Set up arrays for data
    $record = $this->data['datasets']['contacts_get_record']; 
    $all_contacts = $this->data['datasets']['contacts_get'];
    $users_dropdown = create_dropdown_array
            ($this->data['datasets']['contacts_get'], 
            array('FirstName', 'LastName'), 
            'Id',
            TRUE);
    
    print_array($users_dropdown);
?>
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