<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicons -->
    <link rel="icon" href="../img/logob.png" type="image/png" />
    <title>ADMIN GSJA KK </title>
    <!-- Bootstrap -->
    <link href="vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendor/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
    <link href="vendor/iCheck/skins/flat/green.css" rel="stylesheet">	
	<!-- iCheck -->
    <link href="vendor/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendor/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendor/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendor/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vendor/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- Ion.RangeSlider -->
    <link href="vendor/normalize-css/normalize.css" rel="stylesheet">
    <link href="vendor/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="vendor/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstrap Colorpicker -->
    <link href="vendor/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="vendor/cropper/dist/cropper.min.css" rel="stylesheet">
	<!-- Datatables -->  
    <link href="vendor/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="vendor/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
	<link rel="stylesheet" href="jquery.datetimepicker.min.css">
	<script src="jquery.js"></script>
	<script src="jquery.datetimepicker.full.js"></script>
	
	<link rel="stylesheet" href="plugin/jquery-ui/jquery-ui.min.css" /> <!-- Load file css jquery-ui -->
    <script src="vendor/js/jquery.min.js"></script>
	
</head>

<body class="nav-md">
    <div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-user"></i> <span>ADMIN WEBSITE </span></a>
					</div>
					<div class="clearfix"></div>
				
            <!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic">
						<img src="../img/petugas/<?php echo $_SESSION['fotokasis']; ?>" alt="..." class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Welcome</span>
						<h2><?php echo $_SESSION['namakasis']; ?></h2>
					</div>
					<div class="clearfix"></div>
				</div>
            <!-- /menu profile quick info -->

            <br/>
            <!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<h3>General</h3>
						<ul class="nav side-menu">
							<li><a href="index.php">		<i class="fa fa-home"> 			</i> Home</a></li>
							<li><a href="?m=renungan">		<i class="fa fa-book">			</i> Renungan</a></li> 
							<li><a href="?m=ibadah">		<i class="fa fa-film"> 			</i> Ibadah</a></li> 
							<li><a href="?m=petugas">		<i class="fa fa-male"> 			</i> Petugas</a></li> 
							<li><a href="?m=galeri">		<i class="fa fa-photo">			</i> Galeri</a></li>
							<li><a href="logout.php">		<i class="fa fa-power-off"> 	</i> Keluar</a></li>							
						</ul>
					</div>
				</div>
            <!-- /sidebar menu -->
				</div>
			</div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
					<ul class=" navbar-right">
						<li class="nav-item dropdown open" style="padding-left: 15px;">
							<a href="javascript:;" class="user-profile dropdown-toggle">
							<img src="../img/petugas/<?php echo $_SESSION['fotokasis']; ?>" alt=""><?php echo $_SESSION['namakasis']; ?></a>
						</li>
					</ul>
				</nav>
            </div>
        </div>
        <!-- /top navigation -->