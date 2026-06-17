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

	<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
    <style>
        .success { color: green; font-weight: bold; }
        .error { color: red; font-weight: bold; }
        .info { background: #f0f0f0; padding: 10px; margin: 10px 0; }
        .file-info { border: 1px solid #ccc; padding: 10px; margin: 10px 0; }
    </style>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Безопасность данных, часть 2</h2>
    <hr>
    <h2>Загрузка файлов</h2>

    <?php
        $_ERROR = [];

        if (!empty($_POST['login'])) {
    
            $login = htmlspecialchars(trim($_POST['login']));

            if (!preg_match('/^[a-z0-9]{5,10}$/u', $login)) {
                $_ERROR[] = "Логин $login невалиден";
            } 
        } else {
            $_ERROR[] = "Не заполнено поле Логин";
        }

        if ($_FILES['myfile']["error"] != UPLOAD_ERR_OK) {

            switch ($_FILES['myfile']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                    $_ERROR[] = "Размер принятого файла превысил максимально допустимый размер, который задан директивой upload_max_filesize конфигурационного файла php.ini (код ошибки: 1)";
                    break;
                case UPLOAD_ERR_FORM_SIZE:
                    $_ERROR[] = "Размер загружаемого файла превысил значение MAX_FILE_SIZE, указанное в HTML-форме (код ошибки: 2)";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    $_ERROR[] = "Загружаемый файл был получен только частично (код ошибки: 3)";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    $_ERROR[] = "Файл не был загружен (код ошибки: 4)";
                    break;
                default:
                    $_ERROR[] = "Неизвестная ошибка загрузки (код ошибки: " . $_FILES['myfile']['error'] . ")";
            }
        } 

        if (empty($_ERROR)){

            $allowedMimeTypes = [
                'image/jpeg',
                'application/pdf',
                'application/zip'
            ];

            $fileTmp = $_FILES["myfile"]["tmp_name"];
            $fileMimeType = mime_content_type($fileTmp);

            if (!in_array($fileMimeType, $allowedMimeTypes)) {
                $_ERROR[] = "Загружаемый файл не относится к разрешенным типам. Разрешены: JPEG, PDF, ZIP";
            } else {

                echo "<div class='info'>";
                echo "<p><strong>MIME-тип файла:</strong> " . htmlspecialchars($fileMimeType) . "</p>";
                echo "</div>";
            }
        }

        if (empty($_ERROR)) {

            $uploadDir = __DIR__ . '/upload/';
            if (!file_exists($uploadDir)) {
                if (!mkdir($uploadDir, 0777, true)) {
                    $_ERROR[] = "Не удалось создать папку upload";
                }
            }
        }

        if (empty($_ERROR)) {

            $current_path = $_FILES['myfile']['tmp_name'];

            $filename = $_FILES['myfile']['name'];

            $fileExtension = pathinfo($filename, PATHINFO_EXTENSION);

            $newFilename = 'file_' . time() . '_' . uniqid() . '.' . $fileExtension;

            $new_path = __DIR__ . '/upload/' . $newFilename;                

            if (move_uploaded_file($current_path, $new_path)) {

                $fileSize = $_FILES['myfile']['size'];
                $fileMime = mime_content_type($new_path);

                echo "<h3 class='success'>✓ Файл успешно загружен на сервер</h3>";
                echo "<div class='file-info'>";
                echo "<p><strong>Имя файла:</strong> " . htmlspecialchars($filename) . "</p>";
                echo "<p><strong>Сохранен как:</strong> " . htmlspecialchars($newFilename) . "</p>";
                echo "<p><strong>Размер:</strong> " . round($fileSize / 1024, 2) . " КБ</p>";
                echo "<p><strong>Тип:</strong> " . htmlspecialchars($fileMime) . "</p>";
                echo "</div>";

                if ($fileMime == 'image/jpeg') {
                    echo "<div class='info'>";
                    echo "<p><strong>Превью изображения:</strong></p>";
                    echo "<img src='upload/" . $newFilename . "' width='250px' alt='Загруженное изображение'>";
                    echo "</div>";
                } elseif ($fileMime == 'application/pdf') {
                    echo "<div class='info'>";
                    echo "<p><strong>PDF файл загружен</strong></p>";
                    echo "<p><a href='upload/" . $newFilename . "' target='_blank'>Открыть PDF</a></p>";
                    echo "</div>";
                } elseif ($fileMime == 'application/zip') {
                    echo "<div class='info'>";
                    echo "<p><strong>ZIP архив загружен</strong></p>";
                    echo "<p><a href='upload/" . $newFilename . "'>Скачать ZIP</a></p>";
                    echo "</div>";
                }

            } else {

                echo "<h3 class='error'>✗ Не удалось переместить файл в директорию хранения</h3>";
            }    

        } else {

            echo "<h3 class='error'>✗ Обнаружены ошибки:</h3>";
            echo "<ul class='error'>";
            foreach ($_ERROR as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
            }
            echo "</ul>";
        }
    ?>

</body>
</html>


</body>
</html>