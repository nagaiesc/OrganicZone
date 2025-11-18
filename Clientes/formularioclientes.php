<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style> 
    div{
        background-color:#64c27b;
        height: 500px;
        width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
        

}
    </style>
</head>
<body>
    <div> <center>
    <form action="clientes.php" method="post">
       
        <table>
        <tr>  
        <th><label for="id">id:</label></th>
        </tr> 
        <tr>
        <td><input type="number" name ="id"required></td>
        </tr>
        <tr>
        <th><label for="nombre">Nombre del cliente:</label></th>
        </tr>
        <tr>
        <td><input type="text" name ="nombre"required></td>
        </tr>
        <tr>
        <th><label for="apellido">Apellido del cliente:</label></th>
        </tr>
        <tr>
        <td><input type="text" name ="apellido"required></td>
        </tr>
        <tr>
        <th><label for="nombreusuario">Nombre de usuario:</label></th>
        </tr>
        <tr>
        <td><input type="text" name ="nombreusuario"required></td>
        </tr>
        <tr>
        <th><label for="correo">Correo-gmail:</label></th>
        </tr>
        <tr>
        <td><input type="email" name ="correo"required></td>
        </tr>
        <tr>
        <th><label for="contrasena">Contraseña:</label></th>
        </tr>
        <tr>
        <td><input type="password" name ="contrasena"required></td>
        </tr>
         <tr>
        <th><label for="fechanacimiento">Fecha de nacimiento:</label></th>
        </tr>
        <tr>
        <td><input type="date" name ="fechanacimiento"required></td>
        </tr>
        </table>
        <input type="submit" value="Enviar">
        
    </form>
</div></center>
</body>
</html>