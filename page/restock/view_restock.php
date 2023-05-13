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
            <h1>View Restock</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Restock</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM restock WHERE id=?";
    $st = $dbh->prepare($sql);

    // Menjalankan query dengan parameter id yang telah didapatkan sebelumnya
    $st->execute([$_id]);

    // Mengambil hasil query dan menyimpannya ke dalam variabel $row
    $row = $st->fetch();
?>

<!-- Menampilkan data produk dalam bentuk tabel -->
<table class="table table-striped">
    <tbody>
        <tr>
            <td>ID</td>
            <td><?=$row['id']?></td>
        </tr>
        <tr>
            <td>restock_number</td>
            <td><?=$row['restock_number']?></td>
        </tr>
        <tr>
            <td>date</td>
            <td><?=$row['date']?></td>
        </tr>
        <tr>
            <td>qty</td>
            <td><?=$row['qty']?></td>
        </tr>
        <tr>
            <td>price</td>
            <td><?=$row['price']?></td>
        </tr>
        <tr>
            <td>supplier_id</td>
            <td><?=$row['supplier_id']?></td>
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