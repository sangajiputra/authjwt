<!doctype html>
<html lang="en">

<head>
	<title>Authjwt | API Documentation</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="<?= config('App')->assets ?>/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= config('App')->assets ?>/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= config('App')->assets ?>/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?= config('App')->assets ?>/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="<?= config('App')->assets ?>/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?= config('App')->assets ?>/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= config('App')->assets ?>/img/favicon.png">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/default.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand" style="height: 50px;">
				<h4 style="position: relative;bottom: 10px;"><b>AUTHJWT</b></h4>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?= config('App')->baseURL ?>/Documentation" class="<?php if($page == 'Dashboard'){ echo "active"; } ?>"><span>Dashboard</span></a></li>
            <li><a href="<?= config('App')->baseURL ?>/Documentation/menu/daftar" class="<?php if($page == 'daftar'){ echo "active"; } ?>"><span>Register User</span></a></li>
						<li><a href="<?= config('App')->baseURL ?>/Documentation/menu/login" class="<?php if($page == 'login'){ echo "active"; } ?>"><span>Login User</span></a></li>
						<li><a href="<?= config('App')->baseURL ?>/Documentation/menu/mahasiswa" class="<?php if($page == 'mahasiswa'){ echo "active"; } ?>"><span>Mahasiswa</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
