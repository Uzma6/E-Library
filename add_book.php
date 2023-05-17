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
	<h1>Add A Book</h1>
<form action="add_book.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Enter Book Id:</label>
			<input class="form-control" name="id" type="text"/>
			</div>

			<div class="form-group">
			<label>Enter Book Name:</label>
			<input class="form-control" name="name" type="text"/>
			</div>

			<div class="form-group">
			<label>Enter Book image :</label>
			<input type="file" name="uploadfile" value=""/>
			</div>

			<div class="form-group">
			<label>Enter Book Author:</label>
			<input class="form-control" name="author" type="text"/>
			</div>

			<div class="form-group">
			<label>Enter the Category:</label>
			<select name="year" id="year">
 			 <option value="1st Year">1st Year</option>
  			 <option value="2nd Year">2nd Year</option>
  			 <option value="3rd Year">3rd Year</option>
 			 <option value="4th Year">4th Year</option>
			</select><br/></div>

			<div class="form-group">
			<label>Enter Publication name:</label>
			<input class="form-control" name="publication" type="text"/>
			</div>

			<div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Text book</label>
                                </div>
                                <div class="col-md-9"> <input type="file" name="pdffile" value=""/>
                                    
                                </div>
                            </div>
			<input type="submit" name="submit" class="btn btn-primary"/>
		</form>

		<?php
			if(isset($_POST['submit'])){
				$book_id=$_POST['id'];
				$bookname = $_POST['name'];
				$author = $_POST['author'];
				$cgry=$_POST['year'];
				$public = $_POST['publication'];
				$filename = $_FILES["uploadfile"]["name"];
    			$tempname = $_FILES["uploadfile"]["tmp_name"];

				$pdffile = $_FILES["pdffile"]["name"];
    			$pdftemp = $_FILES["pdffile"]["tmp_name"]; 

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

				include("connection.php");
				$query="insert into books(id,book_name,book_image,book_author_name,category,book_publication_name,filepath) values('$book_id','$bookname','$filename','$author','$cgry','$public','$pdffile')";


				$result = mysqli_query($conn,$query);
				if($result == true){
					$act="insert into activity(function,id,material,date) values('Add','$book_id','Book',CURRENT_DATE)";
					mysqli_query($conn,$act);
					echo "
						<script>
						alert('Book has been entered');
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
