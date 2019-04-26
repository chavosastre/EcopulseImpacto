<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Ecopulse Impacto</title>
	<!-- Bootstrap core CSS-->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>
	<?php
	$total =  33.69;
	$CO2 = round(($total * 1000000) / 2.015625 / 1000, 1);
	$arboles = round($CO2 * 25.3368, 0);
	$gasolina = round(($total * 1000000) / 2.66970, 0);
	?>
	<!-- Page Content -->
	<div class="container-fluid">
		<!-- <div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p class="texto01">
							Medición total de energía
						</p>
					</div>
				</div>
			</div>
		</div> -->
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-4">
						<!-- nada aquí -->
					</div>
					<div class="col-4 text-center">
						<img class="logotipo" src="img/logo01.png">
					</div>
					<div class="col-4">
						<!-- nada aquí -->
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-3">
				<!-- nada aquí -->
			</div>
			<div class="col-6 text-center">
				<p class="titulo">
					<?php echo "$total" ?> GW Instalados
				</p>
			</div>
			<div class="col-3">
				<!-- nada aquí -->
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="row">
						<!-- Primer Título -->
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="card gris sinborde">
								<div class="card-body">
									<p class="card-title subtitulo">
										Hasta el momento hemos contribuido a
									</p>
								</div>
							</div>
						</div>
						<!-- Termina Primer Título -->

						<!-- Árboles -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<!-- 	<div class="row"> -->
							<div class="card arbol">
								<img class="card-img-top" src="img/arboles-02.png" alt="">
								<div class="card-body">
									<p class="card-title text-center numeros"><?php echo number_format($arboles); ?></p>
									<p class="card-text text-center texto01">Árboles sin talar</p>
								</div>
								<p class="card-footer equivalencia text-center">
									Esto es una superficie de <?php echo number_format($arboles * 9); ?> m<sup>2</sup>, equivalente a
									<?php echo number_format(($arboles * 9) / 63590); ?> estadios aztecas.
								</p>
							</div>
						</div><!-- Termina Árboles -->

						<!-- Gasolina -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<!-- 	<div class="row"> -->
							<div class="card gas">
								<img class="card-img-top" src="img/gasolina-03.png" alt="">
								<div class="card-body">
									<p class="card-title text-center numeros"><?php echo number_format($gasolina); ?></p>
									<p class="card-text text-center texto01">Litros de gasolina ahorrados</p>
								</div>
								<p class="card-footer equivalencia text-center">
									Esto equivale a llenar <?php echo number_format($gasolina / 2500); ?> tinacos de 2500 litros.
								</p>
							</div>
						</div><!-- Termina Gasolina -->


						<!-- CO2 -->
						<div class="col-lg-4 col-md-4 col-sm-12">
							<!-- 	<div class="row"> -->
							<div class="card co2">
								<img class="card-img-top" src="img/co2-04.png" alt="">
								<div class="card-body">
									<p class="card-title text-center numeros"><?php echo number_format($CO2); ?></p>
									<p class="card-text text-center texto01">Toneladas de CO<sub>2</sub> reducidas</p>
								</div>
								<p class="card-footer equivalencia text-center">
									Equivalente a dar <?php echo number_format($CO2 / 4.8079); ?> vueltas al mundo en avión.
								</p>
							</div>
						</div><!-- Termina CO2 -->
					</div> <!-- /.row -->
				</div> <!-- /.col-lg-6 col-md-6 mb-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.col-lg-12 -->
	</div> <!-- /.container -->

	<div class="container-fluid espacioTop">
		<div class="col-lg-12">
			<div class="row blanco">
				<div class="col-3 text-center">
					<a href="http://localhost/HEB/" target="_blank">
						<img src="img/h-e-b-logo.png" alt="">
					</a>
				</div>
				<div class="col-3 text-center">
					<a href="http://localhost/dunosusa/" target="_blank">
						<img src="img/dunosusa-logo.png" alt="">
					</a>
				</div>

				<div class="col-3 text-center">
					<a href="http://localhost/VerticalKnits/" target="_blank">
						<img src="img/h-e-b-logo.png" alt="">
					</a>
				</div>
				<div class="col-3 text-center">
					<a href="http://localhost/dunosusa/" target="_blank">
						<img src="img/dunosusa-logo.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid espacioTop">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-4 text-center">
					<!-- Nada aquí -->
				</div>
				<div class="col-4 text-center">
					<a href="residencial.php" target="_blank">
						<button class="button button1 btn-block">Proyectos Residenciales</button>
					</a>
				</div>
				<div class="col-4 text-center">
					<!-- Nada aquí -->
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="py-5">
		<div class="row">
			<div class="col-5">
				<!-- nada aquí -->
			</div>
			<div class="col-2 text-center">
				<div class="text-center">
					<img class="logotipo" src="img/energyzed02.gif">
				</div>
			</div>
			<div class="col-5">
				<!-- nada aquí -->
			</div>
		</div>
	</footer>
</body>

</html>
<?php
// include("cerrar_conexion.php");
?>