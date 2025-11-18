<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="productos.php" method="post">
        <table>
        <tr>  
        <th><label for="id">id:</label></th>
        </tr> 
        <tr>
        <td></tfoot><input type="number" name ="id"required></td>
        </tr>
        <tr>
        <th><label for="nombreproducto">Nombre producto:</label></th>
        </tr>
        <tr>
        <td><input type="text" name ="nombreproducto"required></td>
        </tr>
        <tr>
        <th><label for="precioventa">Precio venta:</label></th>
        </tr>
        <tr>
        <td><input type="number" name ="precioventa"required></td>
        </tr>
        <tr>
        <th><label for="cantidad">Cantidad:</label></th>
        </tr>
        <tr>
        <td><input type="number" name ="cantidad"required></td>
        </tr>
        <tr>
        <th><label for="costo">Costo:</label></th>
        </tr>
        <tr>
        <td><input type="number" name ="costo"required></td>
        </tr>
        <tr>
        <th><label for="categoria">categoria:</label></th>
        </tr>
        <tr>
        <td><input type="text" name ="categoria"required></td>
        </tr>
        </table>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>