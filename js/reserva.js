
function displayReserva(){
    let fechaReserva = document.getElementById("datepicker").value
    let cantidadPersonasReserva = document.getElementById("comensales").value
    let horaReserva = document.getElementById("horaReserva").value

    let reserva = {
        fechaReserva: fechaReserva,
        cantidadPersonasReserva: cantidadPersonasReserva,
        horaReserva: horaReserva
    }
    console.log(reserva);
}


//document.getElementById("reservarBtn").addEventListener("click", displayReserva);

export default {displayReserva};

