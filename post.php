<?php require_once("Config/Config.php");

	$article = new Model\Article;
	if (isset($_GET)) {
		if ($_GET["seo"] != NULL) {

			$post = $article->GetArticleElementsByReference($_GET["seo"]);

		}
	}

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title><?php echo $post["title"] . " - " . $titleWeb; ?></title>
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
				<div class="col-md-9 col-sm-8 col-xs-12">
					<?php include("./includes/notification.php") ?>
					<article>
						<h3><?php echo $post["title"]; ?></h3>
						<div class="article-content text-justify"><?php echo $post["content"] ?></div>
					</article>
				</div>
				<div class="col-md-3 col-sm-4 col-xs-12">
					<?php include("./includes/aside.php") ?>
				</div>
			</div>
		</div>
	</main>
	<?php include("./includes/footer.php") ?>
	<?php include("./includes/scripts.php") ?>
</body>
</html>