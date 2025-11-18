<?php
$nombreServidor = "localhost";
$nombreUsuario = "root";
$contraseñaBaseDeDatos = "";
$nombreBaseDeDatos = "productosOZ";
$conn = new mysqli($nombreServidor, $nombreUsuario, $contraseñaBaseDeDatos, $nombreBaseDeDatos);
if ($conn->connect_error) {
    echo "Hubo un error en la conexion";
}
$id = $_GET['id'];
$sql = "SELECT * FROM clientes WHERE id = $id";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    while($fila = $resultado->fetch_assoc()) {
        $nombre= $fila['nombre'];
        $apellido = $fila['apellido'];
        $nombreusuario= $fila['nombreusuario'];
        $correo = $fila['correo'];
        $contrasena = $fila['contrasena'];
        $fechanacimiento = $fila['fechanacimiento'];
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
    <form action="registroeditarcliente.php" method="post">
        <label for="">id:</label>
        <input type="number" name="id" value='<?= $id ?>'>
        <label for="">Nombre cliente:</label>
        <input type="text" name="nombre" value='<?= $nombre ?>'>
        <label for="">Apellido:</label>
        <input type="text" name="apellido" value='<?= $apellido ?>'>
        <label for="">Nombre usuario:</label>
        <input type="text" name="nombreusuario" value='<?= $nombreusuario ?>'>
        <label for="">Correo:</label>
        <input type="email" name="correo" value='<?= $correo ?>'>
        <label for="">Contraseña:</label>
        <input type="password" name="contrasena" value='<?= $contrasena ?>'>
        <label for="">Fecha de nacimiento:</label>
        <input type="text" name="fechanacimiento" value='<?= $fechanacimiento ?>'>
        <input type="submit" value ="Editar">
    </form>
</body>
</html>