<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos ordenados</title>
</head>

<body>
    <h1>Lista de productos ordenados.</h1>
    <table style="border-collapse: collapse; width: 100%;">
        <thead style="background-color: #dddddd;">
            <tr>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Product Name</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Width</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px;">Height</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    </br>
    <hr>
    </br>
    <fieldset>
        <legend>Artículo</legend>
        <form action="main.php" method="get">
            <label for="nombre">Nombre del artículo:</label>
            <input type="text" id="nombre" name="nombre">

            <label for="ancho">Ancho:</label>
            <input type="text" id="ancho" name="ancho">

            <label for="alto">Alto:</label>
            <input type="text" id="alto" name="alto">

            <input type="submit" value="Submit">
        </form>
    </fieldset>
</body>

</html>
