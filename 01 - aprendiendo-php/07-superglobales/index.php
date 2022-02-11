<?php
    // Variables superglobales Servidor

        // Variables de servidor

        //Dirección ip del servidor
        echo '<h1>';
        echo $_SERVER['SERVER_ADDR']; 
        echo '</h1>';
        
        echo '<h1>';
        echo $_SERVER['SERVER_NAME']; 
        echo '</h1>';
        
        echo '<h1>';
        echo $_SERVER['SERVER_SOFTWARE'];
        echo '</h1>';
        
        echo '<h1>';
        echo $_SERVER['HTTP_USER_AGENT'];      
        echo '</h1>';
        
        echo '<h1>';
        echo $_SERVER['REMOTE_ADDR'];
        echo '</h1>';
?>