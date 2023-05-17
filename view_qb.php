<?php
session_start();
if(!$_SESSION['member_id']){
  echo "
    <script>
    window.location.href='login.php';
    </script>
  ";
}
include "member-header.php";
?>
<html>
<head>
	<style>
		body
		{
			background-image: url("wallpaper/qb_wpr.jpg");
			background-size:cover;
		}
	</style>

<body>
<meta charset="utf-8">
<title>Question Papers</title>	
</head>
<body style="background-image: url('wallpaper/qb_wpr.jpg'); background-size: cover;">
		
	<center><p ><font size='8px' color='white'><b>Question Banks</font></p></center>
</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px; margin-top:0px; width: 1295px; height:auto">
	<p ><a href="qb1.html"><font size='6px' color='#2266FF'><b><a href="qbank.php?name=first">First Year Question Banks - Semester 1 and 2:</a><b></font></a></p>

</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
<p ><a href="qb1.html"><font size='6px' color='#2266FF'><b><a href="qbank.php?name=second">Second Year Question Banks - Semester 3 and 4:</a><b></font></a></p>
												
						
</div>

<div id="down " style="background-color:white;opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><a href="qb1.html"><font size='6px' color='#2266FF'><b><a href="qbank.php?name=third">Third Year Question Banks - Semester 5 and 6:</a><b></font></a></p>
												
						
</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><a href="qb1.html"><font size='6px' color='#2266FF'><b><a href="qbank.php?name=fourth">Fourth Year Question Banks- Semester 7 and 8:</a><b></font></a></p>
						
</div>
</div>

</body>
</html>