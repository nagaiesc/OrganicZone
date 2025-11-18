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
  $nombreproducto = $_POST['nombreproducto'];
  $precioventa = $_POST['precioventa'];
  $cantidad = $_POST['cantidad'];
  $costo = $_POST['costo'];
  $categoria = $_POST['categoria'];
  $sql = "INSERT INTO productos (id, nombreproducto, precioventa, cantidad, costo, categoria) VALUES ('$id', '$nombreproducto', '$precioventa', '$cantidad', '$costo', '$categoria')";
  if($conn->query($sql) === TRUE) {
    echo "Nuevo producto creado correctamente";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
?>
