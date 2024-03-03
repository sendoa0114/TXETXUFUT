<?php
    //Los tres valores necesarios para conectarse a MySQL
    $servidor = "localhost"; //o la IP del servidor
    $usuario = "root"; //el usuario de la DDBB
    $password = ""; //la de root (por defecto sin password)
    //Creamos una variable con la conexión a MySQL 
    $conexion = mysqli_connect($servidor,$usuario,$password,"furbo");
    ?>