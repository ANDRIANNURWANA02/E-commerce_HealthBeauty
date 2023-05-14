<?php
session_start(); // Memulai session

if (isset($_SESSION['loggedin'])) {
  header('location:../index.php');
  exit();
} elseif (isset($_SESSION['login'])) {
  header('location:./dashboard.php');
  exit();
}


if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  try {
    // Koneksi ke database
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

    $dbh = new PDO($dsn, $user, $pass, $opt);

    // Mencegah serangan SQL Injection
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Mencari pengguna dengan username yang sesuai dalam database
    $query = "SELECT * FROM user WHERE username = :username";
    $stmt = $dbh->prepare($query);
    $stmt->execute(['username' => $username]);

    if ($stmt->rowCount() == 1) {
      $row = $stmt->fetch();

      // Verifikasi password
      if (password_verify($password, $row['password'])) {
        // Password cocok, set session dan arahkan ke halaman sesuai peran
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] == 'admin') {
          $_SESSION['login'] = true;
          $_SESSION['username'] = $username;
          echo "<script>
                alert('Login berhasil');
                </script>";
          header("Location: dashboard.php");
          exit();
        } else {
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          echo "<script>
          alert('Login berhasil');
          </script>";
          header("Location: ../index.php");
          exit();
        }
      } else {
        // Password tidak cocok
        echo "<script>
        alert('Username atau password salah.');
        window.location.replace('login.php');
              </script>";
      }
    } else {
      // Pengguna tidak ditemukan
      echo "<script>
      alert('Username atau password salah.');
      window.location.replace('login.php');
            </script>";
    }
  } catch (PDOException $e) {
    echo "Koneksi atau query database gagal: " . $e->getMessage();
  }
}



// // Check if the user submitted the login form
// if (isset($_POST['login'])) {
//   $username = $_POST['username'];
//   $password = $_POST['password'];

//   // Validate the username and password
//   if ($username == 'admin' && $password == 'admin.php') {
//     // Authentication successful, set session variables
//     $_SESSION['login'] = true;
//     $_SESSION['username'] = $username;

//     // Redirect the user to the home page
//     header('Location: ./dashboard.php');
//     exit();
//   } elseif ($username == 'user' && $password == 'user.php') {
//     // Authentication successful, set session variables
//     $_SESSION['loggedin'] = true;
//     $_SESSION['username'] = $username;

//     // Redirect the user to the home page
//     header('location:../index.php');
//     exit();
//   } else {
//     // Authentication failed, show error message
//     echo "<script>
//     alert ('username atau password yang anda masukan salah');
//           window.location.replace('login.php');
//         </script>";

//     // echo ' username atau password yang anda masukan';
//   }
// }
?>