<?php
require_once ('../Modelo/mysqol-login.php');
require_once ('../Modelo/clase_reservas.php');   //require_once importa funciones - require importa archivos 

$mensaje = null;

$id_reservas = $_POST ['id_reservas'];
$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$email = $_POST ["email"];
$telefono = $_POST ["telefono"];
$fecha = $_POST ["fecha"];
$hora= $_POST ["hora"];

if(count_chars($nombre)>0 && count_chars($apellido) > 0 && count_chars($email) > 0 && count_chars($telefono) > 0  && count_chars($fecha) > 0  && count_chars($hora) > 0 ){
  $actReserva = new reserva;
  $mensaje = $actReserva->insertarReserva($nombre,$apellido,$email,$telefono, $id_reservas, $fecha, $hora);
}else{
    echo "Faltan campos por completar";
}

echo $mensaje;
header("Location: ../index.php");
?>