<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2> &nbsp;</h2>
    <!-- Modal content-->

    <form id="consultarUsuario" method="post" action="Controlador/iniciarSesion.php" >
          <div class="modal-dialog">
           <!-- Modal content-->
            <div class="modal-content" id="modal">
            
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Iniciar Sesion</h4>
              </div>
            
              <div class="modal-body" id="modal-body">
                
    
                
                <form>                    
                  <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username" id="username" class="form-control validate" placeholder="Usuario">
                  </div>
                  <div class="form-group">
                    <label >Contraseña</label>
                    <input type="password" name="passwords" id="passwords" class="form-control validate" placeholder="Password">
                  </div>
                </form>
              
              </div>
              
              <div class="modal-footer">
                <input type="submit" class="btn btn-info btn-lg" dismiss="modal" value="Guardar" >
              </div>
            </div>
          </div>
      </form>


    <!-- <div class="modal-content" id="iniciarSesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-header text-center">
                <h3 class="modal-title w-100 font-weight-bold">Iniciar Sesion</h3>  
            </div>
            <div class="modal-body mx-3">
                <form class="md-form mb-5">
                    <div class="form-group">
                        <form action="Controlador/iniciarSesion.php" method="POST" id="get_conexion" > 
                            <div class="form-group">
                                <input type="hidden" name="id_Usuarios" class="form-control" id="id_Usuarios">
                            </div>
                            <label data-error="wrong" data-success="right" for="Username">Usuario</label>
                            <input type="text" name="Username" id="Username" class="form-control validate" placeholder="Usuario">
                            <div class="md-form mb-4">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Contraseña</label>
                                <input type="password" name="Passwords" id="Passwords" class="form-control validate" placeholder="Password">       
                            </div>
                            <div class="modal-header text-center">
                                <input type="submit" class="btn btn-info btn-lg" dismiss="modal" value="Guardar" >
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div> -->
</body>

</html>

