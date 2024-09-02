<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu từ form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $product = htmlspecialchars($_POST['product']);
    $quantity = (int)$_POST['quantity'];
    $address = htmlspecialchars($_POST['address']);

    // Tính tổng giá trị đơn hàng (ví dụ đơn giản)
    $prices = [
        "Laptop" => 1000,
        "Smartphone" => 800,
        "Tablet" => 600
    ];

    $totalPrice = $prices[$product] * $quantity;
    
    echo "
        <h2>Thông tin đơn hàng của bạn</h2>
        <p>Họ và tên: $name</p>
        <p>Email: $email</p>
        <p>Số điện thoại: $phone</p>
        <p>Sản phẩm: $product</p>
        <p>Số lượng: $quantity</p>
        <p>Tổng giá trị đơn hàng: $$totalPrice</p>
        <p>Địa chỉ giao hàng: $address</p>
        <p>Cảm ơn bạn đã đặt hàng! Đơn hàng của bạn sẽ được giao đến địa chỉ đã cung cấp.</p>
    ";
}
