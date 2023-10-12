<?php
//$nombre = "Luis";
$animales = ['Perro','Gato','Loro']; 
//$animales = array('Perro','Gato','Loro');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $i=0;
        while($i<=2){
            echo '<h1> Mis animales favoritos son: '.$animales[$i].'</h1>';
            $i++;
        }
    ?>
</body>
</html>