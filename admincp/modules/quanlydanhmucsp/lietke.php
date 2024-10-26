<?php

    $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu ASC";
    $query_lietke_danhmucsp = mysqli_query($mysqli, $sql_lietke_danhmucsp);

?>

<p>Liệt kê danh mục sp</p>

<table style="width: 100%; border-collapse: collapse" border="1">
    <tr>
        <th>Id</th>
        <th>Tên danh mục</th>
        <th>Thứ tự</th>
    </tr>
    <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
            $i++;
    ?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['tendanhmuc'] ?></td>
        <td>
            <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?> ">Xoá</a> | <a
                href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?> ">Sửa</a>
        </td>
    </tr>
    <?php 
        }
    ?>


</table>