<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #2980B9;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../styles/style.css"/>
</head>

<body>
<nav class="navbar navbar-default">
  			<div class="container-fluid">
   				 <div class="navbar-header">
    				  <a class="navbar-brand" href="#">Library</a>
    			 </div>
				    <ul class="nav navbar-nav">
				      <li class="active"><a href="admin-index.php">Dashboard</a></li>
				      <li><a href="books.php">Books</a></li>
				      <li><a href="qb.php">Question Bank</a></li>
				      <li><a href="videos.php">Videos</a></li>
				      <li><a href="members.php">Members</a></li>  
              <li><a href="bhistory.php">Borrow History</a></li>   
              <li><a href="issue_book.php">Issue Book</a></li>
              <li><a href="admin_re.php">Book renewal/return</a></li>
				    </ul>	
    <ul class="nav navbar-nav navbar-right">
      <li><div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Personal settings</button>
  <div id="myDropdown" class="dropdown-content">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#change">Change Password</a>
    <a href="./admin-logout.php">Logout</a>
  </div>
</div></li>
    </ul>
  </div>
</nav>
<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="update_del" enctype="multipart/form-data" method="post">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
            <div class="col-12">
                <input type="password" name="new_pass" placeholder="Enter New Password"> 
            </div>
            <br>
            <div class="col-12">
                <input type="password" name="c_new_pass" placeholder="Confirm New Password"> 
            </div>
              </div>
            </div>
            <div class="col-12">
              <input name="ch" type="submit" class="btn btn-primary add-category" value="Change Password">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(isset($_POST['ch']))
{
    include_once("./classes/Database.php");
    $db = new Database();
    $con = $db->connect();

  $uname= $_SESSION['user'];
  $new_pass= $_POST['new_pass'];
  $c_new_pass= $_POST['c_new_pass'];

  if($new_pass == $c_new_pass){
      $q2= $con->query("UPDATE admin SET admin_password='$new_pass' WHERE admin_name='$uname'");
      echo "<script type='text/javascript'>alert('Password Updated');</script>";
  }
  else{
    echo "<script type='text/javascript'>alert('Passwords Not Matched');</script>";
  }
}

?>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
