<?php

    $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham ASC";
    $query_lietke_sp = mysqli_query($mysqli, $sql_lietke_sp);

?>

<h2>Liệt kê sp</h2>

<table style="width: 100%; border-collapse: collapse" border="1" class="table_lietke">
    <tr>
        <th>Id</th>
        <th>Tên Sản phẩm</th>
        <th>Hình ảnh</th>
        <th>Giá sp</th>
        <th>Số lượng</th>
        <th>Danh mục</th>
        <th>Mã sp</th>
        <th>Tóm tắt</th>
        <th>Tình trạng</th>
        <th>Quản lý</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_sp)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tensanpham'] ?></td>
        <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px" alt=""></td>
        <td><?php echo $row['giasp'] ?></td>
        <td><?php echo $row['soluong'] ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>

        <td><?php echo $row['masp'] ?></td>
        <td><?php echo $row['tomtat'] ?></td>
        <td><?php 
            if($row['tinhtrang' == 1]){
                echo 'Kích hoạt';
            } else {
                echo 'Ẩn';
            }
        ?></td>
        <!-- <td><?php echo $row['tendanhmuc'] ?></td> -->
        <td>
            <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?> ">Xoá</a> | <a
                href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?> ?> ">Sửa</a>
        </td>
    </tr>
    <?php 
        }
    ?>


</table>