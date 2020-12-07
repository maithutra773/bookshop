<?php
     include("dao/pdo.php");

     $page = isset($_GET['page'])?$_GET['page']:'';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h1>
    <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    define("APP_PATH", __DIR__);
    define("BASE_URL",'/FA2020/bookshopsua');
     if(isset( $_SESSION['msg'] )){
        echo "<p style='color:red'> {$_SESSION['msg']}  </p>";
        unset($_SESSION['msg']);
    }

    require_once "dao/pdo.php";
    header('location: site/trang-chinh/');
    pdo_get_connection();
    ?></h1>
</body>
</html>