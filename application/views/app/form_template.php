
<div class="form"><!-- additional classes can be 'stacked' 'no-border' -->
    <?php echo form_open('app/controller/method/params', 'class="myclass" id="myid"'); ?>
    <!-- You can pass javascript in the 3rd param = e.g. onClick="somefunction()" -->
    <!-- input classes are mini, small, medium, large, larger, xlarge, xxlarge, xxxlarge, xxxxlarge -->
    <div class="clearfix">
        <label>Normal Field</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge" size="50" style="display:" id="myid" '); ?>
        </div>
    </div>
    <div class="clearfix">
        <label>Password Field</label>
        <div class="input">
            <?php echo form_password('name', 'field value', 'title="hello" rel="tooltips" class="xlarge" size="50" style="display:" id="myid" '); ?>
        </div>
    </div>
    <div class="clearfix">
        <label>Text area</label>
        <div class="input">
            <?php echo form_textarea('name', 'field value', 'title="hello" rel="tooltips" class="xlarge" cols="50" rows="5" style="display:" id="myid" '); ?>
        </div>
    </div>
    <div class="clearfix">
        <label>Dropdown Field</label>
        <div class="input">
            <?php $options = array('value1' => 'label1', 'value2' => 'label2');
            echo form_dropdown('shirts', $options, 'value2', 'title="hello" rel="tooltips" class="xlarge"');
            ?>
        </div>
    </div>
    <div class="clearfix">
        <label>Dropdown Field with multiple groups</label>
        <div class="input">
            <?php
            $options = array(
                'value_group1' => array(
                    'value1' => 'label1',
                    'value2' => 'label2'
                ),
                'value_group2' => array(
                    'value3' => 'label3',
                    'value4' => 'label4'
                )
            );
            echo form_dropdown('shirts', $options, 'value2', 'title="hello" rel="tooltips" class="xlarge"');
            ?>
        </div>
    </div>
    <div class="clearfix">
        <label>Radio button</label><!-- If you're not passing 4th param then the 3rd is optional too -->
        <div class="input">
        <?php echo form_radio('name', 'yes', TRUE, 'class="" style="display:" id="myid" title="hello" rel="tooltips" '); //TRUE means selected or not  ?>Yes
        <?php echo form_radio('name', 'no', FALSE, 'class="" style="display:" id="myid" title="hello" rel="tooltips" '); //TRUE means selected or not  ?>No
        </div>
    </div>
    <div class="clearfix">
        <label>Radio button</label><!-- If you're not passing 4th param then the 3rd is optional too -->
        <div class="input">
            <?php echo form_checkbox('name', 'field value1', TRUE, 'title="hello" rel="tooltips" class="" style="display:" id="myid" '); //TRUE means selected or not ?>Val1</input>
            <?php echo form_checkbox('name', 'field value2', FALSE, 'title="hello" rel="tooltips" class="" style="display:" id="myid" '); //TRUE means selected or not  ?>Val2</input>
            <?php echo form_checkbox('name', 'field value3', FALSE, 'title="hello" rel="tooltips" class=""  style="display:" id="myid" '); //TRUE means selected or not  ?>Val3</input>
            <?php echo form_checkbox('name', 'field value4', FALSE, 'title="hello" rel="tooltips" class=""  style="display:" id="myid" '); //TRUE means selected or not  ?>Val4</input>
        </div>
    </div>
    <div class="clearfix">
        <label>Help text under the box</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge"'); ?>
            <span class="info">Info UNDER the input</span>
        </div>
    </div>
    <div class="clearfix">
        <label>Help text at the RIGHT of the box</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge"'); ?>
            <span class="help">Info at the RIGHT of the input</span>
        </div>
    </div>
    <div class="clearfix">
        <label>Auto complete</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge" id="XXXXXXXPUT ID FROM APP>JS HERE"'); ?>
            <span class="help">Set up in app.js first</span>
        </div>
    </div>
    <div class="clearfix">
        <label>Date picker</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge"'); ?>
            <span class="help">Info at the RIGHT of the input</span>
        </div>
    </div>
    <div class="clearfix">
        <label>using a mask</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge"'); ?>
            <span class="help">Set up the mask/validation!</span>
        </div>
    </div>
    <div class="clearfix green-highlight">
        <label>Field with Green highlight</label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge"'); ?>
        </div>
    </div>
    <div class="clearfix red-highlight">
        <label>red highlight </label>
        <div class="input">
            <?php echo form_input('name', 'field value', 'title="hello" rel="tooltips" class="xlarge"'); ?>
        </div>                        
    </div>
    <?php
    //adding hidden inputs is easy Just create the array an then pass 
    //to the form_hidden() function. (attr are not poss on hidden fields)
    $hidden_fields = array(
        'fieldname' => 'value',
        'fieldname2' => 'value2',
        'fieldname3' => 'value3',
    );
    echo form_hidden($hidden_fields);
    ?>
    <div class="clearfix grey-highlight">
        <div class="input no-label">
            <?php echo form_reset('value_of_button', 'Reset Form', 'class="button grey"'); ?>
            <?php echo form_submit('value_of_button', 'Submit Post!', 'class="button blue"'); ?>
        </div>
    </div>
    <?php echo form_close(); ?>
</div>
