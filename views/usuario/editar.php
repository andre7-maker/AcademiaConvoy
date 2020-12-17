<div class="app-content content">
  <div class="content-wrapper">
    <div class="content-wrapper-before"></div>
    <div class="content-header row">
      <div class="content-header-left col-md-4 col-12 mb-2">
        <h3 class="content-header-title">Editar empleado</h3>
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
                        <form action="?controller=usuarios&method=actualizarEmpleado" method="POST">


                            <input type="hidden" name="Id" value="<?php echo $data[0]->Id ?>">

                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Nombre</label>
                              <input type="text" class="form-control" name="nombre" id="inputEmail4" placeholder="Nombre del empleado"required="" value="<?php echo $data[0]->nombre ?>">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Apellido</label>
                              <input type="text" class="form-control" name="apellido" id="inputtext4" placeholder="Apellido del empleado"required="" 
                              value="<?php echo $data[0]->apellido ?>">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Fecha de nacimiento</label>
                              <input type="date" class="form-control" name="fecha_nacimiento" id="inputPassword4" placeholder="Fecha de nacimiento"required="">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Numero de identificacion</label>
                              <input type="number" class="form-control" name="nit" id="inputPassword4" placeholder="Tarjeta de identidad" required=""
                              value="<?php echo $data[0]->nit ?>">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Telefono</label>
                              <input type="number" class="form-control" name="telefono" id="inputPassword4" placeholder="Telefono" required="" 
                              value="<?php echo $data[0]->telefono ?>">
                          </div>

                          <div class="form-group col-md-6">
                              <label for="inputPassword4">Correo</label>
                              <input type="email" class="form-control" name="correo" id="inputPassword4" placeholder="Correo" required="" 
                              value="<?php echo $data[0]->correo ?>">
                          </div>

                          
                      </div>
                      <button class="btn btn-success">Guardar</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <div class="table-responsive">




  </div>
</div>
</div>
</div>              
</div>

