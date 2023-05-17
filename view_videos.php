<?php
session_start();
if(!$_SESSION['member_id']){
  echo "
    <script>
    window.location.href='login.php';
    </script>
  ";
}
?>
<html>
<head>
</head>

<meta charset="utf-8">
<title>Videos</title>	
</head>
<?php include "member-header.php"; ?>
<body style="background-image: url('wallpaper/video_wpr.jpg'); background-size: cover;">
		
	<center><p ><font size='8px' color='white'><b>Videos<b></font></p></center>
</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px; margin-top:0px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="video_cgr.php?name=first">First Year Syllabus informative videos - Semester 1 and 2:</a></b></font></p>

</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="video_cgr.php?name=second">Second Year Syllabus informative videos - Semester 3 and 4:</a></b></font></p>
												
						
</div>

<div id="down " style="background-color:white;opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="video_cgr.php?name=third">Third Year Syllabus informative videos - Semester 5 and 6:</a></b></font></p>
												
						
</div>

<div id="down " style="background-color:white; opacity:0.7; color:black; padding:10px;margin-top:20px; width: 1295px; height:auto">
	<p ><font size='6px' color='#2266FF'><b><a href="video_cgr.php?name=fourth">Fourth Year Syllabus informative videos- Semester 7 and 8:</a></b></font></p>
						
</div>
</div>

</body>
</html>