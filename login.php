<?php 
require_once('enlace.php'); 
$menu='login';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ingreso Sistema</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body background="img/login.jpg">
	 <?php include('inc/menu.php'); ?>
	 <div class="container estatico">
	 	<div class="row mt-5 justify-content-center">
	 		<div class="col-12 col-sm-7 col-md-4  mt-5">
	 			<div class="loginbox">
					<img src="img/img-1.jpg" class="avatar">
					<h1>Login here</h1>
					<form action="">
						<p>User name</p>
						<input type="text" placeholder="Enter Username">
						<p>Passsword</p>
						<input type="password" name="" placeholder="Enter password">
						<a href="dashboard"  class="boton">Login</a>
						<a href="#">Lost you Password?</a>
						<a href="#">Dont't have an account?</a>
					</form>
				</div>
	 		</div>
	 	</div>
	 </div>
				
	<?php include('inc/footer.php'); ?>
  <script src="js/jquery.min.js"></script>
  <script src="js/tether.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>