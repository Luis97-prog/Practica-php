<?php
$ciudad = [
    [
        'nombre' =>'Buenos Aires',
        'poblacion'=>1000,
    ],
    [
        'nombre' =>'Cordoba',
        'poblacion'=>750,
    ],
    [
        'nombre' =>'Mendoza',
        'poblacion'=>500,
    ],
    [
        'nombre' =>'Tucuman',
        'poblacion'=>300,
    ],
    [
        'nombre' =>'Santa Fe',
        'poblacion'=>250,
    ],
    [
        'nombre' =>'Jujuy',
        'poblacion'=>125,
    ],
    [
        'nombre' =>'San Luis',
        'poblacion'=>100,
    ],
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciudades</h1>
    <hr>
<?php
    //echo $ciudad[1]['nombre'] . '<h1 style = "color: blue"> con una población de ' . $ciudad[1]['poblacion'] . ' habitantes </h1>';
    //var_dump($ciudad[0]);   //Esto te ayudará a depurar y asegurarte de que el arreglo contiene la información correcta.

    /* for($i=0; $i<=1; $i++){
        echo '<h2 style = "color:blue">Nombre: '.$ciudad[$i]['nombre'].'</h2> ';
        echo '<h3 style = "color:green">Poblacion: '.$ciudad[$i]['poblacion'].'</h3><hr style = "color:black">';
    } */

    $html = '';

    foreach($ciudad as $valor){
        $html .= '
        <h2 style = "color:blue">Nombre: '.$valor['nombre'].'</h2>
        <h3 style = "color:green">Poblacion: '.$valor['poblacion'].'</h3><hr style = "color:black">';
    }

    echo $html;

?>
    
    
</body>
</html>