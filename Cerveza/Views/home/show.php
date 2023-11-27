<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Una cerveza</title>
</head>
<body>
    <h1>Detalle de la cerveza <?php echo $cerveza->id ?></h1>
    <ul>
        <li><strong>Nombre: </strong><?php echo $cerveza->nombre ?></li>
        <li><strong>Tipo: </strong><?php echo $cerveza->tipo ?></li>
        <li><strong>Graduacion Alcoholica: </strong><?php echo $cerveza->graduacionAlcoholica ?></li>
        <li><strong>Pais : </strong><?php echo $cerveza->pais ?></li>
        <li><strong>Precio: </strong><?php echo $cerveza->precio ?></li>
        <li><strong>Ruta Imagen: </strong> <img height="100px" src="data:image/png;base64 ,<?php echo base64_encode( $cerveza->RutaImagen) ?>" alt="Imagen de la cerveza"></li>
        <td><a href="?method=index">Volver</a></td>
        
    </ul>
</body>
</html>
<?php

