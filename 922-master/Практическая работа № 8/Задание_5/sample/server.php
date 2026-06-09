<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $crit = [
        'name' => $_POST['name'] ?? '',
        'brand' => $_POST['brand'] ?? '',
        'os' => $_POST['os'] ?? '',
        'ssd' => $_POST['ssd'] ?? ''
    ];

    $jsonCrit = json_encode($crit);

    $link = 'db.php?criteria=' . urlencode($jsonCrit);

    echo "<p>Данные сохранены. <a href=\"$link\">Перейти к результату поиска</a></p>";
}
?>