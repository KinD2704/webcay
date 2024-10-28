<?php
    // session_start();
    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $diachi = $_POST['diachi'];
        $matkhau = md5($_POST['matkhau']);
        $sql_dangky = mysqli_query($mysqli, 
        "INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) 
        VALUES('".$tenkhachhang."', '".$email."', '".$diachi."', '".$matkhau."', '".$dienthoai."')");

        if($sql_dangky){
            echo '<p style="color: green">Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            // dki tai khoan moi lay id cua khach hang
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            $_SESSION['email'] = $email;
            header('Location:index.php?quanly=giohang');
        }
    }
?>


<div class="wrapper-login">
    <form method="POST" action="" id="form-login">
        <h1 class="form-heading">Đăng ký</h1>
        <div class="form-group">
            <input class="form-input" type="text" name="hovaten" placeholder="Họ và tên">
        </div>
        <div class="form-group">
            <input type="email" class="form-input" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-input" name="dienthoai" placeholder="Số điện thoại">
        </div>
        <div class="form-group">
            <input type="text" class="form-input" name="diachi" placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <input type="password" class="form-input" name="matkhau" placeholder="Mật khẩu">
        </div>

        <input type="submit" class="form-submit" name="dangky" value="Đăng ký">

        <div class="chuyendoi">
            <a class="form-submit" href="index.php?quanly=dangnhap">Đăng nhập</a>
        </div>

    </form>
</div>