<?php 
    include "admin-header.php";
    include "connection.php";
?>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Borrow history</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php 

    include("connection.php");
    $qry="select * from borrowed where status!='returned'";

    $res=mysqli_query($conn,$qry) or die("Connection failed");

    if(mysqli_num_rows($res)>0)
    {?><h4>Pending List</h4>
    	 <table id="example1" class="table table-bordered table-striped">
    	 	<tr><th>Member Id</th><th>Book Id</th><th>Issue Date</th><th>Due Date</th></tr>
    	<?php

    	while($b=mysqli_fetch_assoc($res))
    	{
    		echo "<tr><td>".$b['member_id']."</td>";
    		echo "<td>".$b['book_id']."</td>";
    		echo "<td>".$b['issue_date']."</td>";
    		echo "<td>".$b['due_date']."</td>";
    	}
    }

    ?>
</table>
    
    <?php 
    $qry2="select * from borrowed where status='returned'";

    $res2=mysqli_query($conn,$qry2) or die("Connection failed");
    if(mysqli_num_rows($res)>0)
    {       
    ?>
         <br><h4>Books Returned List</h4><table id="example1" class="table table-bordered table-striped">
            <tr><th>Member Id</th><th>Book Id</th><th>Issue Date</th><th>Due Date</th></tr>
        <?php

        while($b2=mysqli_fetch_assoc($res2))
        {
            echo "<tr><td>".$b2['member_id']."</td>";
            echo "<td>".$b2['book_id']."</td>";
            echo "<td>".$b2['issue_date']."</td>";
            echo "<td>".$b2['due_date']."</td>";
        }
    }

    ?></table>
