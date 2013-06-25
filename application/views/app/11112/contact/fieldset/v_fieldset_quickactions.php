<div class="clearfix">
    <div class="input">
        <label>Choose an action:</label>
        <select id="quick_action">
            <option value="1">Send Email</option>
            <option value="2">Send membership Enquiry Pack</option>
            <option value="3">Send membership pack</option>
        </select>
        <input type="hidden" id="quick_action_url" value="<?php echo site_url(); ?>/quickaction/action/edit/<?php echo $rID . '/' . $ContactId; ?>/" />
        <a id="quick_action_button" href="<?php echo site_url(); ?>/quickaction/action/edit/<?php echo $rID . '/' . $ContactId; ?>/0" class="large red button iframe">GO!</a>
    </div>
</div>