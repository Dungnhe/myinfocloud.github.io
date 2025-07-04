<?php
require 'config.php';

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

if ($stmt->execute()) {
    echo "Đăng ký thành công. <a href='login.php'>Đăng nhập</a>";
} else {
    echo "Lỗi: Tên đăng nhập đã tồn tại.";
}
?>