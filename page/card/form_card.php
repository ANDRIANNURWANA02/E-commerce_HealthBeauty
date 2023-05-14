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
          <h1>Form card</h1>
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
  // cek apakah terdapat parameter id pada URL, jika ada maka dilakukan edit data
  $_id = isset($_GET['id']) ? $_GET['id'] : null;
  if (!empty($_id)) {
    // ambil data card berdasarkan id
    $sql = "SELECT * FROM card WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
  } else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
  }
  ?>

  <form method="POST" action="proses_card.php">

    <div class="form-group row">
      <label for="code" class="col-4 col-form-label">code</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="code" name="code" type="text" class="form-control" value="<?php if (isset($row['code']))
            echo $row['code']; ?>" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="name" class="col-4 col-form-label">Name kartu</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="name" name="name" type="text" class="form-control" value="<?php if (isset($row['name']))
            echo $row['name']; ?>" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_beli" class="col-4 col-form-label">discount</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="discount" name="discount" value="<?php if (isset($row['discount']))
            echo $row['discount']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="stok" class="col-4 col-form-label">member_fee</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="member_fee" name="member_fee" value="<?php if (isset($row['member_fee']))
            echo $row['member_fee']; ?>" type="text" class="form-control" required>
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