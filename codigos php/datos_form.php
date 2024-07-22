<?php
/* vinculacion al archivo 'db-connection.php'*/
include ("./db-connection.php");
/* Variables */
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $dni=htmlspecialchars($_POST["dni-nie"]);
        $nombre=htmlspecialchars($_POST["nombre"]);
        $apellido1=htmlspecialchars($_POST["apellido1"]);
        $apellido2=htmlspecialchars($_POST["apellido2"]);
        $email=htmlspecialchars($_POST["email"]);
        $direccion=htmlspecialchars($_POST["direccion"]);
        $poblacion=htmlspecialchars($_POST["poblacion"]);
        $telefono=htmlspecialchars($_POST["telefono"]);
        $fecha_alta=htmlspecialchars($_POST["fecha-alta"]);
        $fecha_baja=htmlspecialchars($_POST["fecha-baja"]);
        $fecha_nacimiento=htmlspecialchars($_POST["fecha-nacimiento"]);
        $horas_semanales=htmlspecialchars($_POST["horas-sem"]);
        $centro=htmlspecialchars($_POST["centro"]);
        $categoria=htmlspecialchars($_POST["categoria"]);
        $num_cuenta=htmlspecialchars($_POST["num-cuenta"]);
        $num_seg_social=htmlspecialchars($_POST["num-seg-social"]);
        $observaciones=htmlspecialchars($_POST["observaciones"]);
    }
/* vinculacion al archivo 'query.php' para realizar la consulta*/
include ("./query.php");
?>