<?php

session_start();

if(!isset($_SESSION['login'])){
	header('location:../login.php');
	exit();
}

?>

<?php
// include database connection
require_once '../dbkoneksi.php';
require_once '../templetes/navbar.php';
require_once '../templetes/header.php';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Table card</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">card</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <?php
    // select all data from table "produk"
    $sql = "SELECT * FROM card";
    // execute the query
    $rs = $dbh->query($sql);
    ?>

    <a class="btn btn-success" href="form_card.php" role="button">Create card</a>

    <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
        <thead>
            <tr>
                <th>id</th>
                <th>code</th>
                <th>Name</th>
                <th>Discount</th>
                <th>Member fee</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach ($rs as $row) {
                ?>
                <tr>
                    <td>
                        <?= $id ?>
                    </td>
                    <td>
                        <?= $row['code'] ?>
                    </td>
                    <td>
                        <?= $row['name'] ?>
                    </td>
                    <td>
                        <?= $row['discount'] ?>
                    </td>
                    <td>
                        <?= $row['member_fee'] ?>
                    </td>
                    <td>
                        <!-- buttons to view, edit, and delete a product -->
                        <a class="btn btn-primary" href="view_card.php?id=<?= $row['id'] ?>">View</a>
                        <a class="btn btn-primary" href="form_card.php?id=<?= $row['id'] ?>">Edit</a>
                        <a class="btn btn-primary" href="delete_card.php?id=<?= $row['id'] ?>"
                            onclick="if(!confirm('Anda Yakin Hapus Data card <?= $row['name'] ?>?')) {return false}">Delete</a>
                    </td>
                </tr>
                <?php
                // increment counter
                $id++;
            }
            ?>
        </tbody>
    </table>

    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
require_once '../templetes/footer.php';
?>