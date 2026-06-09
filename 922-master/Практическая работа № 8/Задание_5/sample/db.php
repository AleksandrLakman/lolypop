<?php

if (isset($_GET['criteria'])) {
    $jsonCriteria = $_GET['criteria'];
    
    $criteria = json_decode($jsonCriteria, true);
    if ($criteria === null) {
        echo "Ошибка декодирования JSON.";
        exit;
    }
} else {
    echo "Критерии поиска не переданы.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8" />
<title>Результаты поиска</title>
</head>
<body>
<h1>Критерии поиска</h1>
<pre>
<?php
print_r($criteria);
?>
</pre>
</body>
</html>