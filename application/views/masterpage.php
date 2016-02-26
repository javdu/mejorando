<?php
   $navbar = (isset($navbar))? $navbar : '';
   $header = (isset($header))? $header : '';
   $content = (isset($content))? $content : '';
   $footer = (isset($footer))? $footer : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= base_url(); ?>" />
    <link href="<?= base_url(); ?>assets/css/vendor.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/css/my.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title>Fundación P.A.S.S.</title>
    
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<body id="page-top" class="index">
    <?= $navbar ?>
    <div id="box-main">
        <?= $header ?>
        <?= $content ?>
    </div>
    <?= $footer ?>
        
    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/classie.js"></script>
    <script src="<?= base_url(); ?>assets/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?= base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
    <!--<script src="assets/js/contact_me.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url(); ?>assets/js/freelancer.js"></script>
</body>
</html>