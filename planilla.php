<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desarrollo Web</title>
</head>
<body>

    <h1>INSERTAR ESCRITOR</h1>

    <form method="post" action="Controlador/insertar.php">
    <table> 
        <tr>
            <td>Apellido:</td>
            <td><input type="text" name="Apellido"></td>
        </tr>
        <tr>
            <td>Nombre:</td>
            <td><input type="text" name="Nombre"></td>
        </tr>
        <tr>
            <td>Edad:</td>
            <td><input type="text" name="Edad"></td>
        </tr>
        <tr>
            <td>Publicacion:</td>
            <td> <textarea row="10" cols="30" name="Ultima_Publicacion"></textarea></td>
        </tr>
        <tr>
            <td>Publicacion:</td>
            <td><input type="text" name="Cantidad_Publicaciones"></td>
        </tr> </br>
        <tr>
                <td>&nbsp;</td>  
                <td><input type="submit" value="Guardar Escritor"></td>
            </tr>
    </table>
  
    </form>
    
</body>
</html>