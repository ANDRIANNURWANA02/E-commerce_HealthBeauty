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
          <h1>Form Customer</h1>
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
    $sql = "SELECT * FROM customer WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
  } else {
    // jika tidak ada parameter id pada URL, maka dianggap input data baru
    // inisialisasi variabel $row sebagai array kosong
    $row = [];
  }
  ?>

  <form method="POST" action="proses_customer.php">
    <div class="form-group row">
      <label for="name" class="col-4 col-form-label">name</label>
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
      <label for="gender" class="col-4  ">gender </label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
              <!-- <i class="fa fa-arrow-circle-o-left"></i> -->
            </div>
          </div>
          <input id="gender" name="gender" value="L" type="radio" required>Laki-laki
          <input id="gender" name="gender" value="P" type="radio" required>Perempuan
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="phone" class="col-4 col-form-label">phone</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="phone" name="phone" value="<?php if (isset($row['phone']))
            echo $row['phone']; ?>" type="number" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-4 col-form-label">email</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="email" name="email" value="<?php if (isset($row['email']))
            echo $row['email']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="address" class="col-4 col-form-label">address</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group">
            </div>
          </div>
          <input id="address" name="address" value="<?php if (isset($row['address']))
            echo $row['address']; ?>" type="text" class="form-control" required>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label for="jenis" class="col-4 col-form-label">card_id</label>
      <div class="col-8">
        <div class="input-group">
          <div class="input-group-prepend">
            <?php
            $sqljenis = "SELECT * FROM card";
            $rsjenis = $dbh->query($sqljenis);
            ?>
            <select id="id" name="card_id" class="custom-select">
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
      <div class="offset-4 col-8">
        <?php
        $button = (empty($_id)) ? "Simpan" : "Update";
        ?>
        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?= $button ?>" />
        <input type="hidden" name="id" value="<?= $_id ?>" />
      </div>
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










<!-- <div class="form-group row">
            <label for="gender" class="col-4 ">gender </label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> -->
<!-- <i class="fa fa-arrow-circle-o-left"></i> -->
<!-- </div>
                    </div>
                    <input id="gender" name="gender" value="L" type="radio">Laki-laki
                    <input id="gender" name="gender" value="P" type="radio">Perempuan
                </div>
            </div>
        </div> -->