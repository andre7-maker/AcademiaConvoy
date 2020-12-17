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
  grid-template-columns: 1fr 1fr 1fr;
  gap: 20px;
  margin-left: 300px;
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
  margin-left: 10px;
  line-height: 45px;
  padding: 0px 20px 10px 10px;
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
  margin-left: -150px;
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
<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Registrar mensualidades de los deportistas</h3>
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
                        <form onsubmit="return validar();" class="formulario" id="formulario" action="?controller=mensualidad&method=guardar" method="POST">
                          <div class="form-row">
                            <div class="formulario__grupo" id="grupo__costo_mensual">
                              <label class="formulario__label" for="inputEmail4">Costo de la mensualidad</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="number" id="costo_mensual" class="form-control" name="costo_mensual" id="inputEmail4" placeholder="60.000">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben valores númericos Ejem: 60.000 ó 60000</p>
                          </div>
                          <br><br><br><br><br><br>
                          <div class="formulario__grupo" id="grupo__incremento">
                              <label class="formulario__label" for="inputPassword4">Incremento</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="number" class="form-control" id="incremento" name="incremento" id="inputtext4" placeholder="15.000">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Sólo se reciben valores númericos Ejem: 15.000 ó 15000</p>
                          </div>

                          <div class="formulario__grupo" id="grupo__fecha_pago_mensual">
                              <label class="formulario__label" for="inputPassword4">Fecha del pago de la mensualidad</label>
                              <div class="formulario__grupo-input">
                                <input class="formulario__input" type="text" class="form-control" id="fecha_pago_mensual" name="fecha_pago_mensual" id="inputPassword4" placeholder="27/10/2020 06:13">
                                <i class="formulario__validacion-estado la la-times-circle"></i>
                              </div>
                              <p class="formulario__input-error">Se debe registrar la fecha como en el siguiente formato: Día/Mes/Año HH:MM</p>
                        </div>

                        <div class="formulario__grupo" id="grupo__costo_mensual">
                            <label class="formulario__label" for="inputPassword4">Nombre del deportista</label>
                            <select class="formulario__input" name="Id_Usuario" id="" class="form-control">
                            <option value="">seleccione</option>
                            <?php foreach($usuarios as $usuario){ ?>
                            <option value="<?php echo $usuario->Id ?>"> <?php echo $usuario->nombre?>-<?php echo $usuario->nit ?></option>
                            <?php }?>
                            </select>
                        </div>

                          <div class="formulario__grupo">
                              <label class="formulario__label" for="inputPassword4">Estado de la mensualidad</label>
                              <select class="formulario__input" class="form-control" name="Id_Estado">
                              <option>Seleccione</option>
                              <?php foreach($estados as $estado){ ?>
                            <option value="<?php echo $estado->Id ?>"><?php echo $estado->nombre ?></option>
                            <?php }?>
                            </select>
                        </div>
                      </div>

                      <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><i class="la la-warning"></i><b>Error:</b>Porfavor llenar todos los campos</p>
                      </div><br>

                      <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="formulario__btn" class="btn btn-success">Registrar</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="table-responsive">

  </div>
    <script src="views/js/validar3.js"></script>
      <script src="views/js/validar_mensualidad.js"></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</div>
</div>
</div>				
</div>