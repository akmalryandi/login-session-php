<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h2>
    <p>Ini adalah halaman selamat datang yang hanya dapat diakses setelah login berhasil.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
