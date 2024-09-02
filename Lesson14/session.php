<?php 

session_start();

echo '<pre>';

$_SESSION['username'] = 'ductv44';
$_SESSION['password'] = 'ductv44';
$_SESSION['cart'] = [
    [
        'id' => 1,
        'name' => 'Sản phẩm 1'
    ],
    [
        'id' => 2,
        'name' => 'Sản phẩm 2'
    ]
];

print_r($_SESSION);

echo $_SESSION['username'] . PHP_EOL;
echo $_SESSION['cart'][0]['name'] . PHP_EOL;

unset($_SESSION['username']);

print_r($_SESSION);


echo '================SESSION DESTROY================' . PHP_EOL;

session_destroy();

session_start();

print_r($_SESSION);