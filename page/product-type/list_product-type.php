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
          <h1>Table Product-type</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Product-type</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <?php
  // select all data from table "produk"
  $sql = "SELECT * FROM product_type";
  // execute the query
  $rs = $dbh->query($sql);
  ?>

  <a class="btn btn-success" href="form_product-type.php" role="button">Create product_type</a>

  <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
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
            <?= $row['name'] ?>
          </td>
          <td>
            <!-- buttons to view, edit, and delete a product -->
            <a class="btn btn-primary" href="view_product-type.php?id=<?= $row['id'] ?>">View</a>
            <a class="btn btn-primary" href="form_product-type.php?id=<?= $row['id'] ?>">Edit</a>
            <a class="btn btn-primary" href="delete_product-type.php?id=<?= $row['id'] ?>"
              onclick="if(!confirm('Anda Yakin Hapus Data product-type <?= $row['name'] ?>?')) {return false}">Delete</a>
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