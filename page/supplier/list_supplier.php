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
            <h1>Table Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Supplier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php 
    // select all data from table "supplier"
    $sql = "SELECT * FROM supplier";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_supplier.php" role="button">Create supplier</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>address</th>
            <th>contact_name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            // initialize counter
            $id = 1;
            // loop through the result set
            foreach($rs as $row) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$row['name']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['address']?></td>
            <td><?=$row['contact_name']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_supplier.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_supplier.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_supplier.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data supplier <?=$row['name']?>?')) {return false}"
                >Delete</a>
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