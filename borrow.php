<?php
include "connection.php";

$user=$_GET['user'];
$book_id=$_GET['name2'];
$cgry=$_GET['name1'];
$qry="insert into request(book_id,member_id) values ('$book_id','$user')";

$result=mysqli_query($conn,$qry);

if($result)
{
	echo"<script>alert('Request sent to admin')</script>";
}
else
{
echo"<script>alert('Request failed')</script>";
}
header("location:textbooks.php?name=$cgry&user=$user");
?>