<?php
session_start();
?>
    <?php
        include "ketnoi.php";
        
        $tenDanhNhap = $_POST["txtDangNhap"];
        $matKhau = md5($_POST["txtMatKhau"]);
        $_SESSION["error_message"] = " ";
        //validation
        if($tenDanhNhap === "" || $matKhau === "") {
            $_SESSION["error_message"] = "Vui lòng nhập đầy đủ thông tin";
        }

        $sql1 = "SELECT * FROM admin where user_admin = '" . $tenDanhNhap ."' and pass_admin = '" .$matKhau."'";
        $kq1 = mysqli_query($conn,$sql1) or die("lỗi truy vấn: ".mysqli_error($conn));
        if(mysqli_num_rows($kq1) === 1) {
            $_SESSION["error_message"] = "";

            $user = mysqli_fetch_assoc($kq1);
            //xác nhận chắc chắn lâm hưng lấy được dữ liệu người dùng từ CSDL
            //lâm hưng đem dữ liệu này đưa vào session. do không tạo admin, lâm hưng sẽ coi xem tên đăng nhập này có thuộc admin không
            if($user["user_admin"] === "QuanTri1" || $user["user_admin"] === "QuanTri2") {
                //echo "đây là tài khoản admin";
                $_SESSION["username"] = $user["user_admin"];
                $_SESSION["role"] = "admin";
            }
            else {
                $_SESSION["username"] = $user["user_admin"];
                $_SESSION["role"] = "user";
            }
        } else {
            $_SESSION["error_message"] = "Đăng nhập không thành công";
        }

        header("Location: index.php");
        exit();
    ?>
