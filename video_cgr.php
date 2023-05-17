<?php

include "connection.php";
include "member-header.php";

$name=$_GET['name'];
if($name=="first")
{
	$query="SELECT * from video where category='1st Year'";
    $head="1st Year";
}
else if($name=="second")
{
	$query="SELECT * from video where category='2nd Year'";
    $head="2nd Year";
}

else if($name=="third")
{
	$query="SELECT * from video where category='3rd Year'";
    $head="3rd Year";
}

else 
{
	$query="SELECT * from video where category='4th Year'";
    $head="4th Year";
}


echo "<h2>".$head." Videos<h2>";
?>
<div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Video Link</th>
                                <th>Image</th>
                                <th>Subject</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, $query);

                                $i = 1;
                                while($video= mysqli_fetch_assoc($result)):
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><a href="<?= $video['link'] ?>"><button type="button" style="background-color: blue; color:white;">Click to watch</button></a></td>
                                        <td><img src="images/<?= $video['video_image']?>" alt="Image not found" style="width: 50px; height: 50px;"></td>
                                        <td><?= $video['subject'] ?></td>
                                        <td><?= $video['description'] ?></td>
                                  
                                        
                                    </tr>
                            <?php
                                endwhile;
                            ?>
                            </tbody>
                        </table>
                    </div>
