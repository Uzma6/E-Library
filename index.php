<?php 
session_start();
if (isset($_SESSION['customer'])) {
  header("location:cust-index.php");
}

include("connection.php");
error_reporting(0);

?>
<!DOCTYPE html>
<html>
<head>
<title>E-Library</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Library" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<link href="css/font-awesome.css" rel="stylesheet"> 

</head>

<style>
	.card
	{
		background-color: yellow;
		background-size: cover;
		font-size: 25px;
	}
</style>

<body>
				<ul class="card">
					<li><a href="index.php" >Home</a></li>
					<li><a href="login.php" >Member Login</a></li>
					<li><a href="admin-index.php">Admin Login</a></li>
				</ul>	
		
					<div class="logo">
				<b><p style="color:white; font-size:55px; position: relative; left:24%; top:30px;">Welcome to Supreme Library</p></b>
			</div>
					
				<style>
					body{ background-image: url("wallpaper/library1.jpg"); 
					background-size:cover;}
				</style>
<?php
			include("vision.html");  ?>
</body>
</html>