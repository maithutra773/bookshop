<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../content/css/trangchuphu.css">
</head>
<body>
    
</body>
</html>
<?php
require 'vendor/autoload.php';

if (isset($_POST['login'])) {
    $email_khach = $_POST["email_khach"];
    $noidung = $_POST["noidung"];

    //1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
    // website nhỏ thì dùng tài khoản miễn phí ok
    // tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
    // trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
    $SENDGRID_API_KEY = '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';

    require 'vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail(); 
    ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
    // Thông tin người gửi
    $email->setFrom("kienthph11546@fpt.edu.vn", "MRS"); 
    // Tiêu đề thư
    $email->setSubject("Sending with SendGrid is Fun");
    // Thông tin người nhận
    $email->addTo("lointph11331@fpt.edu.vn", "Lointph11331"); 
    // Soạn nội dung cho thư
    // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
    $email->addContent("text/html", "
    Người Gửi :$email_khach  <br>
    Nội dung: 
    <h2 style='color:red'>" .$noidung."<h2>");
    // tiến hành gửi thư
    $sendgrid = new \SendGrid($SENDGRID_API_KEY);
    try {
        $response = $sendgrid->send($email);

        // //--- mấy dòng print này thích in ra thì in.
        // print $response->statusCode() . "\n";
        // print_r($response->headers());
        // print $response->body() . "\n";

    } catch (Exception $e) {
        echo 'Caught exception: '. $e->getMessage() ."\n";
    }
}
 ?>
 <style>
     form.noidung {
        margin-top: 50px;
        margin-left: 300px;
        width:  500px;
        height: 200px;
        background: pink;
        padding: 10px 20px;
        border: 1px;
        border-radius: 5px;
     }
     form input.mail{
         margin-top: 20px;
         width: 300px;
         height: 30px;
         border: 1px;
        border-radius: 5px;
     }
     button.dangnhap12{
        margin-top: 20px;
        width: 70px;
        height: 30px;
        background: white;
         border: 1px;
        border-radius: 5px;
     }
     button.dangnhap12:hover{
         background: yellow;
     }
     iframe{
         width: 98%;
        margin-top: 20px;

     }
 </style>
 <form class="noidung" action="" method="post">
    EMAIL: <input style="margin-left: 60px;" class="mail" name="email_khach" type="email"> <br>
    NỘI DUNG: <input style="margin-left: 31px;" class="mail" name="noidung" type="noidung" value=""> <br>
    <button class="dangnhap12" name="login">login</button>
 </form>
 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8638558814037!2d105.74459841440749!3d21.038132792835356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b991d80fd5%3A0x53cefc99d6b0bf6f!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIHRo4buxYyBow6BuaCBGUFQgUG9seXRlY2huaWMgSMOgIE7hu5lp!5e0!3m2!1svi!2s!4v1602435505883!5m2!1svi!2s" width="1000" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>