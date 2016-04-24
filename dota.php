<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>juegos</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="footer, links, icons" />
	<?php include 'phps/csss.php'; ?>
</head>
<body>
	<?php include 'phps/header.php';?>
	
	<div></div>
	<div class="container">
		<h1>Dota 2</h1>
		<div class="row multimedia">
		   <div class="col-md-8">
                <video controls class="img-responsive">
                    <source src="videos/Dota.webm" type="video/mp4">
                </video>
            </div>
            <div class="col-md-4 multimedia">
                <img class="img-responsive" src="img/dota.jpg" alt="">
                <p>Dota comenzó como una modificación para Warcraft 3 creada por usuarios del mismo título y se ha convertido en uno de los juegos online más jugados del mundo. </p>
            </div> 
		</div>
            	
	</div>
	
	<div class="container div-precio">
        <div class="col-md-11 col-md-offset-1 ">
            <h2>Jugar ahora</h2>
        <p id="txt-compra">Juega Dota 2 ahora, es completamente gratis </p>
        <a href="#" id="botones" class="btn btn-default txt-compra">Jugar</a>
        </div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <h2 id="h2-descripcion">Sobre el juego</h2>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <p id="descripcion" class="text-justify">
	               Dota comenzó como una modificación para Warcraft 3 creada por usuarios del mismo título y se ha convertido en uno de los juegos online más jugados del mundo. Siguiendo la tradición de Counter-Strike, Day of Defeat, Team Fortress, Portal y Alien Swarm, Dota 2 es el resultado de la contratación por parte de Valve de la comunidad de desarrolladores que creó el mod, ofreciéndole una oportunidad para, finalmente, desarrollar un producto completo, con sus ideas y la ayuda de un equipo profesional de programadores y artistas de Valve.<br>
                    <br>
                    En cuanto a jugabilidad, es algo más difícil de describir. El juego utiliza la clásica perspectiva de los RTS, pero no sería correcto llamar a Dota un RTS. Y aunque cada personaje comienza en el nivel 1 y muchas veces su límite de nivel es el 25, no sería correcto llamarlo un RPG. <br>
                    <br>
                    Muchas personas han intentado asignarle un género a Dota, pero nosotros pensamos que RTS de acción es el que lo describe mejor. Y si bien no pasamos mucho tiempo tratando de averiguar qué género es el que ha inventado el juego, ¡no podemos dejar de jugarlo!
	            </p>
	        </div>
	    </div>
	    <div class="row">
	        <h2 id="h2-descripcion">Requisitos del sistema</h2>
            <div class="col-md-4 col-md-offset-1">
               <p>Minimo</p>
                <p id="descripcion">
                    SO: Windows 7
                </p>
                <p id="descripcion">
                    Procesador: Dual core Intel, AMD CPU 2.8GHz
                </p>
                <p id="descripcion">
                    Memoria: 4 GB de RAM
                </p>
                <p id="descripcion">
                    Graficos: nVidea GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600
                </p>
                <p id="descripcion">
                    DirectX: 9.0
                </p>
                <p id="descripcion">
                    Almacenamiento: 8 GB de espacio disponible
                </p>
            </div>           
	    </div>
	</div>
	<?php include 'phps/footer.php';?>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>