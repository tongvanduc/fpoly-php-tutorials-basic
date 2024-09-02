<?php 

echo '<pre>';

// setcookie('username', 'Ahihi', time() + 3600, '/');
// setcookie('age', 69, time() + 3600, '/');

// print_r($_COOKIE);

echo '===========DELETE COOKIE============' . PHP_EOL;

setcookie('username', '', time() - 3600, '/');
setcookie('age', '', time() - 3600, '/');

print_r($_COOKIE);