<?php

session_start();

if (!isset($_SESSION['login'])) {
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
          <h1>Table Customer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <?php
  $sql = "SELECT * FROM customer";
  $rs = $dbh->query($sql);
  ?>

  <a class="btn btn-success" href="form_customer.php" role="button">Create customer</a>
  <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
      <tr>
        <!-- <th>No</th> -->
        <th>id</th>
        <th>Name</th>
        <th> gender</th>
        <th> phone</th>
        <th>Email</th>
        <th> address</th>
        <th>id_card</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $id = 1;
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
            <?= $row['gender'] ?>
          </td>
          <td>
            <?= $row['phone'] ?>
          </td>
          <td>
            <?= $row['email'] ?>
          </td>
          <td>
            <?= $row['address'] ?>
          </td>
          <td>
            <?= $row['card_id'] ?>
          </td>
          <td>
            <a class="btn btn-primary" href="view_customer.php?id=<?= $row['id'] ?>">View</a>
            <a class="btn btn-primary" href="form_customer.php?id=<?= $row['id'] ?>">Edit</a>
            <a class="btn btn-primary" href="delete_customer.php?id=<?= $row['id'] ?>"
              onclick="if(!confirm('Anda Yakin Hapus Data customer <?= $row['name'] ?>?')) {return false}">Delete</a>
          </td>
        </tr>
        <?php
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