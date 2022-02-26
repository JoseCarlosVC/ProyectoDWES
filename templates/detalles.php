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
    <meta name="description" content="Realización de los detalles del producto del gestor de inventario">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Detalles</title>
    <link rel="stylesheet" href="./../../css/detalles.css" title="style">
    <link rel="icon" type="image/png" href="./../img/LOGO.png">

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
        <img src="./../../img/LOGO.png" alt="logo" id="logo">
        <span id="nombreUsuario">User</span>
        <li class="apartados">Menús</li>
        <li class="apartados">Para compartir</li>
        <li class="apartados">Hamburguesas</li>
        <li class="apartados">Complementos</li>
        <li class="apartados">Postres</li>
        <li class="apartados">Cerrar Sesión</li>
    </nav>

    <!-- Logo -->
    <div class="logo"><img src="./../../img/LOGO.png" alt="LOGO"></div>

    <!-- Contenido de la página -->
    <div class="contenido">
        <div class="imagen">
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($fetchDatos['fotoProducto']); ?>"
                alt="imagenProducto">
        </div>
        <div class="datos">
            <div class="nombre"><?php echo $fetchDatos['nombreProducto']; ?></div>
            <div class="precio"><?php echo $fetchDatos['precio']; ?></div>
            <div class="unidades"><?php echo $fetchDatos['cantidad']; ?></div>
            <div class="descripcion"><?php echo $fetchDatos['descripcion']; ?></div>
        </div>
        <div class="formularios">
            <form id="generarQR" action="" onsubmit="return false">
                <input class="boton qr" type="submit" value="Generar QR">
                <input id="nombre" type="hidden" value="<?php echo $fetchDatos['nombreProducto']; ?>">
                <input id="precio" type="hidden" value="<?php echo $fetchDatos['precio']; ?>">
                <input id="cantidad" type="hidden" value="<?php echo $fetchDatos['cantidad']; ?>">
                <input id="descripcion" type="hidden" value="<?php echo $fetchDatos['descripcion']; ?>">
                <div class="codigoQR"></div>
            </form>
            <form action="">
                <input class="boton pedido" type="button" value="Hacer pedido">
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#generarQR").submit(function(){
                $.ajax({
                    url:'./generarQR.php',
                    type:'POST',
                    data:{nombre:$('#nombre').val(), precio:$('#precio').val(), cantidad:$('#cantidad').val(), descripcion:$('#descripcion').val(),},
                    success: function(respuesta){
                        $(".codigoQR").html(respuesta);
                    },
                });
            });
        });
    </script>
</body>

</html>