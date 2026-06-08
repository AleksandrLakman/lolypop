<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $assoc_array = [ 
		"name" => "Мастер и Маргарита",
		"author" => "М.Булгаков",
		"year" => 1940,
		"genre" => "Мистика",
		"bestseller" => true
	];

require 'array.php';

$jsonString = json_encode($assoc_array);

echo "<h2>JSON строка</h2>";
echo "<pre>{$jsonString}</pre>";

$decodedArray = json_decode($jsonString, true);

echo "<h2>Декодированный массив</h2>";
echo "<pre>";
print_r($decodedArray);
echo "</pre>";
?>
</body>
</html>