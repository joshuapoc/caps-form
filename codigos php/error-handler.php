<?php
/* 1. Se redirigira el usuario a la pagina principal en caso de que no haya 
errores de envio. El url nuevo llevara un mensaje de 'enviado' o 'error' en caso
de que hayan exepciones u errores*/
if(isset($_GET['error'])){
    echo "<script>alert('Datos duplicados o error de envio');</script>";
}elseif(isset($_GET['enviado'])){
    echo "<script>alert('Envio exitoso');</script>";
}
?>