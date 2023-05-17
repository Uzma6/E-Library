<?php
require_once "connection.php";

if(isset($_POST['edit_video'])) {
    $id = $_POST['video_id'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
    $link = $_POST['link'];
    $subject = $_POST['subject'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $folder = "images/".$filename;

     if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

    
    $data = mysqli_query($conn, "SELECT * FROM video WHERE video_id = '$id' ");
    if($data->num_rows==0)
    	print "Query failed";
  if($_FILES['uploadfile']['size'] != 0){
    $result = mysqli_query($conn, "UPDATE video SET video_id ='$id', video_image = '$filename', link = '$link', subject = '$subject', category = '$category', description='$description' WHERE video_id = '$id'");
}
else
{
    $result = mysqli_query($conn, "UPDATE video SET video_id ='$id', link = '$link', subject = '$subject', category = '$category', description='$description' WHERE video_id = '$id'");

}
    if($result)
    {
    	print "Result 1";
        move_uploaded_file($tbook_image, '/images/'.$image_name);
        mysqli_query($conn,"insert into activity(function,material,id,date) values ('Edit','Video','$id',CURRENT_DATE)");
        header('location:videos.php');
        $success = "Video updated Successfully.";
    }else
    {
        print("Something Went Wrong");
    }
}