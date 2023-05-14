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
          <h1>Form Order</h1>
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
  // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
  $_id = isset($_GET['id']) ? $_GET['id'] : null;
  if (!empty($_id)) {
    // ambil data order berdasarkan id
    $sql = "SELECT * FROM `order` WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
  } else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
  }
  ?>

  <form method="POST" action="proses_order.php">
    <div class="form-group row">
      <label for="order_number" class="col-4 col-form-label">order_number</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-adjust"></i> -->
            </div>
          </div>
          <input id="order_number" name="order_number" type="text" class="form-control" value="<?php if (isset($row['order_number']))
            echo $row['order_number']; ?>" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="date" class="col-4 col-form-label">date</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-o-left"></i> -->
            </div>
          </div>
          <input id="date" name="date" value="<?php if (isset($row['date']))
            echo $row['date']; ?>" type="date" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="qty" class="col-4 col-form-label">qty</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-up"></i> -->
            </div>
          </div>
          <input id="qty" name="qty" value="<?php if (isset($row['qty']))
            echo $row['qty']; ?>" type="number" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="total_price" class="col-4 col-form-label">total_price</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-up"></i> -->
            </div>
          </div>
          <input id="total_price" name="total_price" value="<?php if (isset($row['total_price']))
            echo $row['total_price']; ?>" type="number" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">id_customer</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <?php
            $sqljenis = "SELECT * FROM customer";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="customer_id" name="customer_id" class="custom-select">
              <?php
              foreach ($rsjenis as $rowjenis) {
                ?>
                <option value="<?= $rowjenis['id'] ?>" required><?= $rowjenis['id'] ?></option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">product_id</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <?php
            $sqljenis = "SELECT * FROM product";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="product_id" name="product_id" class="custom-select">
              <?php
              foreach ($rsjenis as $rowjenis) {
                ?>
                <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['id'] ?></option>
                <?php
              }
              ?>
            </select>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">

        <?php
        $button = (empty($_id)) ? "Simpan" : "Update";
        ?>

        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
        <input type="hidden" name="id" value="<?= $_id ?>" />
      </div>
    </div>
  </form>

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