<?php

echo '<pre>';

// $fruits = ['apple', 'banana', 'orange'];

// foreach ($fruits as $key => $value) {
//     echo $key . ' - ' . $value . PHP_EOL;
// }

// print_r($fruits);

// echo $fruits[1];

// $fruits[] = 'Lemon';

// print_r($fruits);


// $student = ['DucTV44', 28, 'HN'];

// $student = [
//     'name' => 'DucTV44',
//     'age' => 28,
//     'address' => 'HN'
// ];

// foreach ($student as $key => $value) {
//     echo $key . ' - ' . $value . PHP_EOL;
// }

// // print_r($student);

// // echo $student['name'] . PHP_EOL;
// // echo $student['age'] . PHP_EOL;
// // echo $student['address'] . PHP_EOL;


$array = [
    [1, 2, 2],

    'student' => ['name' => 'DucTV44', 'age' => 28, 'address' => 'HN'],

    ['ahihi' => [1, 2], 'kk' => 'ahihi', 'keke' => [0, 'lolo']]
];

// $array[1]['keke'][] = 'okok';
// $array[1]['keke'][] = [123, 567];

// $array[1]['keke']['student'] = $student;

// print_r($array[1]['keke']);

foreach ($array as $key => $value) {
    echo "KEY: $key" . PHP_EOL;

    foreach ($value as $key2 => $value2) {
        echo "\n KEY2: $key2" . PHP_EOL;

        print_r($value2);
    }
}