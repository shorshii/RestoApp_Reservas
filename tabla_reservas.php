<?php
require_once ('./Modelo/mysqol-login.php');
require_once ('./Modelo/Clase_reservas.php'); 
error_reporting(E_ALL ^ E_WARNING);
session_start();
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
    <title>Desarrollo Web</title>
</head>
<body>

    <h1>PANTALLA DE INICIO</h1>
      <div class="modal-body">
        <a href="exampleModal.php"><input type="submit" class="btn btn-info btn-lg" value="Iniciar Sesion" ></a>
      </div>
      <div class="modal-body">
        <a href="cerrarSesion.php"><input type="submit" class="btn btn-info btn-lg" value="Cerrar Sesion" ></a>
      </div>
        <table class="table table-striped">
          <thead>
            <tr>
                    
              <th scope="col">Apellido</th>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Ultima Publicacion</th>
              <th scope="col">Cantidad de Publilcaciones</th>
              <th> &nbsp;</th>
            </tr>
          </thead>
          <tbody id="datos">
            <?php
              $NvoEscritor = new Escritores;
              $sql = $NvoEscritor->cargarEscritores();
                foreach ($sql as $dato){?>
                <tr>
                    <td> <?php echo $dato ["Apellido"]; ?></td>
                    <td> <?php echo $dato ["Nombre"]; ?> </td>
                    <td> <?php echo $dato ["Edad"]; ?> </td>
                    <td> <?php echo $dato ["Ultima_Publicacion"]; ?> </td>
                    <td> <?php echo $dato ["Cantidad_Publicaciones"]; ?> </td>
                    <?php
                      if (isset($_SESSION['Username']) && isset($_SESSION['Passwords']) ) {
                    ?>
                    <form name="html" action="noticias.php" method="POST">
                      <td> <input type="hidden" name="ID" value=<?php echo $dato["Id_escritores"]; ?> /> 
                      <td><input type="submit" class="btn btn-info btn-lg" value="Ver Noticias"></td>
                    </form>
                    <?php
                      }
                    ?>
                 </tr>
            </tbody>
                  
            <?php
            }
          ?> 
        </table>
        <?php
          if (isset($_SESSION['Username']) && isset($_SESSION['Passwords']) ) {
        ?>
          <input type="button" class="btn btn-primary btn-lg" data-toggle="modal" value="Agregar Escritor" data-target="#agregarNoticias">
        <?php
          }
        ?>
      <!-- Modal Agregar Datos-->
      <form id="agregarNoti" method="post" action="Controlador/insertar.php" >
        <div class="modal fade" id="agregarNoticias">
          <div class="modal-dialog">
           <!-- Modal content-->
            <div class="modal-content" id="modal">
            
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Editar Noticia</h4>
              </div>
            
              <div class="modal-body" id="modal-body">
                
                
                
                <form>                    
                  <div class="form-group">
                    <label>Apellido</label>
                    <input type="text" name="Apellido" class="form-control" id="apellido" placeholder="Apellido" >
                  </div>
                  <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="Nombre" class="form-control" id="nombre" placeholder="Nombre">
                  </div>
                  <div class="form-group">
                    <label">Edad</label>
                    <input type="text" name="Edad" class="form-control" id="edad" placeholder="Edad">
                  </div>
                  <div class="form-group">
                    <label">Ultima Publicacion</label>
                    <input type="date" name="Ultima_Publicacion" class="form-control" id="ultima_Publicacion" placeholder="Ultima Publicacion">
                  </div>
                  <div class="form-group">
                    <label">Cantidad Publicaciones</label>
                    <input type="text" name="Cantidad_Publicaciones" class="form-control" id="cantidad_Publicacion" placeholder="Cantidad Publicaciones">
                  </div>
                </form>
              
              </div>
              
              <div class="modal-footer">
                <input type="submit" class="btn btn-default" dismiss="modal" value="Agregar" >
              </div>

              
            
            </div>
          </div>
        </div>
      </form>
      
      
</body>

  
</html>