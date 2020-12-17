const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
const expresiones = {
	nombre: /^[a-zA-ZÁ-ÿ\s]{4,20}$/,	
    password: /^.{4,12}$/,
    correo: /^([a-zA-Z0-9_\.\+-]+)@([\da-z\.-]+)\.([a-z\-]{2,6})$/,
    telefono: /^\d{7,14}$/,
    apellido: /^[a-zA-ZÁ-ÿ\s]{4,20}$/,
    nit: /^[0-9]{10}$/,
    fecha_nacimiento: /^(?:(?:(0?[1-9]|1\d|2[0-8])[/](0?[1-9]|1[0-2])|(29|30)[/](0?[13-9]|1[0-2])|(31)[/](0?[13578]|1[02]))[/](0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|(29)[/](0?2)[/](\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/,
    fecha_ingreso: /^(?:(?:(0?[1-9]|1\d|2[0-8])[/](0?[1-9]|1[0-2])|(29|30)[/](0?[13-9]|1[0-2])|(31)[/](0?[13578]|1[02]))[/](0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|(29)[/](0?2)[/](\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/,
    pago_matricula: /^[0-9]{4,6}$/
}
    
const campos = {
	nombre: false,
	password: false, 
	correo: false, 	
	telefono: false,
	apellido: false,
	nit: false,
	fecha_nacimiento: false,
	fecha_ingreso: false,
	pago_matricula: false
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre');
		break;
		case "password":
			validarCampo(expresiones.password, e.target, 'password');
		break;
		case "correo":
			validarCampo(expresiones.correo, e.target, 'correo');
		break;
		case "telefono":
			validarCampo(expresiones.telefono, e.target, 'telefono');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido');
		break;
		case "nit":
			validarCampo(expresiones.nit, e.target, 'nit');
		break;
		case "fecha_nacimiento":
			validarCampo(expresiones.fecha_nacimiento, e.target, 'fecha_nacimiento');
		break;
		case "fecha_ingreso":
			validarCampo(expresiones.fecha_ingreso, e.target, 'fecha_ingreso');
		break;
		case "pago_matricula":
			validarCampo(expresiones.pago_matricula, e.target, 'pago_matricula');
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
