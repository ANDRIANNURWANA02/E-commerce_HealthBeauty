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
          <h1>Form Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Product</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <?php
  // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
  $_id = isset($_GET['id']) ? $_GET['id'] : null;
  if (!empty($_id)) {
    // ambil data produk berdasarkan id
    $sql = "SELECT * FROM product WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
  } else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
  }
  ?>

  <form method="POST" action="proses_product.php">
    <div class="form-group row">
      <label for="sku" class="col-4 col-form-label">sku</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-anchor"></i> -->
            </div>
          </div>
          <input id="sku" name="sku" type="text" class="form-control" value="<?php if (isset($row['sku']))
            echo $row['sku']; ?>" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="name" class="col-4 col-form-label">name Produk</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-adjust"></i> -->
            </div>
          </div>
          <input id="name" name="name" type="text" class="form-control" value="<?php if (isset($row['name']))
            echo $row['name']; ?>" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="purchase_price" class="col-4 col-form-label"> purchase_price</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-o-left"></i> -->
            </div>
          </div>
          <input id="purchase_price" name="purchase_price" value="<?php if (isset($row['purchase_price']))
            echo $row['purchase_price']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="sell_price" class="col-4 col-form-label"> sell_price</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-o-left"></i> -->
            </div>
          </div>
          <input id="sell_price" name="sell_price" value="<?php if (isset($row['sell_price']))
            echo $row['sell_price']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="stock" class="col-4 col-form-label">stock</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-up"></i> -->
            </div>
          </div>
          <input id="stock" name="stock" value="<?php if (isset($row['stock']))
            echo $row['stock']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="min_stock" class="col-4 col-form-label">Minimum stock</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-right"></i> -->
            </div>
          </div>
          <input id="min_stock" name="min_stock" value="<?php if (isset($row['min_stock']))
            echo $row['min_stock']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">product_type</label>
      <div class="col-8">
        <?php
        $sqljenis = "SELECT * FROM product_type";
        $rsjenis = $dbh->query($sqljenis);
        ?>
        <select id="product_type" name="product_type_id" class="custom-select">
          <?php
          foreach ($rsjenis as $rowjenis) {
            ?>
            <option value="<?= $rowjenis['id'] ?>" required><?= $rowjenis['name'] ?></option>
            <?php
          }
          ?>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">restock</label>
      <div class="col-8">
        <?php
        $sqljenis = "SELECT * FROM restock";
        $rsjenis = $dbh->query($sqljenis);
        ?>
        <select id="restock_id" name="restock_id" class="custom-select">
          <?php
          foreach ($rsjenis as $rowjenis) {
            ?>
            <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['restock_number'] ?></option>
            <?php
          }
          ?>
        </select>
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