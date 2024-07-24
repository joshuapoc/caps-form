<?php
/* Consulta para imitar auto_increment con bucle */
    $id_cliente=0;
    /* $query="SELECT dni, nombre, primer_apellido, segundo_apellido, email, direccion, poblacion, fecha_alta, fecha_baja, fecha_nacimiento, horas_semanales, centro, categoria, num_cuenta, num_seguridad_social, observaciones 
    FROM clientes;"; */
    $query="SELECT dni, nombre FROM clientes;";
    $result=mysqli_query($conexion, $query);
    $id_cliente=mysqli_num_rows($result)+1;
/* Insertar datos en la bd*/
    $query_insertion="INSERT INTO clientes 
    (id_cliente,dni, nombre, primer_apellido, segundo_apellido, email, direccion, poblacion, fecha_alta, fecha_baja, fecha_nacimiento, horas_semanales, centro, categoria, num_cuenta, num_seguridad_social, observaciones)
    VALUES
    ('$id_cliente','$dni','$nombre','$apellido1','$apellido2','$email','$direccion','$poblacion','$fecha_alta','$fecha_baja','$fecha_nacimiento','$horas_semanales','$centro','$categoria','$num_cuenta','$num_seg_social','$observaciones');"; 
    try{
        mysqli_query($conexion, $query_insertion);
        header("location: ../index.php?enviado");
    }catch(mysqli_sql_exception){
        header("location: ../index.php?error");
    }
    mysqli_close($conexion);
?>