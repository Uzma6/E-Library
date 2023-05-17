<html>
<body>

<?php
include("admin-header.php");
include("connection.php");

$qry="select member_id, book_id,status from borrowed where status='Renewrequest' or status='Returnrequest'";
$res=mysqli_query($conn,$qry) or die(mysqli_error($conn));

if(mysqli_num_rows($res)>0)
{?> <h2>Renew/Return</h2>
	<table id="example1" class="table table-bordered table-striped"><tr><th>Member id</th><th>Book Id</th><th>Action</th></tr>
	<?php
	while($row=mysqli_fetch_assoc($res))
	{
		echo "<tr><td>".$row['member_id']."</td>";
		echo "<td>".$row['book_id']."</td>";

		if($row['status']=='Renewrequest')
			{$val="Renew"; 
				$name="renew";
			}
		else{
			$val="Return";
			$name="return";}
	?>
	<td><a href="renret.php?function=<?= $name?>&user=<?= $row['member_id']?>&book=<?= $row['book_id']?>"><input type="button" value="<?= $val?>" style="background-color: mediumpurple; color:white;" /></a></td></tr><?php
	}
}
else
{
	echo "<h2>No renew or return request so far</h2>";
}
?>
</table>
</body>
</html>

