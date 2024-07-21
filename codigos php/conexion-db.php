<?php
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        $dni=$_POST["dni"];
    }

    
    if(empty($dni)){
        echo "No se ingresaron datos";
    }else{
        echo $dni;
    }
?>