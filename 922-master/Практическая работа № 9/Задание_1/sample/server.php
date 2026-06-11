<?php
if (isset($_POST['loader'])) {
	echo "<h2>На сервере приняты данные форм</h2>";
	printf ("
	<i>Название группы: </i> <b>%s</b>, <p>
	<i>Алиасное: </i> <b>%s</b>, <p>
	<i>Страна: </i> <b>%s</b>, <p>
	<i>Стиль: </i> <b>%s</b>, <p>
	<i>Контент: </i> <b>%s</b>,
	",
		$_POST['name'],
		$_POST['alias'],
		$_POST['country'],
		$_POST['style'],
		$_POST['content']);
    echo "<h2>На сервере приняты данные форм</h2>";
	printf ("
    <i>Имя файла: </i> <b>%s</b>, <p>
	<i>Размер файла: </i> <b>%s</b>, <p>
	<i>Типо содержимого файла: </i> <b>%s</b>, <p>
	<i>Имя временного файла: </i> <b>%s</b>, <p>
	<i>Код ошибки: </i> <b>%s</b>
    ",
        $_FILES["image"]['name'],
		$_FILES["image"]['size'],
		$_FILES["image"]['type'],
		$_FILES["image"]['tmp_name'],
		$_FILES["image"]['error']);

}
?>