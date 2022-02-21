<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    if(isset($_POST['submit'])){
        $comprobar = getimagesize(($_FILES['imagen']['tmp_name']));    
        if($comprobar !== false){
            if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['apellido1']) && isset($_POST['fechaNac']) && isset($_POST['passwd'])){
                $nombre = $_POST['nombre'];
                $correo = $_POST['correo'];
                $apellido1 = $_POST['apellido1'];
                $fechaNac = $_POST['fechaNac'];
                $passwd = password_hash($_POST['passwd'],PASSWORD_DEFAULT);
                $imagen = $_FILES['imagen']['tmp_name'];
                $fotoPerfil = addslashes(file_get_contents($imagen));
                $fechaNac = date('Y-m-d', strtotime($_POST['fechaNac']));
                if(isset($_POST['apellido2'])){
                    $apellido2 = $_POST['apellido2'];
                }else{
                    $apellido2 = "";
                }
                require_once("./app/conexion.inc.php");
                $conexion = Conexion::openConexion();
                $existe = $conexion->query("SELECT * FROM Usuario WHERE correo='$correo'");
                if($registro = $existe->fetch()){
                    echo "Este correo ya existe en la base de datos";
                }else{
                    try{
                        $insertar = $conexion->exec("INSERT INTO Usuario (nombre,correo,pass,foto,apellido1,apellido2,fechaNac) VALUES ('$nombre','$correo','$passwd','$fotoPerfil','$apellido1','$apellido2','$fechaNac')");
                        echo "REgistrto completo";
                    }catch(PDOException $err){
                        echo "Error insertando el usuario: ". $err->getMessage();
                    }
                }
            }else{
            echo "no entro";
            }
        }else{
            echo "no imagen";
        }
    }else{
        echo "tampoco";
    }

