<?php
require "../../global.php";
require "../../dao/hang-hoa.php";
//--------------------------------//
require "../../dao/loai.php";

// check_login();

extract($_REQUEST);
if(exist_param("btn_insert")){
    
    $up_hinh = save_file("hinh", "$IMAGE_DIR/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'product.png';
    $err = []; // mang luu  các câu thông báo lỗi
    $post_ngay_thang = $_POST['ngay_nhap'];
    
     // lấy dữ liệu từ form nhập lên, yêu cầu validate bắt buộc ngươi dùng nhập dạng ngay/than/năm
     $tmp = explode('/', $post_ngay_thang);// tách chuỗi thành mảng
     $tm = array_reverse($tmp); // đảo ngược mảng
     $ngay_thang_save = implode("-",$tm); // ghép lại thành chuỗi năm-tháng-ngày để lưu CSDL
    
     if(strlen($ten_hh)  < 3)
     $err[]="Tên hàng hóa cần nhập ít nhất 3 ký tự";

     if(strlen($ten_hh) > 50)
     $err[]= "Tên hàng hóa nhiều nhất là 50 ký tự";

     if(!empty($err)){
         $MESSAGE = implode("<br>", $err); // nhập mảng lỗi thành chuõi
     }else // khong có lỗi thì thực hiện try.....
    //  ////////////
              {
    try {
        hang_hoa_insert($ten_hh, $don_gia, $giam_gia, $hinh,$tac_gia, $nha_xb, $nam_xb, $ma_loai, $dac_biet, $so_luot_xem, $ngay_thang_save , $mo_ta );
        unset($ten_hh, $don_gia, $giam_gia, $hinh,$tac_gia, $nha_xb, $nam_xb, $ma_loai, $dac_biet, $so_luot_xem, $ngay_thang_save , $mo_ta);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!". $exc -> getMessage();
    }
}
    $VIEW_NAME = "hang-hoa/new.php";
}
else if(exist_param("btn_update")){
    $post_ngay_thang = $_POST['ngay_nhap'];
    // lấy dữ liệu từ form nhập lên, yêu cầu validate bắt buộc ngươi dùng nhập dạng ngay/than/năm
    $tmp = explode('/', $post_ngay_thang);// tách chuỗi thành mảng
    $tm = array_reverse($tmp); // đảo ngược mảng
    $ngay_thang_save = implode("-",$tm); // ghép lại thành chuỗi năm-tháng-ngày để lưu CSDL
    //----
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/products/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    try {
        hang_hoa_update($ma_hh , $ten_hh, $don_gia, $giam_gia, $hinh,$tac_gia, $nha_xb, $nam_xb, $ma_loai, $dac_biet, $so_luot_xem, $ngay_thang_save , $mo_ta, $ki_gui);
        $MESSAGE = "Cập nhập thành công!";
    }
    
    catch (Exception $exc) {
        echo $exc->getMessage();
        $MESSAGE = "Cập nhật thất bại!";
    }
    $VIEW_NAME = "hang-hoa/edit.php";
}

else if(exist_param("btn_delete")){
    try {
        hang_hoa_delete($ma_hh);
        $items = hang_hoa_select_page();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!";
    }
    $VIEW_NAME = "hang-hoa/list.php";
}
else if(exist_param("btn_edit")){
    $item = hang_hoa_select_by_id($ma_hh);
    extract($item);
    $VIEW_NAME = "hang-hoa/edit.php";
}
else if(exist_param("btn_list")){
    $items = hang_hoa_select_page();
    $VIEW_NAME = "hang-hoa/list.php";
}
else{
    $VIEW_NAME = "hang-hoa/new.php";
}

if($VIEW_NAME == "hang-hoa/new.php" || $VIEW_NAME == "hang-hoa/edit.php"){
    $loai_select_list = loai_select_all();
}

require "../layout.php";
