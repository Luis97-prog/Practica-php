<?php
//$nombre = "Luis";
$animales = ['Perro','Gato','Loro',11,false]; 
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
        //echo '<h1> Mis animales favoritos son: '.$animales[$i].'</h1>';
        /* for($i=0;$i<=2;$i++){
            echo '<h1> Mis animales favoritos son: '.$animales[$i].'</h1>';
        } */

        foreach($animales as $valor){
            echo '<h1> Mis animales favoritos son: '.$valor.'</h1>';
        }





    ?>
</body>
</html>