<div class="content-wrapper">
    <?php
        include "connection.php";
        include "member-header.php";
    if(isset($_GET['memberUpdate'])) {
        $id = base64_decode($_GET['memberUpdate']);
        $query = mysqli_query($conn, "SELECT * FROM member WHERE member_id = '$id' ");
        $member = mysqli_fetch_assoc($query);

    }
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Update Member</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Edit Member</h3>
                    </div>
                    <div class="card-body">
                        <form action="edit_function.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
                            <input type="hidden" name="id" value="<?= $member['member_id']?>">

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">City</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="city" class="form-control" required="" value="<?= $member['city']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "City is required">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3">
                                    <label for="">State</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" name="state" class="form-control" required="" value="<?= $member['state']?>" data-parsley-trigger="change focusout" data-parsley-required-message = "State is required">
                                </div>
                            </div>
 
                            <div class="form-group row">
                                <div class="col-md-4 offset-3">
                                    <input type="submit" name="edit_member" value="Update" class="btn btn-outline-dark">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>