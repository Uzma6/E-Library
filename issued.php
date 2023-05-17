<?php
$member=$_GET['member'];
$book=$_GET['book'];

include("connection.php");
$i=date('Y-m-d',strtotime("+15 days"));
$mb=$member."-".$book;
$qry="insert into borrowed (member_id,book_id,issue_date,due_date,status) values ('$member','$book',CURRENT_DATE,'$i','borrowed')";
$qry2="delete from request where (book_id='$book' and member_id='$member')";
mysqli_query($conn,"insert into activity(function,material,id,date) values ('Issue','Member-Book','$mb',CURRENT_DATE)");

$res=mysqli_query($conn,$qry);
$res2=mysqli_query($conn,$qry2);

header("location:issue_book.php");


?>