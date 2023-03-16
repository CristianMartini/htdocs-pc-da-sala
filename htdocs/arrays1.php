<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    $numero = array(0, 1, 4, 9,16);
    for($i=0; $i<5; $i++){
        echo $i . ":".$numero[$i];
        echo"<br>";
    }
    ?>
</body>
</html>