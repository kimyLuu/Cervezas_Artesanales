    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detalle de la cerveza</title>
    </head>
    <body>
        <h1>Detalle de la cerveza <?php echo $cerveza->id ?></h1>
        <table>
            <tr>
                <th>Identificador</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>GraduacionAlcoholica</th>
                <th>Pais</th>
                <th>Precio</th>
                <th>Volver</th>
            </tr>
            <tr>
                <td><?php echo $cerveza->id ?></td>
                <td><?php echo $cerveza->nombre ?></td>
                <td><?php echo $cerveza->tipo ?></td>
                <td><?php echo $cerveza->graduacionAlcoholica ?></td>
                <td><?php echo $cerveza->pais ?></td>
                <td><?php echo $cerveza->precio ?></td>
                <td><a href="?method=index">Volver</a></td>
            </tr>
        </table>
    </body>
    </html>
    <?php

?>