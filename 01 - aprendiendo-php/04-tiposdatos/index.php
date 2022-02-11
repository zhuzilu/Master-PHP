<?php

/* 
 TIPOS DE DATOS:
 Entero (Int/ integer) 
 Float / Double
 Booleano (bool)
 Cadena (String)
 null
 Array (colección de datos)
 Objetos
 
 Como Php es un lenguaje débilmente tipado no se define el tipo de dato que 
 es como en otros lenguajes (Java, C#)   

Consideraciones: Una variable no puede empezar por un numero, 
se pueden poner _. Evitar poner carácteres latinos (tildes, ñ), símbolos (&,*,-), etc.
 */

$numero = 100;
$decimal = 12.4;
$cadena = 'Soy un texto';
$verdadero = true;

echo gettype($numero).'<br>'; //resultado: integer
echo gettype($decimal).'<br>'; //resultado: double
echo gettype($cadena).'<br>'; //resultado: string

echo $verdadero.'<br>'; // resultado: 1
echo gettype($verdadero); // resultado: boolean

//Herramienta interesante de debug de variables
var_dump($cadena);

//Diferencia entre usar comillas dobles y simples

$texto_comillas_simples = 'Comillas simples y variable: $cadena';
$texto_comillas_dobles = "Comillas dobles y variable: $cadena";

echo $texto_comillas_simples.'<br>'; //Comillas simples y variable: $cadena

echo $texto_comillas_dobles.'<br>'; //Comillas dobles y variable: Soy un texto

//Las comillas dobles son más lentas, es mejor concatenar con simples

// Saltos de línea: \n 
?>