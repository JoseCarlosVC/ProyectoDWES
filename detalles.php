<?php
// Configuramos la salida de errores para que se muestren todos
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="witdh=device,initial-scale=1.0">
        <meta name="lang" content="es-ES">
        <meta name="author" content="Emilio">
        <meta name="keywords" content="computers,programming,web design,html,html,html5,css,php">
        <meta name="description" content="Realización de">
        <title>Detalles</title>
        <link rel="stylesheet" href="./css/detalles.css" title="style">
        <link rel="icon" type="image/png" href="./img/LOGO.png">
</head>
<body>
    <!-- Menu hamburguesa -->
    <input type="checkbox" id="invisibleCheckbox">
    <div id="contenedorHamburguesa">
        <span class="lineaHamburguesa" id="linea1"></span>
        <span class="lineaHamburguesa" id="linea2"></span>
        <span class="lineaHamburguesa" id="linea3"></span>
    </div>
    <nav id="barraDesplegable">
        <img src="./img/LOGO.png" alt="logo" id="logo">
        <span id="nombreUsuario">User</span>
        <li class="apartados">Menús</li>
        <li class="apartados">Para compartir</li>
        <li class="apartados">Hamburguesas</li>
        <li class="apartados">Complementos</li>
        <li class="apartados">Postres</li>
        <li class="apartados">Cerrar Sesión</li>
    </nav>

    <!-- Logo -->
    <div class="logo"><img src="./img/LOGO.png" alt="LOGO"></div>

    <!-- Contenido de la página -->
    <div class="contenido">
        <div class="imagen"><img src="./img/descarga.jpeg" alt="imagenProducto"></div>
        <div class="datos">
            <div class="nombre">Pley Estachon</div>
            <div class="precio">1000€</div>
            <div class="unidades">Ud: 5</div>
            <div class="descripcion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat nesciunt soluta cupiditate itaque totam sequi dolor esse, ad recusandae architecto et ea nostrum qui temporibus. Sapiente, voluptas. Blanditiis, porro ab!</div>
        </div>
        <div class="formularios">
            <form action="">
                <input class="boton qr" type="button" value="Generar QR">
            </form>
            <form action="">
                <input class="boton pedido" type="button" value="Hacer pedido">
            </form>
        </div>
    </div>
    <?php

    ?>
</body>
</html>