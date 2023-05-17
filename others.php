<html>
<?php 
session_start();
if (!isset($_SESSION['member_id'])) {
  header("location:login.php");
}
$name=$_SESSION['member_id'];
 include "./member-header.php"; ?>

<div class="container-fluid">
  <div class="row">
  
       <center><b><p style="font-size:39px;">Other members</p><br/><br/></b></center>

      <div class="table-responsive">
        
          
                  
  <table id="example1" class="table table-bordered table-striped">
</div>

<?php
require("connection.php");
?><tr><th>Member Id</th><th>Member Name</th></tr>
<?php $query2 = mysqli_query($conn," select * from member where member_id!= '".$name."'") or die($conn->connect_error);

while($row = mysqli_fetch_array($query2)){
?>
<tr><td><?php echo $row["member_id"]; ?></td>
<td><?php echo $row["mem_name"]; ?></td><tr>
<?php } ?>
</table>

</div></html>