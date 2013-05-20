<?php if ($this->output->enable_profiler()) : ?>
    <pre>here is CI session
        <?php print_r($this->session->all_userdata()); ?>
    </pre>
    <pre>here is PHP session
        <?php print_r($_SESSION); ?>
    </pre>
    <pre>here is $this->data:
        <?php print_r($this->data);?>
    </pre>
<?php endif; ?>