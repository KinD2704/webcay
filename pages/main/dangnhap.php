<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['username'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."'
        LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            $_SESSION['email'] = $row_data['email'];
            header("Location:index.php?quanly=giohang");
        } else{
            echo '<p style="color:red; text-align:center">Tài khoản hoặc mật khẩu sai, vui lòng nhập lại!</p>';
        }
    }
?>

<div class="wrapper-login">
    <form method="POST" action="" autocomplete="off" id="form-login">
        <h1 class="form-heading">Đăng nhập</h1>
        <div class="form-group">
            <input class="form-input" type="email" name="username" placeholder="Tên đăng nhập">
        </div>
        <div class="form-group">
            <input class="form-input" type="password" name="password" placeholder="Mật khẩu">
        </div>

        <input type="submit" name="dangnhap" class="form-submit" value="Đăng nhập">

    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>