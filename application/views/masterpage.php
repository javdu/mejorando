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
    <link href="<?= base_url(); ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <title>Fundación P.A.S.S.</title>
    
    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/highcharts.js"></script>
    <script src="<?= base_url(); ?>assets/js/exporting.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body id="page-top" class="index" style="margin:0; padding:0;">
<div style="margin:0; padding:0; position:relative;">
        <?= $navbar ?>
        <div id="box-main" style="padding-bottom: 100px;">
            <?= $header ?>
            <?= $content ?>
        </div>
        <div style="position:absolute !important; bottom:0 !important; width: 100%;">
            <?= $footer ?>
        </div>
</div>
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