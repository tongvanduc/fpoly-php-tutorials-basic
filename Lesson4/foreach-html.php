<?php
$students = ["Anh", "Bình", "Châu", "Dương"];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Ví dụ foreach và HTML</title>
</head>

<body>
    <h1>Danh sách học sinh</h1>
    <ul>
        <?php foreach ($students as $student): ?>
            
            <!-- <li><?php // echo $student ?></li> -->

            <li><?= $student ?></li>

        <?php endforeach; ?>
    </ul>
</body>

</html>