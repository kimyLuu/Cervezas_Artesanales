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
        <h1>Nueva cerveza</h1>
        <br>
        <form action="/Cerveza/beer/store" method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nombre</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="tipo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Graduacion Alcoholica</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="graduacionAlcoholica">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Pais</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="pais">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Precio</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="precio">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="rutaImagen">
            </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-info" href="http://localhost/Cerveza">volver</a>
    </form>
    </div>
</body>

</html>
