<html>
<body>

<?php

include "connection.php";
include "admin-header.php";
echo"<h1>Borrow requests</h1>";
$qry="select r.book_id, m.member_id, m.mem_name, b.book_name from request r, member m, books b where (r.member_id=m.member_id and b.id=r.book_id)";
$res=mysqli_query($conn,$qry);

if(mysqli_num_rows($res)>0){

?>

<div class="container-fluid">
  <div class="row">
<div class="table-responsive">
  <table id="example1" class="table table-bordered table-striped"></div>
  	<tr><th>Member Id</th><th>Member Name</th><th>Book Id</th><th>Book Name</th><th>Issue</th></tr>
<?php
while($row=mysqli_fetch_assoc($res))
{
	echo "<tr><td>".$row['member_id']."</td>";
	echo "<td>".$row['mem_name']."</td>";
	echo "<td>".$row['book_id']."</td>";
	echo "<td>".$row['book_name']."</td>";
	?>
	<td><a href="issued.php?book=<?=$row['book_id']?>&member=<?=$row['member_id']?>"><input type="button" value="Issue" style="background-color: lightblue;"/></a></td></tr>
<?php
}
}
else{ 
echo "<h3>No borrow requests so far</h3>";
}
?>
</table>
</div>
</body>
</html>