<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>


<body>
    <div class="container">
        <br>
        <h1>Eliminando Cerveza</h1>
        <br>
        <form method="post" action="/beer/delete" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" name="name" value="<?=$cerveza->nombre?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="tipo" value="<?=$cerveza->tipo?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Graduacion Alcoholica</label>
                <input type="number" class="form-control"  name="graduacionAlcoholica" value="<?=$cerveza->graduacionAlcoholica?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pais</label>
                <input type="text" class="form-control"  name="pais" value="<?=$cerveza->pais?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="number" class="form-control" name="precio" value="<?=$cerveza->precio?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="rutaImagen" value="<?=$cerveza->rutaImagen?>">
            </div>
            <input type="hidden" name="nombre" value="<?=$cerveza->cerveza?>"> <!--Se crea un cmpo oculto que es el cerveza-->
            <button type="submit" class="btn btn-default">Enviar</button>
    </form>
    </div>
</body>

</html>