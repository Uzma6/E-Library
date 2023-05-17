<?php

include "connection.php";
include "member-header.php";
$user=$_GET['user'];
$name=$_GET['name'];
if($name=="first")
{
	$query="SELECT * from books where category='1st Year'";
    echo "<h1>1st Year Textbooks</h1>";
}
else if($name=="second")
{
	$query="SELECT * from books where category='2nd Year'";
    echo "<h1>2nd Year Textbooks</h1>";
}
else if($name=="third")
{
	$query="SELECT * from books where category='3rd Year'";
    echo "<h1>3rd Year Textbooks</h1>";
}
else if($name=='fourth')
{
	$query="SELECT * from books where category='4th Year'";
    echo "<h1>4th Year Textbooks</h1>";
}
?>
<br/>
<div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Author Name</th>
                                <th>Publication Name</th>
                                <th>Borrow</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, $query);

                                $i = 1;
                                while($book= mysqli_fetch_assoc($result)){
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $book['book_name'] ?></td>
                                        <td><img src="images/<?= $book['book_image']?>" alt="Image not found" style="width: 50px; height: 50px;"></td>
                                        <td><?= $book['book_author_name'] ?></td>
                                        
                                        <td><?= $book['book_publication_name'] ?></td>
                                        
                                        <?php 
                                        include "connection.php";
                                        $qry="select b.book_id,b.member_id from borrowed b, books k where b.book_id='".$book['id']."' and b.member_id='".$user."' ";
                                        $qry2="select book_id,member_id from request where book_id='".$book['id']."' and member_id='".$user."' ";
                                        $res=mysqli_query($conn,$qry) or die($conn->connect_error);
                                        $res2=mysqli_query($conn,$qry2) or die($conn->connect_error);
                                        
                                        if(mysqli_num_rows($res2)==1)
                                            {$val="Requested";
                                        $disable="disabled";
                                        $col="DarkViolet";}
                                        else if(mysqli_num_rows($res)==0)
                                           { $val="Borrow";
                                        $disable="";
                                        $col="darkcyan";}

                                        else {$val="Borrowed";
                                        $disable="disabled";
                                        $col="goldenrod";}
                                        ?>

                                        <td><a href="borrow.php?name1=<?= $name ?>&name2=<?= $book['id'] ?>&user=<?= $user ?>"><input type="button" name="borrow" value="<?= $val ?>" <?= $disable?> style="background-color: <?= $col?>; color:white;"/></a>
                                    </tr>
                            <?php
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>