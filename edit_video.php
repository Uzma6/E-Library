<div class="content-wrapper">
    <?php
        include "connection.php";
        include "admin-header.php";
    if(isset($_GET['videoUpdate'])) {
        $id = base64_decode($_GET['videoUpdate']);
        $query = mysqli_query($conn, "SELECT * FROM video WHERE video_id = '$id' ");
        $video = mysqli_fetch_assoc($query);
    }
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Video</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Edit Video</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="edit_function2.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                            <input type="hidden" name="id" value="<?= $video['id']?>">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Video Id</label>
                                </div>
                                <div class="col-md-9">
                            <input type="text" name="video_id" class="form-control" value="<?= $video['video_id']?>" required="" data-parsley-trigger="change focusout" data-parsley-required-message = "Video id is required">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Video Image</label>
                                </div>
                                <div class="col-md-9"> <input type="file" name="uploadfile" value=""/>
                                    <img src="images/<?= $video['video_image']?>" alt="" style="width:120px; height:100px;">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Link</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="link" class="form-control" required="" value="<?= $video['link']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "Link is required">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Subject</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="subject" class="form-control" required="" value="<?= $video['subject']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "Subject is required">
                                </div>
                            </div>
                            

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Category</label>
                                </div>
                                
                                <div class="col-md-9">
                                    <select name="category" id="category">
                                        <option selected="selected"><?=$video['category']?></option>
                                     <option value="1st Year">1st Year</option>
                                     <option value="2nd Year">2nd Year</option>
                                     <option value="3rd Year">3rd Year</option>
                                     <option value="4th Year">4th Year</option>
                                    </select><br/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Description</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="description" class="form-control" required="" value="<?= $video['description']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "Description is required">
                                </div>
                            </div>
                            


                            <div class="form-group row">
                                <div class="col-md-4 offset-3">
                                    <input type="submit" name="edit_video" value="Update" class="btn btn-outline-dark">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>