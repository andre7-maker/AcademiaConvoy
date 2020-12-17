function validar() {

	Nombre = document.getElementById("nombre").value;
	Correo = document.getElementById("correo").value;
	Usuario = document.getElementById("usuario").value;
	password = document.getElementById("password").value;

	if(Nombre === "" || Correo === "" || Usuario === "" || password === ""){
		swal({
			title: 'Error de registro', 
			text: 'Todos los campos son obligatorios',
			icon: 'error'
			});
		return false;
	}

}