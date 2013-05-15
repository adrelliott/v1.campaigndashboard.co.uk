edit the dataset
<div class="clearfix" id="">
    <label for="Name" class="" id="">Dataset Name</label>
    <div class="input " id="">
        <input class="large" id="Name" type="text" name="Name" length="" value="<?php echo element('Name', $datasets['record'], '');?>">
    </div>
</div>
<div class="clearfix" id="">
    <label for="ModelName" class="" id="">Model Name</label>
    <div class="input " id="">
        <input class="large" id="ModelName" type="text" name="ModelName" length="" value="">
    </div>
</div>
<div class="clearfix" id="">
    <label for="MethodName" class="" id="">Method Name</label>
    <div class="input " id="">
        <input class="large" id="MethodName" type="text" name="MethodName" length="" value="">
    </div>
</div>
end up with table that has 
<hr>
<?php 
echo "<p><label for='name'>Name</label><br/>";
$data = array('name'=>'Name','id'=>'name','size'=>25, 'value' => $Name['value']);
echo form_input($data) ."</p>";
?>



<?php print_array($this->data); ?>
<?php print_array($datasets['record']); ?>

<?php
echo form_open_multipart('config/setup/datasets/edit_datasets');


echo "<p><label for='name'>Name</label><br/>";
$data = array('name'=>'Name','id'=>'name','size'=>25, 'value' => $Name['value']);
echo form_input($data) ."</p>";

echo form_close();