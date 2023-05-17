<?php
session_start();
if(!$_SESSION['user']){
	echo "
		<script>
		window.location.href='login.php';
		</script>
	";
}
include "admin-header.php";
?>

<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css"/>
</head>
<body>
	<h1>Add A New Video</h1>
<form action="add_video.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Enter Video Id:</label>
			<input class="form-control" name="id" type="text"/>
			</div>

			<div class="form-group">
			<label>Enter Video image :</label>
			<input type="file" name="vimage" value=""/>
			</div>

			<div class="form-group">
			<label>Paste Video Link Here:</label>
			<input class="form-control" name="link" type="text"/>
			</div>

			<div class="form-group">
			<label>Subject:</label>
			<input class="form-control" name="subject" type="text"/>
			</div>

			<div class="form-group">
			<label>Choose the category:</label>

			<select name="category" id="category">
 			 <option value="1st Year">1st Year</option>
  			 <option value="2nd Year">2nd Year</option>
  			 <option value="3rd Year">3rd Year</option>
 			 <option value="4th Year">4th Year</option>
			</select><br/>
			</div>

			<div class="form-group">
			<label>Short Description:</label>
			<input class="form-control" name="description" type="text"/>
			</div>

			<input type="submit" name="submit" class="btn btn-primary"/>
		</form>

		<?php
			if(isset($_POST['submit'])){
				$vid=$_POST['id'];
				$link = $_POST['link'];
				$subject = $_POST['subject'];
				$category=$_POST['category'];
				$description=$_POST['description'];
			
				$filename = $_FILES["vimage"]["name"];
    			$tempname = $_FILES["vimage"]["tmp_name"];

    			$folder = "images/".$filename;

    			if (move_uploaded_file($tempname, $folder))  {
            		$msg = "Image uploaded successfully";
        		}else{
           			 $msg = "Failed to upload image";
      			}

				include("connection.php");
				$query="insert into video(video_id,video_image,link,subject,category,description) values('$vid','$filename','$link','$subject','$category','$description')";
				$result = mysqli_query($conn,$query);
				if($result == true){
					mysqli_query($conn,"insert into activity(function,material,id,date) values ('Add','Video','$vid',CURRENT_DATE)");
					echo "
						<script>
						alert('Video has been entered');
						</script>";

				}
				else{

					echo "
						<script>
						alert('Something went wrong!');
						</script>
					";	
					echo "something went wrong";
				}
				
			}
		?>
</body>
</html>
