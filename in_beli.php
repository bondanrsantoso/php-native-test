<?php
	session_start();
	include 'koneksi.php';
	$nama=$_POST['nama'];
	$cat=$_POST['kategori'];
	$price=$_POST['price'];
	$qty=$_POST['qty'];
	$disc=$_POST['disc'];
	$disc_type=$_POST['disc_type'];
	$final;$total;
	switch ($disc_type) {
			case 'pers':
				$disc=($disc/100)*$price;
				$final=$price-$disc;
				break;
			
			default:
				$final=$price-$disc;
				break;
		}
	$total=$final*$qty;
	$sql="INSERT INTO product (nama,id_cat,price_0,price_1,disc,qty,total) VALUES ('$nama','$cat','$price','$final','$disc','$qty','$total')";
	if (mysqli_query($conn,$sql)) {
		header("location:dash.php");
	}
		
?>