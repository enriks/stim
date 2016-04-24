<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Comunidad de Stim</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<?php include 'phps/csss.php'; ?>
  	<link rel="stylesheet" href="css/hover2.css">
</head>
<body>
	<?php include 'phps/header.php';?>
	<div class="container">
		<h2>Bienvenido a la comunidad de stim</h2>
		<div></div>
		<div class="row">
			<div class=" col-md-4 col-sm-12  headercom">
				<p>Inicia sesión en la Comunidad Steam para descubrir más puntos de encuentro que explorar.</p>
				<a href="#" class="btn btn-default" id="botones">Iniciar Sesion</a>&nbsp; o &nbsp;
				<a href="#" class="btn btn-default" id="botones">Unirse a stim</a>
			</div>
		</div>
	</div>
	
	<div role="tabpanel" class="container-fluid tabs">
		<ul class="nav nav-tabs" role="tablist">
			<li role="presentation" class="active tabs"><a href="#seccion1" aria-controls="seccion1" data-toggle="tab" role="tab">Todo</a></li>
			<li role="presentation" class="tabs"><a href="#seccion2" aria-controls="seccion2" data-toggle="tab" role="tab">Capturas</a></li>
			<li role="presentation" class="tabs"><a href="#seccion3" aria-controls="seccion3" data-toggle="tab" role="tab">Videos</a></li>

		</ul>
	</div>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active " id="seccion1">
             <h1>:v</h1>
             </div>
		<div role="tabpanel" class="tab-pane " id="seccion2">
			<div class="container">
              <div class="row">
                <div class="col-md-12 img-hover multimedia">
                  <img class="img-responsive" src="img/comunity/captura1.jpg">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-7 col-md-offet-2 img-hover multimedia">
                  <img class="img-responsive" src="img/comunity/captura2.jpg">
                </div>
                <div class="col-md-3 img-hover multimedia">
                  <img class="img-responsive" src="img/comunity/captura3.jpg">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6 img-hover multimedia">
                  <img class="img-responsive" src="img/comunity/captura4.jpg">
                </div>
                <div class="col-md-6 img-hover multimedia">
                  <img class="img-responsive" src="img/comunity/captura5.jpg">
                </div>
              </div>
              <div class="row">
                  <div class="col-md-12 img-hover multimedia">
                  <img class="img-responsive" src="img/comunity/captura6.jpg">
                </div>
              </div>
            </div>
        </div>
		<div role="tabpanel" class="tab-pane " id="seccion3">
			<div class="container">
			    <div class="row">
			    <div class="col-md-6 multimedia">
                       <video controls class="img-responsive">
				<source src="videos/video1.mp4" type="video/mp4">
			</video></div>
			    <div class="col-md-6 multimedia"><video controls class="img-responsive">
				<source src="videos/video2.mp4" type="video/mp4"></div>
			    </div>
			    <div class="row">
			        <div class="col-md-6 multimedia"><video controls class="img-responsive">
				<source src="videos/video3.mp4" type="video/mp4"></div>
			        <div class="col-md-6 multimedia"><video controls class="img-responsive">
				<source src="videos/video4.mp4" type="video/mp4"></div>
			    </div>
			    <div class="row">
			        <div class="col-md-6 multimedia"><video controls class="img-responsive">
				<source src="videos/video5.mp4" type="video/mp4"></div>
			        <div class="col-md-6 multimedia"><video controls class="img-responsive">
				<source src="videos/video6.mp4" type="video/mp4"></div>
			    </div>
			</div>
		</div>
	</div>		

  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>