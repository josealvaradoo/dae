<?php require_once("Config/Config.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titleWeb; ?></title>
	<meta name="description" content="">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo $urlWeb ?>/public/css/flexboxgrid.min.css" />
	<link rel="stylesheet" href="<?php echo $urlWeb ?>/public/css/styles.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
	<?php include("./includes/header.php") ?>
	<?php include("./includes/navbar.php") ?>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php include("./includes/notification.php") ?>
					<article>
						<h3>Bienvenido a DAE</h3>
						<p>
							Usted ha ingresado al portal de la dirección de asuntos estudiantiles de la facultad de ingeniería de la Universidad de Carabobo. En éste sitio usted puede gestionar todo lo relacionado a sus estudios, como inscripción, visualización de notas, y solicitud de constancias.
						</p>
					</article>
					<article>
						<div class="wall wall-bordered">
							<div class="wall-heading">
								<h3>Temas de interés</h3>
							</div>
							<ul>
								<li><a href="#">#Matriz de Horarios 2-2015</a></li>
								<li><a href="#">#Graduaciones</a></li>
								<li><a href="#">#Equivalencias</a></li>
								<li><a href="#">#Calendario Períodos 2-2015 / 1-2016</a></li>
								<li><a href="#">#Admisión</a></li>
								<li><a href="#">#Resoluciones Comité Técnico DAE</a></li>
							</ul>
						</div>
					</article>
				</div>
				<div class="col-md-3">
					<?php include("./includes/aside.php") ?>
				</div>
			</div>
		</div>
	</main>
	<?php include("./includes/footer.php") ?>
	<?php include("./includes/scripts.php") ?>
</body>
</html>