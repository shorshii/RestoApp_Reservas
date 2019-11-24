<?php

// configuracion de bd
class Conexion {
    static function get_conexion(){
        $hostname='localhost';
        $database='reservas';
        $username='root';
        $password='';
        try {
            $con = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password);
            // set the PDO error mode to exception
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //print "Conexión exitosa!";
            return $con;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage();
            die();
        }
    }
}

?> 

