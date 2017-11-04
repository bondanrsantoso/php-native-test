<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/material-icon.css"  media="screen,projection"/>
		<title>Dashboard</title>
		<style type="text/css">
			
		</style>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	</head>
	<body>
		<header>
			<div class="navbar-fixed">
				<nav class="teal">
					<div class="nav-wrapper">
						<ul class="left">
							<li><a href="#!" data-activates="sidebar" class="btn-side left"><i class="material-icons">menu</i></a></li>
						</ul>
						<ul class="right">
							<li><a href="logout.php" class="waves-effect waves-light"><i class="material-icons left">input</i>Log-Out</a></li>
						</ul>
					</div>
				</nav>
			</div>
			<ul class="side-nav" id="sidebar">
				<li class="active"><a href="kategori.php">Kategori</a></li>
				<li><a href="input.php">Pembelian</a></li>
				<li><a href="tabel.php">Tabel Pembelian</a></li>
			</ul>
		</header>
		<article>
			<div class="section teal white-text center-align">
				<h1 class="center-align">Input Kategori Produk</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<form action="in_kategori.php" method="post">
							<div class="input-field">
								<input type="text" name="kategori" id="kategori">
								<label for="kategori">Nama Kategori</label>
							</div>
							<button type="submit" class="btn waves-effect waves-light">Submit<i class="material-icons right">send</i></button>
						</form>
					</div>
				</div>
			</div>
		</article>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$(".button-collapse, .btn-side").sideNav({menuWidth:250});
				$('.side-nav li a').addClass("waves-effect waves-teal");
			});
		</script>
	</body>
</html>