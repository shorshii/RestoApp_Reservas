﻿<?php
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
    <link rel="stylesheet" href="styles.css"/>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <title>Reserva - RestoApp </title>
</head>
<body> 
    <br />
    <br />
        <div class="container" id="modal-body">
            <div class="card" id="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="">Busca tu reserva</h4>
                        </div>
                        <div class="col-sm-6">
                            <a href='login.php'><button type="button" class="btn btn-danger" style="float:right;">Login</button></a>
                        </div>
                    </div>
                </div>
                <form method="post" action="Registro.php">  
                    <div class="card-body" id="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <p>Agenda tu fecha</p>
                                <input id="datepicker" width="276" value="" name="datepicker" required/>
                                <script>
                                  var today, datepicker;
                                      today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                                  datepicker = $('#datepicker').datepicker({
                                  uiLibrary: 'bootstrap4',
                                          minDate: today
                                      });
                                </script>
                            </div> 
                            <div class="col-sm-4">
                                <p>Cantidad de  personas</p>
                                <div class="form-group">
                                    <select class="form-control" id="personas" name="personas">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                    </select>
                                </div>
                                <p>Hora</p>
                                <div class="form-group">
                                    <select class="form-control" id="horaReserva" name="hora">
                                        <option>20:00</option>
                                        <option>20:30</option>
                                        <option>21:00</option>
                                        <option>21:30</option>
                                        <option>22:00</option>
                                        <option>22:30</option>
                                        <option>23:00</option>
                                    </select>
                                </div>
                                <div class="footer">
                                    <input id="reservarBtn" type="submit" class="btn btn-primary btn-lg" value="Reservar"> </input>
                                </div>
                            </div>         
                            <div class="col-sm-4">
                                <p >Bienvenido!</p>
                                <p>Aca puedes seleccionar la fecha de tu reserva. Te pedimos que selecciones la cantidad de comensales y la hora en la que vendrán.
                                <p> Los esperamos!</p>
                            </div>
                        </div>
                        <br />
                    </div>
                </form>
            </div>
        </div> 
   </body>
</html>