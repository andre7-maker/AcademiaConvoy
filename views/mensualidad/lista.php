<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title">Mensualidades</h3>
          </div>
<div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="?controller=mensualidad&method=nuevoMensualidad">Agregar</a>
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
                <h4 class="card-title">Lista de pagos de mensualidades</h4>
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
								<th scope="col">Costo mensual</th>
								<th scope="col">Incremento</th>
								<th scope="col">Fecha del pago mensual</th>
                                <th scope="col">Nombre del deportista</th>
                                <th scope="col">Estado de la mensualidad</th>
                                <th scope="col">Accion</th>
							</tr>
						</thead>
						<tbody>
                            <?php foreach($mensualidades as $mensualidad):?>

                            <tr>
                                <td>
                                    <?php echo $mensualidad->Id?>
                                </td>
                                <td>
                                    <?php echo $mensualidad->costo_mensual?>
                                </td>
                                <td>
                                    <?php echo $mensualidad->incremento?>
                                </td>
                                <td>
                                    <?php echo $mensualidad->fecha_pago_mensual?>
                                </td>
                                <td>
                                    <?php echo $mensualidad->usuario?> - <?php echo $mensualidad->nit?>
                                </td>
                                <td>
                                    <?php echo $mensualidad->estado?>
                                <td>
                                <?php
                                if($mensualidad->Id_Estado == 4) { 
                                    ?>
                                    <a href="?controller=mensualidad&method=configurarEstadoM&Id=<?php echo $mensualidad->Id ?>" class="btn btn-danger btn-sm">Pagar</a>
                                    <?php
                                } elseif($mensualidad->Id_Estado == 3) { 
                                    ?>
                                    <a href="?controller=mensualidad&method=configurarEstadoM&Id=<?php echo $mensualidad->Id ?>" class="btn btn-primary btn-sm">Por pagar</a>
                                    <?php
                                }
                                ?> 
                                <a href="?controller=mensualidad&method=mostrarFactura&Id=<?php echo $mensualidad->Id ?>"><button class="btn btn-secondary btn-sm">Factura</button> </a>
                                </td>
                            </tr>
                            <?php endforeach ?>
						</tbody>
					</table>
                </div>
            </div>
        </div>
    </div>				
</div>

