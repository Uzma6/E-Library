<?php 
    include "admin-header.php";
    include "connection.php";

    $query = mysqli_query($conn," select * from borrowed where member_id='".$sid."' AND book_id='".$bid."' AND Return_Date IS NULL" ) or die(mysqli_error($conn));


$row = mysqli_fetch_array($query);
if($row!=NULL)
{ 
$duedate1=$row["due_date"];
$returndate1=date("Y/m/d");
$returndate=date_create($returndate1);
$duedate=date_create($duedate1);
$diff=date_diff($returndate,$duedate);
$fine;
$temp = $diff->format("%a");
$temp1=number_format($temp);

$datediff=$temp;

if($datediff>0)
{
  $fine=$datediff*5;
  echo $fine;
  $query1 = mysqli_query($conn," update borrowed set fine='".$fine."'  where borrow.member_id='".$sid."' AND book_id='".$bid) or die(mysqli_error($conn));s
    echo "<div style=\"color: #ffffff;\"><h4>Fine=".$fine."</h4></div>";
}
}
?>