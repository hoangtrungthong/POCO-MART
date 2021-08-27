<?php
require("../config/mysql_db.php");
session_start();
error_reporting(0);
if (isset($_POST['submit'])) {
    $message = '';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username' AND email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_num_rows($result);

    if ($user == 1) {
        $username = $_SESSION['username'];
        header("location: ../index.php");
    } else {
        $message = 'Thông tin tài khoản không chính xác!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

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
                <h1>Đăng Nhập Vào Hệ thống</h1>
                <div class="form-group">
                    <input class="form-control" type="text" name="username" placeholder="Username" required value="<?php echo $username ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email  ?>">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" required value="<?php echo $_POST['password'] ?>">
                </div>
                <div><?php echo $message ?></div>
                <button name="submit" type="submit" class="btn btn-primary">Đăng Nhập</button>
                <p>Bạn chưa có tài khoản? <a href="register.php">Đăng Kí</a></p>
            </form>
        </div>
    </div>
</body>

</html>
