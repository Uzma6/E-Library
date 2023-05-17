<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8" />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<?php
include("./member-header.php"); ?> 

<style>
body {
  background-image: url('wallpaper/searchpage.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.table{
  color: #f1f1f1;
}
label {
    cursor: pointer;
    color: #ffffff;
    display: block;
}
input[type='text'],
  input[type='password'] {
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
    margin-top: 10px;
  }
  .btn{
    color: #f1f1f1;
  }

  h1{
    color:white;
    position: relative;
    left:50%;
  }
</style>
<div style="color: #ffffff;">
<center><p ><font size='8px' color='white'><b>Search</font></p></center>
</div>
<div class="container">
  <form class="form-horizontal" action="#" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Search</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="detail" placeholder="Enter search detail" name="detail">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="search">Search</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>


<?php
require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--<title>Bootstrap Example</title>-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php
if(isset($_POST['search'])){

$detail=$_POST["detail"];
  
$query = mysqli_query($conn," select * from books where books.book_name LIKE '%".$detail."%'" ) or die(mysqli_error($conn));
$no=mysqli_num_rows($query);
if($no>0){
?>
    <div class="container">
    <div style="color: #ffffff;">
      <h1><?php echo "Found ".$no." result(s)"; ?>
      <h2 align="center">Book Details</h2>
             </div>
      <table class="table table-hover">
        <thead>
        <tr>
          <th>Book Id</th>
          <th>Book Name</th>
          <th>Author</th>
          <th>Category</th>
  
        </tr>
      </thead>

      <?php
      while($row = mysqli_fetch_array($query)){
        ?>
<tr>
<td><?php echo $row["id"]; ?></td>
<td><?php echo $row["book_name"]; ?></td>
<td><?php echo $row["book_author_name"]; ?></td>
<td><?php echo $row["category"]; ?></td>

</tr>
<?php
}
?></table><?php
}
else echo "<h1>No book found<h1>";

}?>
      
    </div>
    </body>
    </html>
</table>
</div>
</body>
</html>
