<?php
    /* Conexion a bd 'form_caps' */
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $db_caps="form_caps";
    $conexion="";
    $conexion= mysqli_connect($servidor, $usuario, $contraseña, $db_caps);
/*     try {
        $conexion= mysqli_connect($servidor, $usuario, $contraseña, $db_caps);
    } catch (mysqli_sql_exception) {
        echo "sin conexion" . "<br>";
    }
    if($conexion){
        echo "conectado" . "<br>";
    } */
?>