<?php 
    include "connection.php";

    $user=$_GET['user'];
    $book=$_GET['book'];
    $query = mysqli_query($conn," select * from borrowed where member_id='".$user."' AND book_id='".$book."'") or die(mysqli_error($conn));


$row = mysqli_fetch_array($query);
if($row!=NULL)
{ 
$duedate1=$row["due_date"];
$returndate1=date("Y/m/d");
$returndate=date_create($returndate1);
$duedate=date_create($duedate1);
$diff=date_diff($returndate,$duedate);
$fine;
$temp = $diff->format("%a");
$temp1=number_format($temp);

$datediff=$temp;

if(($returndate>$duedate)&&($datediff>0))
{
  $fine=$datediff;
  $s="update borrowed set fine='".$fine."' where member_id='".$user."' AND book_id='".$book."'";
  $query1 = mysqli_query($conn,$s) or die(mysqli_error($conn));
}
else {
$fine=0;
$s="update borrowed set fine=0 where member_id='".$user."' AND book_id='".$book."'";
$query1 = mysqli_query($conn,$s) or die(mysqli_error($conn));
}
}
?>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Library" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<link href="css/font-awesome.css" rel="stylesheet"> 
<style>
	.card
	{
		background-color: yellow;

		font-size: 25px;
	}
	table, th, td {
  border: 1px solid black;
}
table {
  width: 50%;
  border-collapse: collapse;
}
th,td{ height:30px; }
</style>
</head>
<body>
				<ul class="card">
					<a href="borrowed.php" style="position:relative; left:95%; color:blue;">Back</a>
				</ul>	
<br/>
	<form action="request.php" method="GET">
		<input type="text" name="user" value="<?= $user?>" hidden/>
		<input type="text" name="book" value="<?= $book?>" hidden/>
  <label>Total Fine:</label>
  <input type="text" name="fine" value="<?= $fine?>" disabled><br><br>
  <label>Return or renew:</label>
  <select name="returnorrenew">
  	<option value="Renew">Renew</option>
  	<option value="Return">Return</option>
  </select><br><br>
  <input type="submit" value="Submit" name="sub" style="background-color: dodgerblue;color:white;">
</form>
</body>
</html>

