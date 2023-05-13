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
                    <h1>View Product</h1>
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
    // Mendapatkan nilai id dari parameter GET
    $_id = $_GET['id'];

    // Membuat query SQL untuk mengambil data produk dengan id tertentu
    $sql = "SELECT * FROM product WHERE id=?";
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
                <td>
                    <?= $row['id'] ?>
                </td>
            </tr>
            <tr>
                <td>sku</td>
                <td>
                    <?= $row['sku'] ?>
                </td>
            </tr>
            <tr>
                <td>name </td>
                <td>
                    <?= $row['name'] ?>
                </td>
            </tr>
            <tr>
                <td> purchase_price</td>
                <td>
                    <?= $row['purchase_price'] ?>
                </td>
            </tr>
            <tr>
                <td> sell_price</td>
                <td>
                    <?= $row['sell_price'] ?>
                </td>
            </tr>
            <tr>
                <td>stock</td>
                <td>
                    <?= $row['stock'] ?>
                </td>
            </tr>
            <tr>
                <td>min_stock</td>
                <td>
                    <?= $row['min_stock'] ?>
                </td>
            </tr>
            <tr>
                <td>product_type_id</td>
                <td>
                    <?= $row['product_type_id'] ?>
                </td>
            </tr>
            <tr>
                <td> restock_id</td>
                <td>
                    <?= $row['restock_id'] ?>
                </td>
            </tr>
        </tbody>
    </table>