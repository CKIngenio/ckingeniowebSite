<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="recursos/css/bootstrap.min.css">
	<link rel="stylesheet" href="recursos/css/principal.css">
	<script type="recursos/js/jquery.js"></script>
	<script type="recursos/js/bootstrap.min.js"></script>
	<title>CK Ingenio</title>
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collased" data-toggle="collapse" data-target="#nav_superior">
						<span class="sr-only">Desplegar / Ocultar</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand">CK Ingenio</a>
				</div>
				<!-- REALIZO EL INICIO DE MENU SUPERIOR-->
				<div class="collapse navbar-collapse" id="nav_superior">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="conocenos.php">Somos CK</a></li>
						<li><a href="portafolio.php">Portafolio</a></li>
						<li><a href="trabajo.php">Trabaja en CK</a></li>
						<li><a href="noticias.php">Noticias</a></li>
						<li><a href="contacto.php">Contactar</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
					<form action="" class="navbar-form navbar-right" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Buscar" name="">
						</div>
						<button type="submit" class="btn btn-buscar">
							<span class="glyphicon glyphicon-search"></span>
						</button>						
					</form>
				</div>
			</div>
		</nav>		
	</header>
	<section class="jumbotron">
		<div class="container">
			<h1>CK INGENIO</h1>
			<p>...Software a la Medida...</p>
		</div>		
	</section>

	<section class="main container">
		<div class="row">
			<section class="post col-md-9">
				<div class="miga-de-pan">
					<ol class="breadcrumb">
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>						
					</ol>					
				</div>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img src="recursos/imagenes/scrum.png">
					</a>
					<h2 class="post-tittle">
						<a href="#">Proyectos agiles con Scrum</a>						
					</h2>
					<p>
						<span class="post-fecha">22 Agosto 2016</span> Por
						<span class="post-autor">CK Ingenio</span>
					</p>
					<p class="post-contenido text-justify">
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
					</p>					
				</article>
				<article class="post clearfix">
					<a href="#" class="thumb pull-left">
						<img src="recursos/imagenes/scrum.png">
					</a>
					<h2 class="post-tittle">
						<a href="#">NUESTROS VALORES:</a>						
					</h2>
					<p>
						<span class="post-fecha">22 Agosto 2016</span> Por
						<span class="post-autor">CK Ingenio</span>
					</p>
					<p class="post-contenido text-justify">
						Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.
					</p>					
				</article>				
			</section>
			<aside class="col-md-3 hidden-xs hidden-sm">
				<h4>Categorias</h4>
				<div class="list-group">
					<a href="#" class="list-group-item active">Prueba</a>
					<a href="#" class="list-group-item">Cambio</a>
					<a href="#" class="list-group-item">Otros</a>
					<a href="#" class="list-group-item">Cuando</a>
					<a href="#" class="list-group-item">Hacer</a>			
				</div>		
			</aside>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<p align="center">
						COPYRIGHT 2016 CK INGENIO. Prohibida su reproducción total o parcial, así como su traducción a cualquier idioma sin autorización escrita de su titular &copy;.
					</p>					
				</div>				
			</div>			
		</div>		
	</footer>
</body>
</html>
