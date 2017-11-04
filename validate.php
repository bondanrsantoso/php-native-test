<?php
	session_start();
	include 'koneksi.php';
	$uname=htmlspecialchars($_POST['uname']);
	$pwd=htmlspecialchars($_POST['pwd']);
	$sql="SELECT * FROM user WHERE uname='$uname'";
	$tmp=mysqli_query($conn,$sql);
	$data=mysqli_fetch_assoc($tmp);
	if ($data['uname']==$uname) {
		if ($data['password']==$pwd) {
			$_SESSION['uname']=$uname;
			header("location:dash.php");
		}else{
			echo "<script>alert('Password Salah')</script>";
			header("location:index.php");
			session_unset();
			session_destroy();
		}
	}else{
		echo "<script>alert('Username Salah')</script>";
		header("location:index.php");
		session_unset();
		session_destroy();
	}
?>