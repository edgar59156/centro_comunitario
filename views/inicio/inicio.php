<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Bootstrap 4, from LayoutIt!</title>

	<meta name="description" content="Source code generated using layoutit.com">
	<meta name="author" content="LayoutIt!">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<h3>
					¡Bienvenido!
				</h3>
				
				<div class="jumbotron">
					<h2>
						Hello, world!
					</h2>
					<p>
						This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
					</p>
					<p>
						<a class="btn btn-primary btn-large" href="#">Learn more</a>
					</p>
				</div>
				<div class="row">
					<?php
					foreach ($datos as $key => $dato) :
					?>
						<div class="col-md-4">
							<div class="card">
								<img class="card-img-top" alt="Bootstrap Thumbnail First" src="../image/taller/<?php echo $dato['fotografia'] ?>" width="250" height="150">
								<div class="card-block">
									<h5 class="card-title">
										<?php echo $dato['taller'] ?>
									</h5>
									<p class="card-text">
										<?php echo $dato['descripcion'] ?>
									</p>
									<p>
										<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
									</p>
								</div>
							</div>
						</div>
					<?php
					endforeach
					?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>
</body>

</html>