<?php
    require_once("./app/conexion.inc.php");
    $conexion = Conexion::openConexion();
    
    try{
        //Seleccionamos todos los productos de la tabla Producto
        $tabla = $conexion->query("SELECT Nif,cantidad,proveedor,nombreProducto,categoria,precio FROM Producto");
        //Creamos un array de articulos
        $articulos = array();
        //Indicamos que PDO devuelva un array asociativo
        while($fila = $tabla->fetch(PDO::FETCH_ASSOC)){
            $articulos[] = $fila;
        }
    }catch(PDOException $err){
        echo "Error consultando la base de datos ". $err->getMessage();
        die();
    }
    $conexion = Conexion::closeConexion();
    require('gestor.php');