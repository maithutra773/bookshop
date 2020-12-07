<?php
if (isset($_POST['login'])) {
    $email_khach = $_POST["email"];
    $noidung = $_POST["noidung"];

    //1. Key dưới đây chỉ dùng tạm, khi chạy dịch vụ chính thức bạn cần đăng ký tài khoản của sendgrid.com
    // website nhỏ thì dùng tài khoản miễn phí ok
    // tham khảo cách đăng ký để lấy key https://saophaixoan.net/search-tut?q=sendgrid
    // trong code này chỉ cần lấy key là ok, sau khi gửi thử xong thì verify là ok.
    $SENDGRID_API_KEY='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';

    require 'vendor/autoload.php';
    $email = new \SendGrid\Mail\Mail(); 
    ///------- bạn chỉnh sửa các thông tin dưới đây cho phù hợp với mục đích cá nhân
    // Thông tin người gửi
    $email->setFrom($email_khach, "MRS"); 
    // Tiêu đề thư
    $email->setSubject("Sending with SendGrid is Fun");
    // Thông tin người nhận
    $email->addTo("lointph11331@fpt.edu.vn", "SonDT32"); 
    // Soạn nội dung cho thư
    // $email->addContent("text/plain", "Nội dung text thuần không có thẻ html");
    $email->addContent("text/html", "<h2>$noidung</h2>");
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
 <form action="" method="post">
    <input name="email" type="email">
    <input name="noidung" type="noidung" value="">
    <button name="login">login</button>
 </form>