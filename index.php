<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/head_logo.png">
    <link rel="stylesheet" type="text/css" href="./estilos/form.css">
    <link href='https://fonts.googleapis.com/css?family=Droid Sans' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/fc5405f34b.js" crossorigin="anonymous"></script>
    <title>Formulario</title>
</head>
    <body>
        <div class="main-container">
            <h1>Formulario</h1>
            <form action="./codigos php/datos_form.php" method="post">
                <div class="form form-section">
                    <div class="form-title t1">
                        <span><i class="fa-solid fa-user"></i>Datos personales</span>
                    </div>
                    <div class="data id">
                        <label for="dni-nie">Identificacion <small>*</small></label>
                        <input type="text" id="dni-nie" name="dni-nie" placeholder="DNI-NIE" required>
                        <div class="border"></div>
                    </div>
                    <div class="data texto">
                        <label for="nombre">Nombre <small>*</small></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Andres">
                        <div class="border"></div>
                    </div>
                    <div class="data texto">
                        <label for="apellido1">Primer apellido <small>*</small></label>
                        <input type="text" id="apellido1" name="apellido1" placeholder="Pepito">
                        <div class="border"></div>
                    </div>
                    <div class="data texto">
                        <label for="apellido2">Segundo appelido <small>*</small></label>
                        <input type="text" id="apellido2" name="apellido2" placeholder="Perez">
                        <div class="border"></div>
                    </div>
                    <div class="buttons-container">
                        <div class="buttons buttons-section">
                            <button type="button" class="sig">Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="form form-section">
                    <div class="form-title t1">
                        <span><i class="fa-solid fa-phone"></i> Datos personales</span>
                    </div>
                    <div class="data email">
                        <label for="email">Correo electronico <small>*</small></label>
                        <input type="email" id="email" name="email" placeholder="Pepito_perez@example.com">
                        <div class="border"></div>
                    </div>
                    <div class="data direccion">
                        <label for="direccion">Direccion <small>*</small></label>
                        <input type="text" id="direccion" name="direccion" placeholder="Joaquin ballester 39">
                        <div class="border"></div>
                    </div>
                    <div class="data texto">
                        <label for="poblacion">Poblacion/ciudad<small>*</small></label>
                        <input type="text" id="poblacion" name="poblacion" placeholder="Torrente">
                        <div class="border"></div>
                    </div>
                    <div class="data telefono">
                        <label for="telefono">N° telefono <small>*</small></label>
                        <input type="tel" id="telefono" name="telefono" placeholder="617893561">
                        <div class="border"></div>
                    </div>
                    <div class="buttons-container">
                        <div class="buttons buttons-section">
                            <button type="button" class="atr">Atras</button>
                            <button type="button" class="sig">Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="form form-section">
                    <div class="form-title">
                        <span><i class="fa-solid fa-clock"></i>Fechas y horas</span>
                    </div>
                    <div class="data fecha-alta">
                        <label for="fecha-alta">Fecha de alta <small>*</small></label>
                        <input type="date" id="fecha-alta" name="fecha-alta">
                        <div class="border"></div>
                    </div>
                    <div class="data fecha-baja">
                        <label for="fecha-baja">Fecha de baja <small>*</small></label>
                        <input type="date" id="fecha-baja" name="fecha-baja">
                        <div class="border"></div>
                    </div>
                    <div class="data fecha-nacimiento">
                        <label for="fecha-nacimiento">Fecha de nacimiento<small>*</small></label>
                        <input type="date" id="fecha-nacimiento" name="fecha-nacimiento">
                        <div class="border"></div>
                    </div>
                    <div class="data numero">
                        <label for="horas-sem">Horas semanales <small>*</small></label>
                        <input type="number" id="horas-sem" name="horas-sem" maxlength="4" inputmode="numeric" title="Horas realizadas" placeholder="0000">
                        <div class="border"></div>
                    </div>
                    <div class="buttons-container">
                        <div class="buttons buttons-section">
                            <button type="button" class="atr">Atras</button>
                            <button type="button" class="sig">Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="form form-section">
                    <div class="form-title">
                        <span><i class="fa-solid fa-suitcase"></i>Datos laborales</span>
                    </div>
                    <div class="data texto">
                        <label for="centro">Centro de trabajo <small>*</small></label>
                        <input type="text" id="centro" name="centro">
                        <div class="border"></div>
                    </div>
                    <div class="data texto">
                        <label for="categoria">Categoria <small>*</small></label>
                        <input type="text" id="categoria" name="categoria">
                        <div class="border"></div>
                    </div>
                    <div class="data numero">
                        <label for="num-cuenta">N° Cuenta<small>*</small></label>
                        <input type="number" id="num-cuenta" name="num-cuenta" maxlength="12" inputmode="numeric" placeholder="000000000000">
                        <div class="border"></div>
                    </div>
                    <div class="data numero">
                        <label for="num-seg-social">N° Seguridad social <small>*</small></label>
                        <input type="number" id="num-seg-social" name="num-seg-social" inputmode="numeric" maxlength="12" placeholder="000000000000">
                        <div class="border" id="border"></div>
                    </div>
                    <div class="buttons-container">
                        <div class="buttons buttons-section">
                            <button type="button" class="atr">Atras</button>
                            <button type="button" class="sig">Siguiente</button>
                        </div>
                    </div>
                </div>
                <div class="form form-section">
                    <div class="form-title">
                        <span><i class="fa-solid fa-message"></i>Adicionales</span>
                    </div>
                    <div class="data observaciones">
                        <label for="observaciones">Obvservaciones <small>*</small></label>
                        <textarea name="observaciones" id="observaciones" maxlength="300"></textarea>
                        <div class="border"></div>
                    </div>
                    <div class="buttons-container">
                        <div class="buttons buttons-section">
                            <button type="button" class="atr">Atras</button>
                            <button type="submit" id="enviar" class="enviar">Enviar</button>
                        </div>
                    </div>
                </div>
            </form>
        <script src="./codigos js/form.js"></script>
    </body> 
</html>
<?php
    include ("./codigos php/error-handler.php");
?>