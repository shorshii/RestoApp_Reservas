<?php
require_once ('../Modelo/mysqol-login.php');
require_once ('../Modelo/clase_reservas.php');   //require_once importa funciones - require importa archivos 

$mensaje = null;

$id = $_POST ['id_reservas'];

if(count_chars($id)>0) {
  $borrarReserva = new Reserva;
  $mensaje = $borrarReserva->eliminarDatos($id);
  
}else{
    echo "Faltan campos por completar";
}

echo $mensaje;

header("Location: ../index.php");
?>