<?php
session_start();
if(isset($_SESSION['user']))
{
	header("location:admin-index.php");
}

include("connection.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Login Page" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

</head>
<body>


<div class="header">
		<div class="container">
			<?php 
			if(isset($_SESSION['customer']))
			{
				
			?>
			<div class="header">
				<b style="color: green;"><b>Welcome </b><?php echo $cust; ?></b>
			</div>

			<?php
			}
			?>		</div>
					
				</div>			
</div>

	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Admin Login</h3>
					<form action="" method="post">Enter the Admin Id
						<div class="key">
							<input  type="text" value="" name="user" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="true">
							<div class="clearfix"></div>
						</div>Enter the Password
						<div class="key">
							<input  type="password" value="" name="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="true">
							<div class="clearfix"></div>
						</div>
						<button class="btn btn-lg btn-block" style="background-color: dodgerblue; color:white;"   name="submit" value="Login" type="Submit">Login</button> 
						<button class="btn btn-lg btn-block" style="background-color: tomato; color:white;" name="button" value="Back" type="button" onclick="location.href='index.php'">Back</button> 
					</form>

					<?php

						if(isset($_POST['submit']))
						{
						$email= $_POST['user'];
						$passwd= $_POST['Password'];

						if($email != "" && $passwd != ""){
							$query= "SELECT * from admin where admin_name='$email' && admin_password='$passwd'";
							$data= mysqli_query($conn, $query);
							$total= mysqli_num_rows($data);
							if($total == 1){
									$_SESSION['user']= $email;
									echo "<script type='text/javascript'>  window.location='admin-index.php'; </script>";
							}
							else{
								echo "<br/><div style='background-color:pink; width:50%';> Invalid Email or Password</div>";
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