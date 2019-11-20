<?php

require_once ('./Modelo/mysqol-login.php');
require_once ('./Modelo/clase_reservas.php'); 
error_reporting(E_ALL ^ E_WARNING);
//session_start();
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
<button type="button" class="btn btn-secondary" style="float:right;" data-toggle="modal" data-target="#cerrarSesion" data-id="cerrarSesion.php>">Cerrar Sesion</button>
</nav>
   <h1>Reservas</h1>
      <table class="table table-striped">
        <thead>
          <tr id="tabla">
            <th scope="col"></th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Email</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
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
            <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#eliminarReserva" data-id="<?php echo $dato['id_reservas']?>">Reserva Cumplida</button></td>
            <td><button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#eliminarReserva" data-id="<?php echo $dato['id_reservas']?>">Anular Reserva</button></td>
          </tr>
        </tbody>
              <?php
               }
               ?> 
      </table>
     
  <!-- Modal Eliminar la reserva-->
<form method="post" id="eliminarDatos" action="Controlador/eliminarReserva.php">
  <div class="modal fade" id="eliminarReserva">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" id="modal">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Anular Reserva</h4>
        </div>
        <div class="modal-body" id="modal-body">
          <form>
            <div class="form-group">
              <input type="hidden" name="id_reservas" class="form-control" id="id_reservas">
            </div>

            <div class="form-group">
              <label>¿Seguro que quiere anular esta reserva?</label>
              <?php
              echo $id
              ?>
            </form>
        </div>
          <div class="modal-footer">
            <input type="submit" class="btn btn-default" dismiss="modal" value="Aceptar" id="boton" >
          </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</form>

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
		  $('.alert').hide();//Oculto alert
		})
    </script> 

    
</body>  
</html>