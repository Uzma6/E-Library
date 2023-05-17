<?php 
    include "admin-header.php";
    include "connection.php";
?>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header alert alert-danger">
                        <h3 class="card-title">Registered Members of Library</h3>
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>SL</th>
                                <th>Member id</th>
                                <th>Member Name</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $result = mysqli_query($conn, "SELECT * FROM member");

                                $i = 1;
                                while($member= mysqli_fetch_assoc($result)):
                            ?>
                                    <tr>
                                        <td><?= $i++;?></td>
                                        <td><?= $member['member_id'] ?></td>
                                        <td><?= $member['mem_name'] ?></td>
                                        <td><?= $member['city'] ?></td>
                                        <td><?= $member['state']?></td>
                                        <td>
                                            <a href="delete_function.php?memberDelete=<?= base64_encode($member['member_id'])?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure that you want to remove this member?')">Remove member</a>
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
