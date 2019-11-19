<?php

class Usuario{
    public function consultarUsuario($username,$password){ //cargar todos los escritores
        $rows = null;  // un array nulo
        $modelo = new Conexion(); // objeto de coneccion
        $con = $modelo->get_conexion(); // modelo agarra la conecion y la guarda
        $sql = "SELECT *
                FROM  usuarios
                WHERE username = :username
                AND passwords = :passwords"; // consulta
        $statement = $con->prepare($sql); //prepare ejecuta la consulta sql y la guarda en statement 
        $statement->bindParam (':username', $username);
        $statement->bindParam (':passwords', $password);
        $statement->execute(); // se ejecuta 
      
            while ($resultado = $statement->fetch()){ //recorre el resultado con el while - la funcion fetch guarda el resultado de la consulta en array de row que era null
                $rows[] = $resultado;
            }
            return $rows;
        }      
    }
 ?>