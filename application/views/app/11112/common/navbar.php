<!-- Main page header -->
<header id="header" class="container">

    <h1>
        <!-- Main page logo -->
        <a href="login.html" class="brand">FFF</a>

        <!-- Main page headline -->
        <span>All your marketing in one place...</span>
    </h1>

    <!-- User profile -->
    <div class="user-profile">
        <figure>

            <!-- User profile avatar -->
            <img alt="John Pixel avatar" src="http://placekitten.com/60/60">

            <!-- User profile info -->
            <figcaption>
                <strong><a href="#" class="">John Pixel</a></strong>
                <ul>
                    <li><a href="#" title="Account settings">settings</a></li>
                    <li><a href="#" title="Logout">logout</a></li>
                </ul>
            </figcaption>
            <!-- /User profile info -->

        </figure>
    </div>
    <!-- /User profile -->
            
    <!-- Main navigation -->
    <nav class="main-navigation">

        <!-- Responsive navbar button -->
        <div class="navbar">
            <a class="btn btn-alt btn-large btn-primary btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-home"></span> Dashboard</a>
        </div>
        <!-- /Responsive navbar button -->

        <!-- Navigation -->
        <div class="nav-collapse collapse" role="navigation">
            <ul>
                <li class="<?php if ($this->uri->segment(2) == 'dashboard') echo ' active'; ?>"><a href="<?php echo site_url('app/dashboard'); ?>"><span class="icon-home"></span> Dashboard</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'contact') echo ' active'; ?>"><a href="<?php echo site_url('app/contact'); ?>"><span class="icon-group"></span> Contacts</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'lead') echo ' active'; ?>"><a href="<?php echo site_url('app/lead'); ?>"><span class="icon-inbox-box"></span> Leads</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'campaign') echo ' active'; ?>"><a href="<?php echo site_url('app/campaign'); ?>"><span class="icon-dashboard"></span> Campaigns</a></li>
                <li class="<?php if ($this->uri->segment(2) == 'search') echo ' active'; ?>"><a href="<?php echo site_url('app/search'); ?>"><span class="icon-search"></span> Search</a></li>
            </ul>
        </div>
        <!-- /Navigation -->

    </nav>
    <!-- /Main navigation -->

</header>
<!-- /Main page header -->

<?php
    /* End of file navbar.php */
    /* Location: ./application/views/{dID}/common/navbar.php */