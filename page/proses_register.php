<?php

$host = '127.0.0.1';
$db = 'db_healthbeauty';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES => false,
];

try {
  $dbh = new PDO($dsn, $user, $pass, $opt);
} catch (PDOException $e) {
  echo "Koneksi database gagal: " . $e->getMessage();
  exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Mendapatkan nilai dari form registrasi
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Mengatur role default sebagai user
  $role = 'user';

  // Meng-hash password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Memasukkan data ke dalam tabel users
  $query = "INSERT INTO user (username, password, role) VALUES (:username, :password, :role)";
  $stmt = $dbh->prepare($query);
  $stmt->bindParam(':username', $username);
  $stmt->bindParam(':password', $hashedPassword);
  $stmt->bindParam(':role', $role);

  try {
    $stmt->execute();
    echo "Registrasi berhasil";
  } catch (PDOException $e) {
    echo "Registrasi gagal: " . $e->getMessage();
  }
}

// // Mengambil data dari formulir registrasi
// $username = $_POST['username'];
// $password = $_POST['password'];
// $confirm_password = $_POST['confirm_password'];


// // Cek apakah password dan konfirmasi password sama
// if ($password !== $confirm_password) {
//   echo "<script>
//   alert ('Password dan konfirmasi password tidak cocok.');
//   window.location.replace('register.php');
//   </script>";
//   exit();
// }

// $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

// // Konfigurasi koneksi database
// $host = '127.0.0.1';
// $db = 'db_healthbeauty';
// $user = 'root';
// $pass = '';
// $charset = 'utf8mb4';

// try {
//   // Membuat koneksi PDO
//   $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

//   // Set error mode ke exception

//   $opt = [
//     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES => false,
//   ];

//   $dbh = new PDO($dsn, $user, $pass, $opt);

// // Pernyataan SQL untuk menetapkan nilai default ke kolom 'rol'
// $sql = "user";

//   // Query SQL untuk insert data pengguna baru
//   $query = "INSERT INTO user (username,password,role ) VALUES (:username,:password,:user)";

//   // Menyiapkan pernyataan SQL menggunakan prepared statement
//   $stmt = $dbh->prepare($query);

//   // Bind parameter ke placeholder dalam pernyataan SQL
//   $stmt->bindParam(':username', $username);
//   $stmt->bindParam(':password', $password);
//   $stmt->bindParam(':user', $sql);



//   // Mengeksekusi pernyataan SQL
//   $stmt->execute();

//   // Menampilkan pesan sukses
//   echo "<script>
//   alert ('Registrasi berhasil');
//   window.location.replace('login.php');
//         </script>";

// } catch (PDOException $e) {
//   // Menampilkan pesan kesalahan jika terjadi error
//   echo "Error: " . $e->getMessage();
// }

// // Menutup koneksi database
// $dbh = null;
?>