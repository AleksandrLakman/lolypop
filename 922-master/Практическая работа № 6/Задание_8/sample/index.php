<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>

	<?php
require "personnel.php";

function fnChangingTerm(&$person, $term, $val) {
    $person[$term] = $val;
}

if (
    isset($_GET['num']) &&
    isset($_GET['term']) &&
    isset($_GET['val']) 
) {
    $num = $_GET['num'];
    $term = $_GET['term'];
    $val = $_GET['val'];

    echo "<pre>До изменения:\n";
    var_dump($personnel[$num]);
    echo "</pre>";

    fnChangingTerm($personnel[$num], $term, $val);

    echo "<pre>После изменения:\n";
    var_dump($personnel[$num]);
    echo "</pre>";
} else {
    echo "<b>Ошибка:</b> Проверьте, что параметры num, term, val заданы корректно.";
}
?>
	

</body>
</html>