<?php
    // Operadores aritméticos 

$numero1 = 55;
$numero2 = 33;

echo 'Suma: '.($numero1+$numero2).'<br/>';
echo 'Resta: '.($numero1-$numero2).'<br/>';
echo 'Multiplicación: '.($numero1*$numero2).'<br/>';
echo 'División: '.($numero1/$numero2).'<br/>';
echo 'Módulo/Resto: '.($numero1%$numero2).'<br/>';

    // Operadores incremento y decremento
$year = 2019;
$year++; //Incremento

$year--; // Decremento

//preincremento
++$year;

//predecremento
--$year;
echo "<h1>".$year."</h1>";

// Operadores de asignación
$edad = 55;

echo $edad.'<br/>';
echo ($edad+=5); //se puede usar -= *=


?>