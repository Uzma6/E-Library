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

</head>
<body>
	<h1>Add A Question Bank</h1>
<form action="add_qb.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Enter an Id for QB:</label>
			<input class="form-control" name="id" type="text"/>
			</div>

			<div class="form-group">
			<label>Enter the subject:</label>
			<input class="form-control" name="subject" type="text"/>
			</div>

			<label>Choose the category:</label>

			<select name="year" id="year">
 			 <option value="1st Year">1st Year</option>
  			 <option value="2nd Year">2nd Year</option>
  			 <option value="3rd Year">3rd Year</option>
 			 <option value="4th Year">4th Year</option>
			</select><br/>
			 <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Question bank</label>
                                </div>
                                <div class="col-md-9"> <input type="file" name="qbfile" value=""/>
                                    
                                </div>
                            </div>

			<input type="submit" name="sub" class="btn btn-primary"/>
		</form>

		<?php
			if(isset($_POST['sub'])){
				$id=$_POST['id'];
				$subject = $_POST['subject'];
				$category = $_POST['year'];
				$qbfile = $_FILES["qbfile"]["name"];
    			$qbtemp = $_FILES["qbfile"]["tmp_name"];   
    			$folder="qb/".$qbfile;
				if (move_uploaded_file($qbtemp, $folder))  {
            $msg = "File uploaded successfully";
        	}else{
            $msg = "Failed to upload file";
      		}

				include("connection.php");
				$query="insert into qb(id,subject,category, filepath) values('$id','$subject','$category','$qbfile')";
				$result = mysqli_query($conn,$query);
				if($result == true){
					mysqli_query($conn,"insert into activity(function,material,id,date) values('Add','Question Bank','$id',CURRENT_DATE)");
					echo "
						<script>
						alert('Question Bank has been entered');
						</script>";

				}
				else{
					echo "
						<script>
						alert('Something went wrong!');
						</script>
					";
				}
				
			}
		?>
</body>
</html>
