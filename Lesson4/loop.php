<?php 

echo '<pre>';

// Bài tập 1: Tính tổng các số từ 1 đến 100
// Viết một đoạn mã PHP sử dụng vòng lặp for để tính tổng các số từ 1 đến 100 và hiển thị kết quả.

/*
$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}

echo "Tổng các số từ 1 đến 100 là: $sum";
*/

// Bài tập 2: In các số chẵn từ 1 đến 20
// Viết một đoạn mã PHP sử dụng vòng lặp while để in ra các số chẵn từ 1 đến 20.

/*
$i = 1;

while ($i <= 20) {
    if ($i % 2 == 0) {
        echo "$i <br>";
    }

    $i++;
}
*/

// Bài tập 3: Đếm số phần tử trong mảng
// Viết một đoạn mã PHP sử dụng vòng lặp do...while để đếm số phần tử trong một mảng không sử dụng hàm count()

/*
$elements = ['apple', 'banana', 'cherry', 'date'];
$count = 0;
$i = 0;

echo sizeof($elements) . '<br>';

do {
    $count++;
    $i++;
} while ($i < sizeof($elements));

echo "Số phần tử trong mảng là: $count";
*/

// Bài tập 4: Tìm số lớn nhất trong mảng
// Cho một mảng các số nguyên. Viết đoạn mã PHP sử dụng vòng lặp foreach để tìm và hiển thị số lớn nhất trong mảng.

/*
$numbers = [3, 5, 7, 2, 8, 12, -1, 4, 10];
$max = $numbers[0];

foreach ($numbers as $number) {

    echo "Duyệt số $number <br>";

    if ($number > $max) {

        $max = $number;

    }
}

echo "Số lớn nhất trong mảng là: $max";
*/
