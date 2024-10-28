<?php

    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header("Location:login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleadmincp.css">
    <title>Admincp</title>
</head>

<body>
    <h3 class="title_admin">Welcome to admincp</h3>
    <div class="wrapper">
        <?php  
        include("config/config.php");
        include("modules/header.php");
        include("modules/menu.php");
        include("modules/main.php");
        include("modules/footer.php");
    ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.16.2/ckeditor.js"></script>
    <script>
    // CKEDITOR.replace('tomtat');
    // CKEDITOR.replace('noidung');
    CKEDITOR.replace('thongtinlienhe');
    </script>
</body>

</html>