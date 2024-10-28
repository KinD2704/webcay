<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Planet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="wrapper">
        <!-- header -->
        <?php  
            // session_start();
            // unset($_SESSION['dangky']);
            session_start();
            include("admincp/config/config.php");
            include("pages/header.php");
            include("./pages/menu.php");
            include("./pages/main.php");
            include("./pages/footer.php");
        ?>
        <!-- menu -->

        <!-- main -->

        <!-- footer -->


    </div>
</body>

</html>