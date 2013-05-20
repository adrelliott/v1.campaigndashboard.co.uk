<?php print_array($_GET['clone'], 0, 'get')?>
<h2>Create/Edit a User</h2>
<p>Use the form below to create/edit a user</p>
<?php if ($this->session->flashdata('message')) echo '<h4 style="color:red">' . $this->session->flashdata('message') . '</h4>'; ?>
<div class="form">
    <?php echo form_open('config/user/add/edit/' . $this->id); ?>
    <div class="clearfix" id="">
        <label for="dID" class="" id="">Data Owner's ID</label>
        <div class="input " id="">
            <input class="large" id="dID" type="text" name="dID" length="" value="<?php echo element('dID', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="FirstName" class="" id="">First Name</label>
        <div class="input " id="">
            <input class="large" id="Name" type="text" name="FirstName" length="" value="<?php echo element('FirstName', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="LastName" class="" id="">Last Name</label>
        <div class="input " id="">
            <input class="large" id="LastName" type="text" name="LastName" length="" value="<?php echo element('LastName', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Nickname" class="" id="">Known As</label>
        <div class="input " id="">
            <input class="large" id="LastName" type="text" name="Nickname" length="" value="<?php echo element('Nickname', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Username" class="" id="">Username</label>
        <div class="input " id="">
            <input class="large" id="Username" type="type" name="Username" length="" value="<?php echo element('Username', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Password" class="" id="">Password</label>
        <div class="input " id="">
            <input class="large" id="Password" type="password" name="Password" length="" value="">
        </div>
    </div>
    <!--<div class="clearfix" id="">
        <label for="_::_PasswordCheck" class="" id="">Pleas re-enter your Password</label>
        <div class="input " id="">
            <input class="large" id="_::_PasswordCheck" type="password" name="_::_PasswordCheck" length="" value="">
        </div>
    </div>-->
    <div class="clearfix" id="">
        <label for="CrmUserAdminLevel" class="" id="">Admin level</label>
        <div class="input " id="">
            <?php echo form_dropdown('CrmUserAdminLevel', array('1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'), element('CrmUserAdminLevel', $datasets['record'], '3'), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="CrmUserSuspendReason" class="" id="">Suspend Reason</label>
        <div class="input " id="">
            <?php echo form_dropdown('CrmUserSuspendReason', array('' => 'Not Suspended', '301' => 'Account Suspended','105' => 'User Left Company', '944' => 'Unpaid Bills'), element('CrmUserSuspendReason', $datasets['record'], ''), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ActiveRecordYN" class="" id="">Record Deleted?</label>
        <div class="input " id="">
            <?php echo form_dropdown('ActiveRecordYN', array('0' => 'Record Inactive', '1' => 'Record Active'), element('ActiveRecordYN', $datasets['record'], '1'), 'id=""'); ?>
        </div>
    </div>
    <?php echo form_hidden('CrmUserYN', '1'); ?>
    <?php echo form_submit('_::_submit', 'Save!', 'class="button blue right medium"'); ?>
    <?php echo form_close(); ?>
</div>

<hr>

<?php echo "<p>here is a var Id: $this->id</P>";
print_array($this->data);
?>
<?php print_array($datasets['record']); ?>
