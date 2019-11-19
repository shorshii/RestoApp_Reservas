<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>   
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <title>Reserva - RestoApp </title>
</head>
<body> 
<br />
  <br />
    <div class="container" id="modal-body">
        <div class="card" id="card">
            <div class="card-header">
                <h4 class="">Busca tu reserva</h4>
            </div>
                <div class="card-body" id="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                        <p>Agenda tu fecha</p>
                        <input id="datepicker" width="276" value="" name="datepicker"/>
                          <script>
                              $('#datepicker').datepicker({
                               uiLibrary: 'bootstrap4'
                               });
                           </script>
                        </div> 
                        <div class="col-sm-4">
                            <p>Cantidad de  personas</p>
                            <div class="form-group">
                                <select class="form-control" id="comensales">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <p>Hora</p>
                            <div class="form-group">
                                <select class="form-control" id="horaReserva">
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
                                <input id="reservarBtn" type="submit" class="btn btn-primary btn-lg" value="Reservar" onclick="JavaScript:displayReserva()"> </button>
                            </div>
                        </div>         
                        <div class="col-sm-4">
                            <p>Bienvenido!</p>
                            <p>Aca puedes seleccionar la fecha de tu reserva. Te pedimos que selecciones la cantidad de comensales y la hora en la que vendrán.
                            <p> Los esperamos!</p>
                            <!-- ACA ABAJO PONES LO QUE NECESITES Y YA QUEDA ENCOLUMNADO -->


                        </div>
                    </div>
                    <br />
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <script src="./js/reserva.js"  type="text/javascript" type="module"></script>
   </body>
</html>

