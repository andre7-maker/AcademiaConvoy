    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Deportistas</h3>
          </div>
<div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="?controller=usuarios&method=nuevoDeportista">Agregar</a>
                  </li>
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
                <h4 class="card-title">Lista de deportistas</h4>
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
                    
                    <div class="table-responsive">

					<table class="table table-striped">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Documento</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Cateogoria</th>
                                <th scope="col">Tipo clase</th>
                                <th scope="col">Nivel</th>
                                <th scope="col">Accion</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($usuarios as $usuario):?>

                            <tr>
                                <td>
                                    <?php echo $usuario->Id?>
                                </td>
                                <td>
                                    <?php echo $usuario->nombre?>
                                </td>
                                <td>
                                    <?php echo $usuario->apellido?>
                                </td>
                                <td>
                                    <?php echo $usuario->nit?>
                                </td>
                                <td>
                                    <?php echo $usuario->correo?>
                                </td>
                                <td>
                                    <?php echo $usuario->estado?>
                                </td>
                                <td>
                                    <?php echo $usuario->rol?>
                                </td>
                                <td>
                                    <?php echo $usuario->tipo_clase?>
                                </td>
                                <td>
                                    <?php echo $usuario->edad_clase?>
                                </td>
                                <td>
                                    <?php echo $usuario->grado?>
                                </td>
                                <td>
                                <?php
                                if($usuario->Id_Estado == 1) { 
                                    ?>
                                    <a href="?controller=usuarios&method=configurarEstadoD&Id=<?php echo $usuario->Id ?>" class="btn btn-danger btn-sm">Inactivar</a>
                                    <?php
                                } elseif($usuario->Id_Estado == 2) { 
                                    ?>
                                    <a href="?controller=usuarios&method=configurarEstadoD&Id=<?php echo $usuario->Id ?>" class="btn btn-primary btn-sm">Activar</a>
                                    <?php
                                } 
                                ?> 

                                <a href="?controller=usuarios&method=edit&id=<?php echo $usuario->Id ?>"><button class="btn btn-success btn-sm">editar</button></a>

                                    <a href="?controller=usuarios&method=eliminar&Id=<?php echo $usuario->Id ?>"><button class="btn btn-second btn-sm">Eliminar</button></a>
                                </td>
                            </tr>
                            <?php endforeach?>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>				
</div>

