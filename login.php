<?php
session_start();
if(isset($_SESSION['username']))
{
  header('Location: Listado_reservas.php');
}
require 'Modelo/Clase_Login.php';
  if (isset($_POST['logear'])){
    {
      $model = new Usuario();
      if (!empty($_POST['username']) || !empty($_POST['passwords'])) {
        $username = $model->username = htmlspecialchars ($_POST['username']);
        $password = $model->passwords = htmlspecialchars ($_POST['passwords']);
        $model->Login();
      }
    }
  }
?><!--  inicio de sesion + coneccion a BD -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login - Bienvenido a RestoApp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css"/>
  </head>
  <body id="listado">
    <div class="container">
      <h2> &nbsp;</h2>
      <!-- Modal content-->
      <form id="consultarUsuario" method="post" action="<?=$_SERVER['PHP_SELF'];?>"> <!-- inicia la sesion al consultar la funcion consultarUsuario en controlador -->
            <div class="modal-dialog">  
              <!-- Modal content--> 
              <div class="modal-content" id="modal"> 
                <div class="modal-header">
                  <h4 class="modal-title">Iniciar Sesion</h4>
                </div>
                <div class="modal-body" id="modal-body">                                  
                    <div class="form-group">
                      <label>Usuario</label>
                      <input type="text" name="username" id="username" class="form-control validate" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                      <label >Contraseña</label>
                      <input type="password" name="passwords" id="passwords" class="form-control validate" placeholder="Password" required>
                    </div>            
                </div>
                <div class="modal-footer">
                  <input type="submit" name="logear" id="logear" class="btn btn-primary btn-lg text-uppercase"  value="Acceder" >
                </div>
              </div>
            </div>
      </form>
    </div>
  </body>
</html>
