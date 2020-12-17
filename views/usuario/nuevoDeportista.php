<style type="text/css">
  * {
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  background: #E5E5E5;
}

main {
  max-width: 800px;
  width: 90%;
  margin: auto;
  padding: 40px;
}

.formulario {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.formulario__label {
  display: block;
  font-weight: 700;
  padding: 10px;
  cursor: pointer;
}

.formulario__grupo-input {
  position: relative;
}

.formulario__input {
  width: 100%;
  background: #fff;
  border: 3px solid gray;
  border-radius: 3px;
  height: 45px;
  line-height: 45px;
  padding: 0 40px 0 10px;
  transition: .3s ease all;
}

.formulario__input:focus {
  border: 3px solid #0075FF;
  outline: none;
  box-shadow: 3px 0px 30px rgba(163,163,163, 0.4);
}

.formulario__input-error {
  font-size: 12px;
  margin-bottom: 0;
  display: none;
}

.formulario__input-error-activo {
  display: block;
}

.formulario__validacion-estado {
  position: absolute;
  right: 10px;
  bottom: 15px;
  z-index: 100;
  font-size: 16px;
  opacity: 0;
}

.formulario__checkbox {
  margin-right: 10px;
}

.formulario__grupo-terminos, 
.formulario__mensaje,
.formulario__grupo-btn-enviar {
  grid-column: span 2;
}

.formulario__mensaje {
  height: 45px;
  line-height: 45px;
  background: #F66060;
  padding: 0 15px;
  border-radius: 3px;
  display: none;
}

.formulario__mensaje-activo {
  display: block;
}

.formulario__mensaje p {
  margin: 0;
}

.formulario__grupo-btn-enviar {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.formulario__btn {
  height: 45px;
  line-height: 45px;
  width: 30%;
  background: #870000;
  color: #fff;
  font-weight: bold;
  border: none;
  border-radius: 3px;
  cursor: pointer;
  transition: .1s ease all;
}

.formulario__btn:hover {
  box-shadow: 3px 0px 30px rgba(163,163,163, 1);
}

.formulario__mensaje-exito {
  font-size: 14px;
  color: #119200;
  display: none;
}

.formulario__mensaje-exito-activo {
  display: block;
}

/* ----- -----  Estilos para Validacion ----- ----- */
.formulario__grupo-correcto .formulario__validacion-estado {
  color: #1ed12d;
  opacity: 1;
}

.formulario__grupo-incorrecto .formulario__label {
  color: #bb2929;
}

.formulario__grupo-incorrecto .formulario__validacion-estado {
  color: #bb2929;
  opacity: 1;
}

.formulario__grupo-incorrecto .formulario__input {
  border: 3px solid #bb2929;
}


/* ----- -----  Mediaqueries ----- ----- */
@media screen and (max-width: 800px) {
  .formulario {
    grid-template-columns: 1fr;
  }

  .formulario__grupo-terminos, 
  .formulario__mensaje,
  .formulario__grupo-btn-enviar {
    grid-column: 1;
  }

  .formulario__btn {
    width: 100%;
  }
}
</style>
<meta charset="utf-8">
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Matricula Deportista</h3>
    </div>
    <div class="content-header-right col-md-8 col-12">
        <div class="breadcrumbs-top float-md-right">
          <div class="breadcrumb-wrapper mr-1">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">
              </ol>
          </div>
      </div>
  </div>
</div>
<div class="content-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Formulario</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <form onsubmit="return validar();" class="formulario" id="formulario" action="?controller=usuarios&method=guardarDeportista" method="POST">
                          <!-- //////////////////////////////////////////////////////////////registro de nombre////////////////////////////////////////////////-->
                          <div class="formulario__grupo" id="grupo__nombre">
                              <label for="inputEmail4" class="formulario__label">Nombre</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="text" class="form-control" name="nombre" id="nombre" id="inputEmail4" placeholder="Jose alberto">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben letras mayúsculas y minúsculas con espacios hasta 20 caracteres se reciben</p>
                          </div>
                          <!-- //////////////////////////////////////////////////////////////registro de apellido////////////////////////////////////////////////-->
                          <div class="formulario__grupo" id="grupo__apellido">
                              <label for="inputPassword4" class="formulario__label">Apellido</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" id="apellido" type="text" class="form-control" name="apellido" id="inputtext4" placeholder="Parra Wualapon">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben letras mayúsculas y minúsculas con espacios hasta 20 caracteres se reciben</p>
                          </div>
                          <!-- ///////////////////////////////////////////////////////////registro de fecha nacimiento////////////////////////////////////////////-->
                          <div class="formulario__grupo" id="grupo__fecha_nacimiento">
                              <label for="inputPassword4" class="formulario__label">Fecha de nacimiento</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" class="form-control" type="text" id="fecha_nacimiento" name="fecha_nacimiento" id="inputPassword4" placeholder="Día/Mes/Año">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Se debe registrar la fecha como en el siguiente formato: Día/Mes/Año </p>
                          </div>
                          <!-- ///////////////////////////////////////////////////////////registro nit////////////////////////////////////////////////////////////-->
                          <div class="formulario__grupo" id="grupo__nit">
                              <label class="formulario__label" for="inputPassword4">Número de identificación</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="number" class="form-control" id="nit" name="nit" id="inputPassword4" placeholder="1001061179">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben valores númericos y sólo 10 caracteres</p>
                          </div>
                          <!-- ///////////////////////////////////////////////////////////registro de telefono////////////////////////////////////////////////////-->
                          <div class="formulario__grupo" id="grupo__telefono">
                              <label class="formulario__label" for="inputPassword4">Telefono</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="number" class="form-control" id="telefono" name="telefono" id="inputPassword4" placeholder="1234567" >
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben valores númericos de 7 a 14 caracteres</p>
                          </div>
                          <!-- ///////////////////////////////////////////////////////////registro de correo//////////////////////////////////////////////////////-->
                            <div class="formulario__grupo" id="grupo__correo">
                              <label class="formulario__label" for="inputPassword4">Correo</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="email" class="form-control" id="correo" name="correo" id="inputPassword4" placeholder="correo@gmail.com" >
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben los siguientes línea de caracteres específicos: correo@gmail.com</p>
                          </div>
                          
                          <!-- ///////////////////////////////////////////////////////////registro de clase///////////////////////////////////////////////////////-->
                          <div class="formulario__grupo">
                              <label class="formulario__label" for="inputPassword4">Clase</label>
                              <select class="formulario__input" class="form-control" name="Id_Clase">
                                <option>...</option>
                                <?php
                                foreach ($clases as $clase) {
                                  ?>
                                  <option class="selector"  value="<?php echo $clase->Id ?>">
                                    <?php echo $clase->tipo_clase .",". $clase->edad_clase .",". $clase->grado ?></option>
                                    <?php                                       
                                  }
                                  ?>
                                
                              </select>
                          </div>
                          <!-- ///////////////////////////////////////////////////////////registro de fecha ingreso///////////////////////////////////////////////-->
                           <div class="formulario__grupo" id="grupo__fecha_ingreso">
                              <label class="formulario__label" for="inputPassword4">Fecha de ingreso</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="text" class="form-control" id="fecha_ingreso" name="fecha_ingreso" id="inputPassword4" placeholder="Día/Mes/Año">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                                <p class="formulario__input-error">Se debe registrar la fecha como en el siguiente formato: Día/Mes/Año </p>
                          </div>
                          <!-- /////////////////////////////////////////////////////////registro de pago matricula///////////////////////////////////////////////-->
                           <div class="formulario__grupo" id="grupo__pago_matricula">
                              <label class="formulario__label" for="inputPassword4">Pago matricula</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="number" class="form-control" id="pago_matricula" name="pago_matricula" id="inputPassword4" placeholder="75.000">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben valores númericos Ejem: 75.000 ó 75000</p>
                          </div>
                          <!-- /////////////////////////////////////////////////////////registro de contraseña////////////////////////////////////////////////////-->
                          <div class="formulario__grupo" id="grupo__password">
                              <label class="formulario__label" for="inputPassword4">Contraseña</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="password" class="form-control" id="password" name="password" id="inputPassword4" placeholder="">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">se puede recibir cualquier caractere pero no debe ser menor a 4 ni mayor a 12</p>
                          </div>
                      </div>

                      <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="la la-warning"></i><b>Error:</b>Porfavor llenar todos los campos</p>
                      </div>

                      <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button  type="submit" class="formulario__btn" class="btn btn-success">Registrar</button>
                      </div>
                      
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="table-responsive">
  </div>
  <script src="views/js/validar.js"></script>
  <script src="views/js/validar_deportista.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    
  </script>
</div>
</div>
</div>				
</div>

