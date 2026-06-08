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

$samples = [
    ['topic' => 1, 'lesson' => 1],
    ['topic' => 2, 'lesson' => 3],
    ['topic' => 3, 'lesson' => 2],
];

foreach ($samples as $sample) {
    
    $json_str = json_encode($sample);
   
    $encoded = urlencode($json_str);
   
    echo "<a href='server.php?data={$encoded}'>Ссылка</a><p>";
}
?>
</body>
</html>