<?php 

echo '<pre>';

// Hàm không có tham số
function sayHello() {
    echo "Hello";
}

// Hàm có tham số
function sayHelloWho($name) {
    echo "Hello $name <br>";
}

// sayHelloWho('Jonh');
// sayHelloWho('DucTV44');


// Hàm có trả về
function sumTwoNumber($a, $b) {
    $sum = $a + $b;

    return $sum;
}

// $sum = sumTwoNumber(5, 8);
// echo $sum + 15;

$str = 'Hôm nay trời nắng đẹp';

// echo strlen($str);

// Tham số
function response($message, $statusCode = 200) {
    echo $message . ' - ' . $statusCode . '<br>';
}

// response('Thao tác thành công');
// response('Thao tác THẤT BẠI', 500);

$message = "Good morning";

$greet = function($name) use ($message) {
    return "$message, $name!";
};

// echo $greet("John");