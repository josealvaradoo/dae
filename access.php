<?php require_once("Config/Config.php");

	if (!isset($_GET["type"]) OR $_GET["type"] != "estudiante" AND $_GET["type"] != "docente") {
		header("Location:" . $urlWeb);
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Acceso <?php echo $_GET["type"] ?> - <?php echo $titleWeb; ?></title>
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
						<h3>Acceso <?php echo $_GET["type"] ?></h3>
						<br>
						<form class="form" onsubmit="return false">
							<div class="form-group">
								<label for="cedula">Cédula de Identidad</label>
								<div class="input-addon">
									<div class="add-on"><i class="fa fa-user"></i></div>
									<input type="text" name="cedula" class="form-control" id="cedula" autocomplete="off" required>
								</div>
							</div>
							<div class="form-group">
								<label for="password">Contraseña</label>
								<div class="input-addon">
									<div class="add-on"><i class="fa fa-unlock"></i></div>
									<input type="password" name="password" class="form-control" id="password" required>
								</div>
							</div>
							<div class="form-group">
								<button class="btn btn-primary btn-comic btn-uppercase" onclick="fn_login();"><i class="fa fa-check"></i> Continuar</button>
							</div>
						</form>
						<div class="alert alert-warning alert-pro hide">
							<div class="close">x</div>
							<p>El servicio de Login está deshabilitado.</p>
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
	<script>
		var fn_login = function() {
			$(".alert").fadeIn();
		}
	</script>
</body>
</html>