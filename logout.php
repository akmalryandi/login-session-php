<?php
session_start();

// Hapus sesi dan redirect ke halaman login
session_destroy();
header('Location: login.php');
exit();
?>
