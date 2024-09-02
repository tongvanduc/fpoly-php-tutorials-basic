<?php 

$a = 1;
$sanPham = 'Nước ngọt';
$float = 2.5;
$boolTrue = true;
$boolFalse = false;
$array = [1, 2, 'string', $sanPham, $boolTrue, $boolFalse];

$a = 256;

echo "<pre>";

print_r($array);

// var_dump($a, $sanPham, $float, $boolTrue, $boolFalse, $array);

// define('MAX_BUY', 100);

// $x = 100;  

// var_dump(! ($x == 90));

// $str1 = "Hôm nay";
// $str2 = "trời nắng đẹp";

// $str = $str1 . ' ' . $str2;

// echo $str;

// $user = "ahihi";
// echo !true ? "anonymous" : "logged in";

// $a = 123;

// echo $a ?? 'Không tồn tại';

// // if (!empty($a)) {
// //     echo $a;
// // } else {
// //     echo 'Không tồn tại';
// // }

// echo "<br>";
// echo $b ?? 'Không tồn tại';