<?php

    $sql_bv = 
    "SELECT * FROM tbl_baiviet 
    WHERE tbl_baiviet.id = '$_GET[id]'
    LIMIT 1";
    $query_bv = mysqli_query($mysqli,$sql_bv);
    $query_bv_all = mysqli_query($mysqli,$sql_bv);

    // get ten danh muc
    $row_bv_title = mysqli_fetch_array($query_bv);

?>

<h3> Ý nghĩa:
    <span style="text-align: center;"><?php echo $row_bv_title['tenbaiviet'] ?></span>
</h3>

<ul class="baiviet">
    <?php
        while($row_bv = mysqli_fetch_array($query_bv_all)){
    ?>
    <li>
        <h4><?php echo $row_bv['tenbaiviet']  ?></h4>
        <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="">
        <p class="tomtat_product">
            <span><?php echo $row_bv['noidung'] ?></span>
        </p>
    </li>
    <?php
        }
    ?>
</ul>