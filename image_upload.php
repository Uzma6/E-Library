<!DOCTYPE html>
<html>
<head>


<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">
 
  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>
       
      <div>
          <button type="submit" name="upload">Upload image</button>
        </div>
  </form>
</div>
</body>
</html>

<?php
  $msg = "";
  $conn = mysqli_connect("localhost", "root", "", "library");
  if (isset($_POST['upload'])) {
 if($_FILES['uploadfile']['size'] != 0){
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "images/".$filename;
         
    if(!$conn){
  die("Connection failed ".mysql_connect_error());
}else{
    $sql = "INSERT INTO image VALUES ('$filename')";
 
        mysqli_query($conn, $sql);
         
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }

  }}
 $result =mysqli_query($conn, "SELECT image_name FROM image");

 if($result->num_rows > 0){ ?> 
        <?php while($row = mysqli_fetch_assoc($result)){ ?> 
            <img src="image/<?= $row['image_name'] ?>" alt="Image not found" style="width: 130px; height: 100px;">
        <?php } ?> 
    
<?php }else{ ?> 
    <p class="status error">Image not found</p> 
<?php }} ?>