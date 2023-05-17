<?php

include "connection.php";
include "member-header.php";

$name=$_GET['name'];
if($name=="first")
{
	$query="SELECT * from qb where category='1st Year'";
    $head="1st Year";
}
else if($name=="second")
{
	$query="SELECT * from qb where category='2nd Year'";
    $head="2nd Year";
}
else if($name=="third")
{
	$query="SELECT * from qb where category='3rd Year'";
    $head="3rd Year";
}
else 
{
	$query="SELECT * from qb where category='4th Year'";
    $head="4th Year";
}

echo "<h2>".$head." Question Bank</h2>";
?>

<div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Subject</th>
                                <th>View</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, $query);

                                $i = 1;
                                while($qb= mysqli_fetch_assoc($result)):
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $qb['subject'] ?></td>
                                        <td><a href="qb/<?= $qb['filepath']?>">View</a>
                                    </tr>
                            <?php
                                endwhile;
                            ?>
                            </tbody>
                        </table>
                    </div>
                    