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
	<h1>Delete A Member</h1>
<form action="delete_member.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			<label>Enter Member ID:</label>
			<input class="form-control" name="name" type="text"/>
			</div>
			<div class="form-group">
			<input class="btn btn-primary" name="sub" type="submit"/>
			</div>
		</form>
		<?php
			if(isset($_POST['sub'])){
				$mid = $_POST['name'];
				$con = mysqli_connect('localhost','root','','library');
				$query="delete from member where member_id='$mid'";
				$result = mysqli_query($con,$query);
				if($result == true){
					echo "
						<script>
						alert('Member has been deleted');
						</script>
					";
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