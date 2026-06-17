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
	
        $_ERROR["valid"] = [];
        $_ERROR["empty"] = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $login = $_POST['login'] ?? '';
            $email = $_POST['email'] ?? '';
            $pwd = $_POST['pwd'] ?? '';

            if (trim($login) == '') {
                $_ERROR["empty"][] = "Логин не заполнен";
            }
            
            if (trim($email) == '') {
                $_ERROR["empty"][] = "E-mail не заполнен";
            }
            
            if (trim($pwd) == '') {
                $_ERROR["empty"][] = "Пароль не заполнен";
            }

            if (empty($_ERROR["empty"])) {

                $login = (trim($login));
                $email = (trim($email));
                $pwd = (trim($pwd));

                if (!preg_match('/^[a-zA-Z0-9]{4,}$/', $login)) {
                    $_ERROR["valid"][] = "Логин должен содержать только буквы и цифры (минимум 4 символа)";
                }

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $_ERROR["valid"][] = "Некорректный формат E-mail";
                }

                if (strlen($pwd) < 6) {
                    $_ERROR["valid"][] = "Пароль должен содержать не менее 6 символов";
                }
            }

            if (empty($_ERROR["empty"]) && empty($_ERROR["valid"])) {
                echo "<p style='color: green; font-weight: bold;'>✓ Форма успешно отправлена!</p>";
                echo "<p>Логин: $login</p>";
                echo "<p>E-mail: $email</p>";
                echo "<p>Пароль: " . str_repeat('*', strlen($pwd)) . "</p>";
            } else {
                echo "<p style='color: red; font-weight: bold;'>✗ Обнаружены ошибки:</p>";

                if (!empty($_ERROR["empty"])) {
                    echo "<p style='color: red;'><strong>Ошибки проверки на пустоту:</strong></p>";
                    echo "<ul style='color: red;'>";
                    foreach ($_ERROR["empty"] as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                }

                if (!empty($_ERROR["valid"])) {
                    echo "<p style='color: red;'><strong>Ошибки валидации:</strong></p>";
                    echo "<ul style='color: red;'>";
                    foreach ($_ERROR["valid"] as $error) {
                        echo "<li>$error</li>";
                    }
                    echo "</ul>";
                }
            }

            echo "<hr>";
            echo "<p><strong>Статистика ошибок:</strong></p>";
            echo "<p>Ошибок проверки на пустоту: " . count($_ERROR["empty"]) . "</p>";
            echo "<p>Ошибок валидации: " . count($_ERROR["valid"]) . "</p>";
        }
    ?>    

</body>
</html>