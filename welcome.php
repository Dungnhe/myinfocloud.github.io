<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<h2>Xin chào, <?= $_SESSION['username'] ?>!</h2>
<a href="logout.php">Đăng xuất</a>