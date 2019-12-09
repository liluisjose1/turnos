<?php include_once("./template/header.php"); ?>
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">REPORTE DE TICKETS</h4>
							</div>
						</div>
						<div class="card-body">
							<h1 class="text-danger" >Reporte por dia</h1>
							<form action="./reports/fecha.php" method="post" target="_blank">
								<div class="row">
									<div class="col-md-3">
										<div class="form-group">
											<label for="dui">Fecha</label>
											<input type="date" name="f_desde" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="dui"></label>
											<button type="submit" class="btn btn-success form-control">Generar</button>
										</div>
									</div>
								</div>
							</form>
							<br>
							<h1 class="text-danger" >Reporte por rango dias y hora</h1>
							<form action="./reports/rango_fecha.php" method="post" target="_blank">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Fecha desde</label>
											<input type="date" name="f_desde" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Hora desde</label>
											<input type="time" name="h_desde" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Fecha hasta</label>
											<input type="date" name="f_hasta" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Hora hasta</label>
											<input type="time" name="h_hasta" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label for="dui"></label>
											<br>
											<button type="submit" class="btn btn-success form-control">Generar</button>
										</div>
									</div>
								</div>
							</form>
							<br>
							<h1 class="text-danger" >Reporte por Ventanilla, rango dias y hora</h1>
							<form action="./reports/rango_fecha_ventanilla.php" method="post" target="_blank">
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Ventanilla</label>
											<input type="text" name="ventanilla" class="form-control" required id="email2" placeholder="">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Fecha desde</label>
											<input type="date" name="f_desde" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Hora desde</label>
											<input type="time" name="h_desde" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Fecha hasta</label>
											<input type="date" name="f_hasta" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui">Hora hasta</label>
											<input type="time" name="h_hasta" class="form-control" required id="email2" placeholder="Ingrese numero de DUI">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<label for="dui"></label>
											<br>
											<button type="submit" class="btn btn-success form-control">Generar</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include_once("./template/footer.php"); ?>
	<script src="./assets/assets/js/select2.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#exampleFormControlSelect1').select2({
				theme: 'bootstrap4',
				width: 'style',
			});
		});
	</script>