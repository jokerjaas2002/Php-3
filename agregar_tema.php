<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento sin titulo</title>
</head>


<body>
    <?php include "menu.php"; ?>
    <br>
    <br>
    <form method="$_POST" action="agregar_tema2.php">
        <table align="center" border="1">
        <tr>
            <td><label for="titulo">Titulo:</label></td>
            <td><input type="text" name="titulo" id="titulo"></td>
        </tr>

        <tr>
            <td><label for="contenido">Mensaje:</label></td>
            <td><textarea name="contenido" id="contenido" cols="45" rows="5"></textarea></td>
        </tr>

        <tr>
            <td><label for="autor">Autor:</label></td>
            <td><input type="text" name="autor" id="autor"></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Enviar"></td>
        </tr>
        
        </table>
    </form>
</body>
</html>