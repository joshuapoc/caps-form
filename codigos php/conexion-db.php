<?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $dni=$_POST["dni-nie"];
        $nombre=$_POST["nombre"];
        $apellido1=$_POST["apellido1"];
        $apellido2=$_POST["apellido2"];
        $email=$_POST["email"];
        $direccion=$_POST["direccion"];
        $poblacion=$_POST["poblacion"];
        $telefono=$_POST["telefono"];
        $fecha_alta=$_POST["fecha-alta"];
        $fecha_baja=$_POST["fecha-baja"];
        $fecha_nacimiento=$_POST["fecha-nacimiento"];
        $horas_semanales=$_POST["horas-sem"];
        $centro=$_POST["centro"];
        $categoria=$_POST["categoria"];
        $num_cuenta=$_POST["num-cuenta"];
        $num_seg_social=$_POST["num-seg-social"];
    }
    foreach($_POST as $key => $value){
        echo "Name: " . $value . "<br>";
    };
?>