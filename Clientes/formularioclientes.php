<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
        background-color:green;
        height: 500px;
        width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
}
body {
    min-height: 100vh;
    background: linear-gradient(120deg, #ede6da 60%, #fbeedb 100%);
    font-family: 'Inter', Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0;
}

.caja-formulario {
    background: rgba(255,255,250,0.68);
    border-radius: 28px;
    box-shadow: 0 8px 38px rgba(128,95,25,0.18);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 2px solid rgba(232,227,198,0.21);
    padding: 36px 32px 28px 32px;
    width: 370px;
    max-width: 98vw;
    margin: 0 18px;
}

.caja-formulario form {
    width: 100%;
}

.caja-formulario table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 8px;
}

label {
    color: #4ac17a;
    font-weight: 600;
    font-size: 1em;
    margin-bottom: 7px;
    display: block;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"],
input[type="date"] {
    width: 97%;
    padding: 12px;
    border-radius: 15px;
    border: none;
    background: rgba(235,245,235,0.93);
    font-size: 1em;
    color: #222;
    margin-bottom: 6px;
    box-shadow: 0 1.5px 7px rgba(160,155,95,0.06);
    outline: none;
    transition: box-shadow 0.18s, background 0.13s;
}

input:focus {
    background: rgba(210,246,225,0.86);
    box-shadow: 0 0 0 2px #7ee1b5;
}

input[type="submit"] {
    background: linear-gradient(90deg,#60de9f 60%, #ffe9da 100%);
    color: #222d22;
    font-weight: bold;
    border: none;
    border-radius: 18px;
    padding: 12px 0;
    font-size: 1.02em;
    margin-top: 10px;
    box-shadow: 0 2px 12px rgba(150,150,130,0.13);
    cursor: pointer;
    width: 100%;
    letter-spacing: 0.5px;
    transition: background 0.17s;
}

input[type="submit"]:hover {
    background: linear-gradient(90deg,#44be96 60%, #ffe9da 100%);
}


    </style>
</head>
<body>
 <body>
    <div class="caja-formulario">
        <form action="clientes.php" method="post">
            <table>
                <tr>
                    <td><label for="id">ID:</label></td>
                </tr>
                <tr>
                    <td><input type="number" name="id" required></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre del cliente:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nombre" required></td>
                </tr>
                <tr>
                    <td><label for="apellido">Apellido del cliente:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="apellido" required></td>
                </tr>
                <tr>
                    <td><label for="nombreusuario">Nombre de usuario:</label></td>
                </tr>
                <tr>
                    <td><input type="text" name="nombreusuario" required></td>
                </tr>
                <tr>
                    <td><label for="correo">Correo-gmail:</label></td>
                </tr>
                <tr>
                    <td><input type="email" name="correo" required></td>
                </tr>
                <tr>
                    <td><label for="contrasena">Contraseña:</label></td>
                </tr>
                <tr>
                    <td><input type="password" name="contrasena" required></td>
                </tr>
                <tr>
                    <td><label for="fechanacimiento">Fecha de nacimiento:</label></td>
                </tr>
                <tr>
                    <td><input type="date" name="fechanacimiento" required></td>
                </tr>
            </table>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>

</body>
</html>