<head>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <style>
        #anhform{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr ;
            text-align: center;
            margin:auto;
            padding-bottom:20px;
        }
        .anhsachngoai{
            text-align: center;
        }
        .anhsach{
            width: 200px;
            height: 250px;
            margin: 35px;
            

        }
        .anhsach:hover{
            transform: scale(1.2);
            transition: 3s;
            transition: all 2s;
            -webkit-transition: all 2s;
        }
        .chutc{
            color: red; 
            /* margin-top: 5px; text-align: center;  */
        }
        /* .chiao{
            float: left;
        }
        .tenhhtc{
            color: #000;
            width: 90% ;
            margin: auto;
        } */
    </style>
</head>
<body>
     <!-- barner -->
     <div id="anhchay">
            <section class="container-fulid">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../content/barner/anh1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../content/barner/anh2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../content/barner/anh3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../content/barner/anh4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            </section>
        </div>
        <marquee behavior="" direction="">Trang sách hay nhất</marquee>
        <div class="">
                        <!--CATALOG-->
                        <?php require '../layout/loai-hang.php'; ?>
                        <!--FAVORITE-->
                    </div>
        <div class="">
                <div id="anhform" >
                    <?php
                        foreach ($items as $item) {
                    ?>
                        <div>
                            <a style="text-decoration: none;" href="../hang-hoa/chi-tiet.php?ma_hh=<?=$item['ma_hh']?>">
                                <div class="anhsachngoai">
                                    <img class="anhsach" src="<?=$CONTENT_URL?>/images/products/<?=$item['hinh']?>"/>
                                </div>
                                <div class="tencacsanpham">
                                <div class="chutc text-center ">
                                    <p class="chiao" style="padding-left: 20px;" ><strike> $<?=number_format($item['don_gia'])?>đ</strike></p>
                                    <p ><b> $<?=number_format($item['giam_gia'])?>đ </b></p>
                                </div>    
                                <h5 class="tenhhtc" ><?=$item['ten_hh']?></h5>
                                </div>
                            </a>
                        </div>                
                    <?php
                        }
                    ?>
             </div>
             
        </div>
    
  
</body>
