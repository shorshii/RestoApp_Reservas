<?php
require_once ('../Modelo/Clase_Login.php');
$mensaje = null;

$username = $_POST ['username'];
$password = $_POST ["passwords"];

  if (!empty($username) || !empty($password)){
  try {
    $usuario = new Usuario;
    $mensaje = $usuario->consultarUsuario($username,$password);
    
    //Solo cuando la consulta está ok tiene que hacer el cambio de pantalla
    echo $mensaje;
    session_start();
    $_SESSION[''] = $username;
    $_SESSION[''] = $password;

    header("Location: ../Listado_reservas.php");
  
  } catch( PDOException $Exception ) {
    // Note The Typecast To An Integer!
     // maybe dynamically generate a 503 page
    
    // output page content here
    exit();

    // or redirect to an existing one
    header("Location: ./index.php");
    exit;
    
  }
}

