<?php
$nombreServidor = "localhost";
$nombreUsuario = "root";
$contraseñaBaseDeDatos = "";
$nombreBaseDeDatos = "productosOZ";

$conexion = new mysqli($nombreServidor, $nombreUsuario, $contraseñaBaseDeDatos, $nombreBaseDeDatos);
if ($conexion->connect_error) {
echo "Hubo un error en la conexion:";
}
    ?>
    <table margin="auto" border="1">

        <td>ID</td>
        <td>Nombre Producto</td>
        <td>Precio Venta</td>
        <td>Cantidad</td>
        <td>Costo</td>
        <td>Categoria</td>
        <td>Acciones</td>
        <?php
        $sql ="SELECT * FROM productos";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()){
                $id=$fila['id'];
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombreproducto'] . "</td>";
                echo "<td>" . $fila['precioventa'] . "</td>";
                echo "<td>" . $fila['cantidad'] . "</td>";
                echo "<td>" . $fila['costo'] . "</td>";
                echo "<td>" . $fila['categoria'] ;
                echo "</td><td>";
                echo "<a href='editarproducto.php?id=$id'><button>Editar</button></a>";
                echo "<a href='eliminarproducto.php?id=$id'><button>Eliminar</button></a>";
                echo "<a href='leerproducto.php?id=$id'><button>Mostrar</button></a></td>";

                echo "</tr>";
            }
        }
        ?>
    </table>