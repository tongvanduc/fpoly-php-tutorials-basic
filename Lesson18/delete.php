<?php

$path = 'C:\laragon\www\PHPBasic\Lesson18\uploads\1725271106-DucTV44-3.JPG';

if (file_exists($path)) {
    unlink($path);
}
