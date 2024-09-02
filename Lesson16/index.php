<?php 

echo '<pre>';

// $file = fopen('example.txt', 'w');

// fwrite($file, 'Helle World!');

// fclose($file);

// $file = fopen('example.txt', 'r');

// $content = fread($file, filesize('example.txt'));

// fclose($file);

// echo $content;

// unlink('../../ahihi/file.txt');

// // __FILE__: Trả về đường dẫn tuyệt đối đến file hiện tại.
// echo __FILE__ . PHP_EOL;

// // __DIR__: Trả về thư mục của file hiện tại.
// echo __DIR__ . PHP_EOL;

// // basename(): Trả về tên file từ một đường dẫn.
// echo basename('C:\laragon\www\PHPBasic\Lesson16\index.php') . PHP_EOL;

// // dirname(): Trả về đường dẫn của thư mục chứa file.
// echo dirname('C:\laragon\www\PHPBasic\Lesson16\index.php') . PHP_EOL;

// // realpath(): Trả về đường dẫn tuyệt đối thực tế từ một đường dẫn tương đối.
// echo realpath('note.docx') . PHP_EOL;

// // pathinfo(): Trả về thông tin về đường dẫn, bao gồm thư mục, tên file, phần mở rộng.
// $pathinfo = pathinfo('./note.docx');

// print_r($pathinfo);

require_once 'config.php';

print_r($configDB);