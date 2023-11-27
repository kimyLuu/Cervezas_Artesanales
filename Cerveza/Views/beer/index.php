<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <container>
            <h1>Lista de cervezas</h1>
        </container>
        <br>
        <div class="container">
            <a href="http://localhost/Cerveza/Views/beer/create.php" class="btn btn-dark">agregar Cerveza </a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Graduacion Alcoholica</th>
                        <th scope="col">Pais</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cervezas as $cerveza) { ?>
                        <tr>
                            <td><?= $cerveza->nombre ?></td>
                            <td><?= $cerveza->tipo ?></td>
                            <td><?= $cerveza->graduacionAlcoholica ?></td>
                            <td><?= $cerveza->pais ?></td>
                            <td><?= $cerveza->precio ?></td>
                            <td><img height="100px" src="data:image/png;base64 ,<?php echo base64_encode($cerveza->rutaImagen) ?>" alt="cerveza"></td>
                            
                            <td><a class="btn btn-warning" href="http://localhost/Cerveza/Views/beer/show.php?id=<?php echo $cerveza->id ?>">Ver detalles</a></td>
                            <td>&nbsp</td>
                            <td><a class="btn btn-success" href="http://localhost/Cerveza/Views/beer/edit.php?nombre=<?php echo $cerveza->nombre ?>">Modificar cerveza</a></td>

                            <td>&nbsp</td>
                            <td><a class="btn btn-danger" href="http://localhost/Cerveza/Views/beer/delete.php?nombre=<?php echo $cerveza->nombre ?>" onclick="return confirm('Estás seguro que quieres borrar la cerveza?')">Borrar cerveza</a></td>

                            <td>&nbsp</td>
                        </tr>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>