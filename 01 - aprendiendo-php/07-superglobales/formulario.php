<!DOCTYPE HTML>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Formulario en PHP</title>
    </head>
    <body>
        <!-- <h1>Formulario en PHP con método GET</h1>
        <form method="GET" action="recibir.php">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" />
            </p>
            
            <p>
                <label for="nombre">Apellidos: </label>
                <input type="text" name="apellidos" />
            </p>
            
            <input type="submit" value="Enviar datos" />
        </form>
        -->
        
        <h1>Formulario en PHP con método POST</h1>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre: </label>
                <input type="text" name="nombre" />
            </p>
            
            <p>
                <label for="nombre">Apellidos: </label>
                <input type="text" name="apellidos" />
            </p>
            
            <input type="submit" value="Enviar datos" />
        </form>
    </body>
</html>


<?php

