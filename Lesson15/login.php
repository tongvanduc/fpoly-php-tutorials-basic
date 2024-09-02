<?php

session_start();

// Mô phỏng thông tin đăng nhập hợp lệ (trong thực tế, bạn sẽ truy xuất từ cơ sở dữ liệu)
$validUsername = "admin";
$validPassword = "123456";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra tính hợp lệ của thông tin đăng nhập
    if ($username == $validUsername && $password == $validPassword) {

        // Kiểm tra nếu người dùng chọn "Remember Me"
        if (isset($_POST['remember_me'])) {

            // Lưu thông tin đăng nhập vào Cookie (thời hạn 30 ngày)
            setcookie("username", $username, time() + (86400 * 30), "/");

        } else {
            // Lưu thông tin đăng nhập vào Session
            $_SESSION['username'] = $username;
        }

        // Chuyển hướng đến trang đăng nhập thành công
        header("Location: welcome.php");
        exit(); // Thoát chương trình
    } else {
        $_SESSION['error'] = "Sai username hoặc password!";

        header("Location: index.php");
        exit();
    }
}

