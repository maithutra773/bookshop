<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BOOKSHOP</title>
        <script src="<?=$CONTENT_URL?>/js/jquery.min.js"></script>

        <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../content/css/trangchu.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
        .thantrang{
            width:95%;
            margin: auto;
            background: #fff;
            margin-top: 20px;
            border: 1px;
            border-radius: 15px;
          
        }
    </style>
    </head>
    <body>
        <div id="container">
            
            <header class="container header">
                <div class="logo">
                    <a href=""> <img src="../../content/logo1.png" width="180px" alt=""></a>
                </div>
                <div class="seach-form">
                    <form class="seach" action="<?=$SITE_URL?>/hang-hoa/liet-ke.php">
                        <input class="seach" placeholder="seach !" name="keywords" placeholder="Từ khóa tìm kiếm">
                        <button class="fa fa-search" name="timkiem">tìm kiếm</button>
                    </form> 
                </div>
                <!-- <div class="cart">
                    <ul class="menu_account">
                        <li class="li1"> <i class="fa fa-user" aria-hidden="true"></i>Đăng ký/Đăng nhập</li>
                        <li class="li2"><a class="fa fa-cart-plus" href=""> Giỏ hàng </a></li>
                    </ul>
                </div> -->
                <div class="cart">
                    <ul class="menu_account">
                        <li class="li1"><a href="../layout/dang-nhap.php"><i class="fa fa-user" aria-hidden="true">

                        </i>Tài Khoản</a><?php 
                                            // if(isset($_SESSION['user'])){
                                            //     require   'hientrang.php';
                                            // }
                                            ?>
                            <ul class="sub_menu_acount">
                                <li><a href="../tai-khoan/dang-ky.php">Đăng Ký</a></li>
                                <li><a href="../tai-khoan/dang-nhap.php">Đăng Nhập </a></li>
                            </ul>
                        </li>
                        <li class="li2"><a class="fa fa-cart-plus" href=""> Giỏ hàng </a></li>
                    </ul>
                </div>
            </header>
         <!-- nav -->
            <div class="menu">
                <nav class="container-fuild menu_main">
                    <?php require 'layout/menu.php';?>            
                </nav>
            </div>
                <!-- aside -->
                <div class="thantrang">
                    
                    <div class="article">
                        <article>
                            <div>
                                <?php require $VIEW_NAME;?>  
                            </div>
                        </article>
                    </div>
                   
                </div>
               
                <footer>
                    <?php require 'layout/footer.php';?>
                </footer>
        </div>



       
    </body>
</html>

