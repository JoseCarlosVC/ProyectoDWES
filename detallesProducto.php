<?php 

if(isset($_POST['detalles'])){

    $nif = $_POST['nif'];

    //accedemos al archivo para hacer la conexion a base de datos
    require_once("./app/conexion.inc.php");
    $conexion = Conexion::openConexion();
    
    //consulta para obtener los datos del producto
    $datosProducto = $conexion->query("SELECT * FROM Producto WHERE nif='$nif'");
    $fetchDatos = $datosProducto->fetch();

    //se muestran los daots del producto
    //TODO descomprimir foto
    echo //"Foto: ".$fetchDatos['fotoProducto'].
        "Nombre: ".$fetchDatos['nombreProducto'].
        "Precio: ".$fetchDatos['precio'].
        "Categoria".$fetchDatos['categoria'].
        "Proveedor: ".$fetchDatos['proveedor'].
        "Descripcion: ".$fetchDatos['descripcion'].
        "Unidades".$fetchDatos['cantidad'];
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="test/solicitud.php?nif=<?php echo $nif; ?>">Solicitar</a>
</body>
</html> -->