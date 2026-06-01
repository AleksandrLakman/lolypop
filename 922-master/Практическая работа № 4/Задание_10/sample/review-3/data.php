<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    
        $track = array(
            array('id_track' => '1', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '2', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '3', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '4', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '5', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '6', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '7', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '8', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '9', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '10', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '11', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '12', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '13', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '14', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '15', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '16', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '17', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '18', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '19', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '20', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '21', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '22', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '23', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '24', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '25', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '26', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '27', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '28', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '29', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '30', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '31', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '32', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '33', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '34', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '35', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '36', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '37', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '38', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '39', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '40', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '41', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '42', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '43', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '44', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '45', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '46', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '47', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '48', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '49', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '50', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '51', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '52', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '53', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '54', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '55', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
            array('id_track' => '56', 'name' => 'Back in the Saddle', 'note' => '', 'id_album' => '10'),
        )
    
    ?>

</body>
</html>