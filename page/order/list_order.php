<?php

session_start();

if(isset($_SESSION['loggedin'])){
	header('location:./login.php');
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
            <h1>Table Order</h1>
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
    // select all data from table "order"
    $sql = "SELECT * FROM `order` WHERE 1";
    // execute the query
    $rs = $dbh->query($sql);
?>

<a class="btn btn-success" href="form_order.php" role="button">Create order</a>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>Id</th>
            <th>order_number</th>
            <th>date</th>
            <th>qty</th>
            <th>total_price</th>
            <th>customer_id</th>
            <th>product_id</th>
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
            <td><?= $id ?></td>
            <td><?= $row['order_number'] ?></td>
            <td><?= $row['date'] ?></td>
            <td><?= $row['qty'] ?></td>
            <td><?= $row['total_price'] ?></td>
            <td><?= $row['customer_id'] ?></td>
            <td><?= $row['product_id'] ?></td>
            <td>
                <!-- buttons to view, edit, and delete a product -->
                <a class="btn btn-primary" href="view_order.php?id=<?= $row['id'] ?>">View</a>
                <a class="btn btn-primary" href="form_order.php?id=<?= $row['id'] ?>">Edit</a>
                <a class="btn btn-primary" href="delete_order.php?id=<?= $row['id'] ?>"
                 onclick="if(!confirm('Anda Yakin Hapus Data order <?= $row['id'] ?>?')) {return false}"
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