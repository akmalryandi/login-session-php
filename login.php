<?php
session_start();

// Akun dan kata sandi statis (contoh sederhana)
$accounts = [
    'user1' => 'password1',
    'user2' => 'password2',
    // Tambahkan akun lain jika diperlukan
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah akun dan kata sandi cocok
    if (isset($accounts[$username]) && $accounts[$username] === $password) {
        // Login berhasil, atur session
        $_SESSION['username'] = $username;

        // Redirect ke halaman selamat datang
        header('Location: welcome.php');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
if (isset($_SESSION['username'])) {
    header('Location: welcome.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>
    <h2>Form Login</h2>
    <?php if (isset($error)) : ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
