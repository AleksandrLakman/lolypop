<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $a = 1;
    $b = 2;
    $c = 3;

    echo  $a . "x" . '<sup>' . 2 . '</sup>' . " + " . "(" . $b . "x) + " . "(" . $c . ") = 0" . '</p>';

    $d = pow($b, 2) - 4 * $a * $c;
    
    if ($d > 0) {
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo "x1 = " . $x1 . '<br />';
        echo "x2 = $x2</span>";
    } elseif ($d === 0) {
        $x = -$b / (2 * $a);
        echo "x = " . $x . '<br />';
    } else {
        echo "Нет корней ";
    }

    ?>
</body>
</html>