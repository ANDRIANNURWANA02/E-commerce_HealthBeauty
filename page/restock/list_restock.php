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
            <h1>Table Restock</h1>
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
    // select all data from table "produk"
    $sql = "SELECT * FROM restock";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_restock.php" role="button">Create restock</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>id</th>
            <th>restock_number</th>
            <th>date</th>
            <th>qty</th>
            <th>price</th>
            <th>supplier_id</th>
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
            <td><?=$row['restock_number']?></td>
            <td><?=$row['date']?></td>
            <td><?=$row['qty']?></td>
            <td><?=$row['price']?></td>
            <td><?=$row['supplier_id']?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_restock.php?id=<?=$row['id']?>">View</a>
                <a class="btn btn-primary" href="form_restock.php?id=<?=$row['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_restock.php?id=<?=$row['id']?>"
                onclick="if(!confirm('Anda Yakin Hapus Data restock <?=$row['id']?>?')) {return false}"
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