<?php
session_start();
if(isset($_SESSION['member_id']))
{
	header("location:member-index.php");
}

include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
<title>Member Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Login Page" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

</head>
<body>

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Member Login</h3>
					<form action="" method="post">Enter the Member Id
						<div class="key">
							<input  type="text" value="" name="member_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="true">
							<div class="clearfix"></div>
						</div>Enter the Password
						<div class="key">
							<input  type="password" value="" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="true">
							<div class="clearfix"></div>
						</div>
						<button class="btn btn-lg btn-block" style="background-color: dodgerblue; color:white;"   name="submit" value="Login" type="Submit">Login</button> 
						<button class="btn btn-lg btn-block" style="background-color: tomato; color:white;" name="button" value="Back" type="button" onclick="location.href='index.php'">Back</button><br/>

						<div style="font-size: 20px;">New member? <a style="background-color: lightblue; font-color:white;" href="register.php">Sign Up</a></div>
					</form>

					<?php

						if(isset($_POST['submit']))
						{
						$id= $_POST['member_id'];
						$passwd= $_POST['Password'];

						if($id != "" && $passwd != ""){
							$query= "SELECT * from member where member_id='$id' && mem_password='$passwd'";
							$data= mysqli_query($conn, $query);
							$total= mysqli_num_rows($data);
							if($total == 1){
									$_SESSION['member_id']= $id;
									echo "<script type='text/javascript'>  window.location='member-index.php'; </script>";
							}
							else{
								echo "<div style='background-color:pink; width:50%;'> Invalid Id or Password</div>";
							}
						}
						else{
							echo "All Fields Required";
						}
					}
					?>
				</div>
				</div>
			</div>
		</div>


</body>
</html>