function validar(){
	var costo_mensual, incremento, fecha_pago_mensual
	costo_mensual = document.getElementById("costo_mensual").value;
	incremento = document.getElementById("incremento").value;
	fecha_pago_mensual = document.getElementById("fecha_pago_mensual").value;

	expresionCosto = /^\d.[0-9]{2,6}$/;
	expresionIncre = /^\d.[0-9]{2,6}$/;
	expresionPago = /^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})(\s)([0-1][1-9]|[2][0-3])(:)([0-5][0-9][a-zA-Z])$/;

	if ( costo_mensual === "" || incremento === "" || fecha_pago_mensual === "") {
		swal({
      		title: 'Error de registro',
      		text: 'Todos los campos son obligatorios',
      		icon: 'error'
    	});
		return false;
	}
	else if (!expresionCosto.test(costo_mensual)) {
		swal({
      		title: 'Error de registro',
      		text: 'Sólo se reciben valores númericos Ejem: 60.000 ó 60000 en el campo costo de la mensualidad',
      		icon: 'error'
    	});
		return false;
	}
	else if (!expresionIncre.test(incremento)) {
		swal({
      		title: 'Error de registro',
      		text: 'Sólo se reciben valores númericos Ejem: 15.000 ó 15000 en el campo incremento del costo de la mensualidad',
      		icon: 'error'
    	});
		return false;
	}
	else if (!expresionPago.test(fecha_pago_mensual)) {
		swal({
      		title: 'Error de registro',
      		text: 'Se debe registrar la fecha como en el siguiente formato: Día/Mes/Año HH:MM',
      		icon: 'error'
    	});
		return false;
	}
}