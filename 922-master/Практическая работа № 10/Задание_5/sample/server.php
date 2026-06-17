<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Отправка данных на сервер</h1>
	<h2>Безопасность данных, часть 2</h2>
	<hr>
	<h2>Загрузка файлов</h2>

	<?php
    $_ERROR = []; 

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['load'])) {

        $login = $_POST['login'] ?? '';

        if (trim($login) == '') {
            $_ERROR[] = "Логин не может быть пустым";
        }

        $login = filter_var($login, FILTER_SANITIZE_STRING);

        if (!preg_match('/^[a-z0-9]{5,10}$/', $login)) {
            $_ERROR[] = "Логин должен содержать только латинские буквы и цифры (5-10 символов)";
        }

        if (!isset($_FILES['myfile']) || $_FILES['myfile']['error'] != UPLOAD_ERR_OK) {
            $_ERROR[] = "Ошибка загрузки файла";
        }

        if (empty($_ERROR)) {
            $fileTmp = $_FILES['myfile']['tmp_name'];
            $fileName = $_FILES['myfile']['name'];
            
            $imageType = exif_imagetype($fileTmp);
            
            if ($imageType === false) {
                $_ERROR[] = "Файл не является изображением";
            } else {
                $allowedTypes = [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_BMP];
                
                if (!in_array($imageType, $allowedTypes)) {
                    $_ERROR[] = "Недопустимый тип файла. Разрешены: JPEG, PNG, BMP";
                }
            }
        }

        if (empty($_ERROR)) {
            $uploadDir = 'upload/';

            if (!file_exists($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $newName = 'avatar_' . time() . '.' . $ext;
            $destination = $uploadDir . $newName;

            if (move_uploaded_file($fileTmp, $destination)) {
                echo "<p style='color:green;'>✓ Файл успешно загружен!</p>";
                echo "<p>Логин: $login</p>";
                echo "<p>Файл: $newName</p>";
            } else {
                $_ERROR[] = "Не удалось переместить файл";
            }
        }

        if (!empty($_ERROR)) {
            echo "<p style='color:red;'>Ошибки:</p><ul>";
            foreach ($_ERROR as $e) {
                echo "<li style='color:red;'>$e</li>";
            }
            echo "</ul>";
        }
    }

?>


</body>
</html>