<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Список преподавателей</h2>
	
	<?php
		
		require "personnel.php";

	
		$statistic = array();

		
		function fnCollectingStatistic($array) {
			global $statistic;
			static $i = 0;
			$statistic[$i]["user"] = $array["surname"] . " " . $array["name"] . " " . $array["patronymic"];
			$statistic[$i]["site"] = $array["site"];
			$statistic[$i]["email"] = $array["email"];
			$i++;
		}

		
		function fnOutPersonnel($personnel) {
			$tr = "";
			foreach ($personnel as $key => $person) {
				
				if ($person["site"] == "" || $person["email"] == "") {
					fnCollectingStatistic($person);
				}
				$tr .= "
					<tr>
						<td>{$person['id_personnel']}</td>
						<td>{$person['surname']} {$person['name']} {$person['patronymic']}</td>
						<td>{$person['post']}</td>
						<td>{$person['category']}</td>
					</tr>
				";
			}
			return "
				<table border=1 cellpadding=5>
				<tr>
					<th>№</th>
					<th>Фамилия Имя Отчество</th>
					<th>Должность</th>
					<th>Категория</th>
				</tr>
				{$tr}
				</table>
			";		
		}

		
		echo fnOutPersonnel($personnel);

		function fnDisplayStatistic($statistic) {
			$html = "<h2>Статистика преподавателей без сайта или почты</h2>";
			$html .= "<table border='1' cellpadding='5'>";
			$html .= "<tr>
						<th>Пользователь</th>
						<th>Сайт</th>
						<th>Email</th>
					  </tr>";
			foreach ($statistic as $entry) {
				$html .= "<tr>
							<td>{$entry['user']}</td>
							<td>{$entry['site']}</td>
							<td>{$entry['email']}</td>
						  </tr>";
			}
			$html .= "</table>";
			return $html;
		}

		echo fnDisplayStatistic($statistic);
	?>
	

</body>
</html>