<?php
// las unidades son un campo number con minimo de uno para que no pueda ser nulo, aun así esta hecha la comprobacion
if(isset ($_POST['solicitud'])){
    if(isset($_POST['nif']) && isset ($_POST['$unidades'])){
        
        //asignacion de variables
        $nif = $_POST['nif'];
        $unidades = $_POST['unidades'];

        //accedemos al archivo para hacer la conexion a base de datos
        require_once("./app/conexion.inc.php");
        $conexion = Conexion::openConexion();

        //se obtiene el precio del producto
        $infoProducto = $conexion->query("SELECT precio FROM Producto WHERE Nif = '$nif'");
        $infoPFetch = $infoProducto->fetch();
        $precio = $infoProducto['precio'];

        //se multiplica el precio del producto con las unidades para asignarlo como precio total 
        $precio*=$unidades;

        //recogida del correo almacenado en una sesion
        session_start();
        $mail = $_SESSION['correo'];

        //consulta para obtener el id del usuario mediante el correo
        $infoUser = $conexion->query("SELECT idUser FROM Usuario WHERE correo ='$mail'");
        $infoUFetch = $infoUser->fetch();

        //consulta para hacer una insercion en la tabla Pedir
        $peticion = $conexion->query("INSERT INTO Pedir (Nif,idUser,unidad,precioTotal) VALUES ('$nif','$mail','$unidades','$precio')");
        $peticionFetch = $peticion->fetch();
    }
}
    