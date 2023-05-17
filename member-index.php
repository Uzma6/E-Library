<html>
<?php 
session_start();
if (!isset($_SESSION['member_id'])) {
  header("location:login.php");
}

 include "./member-header.php"; ?>

<div class="container-fluid">
  <div class="row">

    <?php

    $name= $_SESSION['member_id'];
    include("connection.php");
    $res=mysqli_query($conn,"select mem_name from member where member_id='$name'");
    $row=mysqli_fetch_assoc($res);
    echo "<b><p style='font-size:40px; color:purple;'> Welcome, ".$row['mem_name']."</p></b>";
    ?>
       <h3>Your Personal Details</h3><br/>

      <div class="table-responsive">
        <div class="col-2">
        <a href="edit_member.php?memberUpdate=<?= base64_encode($name)?>" class="btn btn-primary btn-sm" style="font-size:15px; position:relative; left:90%">Update Details</a><br/><br/>
  <table id="example1" class="table table-bordered table-striped">
</div>

<?php
require("connection.php");
$query2 = mysqli_query($conn," select * from member where member_id='".$name."'") or die($conn->connect_error);

$row = mysqli_fetch_array($query2);
?>
<tr><th>Member Id</th><td><?php echo $row["member_id"]; ?></td></tr>
<tr><th>Member Name</th><td><?php echo $row["mem_name"]; ?></td></tr>
<tr><th>City</th><td><?php echo $row["city"]; ?></td></tr>
<tr><th>State</th><td><?php echo $row["state"]; ?></td></tr>
</table>
  </div>
         <h3>Borrow history</h3><br/>

         <?php
         include("connection.php");

         $qry="select b.book_id,k.book_name,b.issue_date,b.due_date from borrowed b, books k where (member_id='".$name."'and k.id=b.book_id)" or die($conn->connect_error);
         $res=mysqli_query($conn,$qry);

         if(mysqli_num_rows($res)>0)
         {
          ?>
          <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>Book Id</th>
                                <th>Book Name</th>
                                <th>Borrowed on</th>
                                <th>Due Date</th>
                            </tr>
          <?php
          while($row=mysqli_fetch_assoc($res))
          {
            echo "<tr><td>".$row['book_id']."</td>";
            echo "<td>".$row['book_name']."</td>";
            echo "<td>".$row['issue_date']."</td>";
            echo "<td>".$row['due_date']."</td></tr>";
          }
         }
         else echo "No borrow history";



         ?>


</div>
</div></html>