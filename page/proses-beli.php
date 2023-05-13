<?php

// // Membuat koneksi ke database
require_once 'dbkoneksi.php';
// $servername = "localhost";
// $username = "username";
// $password = "password";
// $dbname = "nama_database";

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// // Memeriksa koneksi
// if (!$conn) {
//     die("Koneksi gagal: " . mysqli_connect_error());
// }

// Menangkap data yang dikirimkan dari halaman produkz
$id_produk = $_POST["id_produk"];
$nama_produk = $_POST["nama_produk"];
$jumlah_beli = $_POST["jumlah_beli"];
$total_harga = $_POST["total_harga"];
$nama_pelanggan = $_POST["nama_pelanggan"];
$phone = $_POST["phone"];
$alamat_pelanggan = $_POST["alamat_pelanggan"];


$_proses = $_POST['proses'];

// Menyimpan data pembelian ke dalam tabel order
if ($_proses == "Simpan") {
$sql = "INSERT INTO `order` (id_produk, nama_produk, jumlah_beli, total_harga, nama_pelanggan,phone, alamat_pelanggan)
VALUES ('$id_produk', '$nama_produk', '$jumlah_beli', '$total_harga', '$nama_pelanggan','$phone', '$alamat_pelanggan')";

if (mysqli_query($conn, $sql)) {
    echo "<script>Pembelian berhasil dilakukan</script>"; 
} else {
    echo "<script>Gagal</script>";
}
}


header('location:product.php');

?>
