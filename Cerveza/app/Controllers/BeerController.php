<?php


Namespace App\Controllers;
use App\Models\Beer;
require "app/models/Beer.php";


class BeerController{
    function __construct()
    {
        //echo "Contruyendo un beer controller";
    }

    function index(){
        $cervezas=Beer::all();
        //print_r($cervezas);
        //die();
       // echo "<br> En e INDEX de beer";
        require "Views/beer/index.php";


    }


    function show($args){
        $id=(int)$args[0];
        $cerveza= Beer::find($id);
       // echo "<br> En e INDEX de beer";
       require "Views/beer/show.php";
    }

    function create(){
        require "Views/beer/create.php";
    }
    
    function store(){
        $cerveza = new Beer();
    
        // Obtener datos del formulario
        $cerveza->nombre = $_POST["nombre"];
        $cerveza->tipo = $_POST["tipo"];
        $cerveza->graduacionAlcoholica = $_POST["graduacionAlcoholica"];
        $cerveza->pais = $_POST["pais"];
        $cerveza->precio = $_POST["precio"];
    
        // Manejar la imagen
        if ($_FILES["rutaImagen"]["error"] == UPLOAD_ERR_OK) {
            $imagenTmpName = $_FILES["rutaImagen"]["tmp_name"];
            $imagenContent = file_get_contents($imagenTmpName);
            $cerveza->rutaImagen = $imagenContent;
        }
    
        // Insertar en la base de datos
        $resultado = $cerveza->insert();
    
        // Guardar el documento asociado
        $documento = $_FILES["rutaImagenDesc"];
    
        if ($documento["error"] == UPLOAD_ERR_OK) {
            $documentoTmpName = $documento["tmp_name"];
            $documentoName = "beer_desc/" . $cerveza->nombre . "." . pathinfo($documento["name"], PATHINFO_EXTENSION);
    
            // Mover el archivo a la carpeta "beer_desc"
            move_uploaded_file($documentoTmpName, $documentoName);
        }
    
        // Redirigir a la página principal
        header('Location:/Cerveza/beer');
    }
//Se creara una funcion de actualizar el cual mostrara
function update() {
    $id = $_REQUEST["id"];
    $cerveza = Beer::find($id);

    // Obtener datos del formulario
    $cerveza->nombre = $_REQUEST["nombre"];
    $cerveza->tipo = $_REQUEST["tipo"];
    $cerveza->graduacionAlcoholica = $_REQUEST["graduacionAlcoholica"];
    $cerveza->pais = $_REQUEST["pais"];
    $cerveza->precio = $_REQUEST["precio"];

    // Manejar la imagen
    if ($_FILES["rutaImagen"]["error"] == UPLOAD_ERR_OK) {
        $imagenTmpName = $_FILES["rutaImagen"]["tmp_name"];
        $imagenContent = file_get_contents($imagenTmpName);
        $cerveza->rutaImagen = $imagenContent;
    }

    // Actualizar en la base de datos
    $cerveza->save();

    // Redirigir a la página principal
    header('Location:/beer');
}    /*Primero va a mostrar la cerveza queq quiere borrar */

        //Funcion en la que se Borrara una cerveza , pero sera el nombre quien indique que usuario se va a borrar

        function delete($args){//Esto acctualiza un nuevo usuario

            //Primero coges el ide del usuario y luego se modifocara el usurio
            $nombre = (int)$args[0];
            $cerveza = Beer::find($nombre);//busca la infornacion deun unico usuario
            $cerveza->delete();
            header('Location:/beer');///esto llamara al update.php
            
        }
        
        



}