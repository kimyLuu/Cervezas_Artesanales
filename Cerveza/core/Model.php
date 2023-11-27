<?php
namespace Core;
use PDO;
use PDOException;
require "config/db.php";
//Para el uso de esto
use const DSN;
use const USUARIO;
use const PASSWORD;

#[\AllowDynamicProperties]

    class Model{
        static function db(){

            try{
                $dbh = new PDO(DSN , USUARIO,PASSWORD);

                 $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // echo "<br>conexion conectada!!";

            }catch(PDOException $ex){
                echo "Fallo en la conexion: ". $ex->getMessage();
            }
            return $dbh;//Devuelvo la conexion a bbdd
            
        }
    }//fin class