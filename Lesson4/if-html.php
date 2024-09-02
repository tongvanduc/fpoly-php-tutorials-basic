<?php
$isLoggedIn = true;
$test = true;
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Ví dụ if và HTML</title>
</head>

<body>

    <?php if ($isLoggedIn): ?>

        <p>Chào mừng bạn đã đăng nhập!</p>

            <?php if ($test): ?>
                <a href="">Logout</a>
            <?php endif; ?>

    <?php else: ?>

        <p>Bạn chưa đăng nhập. Vui lòng đăng nhập để tiếp tục.</p>

    <?php endif; ?>
</body>

</html>