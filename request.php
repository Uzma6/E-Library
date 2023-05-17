<?php 

if(isset($_GET['sub']))
{
	
	$val=$_GET['returnorrenew'];
	include "connection.php";
	echo "<script>alert('Sucess')</script>";
	$user=$_GET['user'];
    $book=$_GET['book'];
	if($val=="Renew")
	{
		$qry="update borrowed set status='Renewrequest' where member_id='".$user."' and book_id='".$book."'";
		$res=mysqli_query($conn,$qry)or die(mysqli_error($conn));
	}
	else
	{
		$qry="update borrowed set status='Returnrequest' where member_id='".$user."' and book_id='".$book."'";
		$res=mysqli_query($conn,$qry)or die(mysqli_error($conn));
	}
	
	header("location:borrowed.php");
}
?>