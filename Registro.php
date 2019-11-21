
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
            <form method="post" action="./Controlador/insertarReserva.php"> 
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
                    <input type="nombre" class="form-control" id="inputEmail4" placeholder="nombre" name="nombre">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Apellido</label>
                    <input type="apellido" class="form-control" id="inputEmail4" placeholder="apellido" name="apellido">
                  </div>        
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Telefono</label>
                    <input type="telefono" class="form-control" id="inputPassword4" placeholder="telefono" name="telefono">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="email" class="form-control" id="inputPassword4" placeholder="email" name="email">
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
              <button class="btn btn-primary" type="submit">Reservar</button>
            </form>
          </div>
        </div>
      </div>
    </div>          
  </body>
</html>

