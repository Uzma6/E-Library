<?php
session_start();
if(!$_SESSION['member_id']){
  echo "
    <script>
    window.location.href='login.php';
    </script>
  ";
}
$user=$_SESSION['member_id'];
include "member-header.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Books</title>	
</head>
<body style="background-image: url('wallpaper/book_wpr.jpg'); background-size: cover;">
		
	<center><p ><font size='8px' color='white'><b>E-BOOKS</font></p></center>
</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px; margin-top:0px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="textbooks.php?name=first&user=<?= $user?>">First Year Text books - Semester 1 and 2:</a><b></font></p>

</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="textbooks.php?name=second&user=<?= $user?>">Second Year Text books - Semester 3 and 4:</a><b></font></p>
												
						
</div>

<div id="down " style="background-color:white;opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="textbooks.php?name=third&user=<?= $user?>">Third Year Text books - Semester 5 and 6:</a><b></font></p>
												
						
</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="textbooks.php?name=fourth&user=<?= $user?>">Fourth Year Text books - Semester 7 and 8:</a><b></font></p>
						
</div>
</div>

</body>
</html>