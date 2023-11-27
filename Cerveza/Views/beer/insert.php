<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertando Cerveza</title>
</head>
<body>
<h1>ANueva cerveza</h1>

<form method="post" action="/beer">

<div class="form-group">
    <label>Nombre</label>
    <input type="text" name="name" class="form-control">
</div>
<br>
<div class="form-group">
    <label>Tipo</label>
    <input type="text" name="Tipo" class="form-control">
</div>
<br>
<div class="form-group">
    <label>GraduacionAlcoholica</label>
    <input type="date" name="GraduacionAlcoholica" class="form-control">
</div>
<br>
<div class="form-group">
    <label>Pais</label>
    <input type="text" name="Pais" class="form-control">
</div>
<br>
<br>
<div class="form-group">
    <label>Precio</label>
    <input type="text" name="Precio" class="form-control">
</div>
<br>
<div class="form-group">
    <label>RutaImagen</label>
    <input type="text" name="RutaImagen" class="form-control">
</div>
<br>
<button type="submit" class="btn btn-default">Enviar</button>
</form>
</body>
</html>