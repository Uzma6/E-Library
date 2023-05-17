<html>

	<?php 
	session_start();
	if (!isset($_SESSION['member_id'])) {
		  header("location:login.php");
		}?>
<head>
	
</head>
<body>
	<?php include "./member-header.php"; ?>
	<center><p ><font size='8px' color='black'><b>Borrowed</font></p></center>
		<div class="container-fluid">
  <div class="row">
	
<?php
	$name=$_SESSION['member_id'];

	include("connection.php");
	$qry="select b.id,b.book_name,b.book_image,b.book_author_name,b.category,b.filepath, w.issue_date, w.due_date from books b, borrowed w where (b.id=w.book_id and w.member_id='$name' and status!='returned')";
	$res=mysqli_query($conn,$qry)or die($conn->connect_error);

?>
	
    	  
<?php $i=1;
if(mysqli_num_rows($res)>0){
	?><table id="example1" class="table table-bordered table-striped">
		  	<tr><th>SL no</th><th>Book Name</th><th>Book Image</th><th>Author name</th><th>Category</th><th>Issue Date</th><th>Due Date</th><th>Actions</tr>
		  		<?php
while($book=mysqli_fetch_assoc($res)){?>
	<tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $book['book_name'] ?></td>
                                        <td><img src="images/<?= $book['book_image']?>" alt="Image not found" style="width: 50px; height: 50px;"></td>
                                        <td><?= $book['book_author_name'] ?></td>
                                        
                                        <td><?= $book['category'] ?></td>
                                        <td><?= $book['issue_date'] ?></td>
                                        <td><?= $book['due_date'] ?></td>
                                        
                                        <td><a href="textbook/<?= $book['filepath']?>">View</a>
                                        <a href="re.php?user=<?= $name?>&book=<?= $book['id']?>">Renew/Return</a></td>

                                    </tr><?php }}

                                    else echo "<h3>Current status: No books borrowed</h3>";
                                    ?>
</table></div></div>
</body>
</html>