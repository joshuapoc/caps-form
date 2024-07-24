<?php
    /* Conexion a bd 'form_caps' */
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $db_caps="form_caps";
    $conexion="";
    try {
        $conexion= mysqli_connect($servidor, $usuario, $contraseña, $db_caps);
    } catch (mysqli_sql_exception) {
        echo "No se pudo acceder a la base de datos";
        header("location: ../index.php?error");
    }
?>