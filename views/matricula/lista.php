    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Matricula</h3>
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
                <h4 class="card-title">Lista de matriculados</h4>
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
								<th scope="col">fecha de ingreso</th>
                                <th scope="col">Documento</th>
								<th scope="col">pago de la matricula </th>
                                <th scope="col">clase </th>
                                <th scope="col">estado</th>
                                <th scope="col">Accion</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($matriculas as $matricula):?>

                            <tr>
                                <td>
                                    <?php echo $matricula->Id?>
                                </td>
                                <td>
                                    <?php echo $matricula->nombre?>
                                </td>
                                <td>
                                    <?php echo $matricula->fecha_ingreso?>
                                </td>
                                <td>
                                    <?php echo $matricula->nit?>
                                </td>
                                <td>
                                    <?php echo $matricula->pago_matricula?>
                                </td>
                                <td>
                                    <?php echo $matricula->tipo_clase .",".$matricula->edad_clase . ",".$matricula->grado ?>
                                </td>
                                <td>
                                    <?php echo $matricula->estado?>
                                </td>
                                <td>
                                <?php
                                if($matricula->Id_Estado == 1) { 
                                    ?>
                                    <a href="?controller=matricula&method=configurarEstado&Id=<?php echo $matricula->Id ?>" class="btn btn-danger btn-sm">Inactivar</a>
                                    <?php
                                } elseif($matricula->Id_Estado == 2) { 
                                    ?>
                                    <a href="?controller=matricula&method=configurarEstado&Id=<?php echo $matricula->Id ?>" class="btn btn-primary btn-sm">Activar</a>
                                    <?php
                                } 
                                ?> 
                                <a href="?controller=matricula&method=eliminar&Id=<?php echo $matricula->Id ?>"><button class="btn btn-second btn-sm">Eliminar</button></a>
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

