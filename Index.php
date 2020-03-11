<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 11- Variables</title>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
   <center> <h1>Variables</h1> </center>
   
    <?php
    $nombre='Nombre del alumno';
    $edad=21; //escribe tu edad
    $Beca=3500.50;
    $estatus=true;
    echo "Tipos de variables <br>";
    echo $nombre. '<br/>';
    echo $edad. '<br/>';
    echo $Beca. '<br/>';
    echo $estatus. '<br/>';
    
    echo $nombre. 'Tiene' .$edad. 'años de edad y gana'.$Beca.'<br/>'; 
?>


<center> <h1>Operadores aritmeticos</h1> </center>
<?php

$numero1=10;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;
echo 'La suma es= '.$suma . '<br/>';
echo 'La suma es= '.($numero1 + $numero2).'<br/>';
echo 'La resta es= '.$resta . '<br/>';
echo 'La multiplicacion es= '.$multiplicacion . '<br/>';
echo 'La division es= '.$division . '<br/>';
echo 'incremento de suma es= '.$suma++ . '<br/>';
echo 'El decremento de la suma es= '.$suma-- . '<br/>';
echo 'Residuo es='.$numero1%$numero2 . '<br/>';      


?>

</body>
</html>