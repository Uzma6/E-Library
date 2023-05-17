

<!DOCTYPE html>
<html lang="en">
<head>
  <!--<title>Bootstrap Example</title>-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body {
  background-image: url('books.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}

  .card
  {
    background-color: darkblue;
    background-size: cover;
    font-size: 25px;
  }

  .card2
  {
    background-color: cornflowerblue;
    background-size: cover;
    font-size: 18px;
    font-family: Arial;
  }

</style>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>Member sign up</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
 <div class="card"><a href="login.php" style="position: relative; left:95%; color:white;">Login</a></div>
 <div class="card2">Note: Please create your own unique id. To avoid duplicity which is not accepted by the system, you can refer other members' ids here -> <select name="ids">
<?php 
include "connection.php";
$qry="SELECT * from member";
$result=mysqli_query($conn,$qry);
$i=0;
while($row = mysqli_fetch_array($result)){
?>
<option><?= $row['member_id'] ?></option>

<?php 
$i++;
}
?>

</select>


 </div>
    <div class="bg-img">
    <div class="container">
      <form method="POST">
        <h1>Sign Up</h1>
        <label for="mid"><b>Create a Member Id</b></label>
        <input type="text" placeholder="Create new Member Id"
          name="mid" required/>
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter your name" name="name" />

        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter your city" name="city" />

        <label for="state"><b>State</b></label>
        <input type="text" placeholder="Enter your state" name="state" />

        <label for="pass"><b>Password</b></label>
        <input type="password" placeholder="Enter the password" name="pass" required
        />

        <label for="c_pass"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm the password" name="c_pass"
          required/>
        <button type="submit"  name="sub"class="btn">Register</button>
      </form>
    </div>
    </div>
  </body>
</html>

<style>
  body,
  html {
    height: 100%;
  }

  * {
    box-sizing: border-box;
  }

  .bg-img {
    /* The image used */
    /*background-image: url('http://www.clker.com/cliparts/D/B/I/0/8/G/signin-png-hi.png');

    /* Control the height of the image */
    min-height: 750px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
  }

  /* Add styles to the form container */
  .container {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
    opacity: 0.9;
    margin-right: 600px;
    margin-top: 20px;
  }
  .container a {
    color: #add8e6;
  }
  .container a:hover {
    color: red;
  }
  /* Full-width input fields */
  input[type='text'],
  input[type='password'] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    margin-top: 10px;
  }

  input[type='text']:focus,
  input[type='password']:focus {
    background-color: #ddd;
    outline: none;
  }

  /* Set a style for the submit button */
  .btn {
    background-color: #4caf50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 50%;
    opacity: 1.0;
    margin-top: 10px;
  }

  .btn:hover {
    opacity: 0.5;
  }
</style>



<?php 
$Color = "white";
if(isset($_POST['sub'])){
include "connection.php";


$mid=$_POST["mid"];
$name=$_POST["name"];
$city=$_POST["city"];
$state=$_POST["state"];
$pwd=$_POST["pass"];
$cpwd=$_POST["c_pass"];

if($pwd==$cpwd)
{
$sql = "INSERT INTO member (member_id,mem_name, city, state, mem_password) VALUES ('".$mid."','".$name."','".$city."','".$state."','".$pwd."')";

if ($conn->query($sql) === TRUE) 
{
  ?>
  <script>alert('Successfully registered')</script>
 <?php
 
}
 else 
{
 echo " Error:" . $conn->error;
}
}
else
{
	$msg = "Passwords are not matching!";
     $msgClass = 'alert alert-dismissible alert-danger';
}
}

?>
