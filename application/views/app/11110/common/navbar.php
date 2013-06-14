<li class=" iconed <?php if ($this->uri->segment(2) == 'dashboard') echo ' active'; ?>">
    <a href="<?php echo site_url('app/dashboard'); ?>">
        <span>
            <img src="<?php echo site_url('assets/common_images/header/icon_dashboard.png'); ?>" /> Dashboard
        </span>
    </a>
</li>
<li class="  <?php if ($this->uri->segment(2) == 'contact') echo ' active'; ?>">
    <a href="<?php echo site_url('app/contact'); ?>">
        <span>
            Contacts
        </span>
    </a>
</li>
<li class="  <?php if ($this->uri->segment(2) == 'lead') echo ' active'; ?>">
    <a href="<?php echo site_url('app/lead'); ?>">
        <span>
            Leads
        </span>
    </a>
</li>
<li class="  <?php if ($this->uri->segment(2) == 'campaign') echo ' active'; ?>">
    <a href="<?php echo site_url('app/campaign'); ?>">
        <span>
            Campaigns
        </span>
    </a>
</li>