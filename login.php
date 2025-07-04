<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
</head>
<body>
  <h2>Đăng nhập</h2>
  <form method="post" action="process_login.php">
    <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
    <input type="password" name="password" placeholder="Mật khẩu" required><br>
    <button type="submit">Đăng nhập</button>
  </form>
  <p>Chưa có tài khoản? <a href="register.php">Đăng ký tại đây</a></p>
</body>
</html>