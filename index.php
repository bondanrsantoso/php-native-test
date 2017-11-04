<?php
	session_start();
	if (isset($_SESSION['uname'])) {
		header("location:dash.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/material-icon.css"  media="screen,projection"/>
		<title>Tes Toko</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	</head>
	<body class="teal darken-3">
		<div class="container">
			<div class="row">
				<div class="col s12 m4 offset-m4">
					<div class="card white center">
						<div class="card-content">
							<span class="card-title">Login</span>
							<form action="validate.php" method="post">
								<div class="input-field">
									<input type="text" name="uname" required id="uname">
									<label for="uname">Username</label>
								</div>
								<div class="input-field">
									<input type="password" name="pwd" required id="pwd">
									<label for="pwd">Password</label>
								</div>
								<button type="submit" class="btn green waves-effect waves-light">Masuk<i class="material-icons right">send</i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>