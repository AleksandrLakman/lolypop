<?php 

if(isset($_FILES['myfile'])){ 

$count = count($_FILES["myfile"]["name"]); 

for ($i=0; $i < $count; $i++) { 

$current_path = $_FILES["myfile"]["tmp_name"][$i]; 

$filename = $_FILES["myfile"]['name'][$i]; 

$new_path = __DIR__ . '/upload/' . $filename; 

move_uploaded_file($current_path, $new_path); 
} 

echo "<h1>Проверьте папку upload</h1>"; 
} 
?> 