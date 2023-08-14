<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?= $judul ?></title>
	<!-- Bootstrap Styles-->
	<link href="<?php echo base_url() ?>/assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
	<link href="<?php echo base_url() ?>/assets/css/font-awesome.css" rel="stylesheet" />
	<!-- Morris Chart Styles-->

	<!-- Custom Styles-->
	<link href="<?php echo base_url() ?>/assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<!-- TABLE STYLES-->
	<link href="<?php echo base_url() ?>/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/03774beff9.js" crossorigin="anonymous"></script>
</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default top-navbar" role="navigation">
			<div class="navbar-header">

				<a class="navbar-brand" href="<?php echo base_url('Dashboard/') ?>">E-Warung</a>
			</div>

			<ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
						<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li>
							<a href="<?php echo base_url() . 'auth2/logout' ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
						</li>
					</ul>
					<!-- /.dropdown-user -->
				</li>
				<!-- /.dropdown -->
			</ul>
		</nav>
		<!--/. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">

					<li>
						<a href="<?= site_url('Dashboard/') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
					</li>
					<li>
						<a href="<?= site_url('Pelanggan/') ?>""><i class=" fa fa-desktop"></i> Data Pelanggan</a>
					</li>
					<li>
						<a href="<?= site_url('Produk/') ?>""><i class=" fa fa-bar-chart-o"></i> Data Produk</a>
					</li>
					<li>
						<a href="<?= site_url('Admin/') ?>"><i class="fa fa-qrcode"></i> User Sistem</a>
					</li>
					<li>
						<a href="<?= site_url('Penjualan/') ?>"><i class="fa fa-edit"></i> Transaksi </a>
					</li>
					<li>
						<a href="<?php echo base_url() . 'auth2/logout' ?>"><i class="fa fa-fw fa-file"></i> Keluar</a>
					</li>
				</ul>

			</div>

		</nav>
		<!-- /. NAV SIDE  -->
		<div id="page-wrapper">
			<div id="page-inner">