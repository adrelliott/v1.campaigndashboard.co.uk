<html lang="en-us">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" >
        <meta charset="utf-8" />

        <link rel="apple-touch-con" href="" />

        <title>Campaign Dashboard</title>

        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

        <!-- The Columnal Grid and mobile stylesheet -->
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/columnal/columnal.css" type="text/css" media="screen" />

        <!-- Fixes for IE -->

        <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/columnal/ie.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/ie8.css" type="text/css" media="screen" />
            <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <![endif]-->        


        <!-- Now that all the grids are loaded, we can move on to the actual styles. --> 
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/scripts/jqueryui/jqueryui.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/global.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/config.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/styles/custom_styles.php" type="text/css" media="screen" />

        <!-- Load Main Jquery libraries -->
        <?php if ( strpos ( ENVIRONMENT, 'development') ) : //load local libs if in dev mode ?>
            <script type="text/javascript" src="<?php echo site_url(); ?>assets/scripts/jquery-1.10.1.min.js"></script>	
            <script type="text/javascript" src="<?php echo site_url(); ?>assets/scripts/jquery-ui.min"></script>  
        <?php else: ?>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>	
            <script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> 
        <?php endif; ?>


    </head>
    <body>
        <div id="wrap">
            <div id="main">
                <header class="container">
                    <div class="row clearfix">
                        <div class="left">
                            <a href="<?php echo site_url('app/dashboard'); ?>"><img src="<?php echo site_url('assets/includes/logos/logo_11110.png'); ?>" /></a>
                        </div>                
                        <div class="right">
                            <ul id="toolbar">
                                <li>Logged in as 
                                    <?php echo anchor('user/view/edit/' . $this->session->userdata('UserId') . '/' . $this->session->userdata('UserId'), $this->session->userdata('FirstName') . ' ' . $this->session->userdata('LastName')); ?> (<?php echo anchor('login/log_out', 'Log out?'); ?>) </li>
                                <?php //<li><?php echo anchor('settings', 'Settings', 'id="settings" class="iframe"');  //</li>?>
                                <li><?php echo anchor('help/view/edit/___' . uri_string(), 'Help', 'id="help" class=" iframe "'); ?></li>
                            </ul>
                        </div>
                    </div>
                </header>
                <!-- Start Navbar-->
                <nav class="container">
                    <ul class="sf-menu mobile-hide row clearfix">
                        <?php include('navbar.php'); ?>
                    </ul>
                </nav>
                <!-- End Navbar-->
                <div class="container" id="actualbody"><!-- Start body -->
