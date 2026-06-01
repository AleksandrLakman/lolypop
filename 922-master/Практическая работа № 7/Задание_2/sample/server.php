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
		// инициализация массива
		$course = [
			[
				"Основы программирования", 
				["Введение в PHP", "Переменные", "Константы", "Типы данных", "Строки"]
			],		
			[
				"Функции",
				["Встроенные функции", "Пользовательские функции", "Область видимости переменных"]
			],
			[
				"Управляющие конструкции",
				["Условные операторы", "Циклы", "Конструкции"]
			]
		];

		// вывод данных из массива $course согласно переданных параметров
		$user = $_GET['user'] ?? null;
		$topicIndex = isset($_GET['topic']) ?
		(int)$_GET['topic'] - 1 : null;
		$lessonIndex = isset($_GET['lesson']) ?
		(int)$_GET['lesson'] : null;

		if ($usser === null || $topicIndex === null || $lessonIndex === null) {
			echo "<p>Ошибка: не переданы все необходимые параметры (user, topic, lesson). </p>";

		} elseif (!isset($course[$topicIndex]))
		{
			echo "<p> Ошибка: тема с индексом" . ($topicIndex + 1) . "не существует. </p>";
		} else {
			$topicData = $course[$topicIndex];
			$topicName = $topicData[0];
			$leasson = $topicData[1];
		}
			

			if (!isset($lesson[$lessonIndex])) 
		{
				echo "<p>Ошибка: урока с индексом $lessonIndex в теме '$topicName' не существует. </p>";
		} else {
			$lessonName = $lesson[$lessonIndex];
								echo "</p>Пользователь $user запросил материал: </p>";
								echo "</p>Тема: $topicName</p>";
								echo "</p>Урок: $lessonName</p>";
		}
	
	?>
	

</body>
</html>