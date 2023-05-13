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
            <h1>Table users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<?php 
    // select all data from table "supplier"
    $sql = "SELECT * FROM user";
    // execute the query
    $rs = $dbh->query($sql);
?>

<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>Role</th>
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
            <td><?=$row['username']?></td>
            <td><?=$row['password']?></td>
            <td><?=$row['role']?></td>
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