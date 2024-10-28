<?php
    session_start();
    include("config/config.php");
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."'
        LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:index.php");
        } else{
            echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng, vui lòng đăng nhập lại)</script>';
            header("Location:login.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập ADMINCP</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <style>
    body {
        background: #f2f2f2;
    }

    table.table-login {
        width: 100%;
    }

    table.table-login tr td {
        padding: 5px;
    }
    </style>

    <div class="wrapper-login">
        <form method="POST" action="" autocomplete="off" id="form-login">

            <h1 class="form-heading">Đăng Nhập ADMINCP</h1>

            <div class="form-group">
                <input class="form-input" type="text" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <input class="form-input" type="text" name="password" placeholder="Họ và tên">
            </div>

            <input type="submit" class="form-submit" name="dangnhap" value="Đăng nhập">


        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>

</html>