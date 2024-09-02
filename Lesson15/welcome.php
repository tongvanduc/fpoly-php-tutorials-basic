<?php

session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {

    // Lấy thông tin người dùng từ Session hoặc Cookie
    $username = isset($_SESSION['username']) ? $_SESSION['username'] : $_COOKIE['username'];

    // $username = $_SESSION['username'] ?? $_COOKIE['username'];

    echo "<h2>Xin chào, $username! Bạn đã đăng nhập thành công.</h2>";
    echo "<a href='logout.php'>Đăng xuất</a>";

} else {
    // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    header("Location: index.php");
    exit();
}
