<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9 ie" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>CampaignDashboard.co.uk | All your marketing in one place</title>
    <meta name="description" content="">
    <meta name="author" content="Dallas Matthews | http://DallasMatthews.co.uk">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery FullCalendar Styles -->
    <link rel='stylesheet' type='text/css' href="<?php echo site_url('v2.2/css/plugins/jquery.fullcalendar.css'); ?>">

    <!-- jQuery prettyCheckable Styles -->
    <link rel='stylesheet' type='text/css' href="<?php echo site_url('v2.2/css/plugins/prettyCheckable.css'); ?>">

    <!-- Styles -->
    <link rel='stylesheet' type='text/css' href="<?php echo site_url('v2.2/css/sangoma-blue.css'); ?>">

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo site_url('v2.2/img/icons/apple-touch-icon-114-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo site_url('v2.2/img/icons/apple-touch-icon-72-precomposed.png'); ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo site_url('v2.2/img/icons/apple-touch-icon-57-precomposed.png'); ?>">

    <!-- JS Libs -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js); ?>"></script>
    <script>window.jQuery || document.write('<script src="<?php echo site_url('v2.2/js/libs/jquery.js'); ?>"><\/script>')</script>

    <script src="<?php echo site_url('v2.2/js/libs/modernizr.js'); ?>"></script>
    <script src="<?php echo site_url('v2.2/js/libs/selectivizr.js'); ?>"></script>

    <script>
        $(document).ready(function() {

            // Tooltips
            $('[title]').tooltip({
                placement: 'top',
                container: 'body'
            });

            // Tabs
            $('.demoTabs a, .demoTabs2 a').click(function(e) {
                e.preventDefault();
                $(this).tab('show');
                $('.fullcalendar').fullCalendar('render'); // Refresh jQuery FullCalendar for hidden tabs
            })

        });
    </script>

</head>

<body>

    <!-- Full height wrapper -->
    <div id="wrapper">
        
        <!-- navbar placed here by controller - edit it in in views/{dID}/common/navbar.php -->
        <?php include('navbar.php'); ?>

    <!-- Full height wrapper tag closed in views/{dID}/common/footer.php -->
    
    

<?php
    /* End of file header.php */
    /* Location: ./application/views/{dID}/common/header.php */