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
            header("Location:index.php?quanly=giohang");
        } else{
            echo '<p style="color:red; text-align:center">Tài khoản hoặc mật khẩu sai, vui lòng nhập lại!</p>';
        }
    }
?>


<style>
body {
    background: #f2f2f2;
}

.wrapper-login {
    width: 50%;
    margin: 0 auto;
}

table.table-login {
    width: 100%;
}

table.table-login tr td {
    padding: 5px;
}
</style>

<div class="wrapper-login">
    <form method="POST" action="" autocomplete="off">
        <table border="1" style="text-align:center; border-collapse: collapse">
            <tr>
                <td colspan="2">Đăng nhập</td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input type="email" size="50" name="username" placeholder="user@gmail.com"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" size="50" name="password" placeholder="Mật khẩu"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
            </tr>
        </table>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>