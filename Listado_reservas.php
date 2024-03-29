﻿<?php
session_start();
require_once ('./Modelo/mysqol-login.php');
require_once ('./Modelo/clase_reservas.php'); 
error_reporting(E_ALL ^ E_WARNING);
if(!isset($_SESSION['username']))
{
  echo '<script language="javascript">alert("Area Restringida");window.location.href="index.php"</script>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>  
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css"/>
    <title>Listado - RestoApp</title> 
      

</head> 
<body id="listado">
<div class="container">
<div class="card" id="card">
<nav>
<a href='controlador/cerrarSesion.php'><button type="button" class="btn btn-danger" style="float:right;" data-toggle="modal" data-target="#cerrarSesion" data-id="cerrarSesion.php>">Cerrar Sesion</button></a>
</nav>
   <h1>Reservas</h1>
      <table class="table table-striped">
        <thead>
          <tr id="tabla">
            <th scope="col"></th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO</th>
            <th scope="col">EMAIL</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">FECHA</th>
            <th scope="col">HORA</th>
            <th scope="col">COMENSALES</th>
            <th> &nbsp;</th>
            <th> &nbsp;</th>
          </tr>
        </thead>        
        <tbody id="datos">
          <?php
      
          //if (isset($_POST["ID"])){       ///como que aca tendria que conectar con la tabla de la base de datos
            //$id_reservas = $_POST["ID"];
            //$id_reservas = 1;
            $Cont_Reservas = new Reserva; 
            //Comentar la linea de abajo si se quiere buscar por ID
            $sql = $Cont_Reservas->mostrarReserva();
            //Descomentar la linea de abajo si se quiere buscar por ID
            //$sql = $Cont_Reservas->mostrarReserva($id_reservas);
          //}
              
          foreach ($sql as $dato){?>
          <tr>
            <td><?php $id = $dato ['id_reservas']; ?></td>
            <td > <?php echo $dato ["nombre"]; ?></td>
            <td > <?php echo $dato ["apellido"]; ?> </td>
            <td > <?php echo $dato ["email"]; ?> </td>
            <td > <?php echo $dato ["telefono"]; ?> </td>
            <td > <?php echo $dato ["fecha"]; ?> </td>
            <td > <?php echo $dato ["hora"]; ?> </td>
            <td > <?php echo $dato ["personas"]; ?> </td>
            <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#eliminarReserva" data-id="<?php echo $dato['id_reservas']?>">Reserva Cumplida</button></td>
            <td><button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#eliminarReserva" data-id="<?php echo $dato['id_reservas']?>">Anular Reserva</button></td>
          </tr>
        </tbody>
              <?php
               }
               ?> 
      </table>
     
  <!-- Modal accion eliminar la reserva-->
<form method="post" id="eliminarDatos" action="Controlador/eliminarReserva.php">
  <div class="modal fade" id="eliminarReserva">
    <div class="modal-dialog">

    <!-- Modal contenido-->
      <div class="modal-content" id="modal">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Anular Reserva</h4>
        </div>
        <div class="modal-body" id="modal-body"> 
          <div class="form-group">
            <label>¿Seguro que quiere anular esta reserva?</label>
          </div>
          <div class="modal-footer">
            <input type="hidden" name="id_reservas" class="form-control" value="<?php echo $id ?>">
            <input type="submit" class="btn btn-default" dismiss="modal" value="Aceptar" id="boton" >
          </div>
        </div>
      </div>
    </div>
</form>
<!-- 
<script> 
    $('#eliminarReserva').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Botón que activó el modal
      var id = button.data('id') // Extraer la información de atributos de datos

      var modal = $(this)
      modal.find('.modal-body #id_reservas').val(id)
      $('.alert').hide();//Oculto alert
    })

      var modal = $(this)
      modal.find('.modal-body #id_reservas').val(id)
		  modal.find('.modal-body #nombre').val(nombre)
		  modal.find('.modal-body #apellido').val(apellido)
		  modal.find('.modal-body #telefono').val(telefono)
		  modal.find('.modal-body #email').val(email)
		  modal.find('.modal-body #fecha').val(fecha)
      modal.find('.modal-body #hora').val(hora)
      modal.find('.modal-body #persona').val(personas)
		  $('.alert').hide();//Oculto alert

    </script> 
 -->
    
</body>  
</html>