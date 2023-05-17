<?php 
session_start();
if (!isset($_SESSION['user'])) {
  header("location:admin.php");
}

 include "./admin-header.php"; ?>

<div class="container-fluid">
  <div class="row">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css"/>
    <?php

    $admin= $_SESSION['user'];

    ?>
       <b><p style='font-size:40px;'>Welcome <?php echo $admin ?></p></b>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          
         <?php
          $servername= "localhost";
          $username= "root";
          $password= "";
          $dbname= "library";

          $conn= mysqli_connect($servername,$username,$password,$dbname);
          $query1 = mysqli_query($conn," select * from admin where admin_name='".$admin."'");
          $row1 = mysqli_fetch_array($query1);?>
         
        </table>
      </div> 

    </main>
  </div>
</div>

<?php 
include("connection.php");

$qry="select * from activity order by inc desc limit 20";

$res=mysqli_query($conn,$qry);
if(mysqli_num_rows($res)){
?><h3>Your previous activities</h3>
<table id="example1" class="table table-bordered table-striped"><tr><th>Function</th><th>Thing</th><th>Id</th><th>Date</th></tr>
<?php
while($row=mysqli_fetch_assoc($res))
{
  echo "<tr><td>".$row['function']."</td>";
  echo "<td>".$row['material']."</td>";
  echo "<td>".$row['id']."</td>";
  echo "<td>".$row['date']."</td></tr>";

}}


?>