<?php 
    include "admin-header.php";
    include "connection.php";
?>


    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Books List</h3>
                    </div>
                    
                    <div class="col-2">
        <a href="add_book.php" style="position:relative; left:10px;font-size:15px; width:120px;" class="btn btn-primary btn-sm">Add book</a>
        </div><br/><br/>


                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Author Name</th>
                                <th>Category</th>
                                <th>Publication Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM books order by category");

                                $i = 1;
                                while($book= mysqli_fetch_assoc($result)):
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $book['book_name'] ?></td>
                                        <td><img src="images/<?= $book['book_image']?>" alt="Image not found" style="width: 50px; height: 50px;"></td>
                                        <td><?= $book['book_author_name'] ?></td>
                                        <td><?= $book['category'] ?></td>
                                        <td><?= $book['book_publication_name'] ?></td>
                                        <td>
                                            <a href="textbook/<?= $book['filepath']?>">View</a>
                                            <a href="edit_book.php?bookUpdate=<?= base64_encode($book['id'])?>" class="btn btn-outline-secondary btn-sm">Edit</a>
                                            <a href="delete_function.php?bookDelete=<?= base64_encode($book['id'])?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you want to delete?')">Delete</a>
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

