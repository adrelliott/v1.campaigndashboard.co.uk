<h1>Campaign Dashboard</h1>
<?php 
    echo $this->data['message'];
    echo form_open(site_url('login/log_in')); 
?>
<div class="clearfix" id="">
    <label for="Username" class="" id="">Username</label>
    <div class="input " id="">
        <input class="large" id="Username" type="text" name="Username" length="" value="">
    </div>
</div>
<div class="clearfix" id="">
    <label for="Password" class="" id="">Password</label>
    <div class="input " id="">
        <input class="large" id="Password" type="Password" name="Password" length="" value="">
    </div>
</div>
<?php
    echo form_submit('_::_submit', 'Log in');
    echo form_close();
    print_array($_SESSION);