<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Отправка данных в строке запроса</h2>
		
	<?php

require "albums.php";

$id = 2;

$album = array();

foreach ($albums as $item){
	if ($item["id"] == $id) {
		$album = $item; 
		break; 
	}
}

if (!empty($album)) {
    
    $json_data = json_encode($album);
    
    $encoded_data = urlencode($json_data);
   
    echo "<a href='server.php?data={$encoded_data}'>Передать альбом {$album['album_name']}</a>";
} else {
    echo "<p>Альбом с id={$id} не найден.</p>";
}
?>
	

</body>
</html>