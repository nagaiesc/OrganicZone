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
        $nombreproducto = $fila['nombreproducto'];
        $precioventa = $fila['precioventa'];
        $cantidad = $fila['cantidad'];
        $costo = $fila['costo'];
        $categoria = $fila['categoria'];
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registroeditarproducto.php" method="post">
        <label for="">id:</label>
        <input type="number" name="id" value='<?= $id ?>'>
        <label for="">Nombre producto:</label>
        <input type="text" name="nombreproducto" value='<?= $nombreproducto ?>'>
        <label for="">Precio venta:</label>
        <input type="number" name="precioventa" value='<?= $precioventa ?>'>
        <label for="">Cantidad:</label>
        <input type="number" name="cantidad" value='<?= $cantidad ?>'>
        <label for="">Costo:</label>
        <input type="number" name="costo" value='<?= $costo ?>'>
        <label for="">Categoria:</label>
        <input type="text" name="categoria" value='<?= $categoria ?>'>
        <input type="submit" value ="Editar">
    </form>
</body>
</html>