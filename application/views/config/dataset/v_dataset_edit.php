<h2>Create/Edit a Dataset</h2>
<p>Use the form below to create/edit the dataset for the Dataowner Id of </p>
<?php if ($this->session->flashdata('message')) echo '<h4 style="color:red">' . $this->session->flashdata('message') . '</h4>'; ?>
<div class="form">
    <?php echo form_open('config/dataset/add/edit/' . $this->id); ?>
    <div class="clearfix" id="">
        <label for="Name" class="" id="">Dataset Name (no spaces!)</label>
        <div class="input " id="">
            <input class="large" id="Name" type="text" name="Name" length="" value="<?php echo element('Name', $datasets['record'], ''); ?>">
        </div>
        <small>MANDATORY FIELD!</small>
    </div>
    <div class="clearfix" id="">
        <label for="Slug" class="" id="">Dataset Slug</label>
        <div class="input " id="">
            <input class="large" id="Slug" type="text" name="Slug" length="" disabled="disabled" value="<?php echo element('Slug', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ControllerFilePath" class="" id="">Directory</label>
        <div class="input " id="">
            <input class="large" id="ControllerFilePath" type="text" name="ControllerFilePath" length="" value="<?php echo element('ControllerFilePath', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ControllerName" class="" id="">Controller's Name</label>
        <div class="input " id="">
            <input class="large" id="ControllerName" type="text" name="ControllerName" length="" value="<?php echo element('ControllerName', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ControllerMethod" class="" id="">Controller's Method</label>
        <div class="input " id="">
            <input class="large" id="ControllerMethod" type="text" name="ControllerMethod" length="" value="<?php echo element('ControllerMethod', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Type" class="" id="">Type of Dataset</label>
        <div class="input " id="">
            <?php echo form_dropdown('Type', array('Table' => 'Table', 'Record' => 'Record', 'Dropdown' => 'Dropdown', 'Count' => 'Count'), element('Type', $datasets['record'], 'Record'), 'id=""'); ?>

        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Table" class="" id="">Table Name</label>
        <div class="input " id="">
            <?php echo form_dropdown('Table', array('' => '', 'contacts' => 'contacts', 'contactAction' => 'contactAction', 'tags' => 'tags', 'users' => 'users'), element('Table', $datasets['record'], ''), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Model" class="" id="">Model Name</label>
        <div class="input " id="">
            <?php echo form_dropdown('Model', array('' => '', 'M_Users' => 'M_Users', 'M_Contacts' => 'M_Contacts'), element('Model', $datasets['record'], ''), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Method" class="" id="">Method Name</label>
        <div class="input " id="">
            <input class="large" id="Method" type="text" name="Method" length="" value="<?php echo element('Method', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Params" class="" id="">Params</label>
        <div class="input " id="">
            <input class="large" id="Params" type="text" name="Params" length="" value="<?php echo element('Params', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="dID" class="" id="">Dataowner's Id</label>
        <div class="input " id="">
            <input class="large" id="dID" type="text" name="dID" length="" value="<?php echo element('dID', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ActiveRecordYN" class="" id="">Record Deleted?</label>
        <div class="input " id="">
            <?php echo form_dropdown('ActiveRecordYN', array('0' => 'Record Inactive', '1' => 'Record Active'), element('ActiveRecordYN', $datasets['record'], '1'), 'id=""'); ?>
        </div>
    </div>
    <?php echo form_submit('_::_submit', 'Save!', 'class="button blue right medium"'); ?>
    <?php if (element('Table', $datasets['record'], FALSE)) include('tables/fields_table.php'); ?>
    <?php //echo form_hidden('ContactId', element('ContactId', $datasets['record'], '')); ?>
    <?php echo form_submit('_::_submit', 'Save!', 'class="button blue right medium"'); ?>
    <?php echo form_close(); ?>
</div>

<hr>

<?php echo "<p>here is a var Id: $this->id</P>";
print_array($this->data);
?>
<?php print_array($datasets['record']); ?>
