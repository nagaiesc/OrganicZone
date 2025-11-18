<?php
   $servidor = "localhost";
   $nombre = "root";
   $contraseña = "";
   $BDnombre = "productosOZ";
   $conn = new mysqli($servidor, $nombre, $contraseña, $BDnombre);
   if($conn->connect_error) {
    die ("conexion fallida" . $conn->connect_error);
   }
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $nombreusuario = $_POST['nombreusuario'];
   $correo = $_POST['correo'];
   $contrasena = $_POST['contrasena'];
   $fechanacimiento = $_POST['fechanacimiento'];
    $sql = "INSERT INTO clientes (id, nombre, apellido, nombreusuario, correo, contrasena) VALUES ('$id', '$nombre', '$apellido', '$nombreusuario', '$correo', '$contrasena')";
    if($conn->query($sql) === TRUE) {
    echo "Nuevo cliente registrado correctamente";
   } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>
