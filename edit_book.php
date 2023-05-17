<div class="content-wrapper">
    <?php


        include "connection.php";
        include "admin-header.php";
    if(isset($_GET['bookUpdate'])) {
        $id = base64_decode($_GET['bookUpdate']);
        $query = mysqli_query($conn, "SELECT * FROM books WHERE id = '$id' ");
        $data = mysqli_fetch_assoc($query);

    }
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Book</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Edit Book</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="edit_function.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                            <input type="hidden" name="id" value="<?= $data['id']?>">
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Book Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="book_name" class="form-control" value="<?= $data['book_name']?>" required="" data-parsley-trigger="change focusout" data-parsley-required-message = "Book Name is required">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Book Image</label>
                                </div>
                                <div class="col-md-9"> <input type="file" name="uploadfile" value=""/>
                                    <img src="images/<?= $data['book_image']?>" alt="" style="width:120px; height:100px;">
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Book Author Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="book_author_name" class="form-control" required="" value="<?= $data['book_author_name']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "Book Author Name is required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Category</label>
                                </div>
                                
                                <div class="col-md-9">
                                    <select name="category" id="category">
                                        <option selected="selected"><?=$data['category']?></option>
                                     <option value="1st Year">1st Year</option>
                                     <option value="2nd Year">2nd Year</option>
                                     <option value="3rd Year">3rd Year</option>
                                     <option value="4th Year">4th Year</option>
                                    </select><br/>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Book Publication Name</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="book_publication_name" class="form-control" required="" value="<?= $data['book_publication_name']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "Book Publication Name is required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">Text book</label>
                                </div>
                                <div class="col-md-9"> <input type="file" name="pdffile" value=""/>
                                    
                                </div>
                            </div>
 
                            <div class="form-group row">
                                <div class="col-md-4 offset-3">
                                    <input type="submit" name="edit_book" value="Update" class="btn btn-outline-dark">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>