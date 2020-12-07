<?php
require '../../global.php';
require '../../dao/khach-hang.php';
extract($_REQUEST);
if (exist_param("btn_register")) {
    $MESSAGE = " ";
    $err = [];
    $bieu_thuc_ma_kh = '/^[a-zA-Z0-9_]{5,30}$/';
    $bieu_thuc_email = '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/';
    $bieu_thuc_ho_ten = '/^[a-zA-Z_ àáạảãâầấậẩẫăằắặẳẵèéẹẻẽêềếệểễìíịỉĩòóọỏõôồốộổỗơờớợởỡùúụủũưừứựửữỳýỵỷỹđÀÁẠẢÃÂẦẤẬẨẪĂẰẮẶẲẴÈÉẸẺẼÊỀẾỆỂỄÌÍỊỈĨÒÓỌỎÕÔỒỐỘỔỖƠỜỚỢỞỠÙÚỤỦŨƯỪỨỰỬỮỲÝỴỶỸĐD]{1,}$/';
    $type = $_FILES['up_hinh']['type'];
    $file_ex = pathinfo($_FILES['up_hinh']['name'],PATHINFO_EXTENSION);
    $upload_file_type = array("JPG","jpg","png","PNG","bmp");
    if (khach_hang_exist($ma_kh)) {
        // gọi đến hàm kiểm tra ma_kh có tồn tại 
        $err[] = "Tên đăng nhập không đúng";
    } else {
        // mã không tồn tại trong database kiểm tra hợp lệ
        if (!preg_match($bieu_thuc_ma_kh, $ma_kh)) {
            $err[] =  "Sai !. tên đăng nhập phải từ 5 -> 30 kí tự và không chứa các kí tự đặc biệt";
        }
    }
    if (strlen($mat_khau) < 6) {
        $err[] = "Mật khẩu phải có ít nhất 6 kí tự ";
    } else if ($mat_khau != $mat_khau2) {
        $err[] = "Xác nhận mật khẩu không đúng!";
    }
    if (!preg_match($bieu_thuc_ho_ten, $ho_ten)) {
        $err[] = 'Họ tên không hợp lệ  .';
    }
    if (!preg_match($bieu_thuc_email, $email)) {
        $err[] = 'email không hợp lệ . ví dụ example@gmail.com';
    }
    if ($_FILES['up_hinh']['size'] >= 2048) {
        $err[] = "Bạn nhập ảnh quá lớn .  ";
    }
    if(!in_array($file_ex,$upload_file_type)){
        $err[] = "Hãy nhập ảnh có định dạng jpg , png hoặc bmp ";
    }
        
    if (!empty($err)) {
        $MESSAGE = implode("<br>", $err);
    } else {
        $file_name = save_file("up_hinh", "$IMAGE_DIR/users/");
        $hinh = $file_name ? $file_name : "user.png";
        try {
            khach_hang_insert($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro);
            $MESSAGE = "Đăng ký thành viên thành công!";
        } catch (Exception $exc) {
            $MESSAGE = "Đăng ký thành viên thất bại!";
        }
    }
} else {
    global $ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro, $mat_khau2;
}
$VIEW_NAME = "tai-khoan/dang-ky-form.php";
require '../layout.php';


