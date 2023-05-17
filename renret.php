<?php
include "connection.php";
$re=$_GET['function'];
$user=$_GET['user'];
$book=$_GET['book'];
if($re=='renew')
{
$i=date('Y-m-d',strtotime("+15 days"));
$mb=$user."-".$book;
$qry="update borrowed set issue_date=CURRENT_DATE,due_date='$i',fine=0,status='borrowed' where member_id='".$user."' and book_id='".$book."'";
mysqli_query($conn,"insert into activity(function,material,id,date) values ('Renew','Member-Book','$mb',CURRENT_DATE)");
}
else
{
$qry="update borrowed set status='returned' where member_id='".$user."' and book_id='".$book."'"; 
$mb=$user."-".$book;
mysqli_query($conn,"insert into activity(function,material,id,date) values ('Return','Member-Book','$mb',CURRENT_DATE)");
}
$res=mysqli_query($conn,$qry);

header("location:admin_re.php");
?>