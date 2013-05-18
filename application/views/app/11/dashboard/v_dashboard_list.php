This si the v_dashboard_index gfile!!!

<?php echo "This is the dashboard";
        echo anchor(site_url('login/log_out'), '<h3>logout</h3>');
        print_array($this->data);
