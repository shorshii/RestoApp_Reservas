<?php
session_start();
if(isset($_SESSION['username']))
{
  header('Location: Listado_reservas.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    
    <title>Registro - RestoApp</title>
</head>
  <body> 
    <br/>
    <br/>
    <div class="container" id="modal-body">
      <div class="card" id="card">
        <div class="card-header">
          <h4 class="">Datos de la Reserva</h4>
        </div>
      </div>
      <div class="card-body" id="card-body">
        <div class="row">
          <div class="col-sm-12">
            <form method="post" id="ajaxform"  action="./Controlador/insertarReserva.php">

            <!-- <form> -->           
              <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Cantidad de Personas</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?php
                  //Solo se dibuja el final de la tabla si los datos están seteados y vinieron de Reserva.php
                    if(!empty($_POST['datepicker']) and !empty($_POST['hora']) and !empty($_POST['personas'])){
                      $fecha = $_POST['datepicker'];
                      $hora = $_POST['hora'];
                      $personas = $_POST['personas'];
                      //esto es un comentario
                  
                  ?>

                    <td scope="row" > <?php echo $fecha; ?></td>
                    <td scope="row" > <?php echo $hora; ?> </td>
                    <td scope="row" > <?php echo  $personas; ?> </td>
                    
                  <?php
                    }
                  ?>
                  </tr>
                </tbody>
              </table>  
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nombre</label>
                  <input type="nombre" class="form-control" id="inputEmail4" placeholder="nombre" name="nombre" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Apellido</label>
                  <input type="apellido" class="form-control" id="inputEmail4" placeholder="apellido" name="apellido" required>
                </div>        
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Telefono</label>
                  <input type="telefono" class="form-control" id="inputPassword4" placeholder="telefono" name="telefono" required> 
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email</label>
                  <input type="email" class="form-control" id="inputPassword4" placeholder="email" name="email" required>
                </div> 
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">Terminos y condiciones</label>
                </div>
              </div>             
            </div>
            <input type="hidden"   name="fecha" value="<?php echo $fecha ?>">
            <input type="hidden"   name="hora" value="<?php echo $hora ?>">
            <input type="hidden"   name="personas" value="<?php echo $personas ?>">
            <button type="submit" id="submit" class="btn btn-primary">Reservar</button>
              <!-- <input class="btn btn-primary" type="submit" id="eliminarReserva" value="Reservar" /> -->
            </form>
          </div>
        </div>
      </div>

      <!-- The Modal -->
      <div class="modal" id="modalthxs">
        <div class="modal-dialog">
          <div class="modal-content">
            
              <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Modal Heading</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
              
              <!-- Modal body -->
            <div class="modal-body" id="TheBodyContent">
              Modal body..
            </div>
           
              
          </div>
        </div>
      </div>  
    </div>

<script>

/* $('#ajaxform').on('submit', function(e){ */
  $('#ajaxform').submit(function(e){
  var url = "./Controlador/insertarReserva.php"; // the script where you handle the form input.

  $.ajax({
    type: "POST",
    url: url,
    data: $("#ajaxform").serialize(), // serializes the form's elements.
    success: function(data) 
    {
    //if request successful
    $(".modal-title").text('Reserva generada exitosamente');
    $(".modal-body").text('Muchas Gracias por su reserva!!');
    $('#modalthxs').modal('show');
    },
    error: function(data) 
    {
      //if request unsuccessful
      $(".modal-title").text('Request failed');
      $('#modalthxs').modal('show');
    }
  }).done(function() {
    //finally, reinitialise modal text back to default 'merci'
    
    
  });
  e.preventDefault();
  setTimeout(function() {
            $('#modalthxs').modal('hide');
            window.location.replace("./index.php");
        }, 3000);
});


</script>




  </body>
</html>

