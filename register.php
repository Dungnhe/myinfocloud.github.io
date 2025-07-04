<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng ký</title>
</head>
<body>
  <h2>Đăng ký</h2>
  <form method="post" action="process_register.php">
    <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
    <input type="password" name="password" placeholder="Mật khẩu" required><br>
    <button type="submit">Đăng ký</button>
  </form>
  <p>Đã có tài khoản? <a href="login.php">Đăng nhập tại đây</a></p>
</body>
</html>