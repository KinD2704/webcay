<?php
$mysqli = new mysqli("localhost","root","","web_mysql");

// Check connection
if ($mysqli -> connect_errno) {
    echo "Kết nỗi MYSQL lỗi" . $mysqli -> connect_error;
    exit();
}
?>