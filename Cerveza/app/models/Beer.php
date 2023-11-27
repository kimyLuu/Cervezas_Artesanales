<?php
namespace App\Models;
require "core/Model.php";
use Core\Model;
use PDO;

/*clase Beer que extiende de Model */
class Beer extends Model{
     //@Return devuelvo todos los registros de la tabla Cervezas
        public static function all(){
            $dbh =Beer::db();
            $sql= "SELECT * FROM cerveceriaartesanal";
            $statement =$dbh->query($sql);
            $statement ->setFetchMode(PDO::FETCH_CLASS , Beer::class); //carga atributos de esa clase
            $cervezas= $statement->fetchAll(PDO::FETCH_CLASS);
            //devuelve un array ->cervezas
            return $cervezas;
            //echo "<br> Recupero Todos las cervezas";
        }

        //Retornando solo un usuario
        //@Return detalles de eun solo usuario
        //@param id
        public static function find($id){
            $dbh = self::db();
        
            $sql = "SELECT * FROM cerveceriaartesanal WHERE id=:id";
            $statement = $dbh->prepare($sql);
            $statement->bindValue(":id", $id);
            $statement->execute();
            $statement->setFetchMode(PDO::FETCH_CLASS, Beer::class);
            $cerveza = $statement->fetch(PDO::FETCH_CLASS);
        
            return $cerveza;
        }
        function create(){//Esto se creara las vistas usuarios
            require "Views/beer/create.php";
        }


         /*Funcion en la que se insertara una registro de una cerveza */
    // Dentro de la clase Beer 
    public function insert()
    {
        $dbh = self::db();
    // Insertar la cerveza en la base de datos
        $sql = "INSERT INTO cerveceriaartesanal (nombre, tipo, graduacionAlcoholica, pais, precio, rutaImagen)
                VALUES (:Nombre, :Tipo, :GraduacionAlcoholica, :Pais, :Precio, :Imagen)";
        
        $statement = $dbh->prepare($sql);

        // Bind de los parámetros
        $statement->bindValue(":Nombre", $this->nombre);
        $statement->bindValue(":Tipo", $this->tipo);
        $statement->bindValue(":GraduacionAlcoholica", $this->graduacionAlcoholica);
        $statement->bindValue(":Pais", $this->pais);
        $statement->bindValue(":Precio", $this->precio);

        // Manejar la imagen
        $imagenBinaria = file_get_contents($this->rutaImagen);
        $statement->bindValue(":Imagen", $imagenBinaria, PDO::PARAM_LOB);

        // Ejecutar la consulta
       // return $statement->execute();

          // Execute the query
        $result = $statement->execute();

        if ($result) {
            echo "Cerveza creada exitosamente";
        } else {
            echo "Error al crear la cerveza";
        }
        }

        /*Funcion que eliminara una registro de la bbdd */

        public function delete(){
            $dbh=self::db();
            $sql  ="DELETE FROM cerveceriaartesanal WHERE nombre= Nombre";

            $statement =$dbh->prepare($sql);
            $statement->bindValue(":Nombre",$this->nombre);
    
           return $statement->execute();
    
        }

        public function save(){//Recupero registro actualizando datos
           $dbh= self::db();
    
           $sql ="UPDATE cerveceriaartesanal  
           SET nombre=:Nombre,tipo =:Tipo,graduacionAlcoholica= :graduacionAlcoholica,pais=:Pais,precio=:Precio,rutaImagen=:Imagen 
           WHERE id=:Id";
             $statement =$dbh->prepare($sql);
            $statement->bindValue(":Id",$this->id);
           $statement->bindValue(":tipo",$this->Tipo);
           $statement->bindValue(":GraduacionAlcoholica",$this->graduacionAlcoholica);
           $statement->bindValue(":pais",$this->Pais);
           $statement->bindValue(":Precio",$this->precio);
           $statement->bindValue(":rutaImagen",$this->Imagen);
           return $statement->execute();

        }

}