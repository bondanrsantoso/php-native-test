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
				<h1 class="center-align">Tabel Pembelian Produk</h1>
			</div>
			<div class="container">
				<div class="row">
					<div class="col s12">
						<table>
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Kategori</th>
									<th>Harga Awal</th>
									<th>Harga Akhir</th>
									<th>Diskon</th>
									<th>Qty</th>
									<th>Total Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php
									include 'koneksi.php';
									$sql="SELECT product.nama AS name, product.price_0 AS price, product.price_1 AS final, product.disc AS discount, product.qty AS quantity, product.total AS p_total, kategori.kategori AS category FROM product INNER JOIN kategori ON product.id_cat=kategori.id";
									$query=mysqli_query($conn,$sql);
									$i=1;
									while ($row=mysqli_fetch_assoc($query)) {
										echo "<tr>";
										echo "<td>".$i."</td>";
										echo "<td>".$row['name']."</td>";
										echo "<td>".$row['category']."</td>";
										echo "<td>".$row['price']."</td>";
										echo "<td>".$row['final']."</td>";
										echo "<td>".$row['discount']."</td>";
										echo "<td>".$row['quantity']."</td>";
										echo "<td>".$row['p_total']."</td>";
										$i++;
									}
								?>
							</tbody>
						</table>
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
				$('select').material_select();
			});
		</script>
	</body>
</html>