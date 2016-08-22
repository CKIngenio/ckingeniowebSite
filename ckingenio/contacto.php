<!DOCTYPE html>
<html lang="ES">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="recursos/css/bootstrap.min.css">
	<link rel="stylesheet" href="recursos/css/principal.css">

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
						<li><a href="index.php">Home</a></li>
						<li><a href="conocenos.php">Somos CK</a></li>
						<li><a href="portafolio.php">Portafolio</a></li>
						<li><a href="trabajo.php">Trabaja en CK</a></li>
						<li><a href="noticias.php">Noticias</a></li>
						<li class="active"><a href="contacto.php">Contactar</a></li>
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
			<p>...Asi nos Contactas...</p>
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
					
					<h2 class="post-tittle">
						CONTACTO CK
					</h2>
					
					<p class="post-contenido text-justify">
						En CK Ingenio estamos comprometidos con nuestros usuarios por tal motivo a continuaci&oacute;n encontrara la forma mas facil para comunicarte con nosotros.
					</p>					
				</article>	

				<form>
					<div class="form-group">
					  <label for="usr">Nombre:</label>
					  <input type="text" class="form-control" id="usr" placeholder="Ingrese nombre">
					</div>		
					<div class="form-group">
					  <label for="ape">Apellido:</label>
					  <input type="text" class="form-control" id="ape" placeholder="Ingrese apellido">
					</div>		
					<div class="form-group">
					  <label for="empresa">Empresa:</label>
					  <input type="text" class="form-control" id="empresa" placeholder="Ingrese nombre empresa">
					</div>		
					<div class="form-group">
					  <label for="telefonoEmpresa">Telefono Empresa:</label>
					  <input type="text" class="form-control" id="telefonoEmpresa" placeholder="Ingrese telefono empresa">
					</div>		

					<div class="form-group">
					  <label for="comment">Comentario:</label>
					  <textarea class="form-control" rows="5" id="comment" placeholder="Ingrese su solicitud"></textarea>
					</div>

					<button type="button" class="btn btn-primary">Enviar</button>

				</form>			
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