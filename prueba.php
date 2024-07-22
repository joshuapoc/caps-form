<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./codigos php/conexion-db.php?envio-correcto" method="post">
        <label for="dni">DNI</label><br>
        <input type="text" name="dni" id="dni"><br>
        <input type="submit" name="enviar" id="enviar" value="Enviar">
    </form>
    <script>
        const dni=document.querySelector("#dni");
        const enviar=document.querySelector("#enviar");
        enviar.addEventListener("click",(e)=>{
            if(dni.value===""){
                e.preventDefault();
            }
        });
    </script>    
</body>
</html>