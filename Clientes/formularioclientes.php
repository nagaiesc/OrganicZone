<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        div{
            background: rgba(0, 0, 0, 0.1); 
    border-radius: 18px;
    padding: 34px 30px;
    width: 370px;
    min-width: 310px;
    display: flex;
    flex-direction: column;
    gap: 17px;
    box-shadow: 2px 6px 32px rgba(189, 173, 173, 0.21); 
    border: 1.5px solid rgba(226, 238, 236, 0.37); 
    backdrop-filter: blur(14px) saturate(140%);
    -webkit-backdrop-filter: blur(14px) saturate(140%);
    
    outline: 1px solid rgba(220, 220, 220, 0.18)

}
body {
    background-image: url(fondoform.jpg);
    min-height: 100vh;
    font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
    display: flex;
    align-items: center;
    justify-content: center;
}

.form-container {
    background: rgba(109, 163, 123, 0.35);
    box-shadow: 0 8px 32px rgba(55,45,45,0.18);
    border-radius: 28px;
    backdrop-filter: blur(14px); 
    -webkit-backdrop-filter: blur(14px);
    padding: 34px 30px;
    width: 370px;
    min-width: 310px;
    display: flex;
    flex-direction: column;
    gap: 17px;
    border: 1.5px solid rgba(255,255,255,0.35);
}

.form-title {
    font-size: 1.6em;
    font-weight: 700;
    color: #ffffffff;
    margin-bottom: 12px;
    letter-spacing: -2px;
    text-align: left;
}

label {
    color: #bff8da91;  
    font-weight: 600;
    font-size: 1em;
    margin-bottom: 7px;
    display: block;
    letter-spacing: -0.5px;
}

input[type="text"],
input[type="email"],
input[type="number"],
input[type="password"],
input[type="date"] {
    width: 100%;
    padding: 13px;
    margin-bottom: 12px;
    border: none;
    border-radius: 14px;
    background: rgba(235, 250, 240, 0.65);
    font-size: 1.03em;
    color: #222;
    box-sizing: border-box;
    box-shadow: 0 2px 8px rgba(80,85,60,0.08);
    transition: background 0.2s, box-shadow 0.2s;
    outline: none;
}

input:focus {
    background: rgba(176,225,191,0.37);
    box-shadow: 0 0 0 2px #8cd1ae;
}

input[type="submit"] {
    background: linear-gradient(90deg,#61d799 70%, #b4e7c3 100%);
    color: #e0873dff;
    font-weight: bold;
    border: none;
    border-radius: 18px;
    padding: 14px;
    font-size: 1.11em;
    box-shadow: 0 2px 12px rgba(55,45,45,0.15);
    cursor: pointer;
    transition: background 0.16s;
}

input[type="submit"]:hover {
    background: linear-gradient(90deg,#54b98a 60%, #64c27b 100%);
}
    </style>
</head>
<body img src="fondoform.jpg">
    <div> <center>
    <form action="clientes.php" method="post">
       
        <table>
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

</body>
</html>