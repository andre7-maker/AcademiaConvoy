function validar(){
	var nombre, apellido, fecha_nacimiento, nit, telefono, correo, password, expresionNom, expresionApe, expresionFech, expresionNit, expresionTele, expresionCorr, expresionPass;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	fecha_nacimiento = document.getElementById("fecha_nacimiento").value;
	nit = document.getElementById("nit").value;
	telefono = document.getElementById("telefono").value;
	correo = document.getElementById("correo").value;
	password = document.getElementById("password").value;

	expresionNom = /[a-zA-ZÁ-ÿ\s]{4,20}/;
	expresionApe = /^[a-zA-ZÁ-ÿ\s]{4,20}$/;
	expresionFech = /^(?:(?:(0?[1-9]|1\d|2[0-8])[/](0?[1-9]|1[0-2])|(29|30)[/](0?[13-9]|1[0-2])|(31)[/](0?[13578]|1[02]))[/](0{2,3}[1-9]|0{1,2}[1-9]\d|0?[1-9]\d{2}|[1-9]\d{3})|(29)[/](0?2)[/](\d{1,2}(?:0[48]|[2468][048]|[13579][26])|(?:0?[48]|[13579][26]|[2468][048])00))$/;
	expresionNit = /^[0-9]{10}$/;
	expresionTele = /^[0-9]{7,14}$/;
	expresionCorr = /^([a-zA-Z0-9_\.\+-]+)@([\da-z\.-]+)\.([a-z\-]{2,6})$/;
	expresionPass = /^.{4,12}$/;

	if (nombre === "" || apellido === "" || fecha_nacimiento === "" || nit === "" ||
    telefono === "" || correo === "" || password === ""){
    swal({
      title: 'Error de registro',
      text: 'Todos los campos son obligatorios',
      icon: 'error'
    });
    return false;
  }
  else if(!expresionNom.test(nombre)){
    swal({
      title: 'Error de registro',
      text: 'Sólo se reciben letras mayúsculas y minúsculas con espacios hasta 20 caracteres se reciben en el campo nombre',
      icon: 'error'
    });
    return false;
  }
  else if (nombre.length>20) {
    swal({
      title: 'Error de registro',
      text: 'El nombre es demasiado largo',
      icon: 'error'
    });
    return false;
  }
  else if (apellido.length>20) {
    swal({
      title: 'Error de registro',
      text: 'El apellido es demasiado largo',
      icon: 'error'
    });
    return false;
  }
  else if (!expresionTele.test(telefono)){
    swal({
      title: 'Error de registro',
      text: 'Sólo se reciben valores númericos de 7 a 14 caracteres en el campo telefono',
      icon: 'error'
    });
    return false;
  }
  else if(!expresionNit.test(nit)){
    swal({
      title: 'Error de registro',
      text: 'Sólo se reciben valores númericos y sólo 10 caracteres en el campo número de identificación',
      icon: 'error'
    });
    return false;
  }
  else if(!expresionApe.test(apellido)){
    swal({
      title: 'Error de registro',
      text: 'Sólo se reciben letras mayúsculas y minúsculas con espacios hasta 20 caracteres se reciben en el campo apellido',
      icon: 'error'
    });
    return false;
  }
  else if(!expresionFech.test(fecha_nacimiento)) {
    swal({
      title: 'Error de registro',
      text: 'Se debe registrar la fecha de nacimiento como en el siguiente formato: Día/Mes/Año',
      icon: 'error'
    });
    return false;
  }
  else if (!expresionCorr.test(correo)) {
    swal({
      title: 'Error de registro',
      text: 'Sólo se reciben los siguientes línea de caracteres específicos: correo@gmail.com',
      icon: 'error'
    });
    return false;
  }
  else if (!expresionPass.test(password)) {
    swal({
      title: 'Error de registro',
      text: 'Se puede recibir cualquier caracter pero no debe ser menor a 4 ni mayor a 12 en el campo contraseña',
      icon: 'error'
    });
    return false;
  }
}

