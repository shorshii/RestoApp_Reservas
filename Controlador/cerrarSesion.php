/* Destroy current user session */
<?php
include('./../Modelo/mysqol-login.php');
  session_start();
  unset($_SESSION['username']); 
  session_destroy();
  header("Location: ./../index.php");
  exit;
?>