<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$json = '{
  "name": "Harry Potter and the Goblet of Fire",
  "author": "J. K. Rowling",
  "year": "2000",
  "genre": "Fantasy Fiction",
  "bestseller": true
}';

$array = json_decode($json, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo "Ошибка декодирования JSON: " . json_last_error_msg();
} else {
    
    echo "<h2>Декодированный массив</h2>";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}
?>
</body>
</html>