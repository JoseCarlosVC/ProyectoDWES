<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $descripcion = $_POST['descripcion'];

    $textoQR = "Nombre del producto: ".$nombre." || Precio: ".$precio." || Cantidad: ".$cantidad." || Descripcion: ".$descripcion;
    $textoLink = urlencode($textoQR);
    echo '<img src="http://api.qrserver.com/v1/create-qr-code/?data='.$textoLink.'&size=200x200&bgcolor=EDF2EF">';
?>