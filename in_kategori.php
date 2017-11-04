<?php
	session_start();
	include 'koneksi.php';
	$cat=$_POST['kategori'];
	$sql="INSERT INTO kategori (kategori) VALUES ('$cat')";
	if (mysqli_query($conn,$sql)) {
		echo "<script>alert('Kategori berhasil dimasukkan')</script>";
		header("location:dash.php");
	}else{
		echo "<script>alert('Kategori gagal dimasukkan')</script>";
		header("location:dash.php");
	}
?>