<?php 
    include "admin-header.php";
    include "connection.php";
?>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Latest Question Banks for Engineering subjects</h3>
                    </div>
                    
                    <div class="col-2">
        <a href="add_qb.php" style="position:relative; left:10px;font-size:15px; width:180px;" class="btn btn-primary btn-sm">Add Question Bank</a>
        </div><br/><br/>


                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Subject</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM qb order by category");

                                $i = 1;
                                while($qb= mysqli_fetch_assoc($result)):
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $qb['subject'] ?></td>
                                        <td><?= $qb['category'] ?></td>
                                        <td>
                                            <a href="qb/<?= $qb['filepath']?>">View</a>
                                            <a href="edit_qb.php?qbUpdate=<?= base64_encode($qb['id'])?>" class="btn btn-outline-secondary btn-sm">Edit</a>
                                            <a href="delete_function.php?qbDelete=<?= base64_encode($qb['id'])?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you want to delete?')">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                endwhile;
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
