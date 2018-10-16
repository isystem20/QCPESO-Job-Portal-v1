<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php if (!empty($title)) { echo $title;  } else { echo 'Quezon City Public Employment Service Office'; } ?></title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">

    <link rel="icon" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/icon/icofont/css/icofont.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/menu-search/css/component.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/switchery/dist/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" />
    <?php
    if (!empty($charts)) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/horizontal-timeline/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>themes/ltr/vertical-static/assets/pages/dashboard/amchart/css/amchart.css">
    <?php
    }
    ?>
    <?php
    if (!empty($tables)) { ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <?php
    }
    ?>
    <?php
    if (!empty($formwizard)) { ?>
    <link rel="stylesheet" type="text/css" href=" <?php echo base_url()?>themes/bower_components/jquery.steps/demo/css/jquery.steps.css">
    <?php
    }
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>themes/ltr/vertical-static/assets/css/color/color-1.css" id="color" />
</head>