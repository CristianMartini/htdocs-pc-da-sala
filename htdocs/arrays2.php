<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays 2</title>
</head>
<body>
<?php 
    function mostrar($numero){
        for($i=0; $i <count($numeros); $i++)
        {
            echo $i . ":".$numero[$i];
            echo"<br>";
        }


    }


?>



<?php
   mostrar(array(0, 1, 4, 9,16));
    mostrar(array("ouros", "copas","paus","espadas"));
    mostrar(array("evee","vaporeon","jolteon","flareon","espeon","umbreon","leafeon","glaceon","sylveon"));


    ?>
</body>
</html>