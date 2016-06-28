<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="autor" content="">
	<title>Mon administration</title>
	<!--Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="<?= WEBROOT; ?>css/bootstrap.css">
</head>
<body>
	<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Mon portfolio en PHP</a>
			</div>
			<ul class="nav navbar-nav">
				<li>
					<a href="category.php">Catégories</a>
				</li>
			</ul>
		</div><!-- /.container -->
	</div><!-- /.navbar -->
	<div class="container">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<?=flash(); ?>