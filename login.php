<?php
// session_start();

// $accounts = ['user1' => '1', 'user2' => '2',]; (INI PAKAI ARRAY)

$email = 'akmal';
$pass ='123';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($email == $username && $pass == $password) {
    // if (isset($accounts[$username]) AND $accounts[$username] === $password) { (INI PAKAI ARRAY)
        // $_SESSION['login'] = $username;

        header('Location: welcome.php');
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
// if (isset($_SESSION['login'])) {
//     header('Location: welcome.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Login</title>
</head>

<body>
    <h2>Form Login</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;">
            <?php echo $error; ?>
        </p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Masuk">
    </form>
</body>

</html>