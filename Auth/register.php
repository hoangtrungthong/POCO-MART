<?php
require("../config/mysql_db.php");
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
    $message = '';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $rePassword = md5($_POST['re-password']);

    if ($password === $rePassword) {
        $sql = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

        $query = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($query);

        if (!$user) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password' )";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Đăng kí thành công !!! Hãy đăng nhập nhé bạn yêu !!!')</script>";
                echo '<script>window.location.href = "login.php";</script>';
            }
        } else {
            if ($user['username'] === $username) {
                $message = "Tên tài khoản đã được sử dụng";
            }
            if ($user['email'] === $email) {
                $message = "Địa chỉ email đã được sử dụng";
            }
        }
    } else {
        $message = 'Mật khẩu xác nhận không đúng';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="auth">
        <div class="auth-form">
            <form action="" method="post">
                <h1>Đăng Kí Tài Khoản</h1>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" required value="<?php echo $username ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email  ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required value="<?php echo $_POST['password'] ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="re-password" placeholder="Confirm Password" required value="<?php echo $_POST['re-password'] ?>">
                </div>
                <div><?php echo $message; ?></div>
                <button name="submit" type="submit" class="btn btn-primary">Đăng Kí</button>
                <p>Bạn đã có tài khoản? <a href="login.php">Đăng Nhập</a></p>
            </form>
        </div>
    </div>
</body>

</html>
