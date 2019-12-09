<?php include_once("./template/header.php"); ?>
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row">

				<div class="col-md-12">
					<?php
					error_reporting(E_ALL ^ E_NOTICE);
					if ($_GET["error"] == "no_tickets") {
						echo "<div class='alert alert-primary alert-dismissable'>";
						echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
						echo "Tabla tickets vaciada correctamente";
						echo "</div>";
					} else if ($_GET["error"] == "si_tickets") {
						echo "<div class='alert alert-danger alert-dismissable'>";
						echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
						echo "Error al vaciar tabla tickets";
						echo "</div>";
					} else if ($_GET["error"] == "no_tickets_p") {
						echo "<div class='alert alert-primary alert-dismissable'>";
						echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
						echo "Contador de Tickets Proferenciales Reiniciados";
						echo "</div>";
					} else if ($_GET["error"] == "si_tickets_p") {
						echo "<div class='alert alert-danger alert-dismissable'>";
						echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
						echo "Error al reiniciar Contador de Tickets Proferenciales Reiniciados";
						echo "</div>";
					} else if ($_GET["error"] == "no_tickets_n") {
						echo "<div class='alert alert-primary alert-dismissable'>";
						echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
						echo "Contador de Tickets Normales Reiniciados";
						echo "</div>";
					} else if ($_GET["error"] == "si_tickets_n") {
						echo "<div class='alert alert-danger alert-dismissable'>";
						echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
						echo "Error al reiniciar Contador de Tickets Normales Reiniciados";
						echo "</div>";
					}


					?>
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h1 class="card-title">Mantenimiento de Tablas</h1>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<form action="./logica/reiniciar_tickets.php" method="post">
										<button type="submit" style="height:80px;" class="btn btn-success btn-lg btn-block">
											<h1>Vaciar Tabla de Tickets</h1>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h1 class="card-title">Reiniciar Contadores</h1>
							</div>
						</div>
						<div class="card-body">
							<div class="row">
								<div class="col-md-6">
									<form action="logica/reiniciar_ticket_normal.php" method="post">
										<button type="submit" style="height:80px;" class="btn btn-success btn-lg btn-block">
											<h1>Normal</h1>
										</button>
									</form>
								</div>
								<div class="col-md-6">
									<form action="logica/reiniciar_ticket_preferencial.php" method="post">
										<button type="submit" style="height:80px;" class="btn btn-success btn-lg btn-block">
											<h1>Preferencial</h1>
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include_once("./template/footer.php"); ?>