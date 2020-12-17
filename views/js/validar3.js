const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
const expresiones = {
    incremento: /^\d.[0-9]{2,6}$/,
    fecha_pago_mensual: /^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})(\s)([0-1][1-9]|[2][0-3])(:)([0-5][0-9][a-zA-Z])$/,
    costo_mensual: /^\d.[0-9]{2,6}$/
}

const campos = {
	incremento: false,
	fecha_pago_mensual: false, 
	costo_mensual: false, 	
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "incremento":
			validarCampo(expresiones.incremento, e.target, 'incremento');
		break;
		case "fecha_pago_mensual":
			validarCampo(expresiones.fecha_pago_mensual, e.target, 'fecha_pago_mensual');
		break;
		case "costo_mensual":
			validarCampo(expresiones.costo_mensual, e.target, 'costo_mensual');
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
	if (expresion.test(input.value)){
				document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
				document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
				document.querySelector(`#grupo__${campo} i`).classList.remove('la-times-circle');
				document.querySelector(`#grupo__${campo} i`).classList.add('la-check-circle');
				document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
				campos[campo] = true;
			}else {
				document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
				document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
				document.querySelector(`#grupo__${campo} i`).classList.add('la-times-circle');
				document.querySelector(`#grupo__${campo} i`).classList.remove('la-check-circle');
				document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
				campos[campo] = false;
			}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {

});
