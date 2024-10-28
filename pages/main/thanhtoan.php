<?php
    session_start();
    require('../../mail/sendmail.php');
    include("../../admincp/config/config.php");
    
    $id_khachhang = $_SESSION['id_khachhang'];
    $code_order = rand(0,9999);
    $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status)
    VALUE('".$id_khachhang."','".$code_order."',1) ";
    $cart_query = mysqli_query($mysqli, $insert_cart);
    if($cart_query){
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = 
            "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua)
            VALUE('".$id_sanpham."','".$code_order."','".$soluong."') ";
            mysqli_query($mysqli, $insert_order_details);
        }
        $tieude = "Đặt hàng website abc.com thành công!";
        $noidung =
        "<div >
            <p>Cảm ơn quý khách đã đặt hàng của chúng tôi, mã đơn của quý khách: ".$code_order."</p>  
        </div>";
        $noidung.="<h4>Đơn hàng bao gồm</h4>";
        
        foreach($_SESSION['cart'] as $key => $value){
            $noidung.=
            "<ul style='border:1px solid blue; margin: 10px'>
                <li>Tên sản phẩm: ".$value['tensanpham']."</li>
                <li>Mã sản phẩm: ".$value['masp']."</li>
                <li>Số lượng: ".$value['soluong']."</li>
            </ul>";
        }

        $maildathang = $_SESSION['email'];
        $mail = new Mailer();
        $mail->dathangmail($tieude, $noidung, $maildathang);
    }
    
    if(!$cart_query) {
        echo "Lỗi khi thêm giỏ hàng: " . mysqli_error($mysqli);
    }
    unset($_SESSION['cart']);
    header('Location:../../index.php?quanly=camon');
    exit();

?>