<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
        require_once 'data.php';

        foreach ($team as $key => $item) {
            echo "
            <p>
                Группа: {$item['name']} (id = {$item['id_team']})<br> />
                Страна: {$item['country']}<br />
                Дата рождения: {$item['date']}<br />
                Стиль: {$item['style']}<br />
            </p>
            <hr />
            ";
        }

    ?>
    
</body>
</html>