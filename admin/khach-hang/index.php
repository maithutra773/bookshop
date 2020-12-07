<?php

require_once '../../global.php';
require_once '../../dao/khach-hang.php';
//--------------------------------//
// require "../../dao/loai.php";

// check_login();
echo "<pre>";
print_r($_FILES["hinh"]);
echo '</pre>';
function check_size($size,$min= 0,$max= 1.5 * 1024 * 1024){// 1
    $booblean=false;
    if($size >= $min and $size <= $max and !empty($size)){
        $booblean=true;
    }
    return $booblean;
}
extract($_REQUEST);

if(exist_param("btn_insert")){
    $up_hinh = save_file("hinh", "$IMAGE_DIR/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : 'user.png';
    
    //  Check đăng kí
    $mk =  '/^[a-zA-Z0-9_]{6,30}$/';

    $bieu_thuc = '/^[a-zA-Z0-9_]{5,30}$/';
    
    $xacnhanemail =  '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/'; 

    $check_RG="#\A[àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐDA-z\s]{10,30}\Z#";
    
    $err=[];
    //--------
    if(!preg_match($bieu_thuc, $ma_kh)){
       $err[]="Ten dang nhap khong hop le";
    } if (!preg_match($mk, $mat_khau)){
        $err[]="Mật khẩu Tối Thiểu 6 ký tự và Không quá 30 Ký Tự!";
    }if(!preg_match($check_RG,$ho_ten)){
        $err[]="Là tên tiếng Việt có dấu hoặc không dấu, không chứa số, không chứa ký tự đặc biệt, có thể có dấu cách!";
    } 
    if (!preg_match($xacnhanemail, $email)){
        $err[]= "Email Sai Định Dạng!";
    }
  
    if(!empty($_FILES["hinh"]["size"])){
        if(!check_size($_FILES["hinh"]["size"])){
            $err[]= "Chỉ up ảnh dưới 1,5 mb!";
        }
    }else{
        $err[]= "Bạn chưa chọn ảnh";
    }

    //  if (!khach_hang_exist($ma_kh)) {
    //     $err[]= "Mã này đã được sử dụng!";
    // }
    if(!empty($err)){
        $MESSAGE = implode("<br>", $err); // nhập mảng lỗi thành chuõi
    }else // khong có lỗi thì thực hiện try.....
// end check đăng nhập
    {
    try {
        khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        unset($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $MESSAGE = "Thêm mới thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Thêm mới thất bại!".$exc->getMessage();
    }
}
$VIEW_NAME = "khach-hang/new.php";
}
else if(exist_param("btn_update")){
    $up_hinh = save_file("up_hinh", "$IMAGE_DIR/users/");
    $hinh = strlen($up_hinh) > 0 ? $up_hinh : $hinh;
    try {
        khach_hang_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
        $MESSAGE = "Cập nhật thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Cập nhật thất bại!".$exc->getMessage();
    }
    $VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_delete")){
    try {
        khach_hang_delete($ma_kh);
        $items = khach_hang_select_all();
        $MESSAGE = "Xóa thành công!";
    } 
    catch (Exception $exc) {
        $MESSAGE = "Xóa thất bại!".$exc->getMessage();
    }
    $VIEW_NAME = "khach-hang/list.php";
}
else if(exist_param("btn_edit")){
    $item = khach_hang_select_by_id($ma_kh);
    extract($item);
    $VIEW_NAME = "khach-hang/edit.php";
}
else if(exist_param("btn_list")){
    $items = khach_hang_select_all();
    $VIEW_NAME = "khach-hang/list.php";
}
else{
    $VIEW_NAME = "khach-hang/new.php";
}

require "../layout.php";
?>