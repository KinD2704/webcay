<h3>Bài viết mới nhất</h3>

<?php

    $sql_bv = 
    "SELECT * FROM tbl_baiviet 
    WHERE tinhtrang = 1
    ORDER BY id DESC";
    $query_bv = mysqli_query($mysqli,$sql_bv);

?>
<style>
.tomtat_product span {
    text-align: center;
    display: -webkit-box;
    /* Hiện dấu 3 chấm ở dòng số n theo mong muốn */
    -webkit-line-clamp: 3;
    /* xét theo chiều nào */
    /* Ví dụ đây là chiều dọc */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.title_product {
    display: -webkit-box;
    /* Hiện dấu 3 chấm ở dòng số n theo mong muốn */
    -webkit-line-clamp: 1;
    /* xét theo chiều nào */
    /* Ví dụ đây là chiều dọc */
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>
<ul class="product_list">
    <?php
        while($row_bv = mysqli_fetch_array($query_bv)){
    ?>
    <li>
        <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>">
            <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" alt="">
            <p class="title_product">Tên bài viết <?php echo $row_bv['tenbaiviet'] ?></p>
        </a>
        <p class="tomtat_product">
            <span><?php echo $row_bv['tomtat'] ?></span>
        </p>
    </li>
    <?php
        }
    ?>
</ul>