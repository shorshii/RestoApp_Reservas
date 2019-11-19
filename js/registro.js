
import displayReserva from './reserva.js';
console.log(displayReserva);

function cargarDatosRegistro () {

    
    document.getElementById("datosRegistro").innerHTML = "";

    var newTable = `
        <tr>
            <td>${reserva.fechaReserva}</td>
            <td>${reserva.horaReserva}</td>
            <td>${reserva.cantidadPersonasReserva}</td>
        </tr>`
     
    document.getElementById("datosRegistro").innerHTML = newTable;
    
}

document.addEventListener("DOMContentLoaded",function(event){
    //FUNCION
    cargarDatosRegistro();
    });
