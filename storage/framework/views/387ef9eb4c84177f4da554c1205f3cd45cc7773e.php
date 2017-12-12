<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "Control Escolar"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo e(asset('/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <!--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />-->
	<link href="<?php echo e(asset('/bower_components/AdminLTE/dist/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <!--<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />-->
	<link href="<?php echo e(asset('/bower_components/AdminLTE/dist/css/ionicons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo e(asset('/bower_components/AdminLTE/dist/css/AdminLTE.min.css')); ?>" rel="stylesheet" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css')); ?>">

    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="<?php echo e(asset('/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css')); ?>" rel="stylesheet" type="text/css" />

	
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/iCheck/flat/blue.css')); ?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/morris/morris.css')); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css')); ?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/datepicker/datepicker3.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css')); ?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo e(asset('/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')); ?>">
	
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

    <!-- Header -->
    

    <!-- Sidebar -->
    

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!--<section class="content-header">
            <h1>
                <?php echo e(isset($page_title) ? $page_title : "Page Title"); ?>

                <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <!--<ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    

</div><!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->



<!-- jQuery 2.1.4 -->
<script src="<?php echo e(asset ('/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js')); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset ('/bower_components/AdminLTE/plugins/jQueryUI/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset ('/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo e(asset ('/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset ('/bower_components/AdminLTE/dist/js/app.min.js')); ?>" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset ('/bower_components/AdminLTE/dist/js/demo.js')); ?>" type="text/javascript"></script>   
<script src="<?php echo e(asset ('/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset ('/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js')); ?>"></script>
<script src="<?php echo e(asset ('/bower_components/AdminLTE/plugins/fastclick/fastclick.min.js')); ?>"></script>


 <?php echo $__env->yieldPushContent('scripts'); ?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>