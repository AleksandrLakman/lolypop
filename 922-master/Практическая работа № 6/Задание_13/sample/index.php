<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Задание 13</title>
</head>
<body>
	<h1>Функции</h1>
	<h2>Анонимные функции</h2>
	
	<?php
require "albums.php";


$clean_albums = array_map(function($album) {
    
    return array_map('strip_tags', $album);
}, $albums);


array_map(function($item, $key) {
    printf("
        Номер - %s<br />
        ID альбома: %d<br />
        Название: %s<br />
        Дата выпуска: %s<br />
        Лейбл: %s<br />
        Формат: %s<br />
        Статус: %s<p>
        <hr />
    ",
        ($key < 9) ? "000" . ++$key : "00". ++$key,
        $item['id'],
        $item['album_name'],
        $item['date'],
        $item['label'],
        $item['format'],
        $item['status']
    );
}, $clean_albums, array_keys($clean_albums));
?>
	

</body>
</html>