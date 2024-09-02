<?php

echo '<pre>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $targetDir = "uploads/"; // Thư mục để lưu file upload
    $fileAvatar = $_FILES["avatar"]; // Lấy dữ liệu của avatar từ mảng 2 chiều $_FILES    
    $targetFile = $targetDir . time() . '-' . $fileAvatar["name"]; // Đường dẫn của file được upload
    $uploadOk = 1; // Cờ để nhận biết upload thành công hay không, mặc định là thành công

    // Kiểm tra nếu file đã tồn tại
    if (file_exists($targetFile)) {
        echo "Xin lỗi, file đã tồn tại." . PHP_EOL;
        $uploadOk = 0;
    }

    // Kiểm tra kích thước file (giới hạn là 5MB)
    $maxSize = 5 * 1024 * 1024; // 5MB => quy ra byte; 1MB = 1024KB = 1024 BYTE
    if ($fileAvatar["size"] > $maxSize) {
        echo "Xin lỗi, file của bạn quá lớn." . PHP_EOL;
        $uploadOk = 0;
    }

    // Giới hạn các loại file được upload
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Lấy ra extension của file
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($fileType, $allowedTypes)) {
        echo "Xin lỗi, chỉ chấp nhận các loại file JPG, JPEG, PNG, GIF." . PHP_EOL;
        $uploadOk = 0;
    }

    // Kiểm tra xem $uploadOk có gặp lỗi không
    if ($uploadOk == 0) {
        echo "Xin lỗi, file của bạn không được upload." . PHP_EOL;
    } else {

        if (move_uploaded_file($fileAvatar["tmp_name"], $targetFile)) {

            echo "File " . $fileAvatar["name"] . " đã được upload thành công." . PHP_EOL;
            echo "<img src='$targetFile' width='100px'>";

        } else {
            echo "Xin lỗi, có lỗi xảy ra khi upload file." . PHP_EOL;
        }

    }
}
