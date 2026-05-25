<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Пользовательские функции</h2>
	
	<?php
		
		require 'function.php';	
		
		$data = fnGetData();
		
		
		$personnel = $data["personnel"];
		$courses = $data["courses"];
		$educations = $data["educations"];
		
		
		$id = isset($_GET['id']) ? $_GET['id'] : 1;
		
		
		function findPersonById($personnel, $id) {
			foreach ($personnel as $person) {
				if ($person['id_personnel'] == $id) {
					return $person;
				}
			}
			return null;
		}
		
		
		function findEduById($educations, $id) {
			$result = array();
			foreach ($educations as $edu) {
				if ($edu['id_personnel'] == $id) {
					$result[] = $edu;
				}
			}
			return $result;
		}
		
		
		function findCoursesById($courses, $id) {
			$result = array();
			foreach ($courses as $course) {
				if ($course['id_personnel'] == $id) {
					$result[] = $course;
				}
			}
			return $result;
		}
		
		
		function getPersonData($data) {
			if (!$data) {
				echo "<p>Преподаватель не найден</p>";
				return;
			}
			echo "<h3>Персональные данные (ID: {$data['id_personnel']})</h3>";
			echo "<p>ФИО: {$data['surname']} {$data['name']} {$data['patronymic']}</p>";
			echo "<p>Должность: {$data['post']}</p>";
			echo "<p>Категория: {$data['category']}</p>";
			echo "<p>Общий стаж: {$data['experience_total']} лет</p>";
			echo "<hr>";
		};
		
		
		function getPersonEdu($data) {
			if (empty($data)) {
				echo "<p>Нет данных об образовании</p>";
				return;
			}
			echo "<h3>Образование</h3>";
			foreach ($data as $edu) {
				echo "<p><strong>Учебное заведение:</strong> {$edu['institution']}</p>";
				echo "<p><strong>Квалификация:</strong> {$edu['qualification']}</p>";
				echo "<p><strong>Годы:</strong> {$edu['year_receipts']} - {$edu['year_release']}</p>";
				echo "<hr>";
			}
		};
		
		
		function getPersonCours($data) {
			if (empty($data)) {
				echo "<p>Нет данных о курсах</p>";
				return;
			}
			echo "<h3>Курсы</h3>";
			foreach ($data as $course) {
				echo "<p><strong>Название:</strong> {$course['name']}</p>";
				echo "<p><strong>Длительность:</strong> {$course['duration']} часов</p>";
				echo "<p><strong>Цена:</strong> {$course['price']} руб.</p>";
				echo "<hr>";
			}
		}
		
		
		$person = findPersonById($personnel, $id);
		$personEdu = findEduById($educations, $id);
		$personCourses = findCoursesById($courses, $id);
		
	
		getPersonData($person);
		getPersonEdu($personEdu);
		getPersonCours($personCourses);
	?>
	
	<p><a href="?id=1">Преподаватель 1</a> | <a href="?id=2">Преподаватель 2</a> | <a href="?id=3">Преподаватель 3</a> | <a href="?id=4">Преподаватель 4</a> | <a href="?id=5">Преподаватель 5</a></p>
	
</body>
</html>