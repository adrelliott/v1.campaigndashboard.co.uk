<h2>Create/Edit a Dataset</h2>
<p>Use the form below to create/edit the dataset for the Dataowner Id of </p>
<?php if ($this->session->flashdata('message')) echo '<h4 style="color:red">' . $this->session->flashdata('message') . '</h4>'; ?>
<div class="form">
    <?php echo form_open('config/dataset/add/edit/' .  element('clone', $_GET, $this->id)); ?>
    <div class="clearfix" id="">
        <label for="Slug" class="" id="">Dataset Slug</label>
        <div class="input " id="">
            <input class="large" id="Slug" type="text" name="Slug" length="" disabled="disabled" value="<?php echo element('Slug', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ControllerFilePath" class="" id="">Directory</label>
        <div class="input " id="">
             <?php echo form_dropdown('ControllerFilePath', array('app' => 'app', 'public' => 'public', 'config' => 'config', 'auto' => 'auto', 'api' => 'api'), element('ControllerFilePath', $datasets['record'], 'Record'), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ControllerName" class="" id="">Controller's Name</label>
        <div class="input " id="">
            <div class="input " id="">
            <?php echo form_dropdown('ControllerName', $this->data['datasets']['controller_list'], element('ControllerName', $datasets['record'], 'Contact'), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="ControllerMethod" class="" id="">Controller's Method</label>
        <div class="input " id="">
            <?php echo form_dropdown('ControllerMethod',array('index' => 'index', 'view' => 'view'), element('ControllerMethod', $datasets['record'], 'Contact'), 'id=""'); ?>
    </div>
    <div class="clearfix" id="">
        <label for="Type" class="" id="">Type of Dataset</label>
        <div class="input " id="">
            <?php echo form_dropdown('Type', array('Table' => 'Table', 'Record' => 'Record', 'Dropdown' => 'Dropdown', 'Count' => 'Count'), element('Type', $datasets['record'], 'Record'), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Model" class="" id="">Model Name</label>
        <div class="input " id="">
            <?php echo form_dropdown('Model', $this->data['datasets']['model_list'], element('Model', $datasets['record'], ''), 'id=""'); ?>
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Method" class="" id="">Method Name</label>
        <div class="input " id="">
            <input class="large" id="Method" type="text" name="Method" length="" value="<?php echo element('Method', $datasets['record'], ''); ?>">
        </div>
    </div>
    <div class="clearfix" id="">
        <label for="Params" class="" id="">Params (not for queries)</label>
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
