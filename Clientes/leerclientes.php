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
        <td>Nombre </td>
        <td>Apellido</td>
        <td>Nombre de usuario</td>
        <td>Correo</td>
        <td>Contrasena</td>
        <td>Fecha de nacimiento</td>
        <?php
        $sql ="SELECT * FROM clientes";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            while($fila = $resultado->fetch_assoc()){
                $id=$fila['id'];
                echo "<tr>";
                echo "<td>" . $fila['id'] . "</td>";
                echo "<td>" . $fila['nombre'] . "</td>";
                echo "<td>" . $fila['apellido'] . "</td>";
                echo "<td>" . $fila['nombreusuario'] . "</td>";
                echo "<td>" . $fila['correo'] . "</td>";
                echo "<td>" . $fila['contrasena']."</td>";
                echo "<td>" . $fila['fechanacimiento'];
                echo "</td><td>";
                echo "<a href='editarcliente.php?id=$id'><button>Editar</button></a>";
                echo "<a href='eliminarcliente.php?id=$id'><button>Eliminar</button></a>";
                echo "<a href='leercliente.php?id=$id'><button>Mostrar</button></a></td>";

                echo "</tr>";
            }
        }
        ?>
    </table>