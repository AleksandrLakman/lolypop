<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

	<?php

		 "?search=teams::3";
		 "?search=albums::5";
		 "?search=tracks::10";
		
		require 'teams.php';
		require 'albums.php';
		require 'tracks.php';

		$searchValue = $_GET['search'];
		$parts = explode('::', $searchValue);
		$entity = $parts[0];
		$id   = $parts[1] - 1;

		if ($entity === 'teams'){
			echo '<h3>Информация о группе:</h3>';
			echo 'ID: ', $$entity[$id]['id'],"</br>";
			echo 'Название: ', $$entity[$id]['name'],"</br>";
			echo 'Псевдоним: ', $$entity[$id]['alias'],"</br>";
			echo 'Страна: ', $$entity[$id]['country'],"</br>";
			echo 'Дата основания: ', $$entity[$id]['date'],"</br>";
			echo 'Стиль: ', $$entity[$id]['style'],"</br>";

		} elseif ($entity === 'albums'){
			echo '<h3>Информация об альбоме:</h3>';
			echo 'ID: ', $$entity[$id]['id'],"</br>";
			echo 'Название: ', $$entity[$id]['name'],"</br>";
			echo 'Псевдоним: ', $$entity[$id]['alias'],"</br>";
			echo 'Страна: ', $$entity[$id]['country'],"</br>";
			echo 'Дата выпуска: ', $$entity[$id]['date'],"</br>";
			echo 'Номер группы: ', $$entity[$id]['id_team'],"</br>";

		} elseif ($entity === 'tracks'){
			echo '<h3>Информация о треке:</h3>';
			echo 'ID: ', $$entity[$id]['id'],"</br>";
			echo 'Название: ', $$entity[$id]['name'],"</br>";
			echo 'Номер альбома: ', $$entity[$id]['id_album'],"</br>";
		}

	?>
	

</body>
</html>