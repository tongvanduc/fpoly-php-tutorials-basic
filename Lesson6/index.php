<?php 

echo '<pre>';

// $greet = function ($name) {
//     echo $name . '<br>';
// };

// $greet('Ductv44');
// $greet('FPoly');

// $prefix = "Welcome ";

// $introduce = function ($name) use ($prefix) {
//     echo $prefix . $name . '<br>';
// };

// $introduce('Ductv44');
// $introduce('FPoly');

// $array = [1, 2, 3, 4];

// $array2 = array_map(function ($item) {

//     echo $item . '<br>';

//     return $item * 2;
// }, $array);

// print_r($array2);


function increment(&$value) {
    $value++;

    echo $value . '<br>';
}

$num = 5;

increment($num);

echo $num;