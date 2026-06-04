<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>

    <?php

    $images = array(
    '1.jpg',
    '2.jpg',
    '3.jpg',
    '4.jpg',
    '5.jpg',
    '6.jpg'
    );
    
    $count = random_int(1, 6); + 1;
    $cube = [];
    $sum = 0;

    for($i = 0; $i < $count; $i++){
        $rand = random_int(0, 5);
        $sum = $sum + $rand + 1;
        echo '<img src="' . $images[$rand] . '" Случайный куб">';
    }
	
    echo "<h2>Сумма набранных очков: $sum </h2>";

    ?>

</body>
</html>