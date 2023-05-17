<?php 
    include "admin-header.php";
    include "connection.php";
?>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Videos</h3>
                    </div>
                    
                    <div class="col-2">
        <a href="add_video.php" style="position:relative; left:10px;font-size:15px; width:120px;" class="btn btn-primary btn-sm">Add New Video</a>
        </div><br/><br/>


                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Link</th>
                                <th>Image</th>
                                <th>Subject</th>
                                <th>Category</th>
                                <th>Short Description</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM video order by category");

                                $i = 1;
                                while($video= mysqli_fetch_assoc($result)):
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><a href="<?= $video['link'] ?>"><?= $video['link'] ?></td>
                                        <td><img src="images/<?= $video['video_image']?>" alt="Image not found" style="width: 50px; height: 50px;"></td>
                                        <td><?= $video['subject'] ?></td>
                                        <td><?= $video['category']?></td>
                                        <td><?= $video['description']?></td>
                                        <td>
                                            <a href="edit_video.php?videoUpdate=<?= base64_encode($video['video_id'])?>" class="btn btn-outline-secondary btn-sm">Edit</a>
                                            <a href="delete_function.php?videoDelete=<?= base64_encode($video['video_id'])?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you want to delete?')">Delete</a>
                                        </td>
                                    </tr>
                            <?php
                                endwhile;
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
