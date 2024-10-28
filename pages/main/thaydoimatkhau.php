<?php
    if(isset($_POST['doimatkhau'])){
        $taikhoan = $_POST['email'];
        $matkhau_cu = md5($_POST['password_cu']);
        $matkhau_moi = md5($_POST['password_moi']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$taikhoan."' AND matkhau='".$matkhau_cu."'
        LIMIT 1";
        $row = mysqli_query($mysqli, $sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $sql_update = mysqli_query($mysqli, "UPDATE INTO tbl_dangky SET matkhau='".$matkhau_moi."'");
            echo '<p style="color:green">Mật khẩu đã được thay đổi.</p>';
        } else{
            echo '<p style="color:red">Tài khoản hoặc Mật khẩu cũ không đúng, vui lòng nhập lại.</p>';
        }
    }
?>


<div class="wrapper-login">
    <form method="POST" action="" autocomplete="off" id="form-login">
        <h1 class="form-heading">Đổi mật khẩu</h1>
        <div class="form-group">
            <input class="form-input" type="text" name="email" placeholder="Tài khoản" id="email">
        </div>
        <div class="form-group">
            <input class="form-input" type="password" name="password_cu" placeholder="Mật khẩu cũ">
        </div>
        <div class="form-group">
            <input class="form-input" type="password" name="password_moi" placeholder="Mật khẩu mới">
        </div>

        <input type="submit" class="form-submit" name="doimatkhau" value="Đổi mật khẩu">

    </form>
</div>