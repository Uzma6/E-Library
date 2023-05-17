<?php

include("connection.php");

if(isset($_GET['bookDelete']))
{
	$id = base64_decode($_GET['bookDelete']);
	$data = mysqli_query($conn, "SELECT * FROM books WHERE id = '$id' ");

    $result = mysqli_query($conn, "DELETE FROM books WHERE id = '$id' ");
	if($result)
    {
        mysqli_query($conn,"insert into activity(function,material,id,date) values ('Delete','Book','$id',CURRENT_DATE)");
        header('location:books.php');
        $success = "Data Has Been Deleted Successfully.";
    }else{
	    $error = "Something Went Wrong.";
    }

}

else if(isset($_GET['memberDelete']))
{
    $id = base64_decode($_GET['memberDelete']);
    $data = mysqli_query($conn, "SELECT * FROM member WHERE member_id = '$id' ");
    $result = mysqli_query($conn, "DELETE FROM member WHERE member_id = '$id' ");
    if($result)
    {
        mysqli_query($conn,"insert into activity(function,material,id,date) values ('Delete','Member','$id',CURRENT_DATE)");
        header('location:members.php');
        $success = "Data Has Been Deleted Successfully.";
    }else{
        $error = "Something Went Wrong.";
    }

} 

else if(isset($_GET['videoDelete']))
{
    $id = base64_decode($_GET['videoDelete']);
    $data = mysqli_query($conn, "SELECT * FROM video WHERE video_id = '$id' ");

    $result = mysqli_query($conn, "DELETE FROM video WHERE video_id = '$id' ");
    if($result)
    {
        mysqli_query($conn,"insert into activity(function,material,video_id,date) values ('Delete','Video','$id',CURRENT_DATE)");
        header('location:videos.php');
        $success = "Data Has Been Deleted Successfully.";
    }else{
        $error = "Something Went Wrong.";
    }

} 

else if(isset($_GET['qbDelete']))
{
    $id = base64_decode($_GET['qbDelete']);
    $data = mysqli_query($conn, "SELECT * FROM qb WHERE id = '$id' ");

    $result = mysqli_query($conn, "DELETE FROM qb WHERE id = '$id' ");
    if($result)
    {
        mysqli_query($conn,"insert into activity(function,material,id,date) values ('Delete','Question Bank','$id',CURRENT_DATE)");
        header('location:qb.php');
        $success = "Data Has Been Deleted Successfully.";
    }else{
        $error = "Something Went Wrong.";
    }

} 