<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание 12</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>
	
	<?php
require "albums.php";


$result_albums = [];

array_map(function($item) use (&$result_albums) {
    if (strpos($item["status"], "Серебряный") !== false) {
        $result_albums[] = $item;
    }
}, $albums);

echo "<pre>";
var_dump($result_albums);
echo "</pre>";



$result_albums1 = [];

array_map(function($item) {
    global $result_albums1;
    if (strpos($item["status"], "Серебряный") !== false) {
        $result_albums1[] = $item;
    }
}, $albums);

echo "<pre>";
var_dump($result_albums1);
echo "</pre>";
?>
	

</body>
</html>