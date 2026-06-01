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
		$array = [
			[
			"id"=>"1",
			"album_name"=>"Atom Heart Mother",
			"date"=>"10 октября 1970", 
			"label" =>"EMI, Harvest, Capitol",
			"status"=>"Золотой (USA)"
			],
			[
			"id"=>"2",
			"album_name"=>"Meddle",
			"date"=>"30 октября 1971",
			"label"=>"EMI, Harvest, Capitol",
			"status"=>"Платиновый (USA)"
			]
		];

		echo "<h2>Исходный массив</h2>";
		
		echo "<pre>";
		print_r ($array);
		echo "</pre>";

		function buildQueryParams($array, $parentKey = '') {
			$params = [];
			foreach ($array as $key => $value) {
				$newKey = $parentKey ?
				$parentKey . '[' . $key . ']' : $key;
							if (is_array($value)) {
								$params = array_merge($params, buildQueryParams($value, $newKey));
							} else {
								$params[$newKey] = $value;
							}
			}
			return $params;
		}

		$flatParams = buildQueryParams(['data' => $array]);
		$queryParts = [];
		foreach ($flatParams as $key => $value) {
			$queryParts[] = 
		urlencode($key) . '=' . 
		urlencode($value);
			}
			$queryString = implode('&', $queryParts);

			echo "<p><strong>Строка запроса (для передачи массива): </strong><br>";
			echo "<code>" . 
			htmlspecialchars($queryString) . "</code></p>";
			$self = $_SERVER['PHP_SELF'];
			echo "<p><a href=\"$self?
		$queryString\">Передать массив через строку запроса</a></p>";

		echo "<h2>Массив из строки запроса </h2>";
		
		if (isset($_GET['data'])) {
			echo "<pre>";
			print_r($_GET['data']);
			echo "</pre>";

			if ($array == $_GET['data']) {
				echo "<p style='color:green; '> Исходный и преобразованный массивы имеют одинаковую структуру и содержимое. </p>";
			} else {
				echo "<p style='color:red;'> Структуры массивов различаются! </p>";
			}
		} else {
			echo "<p> Параметр 'data' отсутствует. Перейдите по ссылке выше, чтобы передать массив. </p>";
		}
	?>
	

</body>
</html>