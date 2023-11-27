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
}