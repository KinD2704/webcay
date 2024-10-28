<?php
    // session_start();
?>
<style>
a.capnhat {
    text-decoration: none;
    color: white;
    border: 1px solid f28902;
    padding: 5px;
    border-radius: 5px;
    background-color: #f28902;
    transition: 0.5s ease-in-out;
}

a.capnhat:hover {
    background: burlywood;
    color: red;
}
</style>
<p>Giỏ hàng
    <?php
        if(isset($_SESSION['dangky'])){
            echo "<br/>";
            echo "Xin chào ".'<span style="color:red">'. $_SESSION['dangky'].'</span>';
            // echo $_SESSION['id_khachhang'];
        }
    ?>
</p>

<?php

    if(isset($_SESSION['cart'])){
        
    }
?>
<table border="1" style="width:100%; text-align: center; border-collapse: collapse;">

    <tr>
        <th>Id</th>
        <th>Mã sp</th>
        <th>Tên sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Giá sản phẩm</th>
        <th>Thành tiền</th>
        <th>Quản lý</th>
    </tr>

    <?php
        if(isset($_SESSION['cart'])){
            $i = 0;
            $tongtien = 0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                $tongtien += $thanhtien;
                $i++;
    ?>
    <tr>
        <td><?php echo $i;  ?></td>
        <td><?php echo $cart_item['masp'];  ?></td>
        <td><?php echo $cart_item['tensanpham'];  ?></td>
        <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px" alt=""></td>
        <td>
            <a style="text-decoration: none;" href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>">
                <i class="fa-solid fa-minus fa-style"></i>
            </a>
            <?php echo $cart_item['soluong'];  ?>
            <a style="text-decoration: none;" href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>">
                <i class="fa-solid fa-plus fa-style"></i>
            </a>
        </td>
        <td><?php echo number_format($cart_item['giasp'],0,',','.').' vnđ';  ?></td>
        <td><?php echo number_format($thanhtien,0,',','.').' vnđ';  ?></td>
        <td><a class="capnhat" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
    </tr>
    <?php
        }
    ?>

    <tr>
        <td colspan="8">
            <p style="float: left;">Thành tiền: <?php echo number_format($tongtien,0,',','.')." vnđ" ?> </p>
            <p style="float: right;"><a class="capnhat" href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
            <div style="clear: both;"></div>
            <?php
                if(isset($_SESSION['dangky'])){
            ?>
            <p> <a class="capnhat" href="pages/main/thanhtoan.php">Đặt hàng</a> </p>
            <?php
                } else{
            ?>
            <p><a class="capnhat" href="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
            <?php
            }
            ?>

        </td>
    </tr>

    <?php
    } else{
    ?>

    <tr>
        <td colspan="8">
            <p>Hiện tại giỏ hàng trống</p>
        </td>
    </tr>

    <?php
    }?>

</table>