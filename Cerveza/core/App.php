<?php

namespace core;

class App{
    function __construct(){

       //Transformacion para  el controlador
       //Si la URL esta en el query devuelve true y si es lo contrario te vas a home
            isset($_GET["url"]) ? $url =$_GET["url"]: $url ="beer"; 
          $arguments= explode('/', trim($url ,'/'));

          //obtener controlador
          $controllerName= array_shift($arguments);
          $controllerName = ucwords($controllerName) . "Controller";
          count($arguments) ? $method= array_shift($arguments) :$method = "index";
          $file = "app/Controllers/$controllerName" .".php";

          //si el fichero esxite 
          if(file_exists($file)){
           //Lo importamos
               require "$file";
          }else{
           http_response_code(404);   //Es una cadena de error por defecto 
           echo "Recurso no encontrado";
           die( "Adioss"); //Para de ejecutar se acabo el programa;
          }

          //crear instancia del controlador y llamar al metodo correspondiente
         $controllerName ="\\App\\Controllers\\".$controllerName;

          $controllerObject = new $controllerName; // new \App\UserControllers
          //Verificar si existe el metodo de  la peticion en la clase/controlador
          if(method_exists($controllerObject , $method)){
                   //invocarlo
               $controllerObject -> $method($arguments);
          }else{
           http_response_code(404);
           echo "Funcion no encontrado";
           die(); 
          }

        }//Din construct
    }//fin_clase
