<?php
$nombreServidor = "localhost";
$nombreUsuario = "root";
$contraseñaBaseDeDatos = "";
$nombreBaseDeDatos = "productosOZ";

$conexion = new mysqli($nombreServidor, $nombreUsuario, $contraseñaBaseDeDatos, $nombreBaseDeDatos);
if ($conexion->connect_error) {
    echo "Hubo un error en la conexion";
}
$id = $_GET['id'];
$sql = "SELECT * FROM productos WHERE id = $id";

$resultado = $conexion->query($sql);
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        echo $fila['id']. " " .$fila['nombreproducto']. " " . $fila['precioventa']. " " . $fila['cantidad']. " " . $fila['costo']. " " . $fila['categoria'];
        $id=$fila['id'];
    }    
}
?>