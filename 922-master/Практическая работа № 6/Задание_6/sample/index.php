!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Функции</h1>
	<h2>Область видимости переменных</h2>
	<hr>
	<h2>Альбомы</h2>
	
	<?php

require "album.php"; 
require "team.php";  

function fnGetTeamName($id) {
    global $team; 
    foreach ($team as $t) {
        if ($t['id_team'] == $id) {
            return $t['name'];
        }
    }
    return "Неизвестная группа"; 
}

function fnOutAlbum() {
    global $album, $team;

    $tr = "";

    
    foreach ($album as $item) {
        
        $name = fnGetTeamName($item['id_team']);

        $tr .= "
            <tr>
                <td>{$item['id_album']}</td>
                <td>{$item['title']}</td>
                <td>{$item['date']}</td>
                <td>{$item['country']}</td>
                <td>{$name}</td>
            </tr>	
        ";
    }

    $out = "
        <table border=1 cellpadding=5>
        <tr>
            <th>ID</th>
            <th>Альбом</th>
            <th>Дата выпуска</th>
            <th>Страна</th>
            <th>Наименование группы</th>
        </tr>
        {$tr}
        </table>
    ";

    return $out;		
}		

echo fnOutAlbum();	

	?>
	

</body>
</html>