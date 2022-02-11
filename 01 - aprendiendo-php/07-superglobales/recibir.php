<?php
// Opción 1: Método GET, aparecen por URL
//echo "<h1>".$_GET['nombre']."</h1>";
//echo "<h1>".$_GET['apellidos']."</h1>";

// Opción 2: Método POST, aparecen por URL
echo "<h1>".$_POST['nombre']."</h1>";
echo "<h1>".$_POST['apellidos']."</h1>";

var_dump($_POST);

?>