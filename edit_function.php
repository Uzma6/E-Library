<?php
include("connection.php");
//update book
if(isset($_POST['edit_book'])) {
    $id = $_POST['id'];
    $book_name = $_POST['book_name'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"]; 
    $pdffile = $_FILES["pdffile"]["name"];
    $pdftemp = $_FILES["pdffile"]["tmp_name"];   
    $book_author_name = $_POST['book_author_name'];
    $category=$_POST['category'];
    $book_publication_name = $_POST['book_publication_name'];
    $folder = "images/".$filename;
    $folder2="textbook/".$pdffile;
     if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

       if (move_uploaded_file($pdftemp, $folder2))  {
            $msg = "File uploaded successfully";
        }else{
            $msg = "Failed to upload file";
      }

    
    $data = mysqli_query($conn, "SELECT * FROM books WHERE id = '$id' ");
  if(($_FILES['uploadfile']['size'] != 0)&&($_FILES['uploadfile']['size'] != 0)){
    $result = mysqli_query($conn, "UPDATE books SET book_name ='$book_name', book_image = '$filename', category='$category', book_author_name = '$book_author_name', book_publication_name = '$book_publication_name', filepath='$pdffile' WHERE id = '$id'");
}

else if($_FILES['uploadfile']['size'] != 0){
    $result = mysqli_query($conn, "UPDATE books SET book_name ='$book_name', book_image = '$filename', category='$category', book_author_name = '$book_author_name', book_publication_name = '$book_publication_name' WHERE id = '$id'");
}

else if($_FILES['pdffile']['size'] != 0){
    $result = mysqli_query($conn, "UPDATE books SET book_name ='$book_name', category='$category', book_author_name = '$book_author_name', book_publication_name = '$book_publication_name', filepath='$pdffile' WHERE id = '$id'");
}

else
{
    $result = mysqli_query($conn, "UPDATE books SET book_name ='$book_name', category='$category', book_author_name = '$book_author_name', book_publication_name = '$book_publication_name' WHERE id = '$id'");
}
    if($result)
    {
        move_uploaded_file($tbook_image, '/images/'.$image_name);
        
        mysqli_query($conn,"insert into activity(function,material,id,date) values ('Edit','Book','$id',CURRENT_DATE)");
        header('location:books.php');
        $success = "Book Updated Successfully.";
    }else
    {
        $error = "Something Went Wrong";
    }

}

else if(isset($_POST['edit_qb'])) {
    $id = $_POST['id'];
    $subject = $_POST['subject'];
    $category=$_POST['category'];
    $qbfile = $_FILES["qbfile"]["name"];
    $qbtemp = $_FILES["qbfile"]["tmp_name"];   
    $folder="qb/".$qbfile;

    if (move_uploaded_file($qbtemp, $folder))  {
            $msg = "File uploaded successfully";
        }else{
            $msg = "Failed to upload file";
      }
    
    $data = mysqli_query($conn, "SELECT * FROM qb WHERE id = '$id' ");

    if($_FILES['qbfile']['size'] != 0)
        $result = mysqli_query($conn, "UPDATE qb SET id ='$id', subject = '$subject', category='$category', filepath='$qbfile' WHERE id = '$id'");
    else
        $result = mysqli_query($conn, "UPDATE qb SET id ='$id', subject = '$subject', category='$category' WHERE id = '$id'");

    if($result)
    {
        mysqli_query($conn,"insert into activity(function,material,id,date) values ('Edit','Question Bank','$id',CURRENT_DATE)");
        header('location:qb.php');
    }else
    {
        echo("Something Went Wrong");
    }

}

else if(isset($_POST['edit_member'])) {
    $id=$_POST['id'];
    $city = $_POST['city'];
    $state=$_POST['state'];

    
    $data = mysqli_query($conn, "SELECT * FROM member WHERE member_id = '$id' ");
    $result = mysqli_query($conn, "UPDATE member SET city = '$city', state='$state' WHERE member_id = '$id'");


    if($result)
    {
        header('location:member-index.php');
    }else
    {
        echo("Something Went Wrong");
    }
}


