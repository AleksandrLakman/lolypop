<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Безопасность данных, часть 1</h2>
	
	<?php

		
		if (!empty(trim($_POST['login']))) {
			$login = filter_var(trim($_POST['login']));
			if (!preg_match("/^[a-zA-Z0-9]+$/", $login)) {
				$_ERROR[]= "Логин ". $login. " невалиден";
		} else {
			$_ERROR[]= "Не заполнено поле Логин";
		}
		echo $login,"</br>";
	}
		
		if (!empty(trim($_POST['email']))) {
			$email = filter_var(trim($_POST['email']));
			if (!preg_match("/^[a-zA-Z0-9]+$/", $email)) {
				$_ERROR[]= "Почта ". $email. " невалиден";
		} else {
			$_ERROR[]= "Не заполнено поле Почта";
		}}
		echo $email, "</br>";

		if (!empty(trim($_POST['pwd']))) {
			$email = filter_var(trim($_POST['pwd']));
			if (!preg_match("/^[a-zA-Z0-9]+$/", $pwd)) {
				$_ERROR[]= "Пароль ". $pwd. " невалиден";
		} else {
			$_ERROR[]= "Не заполнено поле Пароль";
		}}
		echo $pwd, "</br>";
var_dump($_ERROR)
	?>	
	

</body>
</html>