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
            <h1>View Order</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Order</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data pembelian dengan id tertentu
    $sql = "SELECT * FROM `order` WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data pembelian dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?= $row['id'] ?></td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td><?= $row['order_number'] ?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?= $row['date'] ?></td>
        </tr>
        <tr>
            <td>Produk ID</td>
            <td><?= $row['qty'] ?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?= $row['total_price'] ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?= $row['customer_id'] ?></td>
        </tr>
        <tr>
            <td>Vendor ID</td>
            <td><?= $row['product_id'] ?></td>
        </tr>
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