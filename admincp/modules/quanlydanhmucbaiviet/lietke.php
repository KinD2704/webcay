<?php

    $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu ASC";
    $query_lietke_danhmucbv = mysqli_query($mysqli, $sql_lietke_danhmucbv);

?>

<p>Liệt kê danh mục bài viết</p>

<table style="width: 100%; border-collapse: collapse" border="1">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Thứ tự</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
        <td>
            <a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?> ">Xoá</a> | <a
                href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?> ">Sửa</a>
        </td>
    </tr>
    <?php 
        }
    ?>


</table>