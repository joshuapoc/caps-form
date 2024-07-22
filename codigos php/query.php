<?php
/* Insertar datos en la bd*/
    $query="INSERT INTO clientes 
    (dni, nombre, primer_apellido, segundo_apellido, email, direccion, poblacion, fecha_alta, fecha_baja, fecha_nacimiento, horas_semanales, centro, categoria, num_cuenta, num_seguridad_social, observaciones)
    VALUES
    ('$dni','$nombre','$apellido1','$apellido2','$email','$direccion','$poblacion','$fecha_alta','$fecha_baja','$fecha_nacimiento','$horas_semanales','$centro','$categoria','$num_cuenta','$num_seg_social','$observaciones');";
    try{
        mysqli_query($conexion, $query);
        header("location: ../index.php?enviado");
    }catch(mysqli_sql_exception){
        header("location: ../index.php?error");
    }
    mysqli_close($conexion);
?>