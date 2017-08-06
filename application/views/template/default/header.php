<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<!-- load css -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
	<link href="<?= base_url('assets/css/jquery-ui.min.css');?>" rel="stylesheet">      
	<link href="<?= base_url('assets/css/prettyPhoto.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/price-range.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/animate.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/public_master.css');?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/responsive.css');?>" rel="stylesheet">      
    <link rel="shortcut icon" href="<?= base_url('assets/images/ico/favicon.ico');?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url('assets/images/ico/apple-touch-icon-144-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url('assets/images/ico/apple-touch-icon-114-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url('assets/images/ico/apple-touch-icon-72-precomposed.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/ico/apple-touch-icon-57-precomposed.png');?>">
<script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <header id="header"><!--header-->
    	<div class="header_top"><!--header_top-->
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-6">
    					<div class="contactinfo">
    						<ul class="nav nav-pills">
    							<li><a href="#"><i class="fa fa-phone"></i> +351 291 222 278</a></li>
    							<li><a href="#"><i class="fa fa-envelope"></i> strabat@domain.com</a></li>
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-6">
    					<div class="social-icons pull-right">
    						<ul class="nav navbar-nav">
    							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
    							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
    							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
    							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
    							<li><a href="index.php?op=login"><i class="fa fa-sign-in"></i>Login</a></li>
    						</ul>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div><!--/header_top-->

    	<div class="header-middle"><!--header-middle-->
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-4">
    					<div class="logo pull-left">
    						<a href="index.php"><img src="<?= base_url('assets/images/site/LogoStrabat.png');?>" alt="" /></a>
    					</div>

    				</div>
    				<div class="col-sm-8">
    					<div class="shop-menu pull-right">
    						<ul class="nav navbar-nav">

    						</ul>
    					</div>
    				</div>
    			</div>
    			<div align="right">

    			</div>
    		</div>
    	</div><!--/header-middle-->

    	<div class="header-bottom"><!--header-bottom-->
    		<div class="container">
    			<div class="row">
    				<div class="col-sm-9">
    					<div class="navbar-header">
    						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    							<span class="sr-only">Toggle navigation</span>
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    						</button>
    					</div>
    					<div class="mainmenu pull-left">
    						<ul class="nav navbar-nav collapse navbar-collapse">
    							<?php
								//$site->menuSuperior();
    							?>							
    						</ul>
    					</div>
    				</div>
    				<div class="col-sm-3">
    					<div class="search_box pull-right">
    						<input type="text" placeholder="Search"/>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div><!--/header-bottom-->
	</header><!--/header-->