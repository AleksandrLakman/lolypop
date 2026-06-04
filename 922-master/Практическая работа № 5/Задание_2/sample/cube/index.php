<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	<h2>Встроенные функции, часть 1</h2>
	
	<?php

    $images = array(
    '1.jpg',
    '2.jpg',
    '3.jpg',
    '4.jpg',
    '5.jpg',
    '6.jpg'
);

    $kub1 = array_rand($images);
    $randomImage = $images[$kub1];

    $kub2 = array_rand($images);
    $randomImage = $images[$kub2];

    $kub3 = array_rand($images);
    $randomImage = $images[$kub3];

    $sum=$kub1+$kub2+$kub3+3;

    echo '<h2>Поздравляем!</h2>';
    echo "<h4>Вы набрали $sum баллов!</h4>";

	?>

    <img src="<?php echo $images[$kub1]; ?>" alt="Случайный куб 1">
    <img src="<?php echo $images[$kub2]; ?>" alt="Случайный куб 2">
    <img src="<?php echo $images[$kub3]; ?>" alt="Случайный куб 3">
	

</body>
</html>