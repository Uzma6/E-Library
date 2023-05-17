<?php
session_start();
if(!$_SESSION['user']){
	echo "
		<script>
		window.location.href='login.php';
		</script>
	";
}
include "header2.php";
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css"/>
</head>
<body>

	<h1>Delete A Book</h1>
<form action="delete_book.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Enter Book ID:</label>
			<input class="form-control" name="id" type="text"/>
			</div>
			<div class="form-group">
			<input class="btn btn-primary" name="sub" type="submit"/>
			</div>
		</form>
		<?php
			if(isset($_POST['sub'])){
				$bookname = $_POST['name'];
				include("connection.php");
				$query="delete from book_store where book_name='$bookname'";
				$result = mysqli_query($con,$query);
				if($result == true){
					mysqli_query($conn,"insert into activity(function,material,id,date) values ('Edit','Question Bank','$id',CURRENT_DATE)");
					echo "
						<script>
						alert('Book has been deleted');
						</script>
					";
				}
				else{
					echo "
						<script>
						alert('Something went wrong!');
						</script>
					";	
					echo "oho prito meray naal wya karlay";
				}
				
			}
		?>
</body>
</html>