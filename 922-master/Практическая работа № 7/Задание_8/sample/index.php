<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

include 'team.txt'; 

$teamsArray = json_decode($team);

echo '<pre>'; 
print_r($teamsArray);
echo '</pre>';
?>
</body>
</html>