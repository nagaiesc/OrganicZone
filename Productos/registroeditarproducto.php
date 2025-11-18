<?php
$nombreServidor = "localhost";
$nombreUsuario = "root";
$contraseñaBaseDeDatos = "";
$nombreBaseDeDatos = "productosOZ";
$conexion = new mysqli($nombreServidor, $nombreUsuario, $contraseñaBaseDeDatos, $nombreBaseDeDatos);
if ($conexion->connect_error) {
    echo "Hubo un error en la conexion";
}
$id = $_POST['id'];
$nombreproducto = $_POST['nombreproducto'];
$precioventa = $_POST['precioventa'];
$cantidad = $_POST['cantidad'];
$costo = $_POST['costo'];
$categoria = $_POST['categoria'];
$sql = "UPDATE productos SET nombreproducto='$nombreproducto', precioventa='$precioventa', cantidad='$cantidad', costo='$costo', categoria='$categoria' WHERE id=$id";
if ($conexion->query($sql) === TRUE) {
    echo "Producto editado correctamente";
}
?>