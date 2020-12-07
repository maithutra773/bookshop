<?php
require "../../global.php";
require "../../dao/loai.php";
//--------------------------------//

//  check_login();

extract($_REQUEST);

if (exist_param("btn_insert")) {
     // kiem tra hop le
     $err = []; // mang luu  các câu thông báo lỗi
     if(strlen($ten_loai)  < 3)
     $err[]="Tên loại cần nhập ít nhất 3 ký tự";

     if(strlen($ten_loai) > 50)
     $err[]= "Tên loại nhiều nhất là 50 ký tự";

     if(!empty($err)){
         $MESSAGE = implode("<br>", $err); // nhập mảng lỗi thành chuõi
     }else // khong có lỗi thì thực hiện try.....
    //  ////////////
              {
    try {
        loai_insert($ten_loai);
        unset($ten_loai, $ma_loai);
        $MESSAGE = "Thêm mới thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!". $exc -> getMessage();
    }
              }
    $VIEW_NAME = "loai-hang/new.php";
} else if (exist_param("btn_update")) {
    try {
        loai_update($ma_loai, $ten_loai);
        $MESSAGE = "Cập nhật thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!". $exc -> getMessage();
    }
    $VIEW_NAME = "loai-hang/edit.php";
} else if (exist_param("btn_delete")) {
    try {
        loai_delete($ma_loai);
        $items = loai_select_all();
        $MESSAGE = "Xóa thành công!";
    } catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!". $exc -> getMessage();
    }
    $VIEW_NAME = "loai-hang/list.php";
} else if (exist_param("btn_edit")) {
    $item = loai_select_by_id($ma_loai);
    extract($item);
    $VIEW_NAME = "loai-hang/edit.php";
} else if (exist_param("btn_list")) {
    $items = loai_select_all();
    $VIEW_NAME = "loai-hang/list.php";
} else {
    $VIEW_NAME = "loai-hang/new.php";
}

require "../layout.php";
