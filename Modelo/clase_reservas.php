<?php

class Reserva{
    //public function mostrarReserva($id_reservas){ //cargar todos las reservas 
        public function mostrarReserva(){ 
            $rows = null;  // un array nulo
            $modelo = new Conexion(); // objeto de coneccion
            $con = $modelo->get_conexion(); // modelo agarra la conecion y la guarda
            $sql = "SELECT id_reservas, nombre, apellido, email, telefono ,fecha, hora
                    FROM  listado_reservas
                    ORDER BY fecha AND hora DESC"; // consulta
                    //WHERE id_reservas = :id_reservas
                    //ORDER BY fecha AND hora DESC"; // consulta
            $statement = $con->prepare($sql); //prepare ejecuta la consulta sql y la guarda en statement 
            //$statement->bindParam (':id_reservas', $id_reservas);
            //Las lineas comentadas marcas con ****DESCOMENTAR**** es por si quieren hacer busqueda por ID o crear un metodo nuevo que busque por ID
            $statement->execute(); // se ejecuta 
            while ($resultado = $statement->fetch()){ //recorre el resultado con el while - la funcion fetch guarda el resultado de la consulta en array de row que era null
                $rows[] = $resultado;
            }
            return $rows;      
    }

    public function actualizarDatos($id, $nombre, $apellido,$email, $telefono, $fecha, $hora){
        $modelo = new Conexion(); //modelo es un objeto de la class conexion 
        $con = $modelo->get_conexion(); // y en con se va a guardar la coneccion 
        $sql="UPDATE listado_reservas
              SET  nombre = :nombre, apellido = :apellido, email = :email, telefono = :telefono; fecha = :fecha, hora = :hora      
              WHERE id_reservas = :id_reservas";
        
        $statement = $con->prepare($sql);
        $statement->bindParam (':id_reservas', $id);
        $statement->bindParam (':nombre', $nombre,PDO::PARAM_STR); //bindparam para evitar el sqlinjection 
        $statement->bindParam (':apellido', $apellido,PDO::PARAM_STR); 
        $statement->bindParam (':email', $email,PDO::PARAM_STR);
        $statement->bindParam (':telefono', $telefono,PDO::PARAM_STR);
        $statement->bindParam (':fecha', $fecha,PDO::PARAM_STR);
        $statement->bindParam (':hora', $hora,PDO::PARAM_STR);

        if(!$statement){
            return "Error al crear el registro";
        }else{
            $statement->execute(); // funcion execute ejecuta la consulta 
            return"Registro creado correctamente";
        }
    }

    public function eliminarDatos($id){
        $modelo = new Conexion(); //modelo es un objeto de la class conexion 
        $con = $modelo->get_conexion(); // y en con se va a guardar la coneccion 
        $sql = "DELETE
                FROM  listado_reservas
                WHERE id_reservas = :id_reservas";

        $statement = $con->prepare($sql);
        $statement->bindParam (':id_reservas', $id);
        
        if(!$statement){
            return "Error al eliminar el registro";
        }else{
            $statement->execute(); 
            return"Registro eliminado correctamente";
            }
    }

    public function insertarReserva($nombre,$apellido,$email,$telefono,$fecha,$hora, $id_reservas){ // los parametros son los argumentos de la tabla escritores
        $modelo = new Conexion(); //modelo es un objeto de la class conexion 
        $con = $modelo->get_conexion(); // y en con se va a guardar la coneccion 
        $sql="INSERT INTO listado_reservas (nombre, apellido , email, telefono, fecha, hora, id_reservas) 
              VALUES (:nombre, :apellido, :email, :telefono, :fecha, :hora, :id_reservas)";
        
        $statement = $con->prepare($sql);
        $statement->bindParam (':nombre', $nombre,PDO::PARAM_STR); //bindparam para evitar el sqlinjection 
        $statement->bindParam (':apellido', $apellido,PDO::PARAM_STR); 
        $statement->bindParam (':email', $email,PDO::PARAM_STR);
        $statement->bindParam (':telefono', $telefono,PDO::PARAM_STR);
        $statement->bindParam (':fecha', $fecha,PDO::PARAM_STR);
        $statement->bindParam (':hora', $hora,PDO::PARAM_STR);
        $statement->bindParam (':id_reservas', $id_reservas,PDO::PARAM_STR);

        echo $nombre .$apellido .$email  .$telefono .$fecha .$hora .$id_reservas; 
        
        if(!$statement){
            return "Error al crear el registro";
        }else{
            $statement->execute(); // funcion execute ejecuta la consulta 
            return"Registro creado correctamente";
            }
              
        }
    
}

?>