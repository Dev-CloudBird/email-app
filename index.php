<?php

require_once 'templates.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Correos Foto facil</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light sticky-top " style="background-color: #fff;">
  <a class="navbar-brand" href="#">Foto Fácil</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Plantillas<span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link disabled" href="#">Diseño</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar Plantilla" aria-label="Buscar Plantilla">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1>Selecciona una plantilla</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="card" style="width: 300px; overflow: hidden;">
				  	<img class="card-img-top" src="Templates/product/screenshot.jpg" alt="Card image cap" width="200px" height="200px" style="height: 300px; width: 300px;">

					<div class="card-body">
						<h5 class="card-title">
							Campañas
						</h5>
					    <p class="card-text">
					    	Plantilla campañas
					    </p>
					    <a href="view.php?template=product" class="btn btn-primary">Ver Demo</a>
					    <a href="#" class="btn btn-success">Enviar</a>
					</div>
				</div>
			</div>	
		</div>
	</div>

	
</body>
</html>