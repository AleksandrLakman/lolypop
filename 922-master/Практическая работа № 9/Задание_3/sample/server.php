<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>На сервер приняты данные формы</h1>";
    if ($_POST['surname'] != "") {
        echo "<p><i>Фамилия: </i><b>{$_POST['surname']}</b>,</p>";
    }
    if ($_POST['name'] != "") {
        echo "<p><i>Имя: </i><b>{$_POST['name']}</b>,</p>";
    }
    if ($_POST['patronymic'] != "") {
        echo "<p><i>Отчество: </i><b>{$_POST['patronymic']}</b>,</p>";
    }
    if ($_POST['post'] != "") {
        echo "<p><i>Должность: </i><b>{$_POST['post']}</b>,</p>";
    }
    if ($_POST['category'] != "") {
        echo "<p><i>Категория: </i><b>{$_POST['category']}</b>,</p>";
    }
    if ($_POST['experience_college'] != "") {
        echo "<p><i>Стаж в техникуме: </i><b>{$_POST['experience_college']}</b>.</p>";
    }

    echo "<h1>Пользователь пытается загрузить файл</h1>";
    if ($_FILES['image']['name'] != "") {
        echo "<p><i>Имя файла: </i><b>{$_FILES['image']['name']}</b>,</p>";
        echo "<p><i>Размер файла: </i><b>{$_FILES['image']['size']}</b> байт,</p>";
        echo "<p><i>Тип содержимого файла: </i><b>{$_FILES['image']['type']}</b>,</p>";
        echo "<p><i>Имя временного файла: </i><b>{$_FILES['image']['tmp_name']}</b>,</p>";
        echo "<p><i>Код ошибки: </i><b>{$_FILES['image']['error']}</b>.</p>";
    } else {
        echo "<p><i>Код ошибки: </i><b>{$_FILES['image']['error']}</b>.</p>";
        echo "Пользователь не выбрал файл<br />";
        echo '<img src="' . "images/no-photo.jpg" . '" alt="Описание картинки">';
    }

    ?>

</body>
</html>