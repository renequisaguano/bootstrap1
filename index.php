<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Primer Proyecto Bootstrap</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

	<style type="text/css">

	/*Desde un escritorio*/
	@media(min-width: 1200px){
		body{ color:red;}

	}


	/*Desde un escritorio peque;o o tablet*/
	@media(min-width: 768px)  and (max-width: 979px){


		body{ color:green;}

	}


	/*Table o smartphone*/
	@media(max-width: 767px) {


		body{ color:blue;}

	}


	/*Smartphone*/
	@media(max-width: 480px ){


		body{ color:yellow;}

	}

	.text-big{
		font-size: 300px;
		line-height: 320px;
	}



	</style>

</head>
<body>


<!--div.row-fluid>div.span6*2-->



<br>
<div class="container">


<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Iconos Vectoriales</h1>
		</div>
	</div>
</div>




<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Iconos </h1>
		</div>
	</div>
</div>


<div class="row-fluid">
	<div class="span4">
		<i class="icon-user"></i>
		<i class="icon-pencil"></i>
		<i class="icon-file"></i>
		<a href="" class="btn"><i class="icon-ok"></i> Confirmar</a>
	</div>
	<div class="span4">
		<div class="input-prepend">
			<span class="add-on">
				<i class="icon-map-marker"></i>
			</span>
			<input type="text">
		</div>
		<div class="input-append">
			<input type="text">
			<span class="add-on">
				<i class="icon-time"></i>
			</span>
		</div>
	</div>
	<div class="span4"></div>
</div>


<div class="row-fluid">
		<div class="span12"> &nbsp; </div>
	</div>

<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Imagenes</h1>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span4">
		<img src="./img/cuenta.png" alt="Curso" class="img-rounded">
	</div>
	<div class="span4">
		<img src="./img/cuenta.png" alt="Curso" class="img-circle">
	</div>
	<div class="span4">
		<img src="./img/cuenta.png" alt="Curso" class="img-polaroid">
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Botones</h1>
		</div>
	</div>
</div>


<div class="row-fluid">
	<div class="span4">
		<a href="" class="btn">Link</a>
		<input type="submit"  value="Submit" class="btn">
		<input type="button" value="Boton" class="btn">
		<button class="btn">Etiqueta</button>

			<hr>
		<a href="" class="btn-link">Link</a>
		<input type="submit"  value="Submit" class="btn-link">
		<input type="button" value="Boton" class="btn-link">
		<button class="btn-link">Etiqueta</button>
	</div>
	<div class="span4">
		<a href="" class="btn btn-primary">Link</a>
		<input type="submit"  value="Submit" class="btn btn-primary">
		<input type="button" value="Boton" class="btn btn-primary">
		<button class="btn btn-primary">Etiqueta</button>


		<hr>
		<a href="" class="btn btn-success">Link</a>
		<input type="submit"  value="Submit" class="btn btn-success">
		<input type="button" value="Boton" class="btn btn-success">
		<button class="btn btn-success">Etiqueta</button>




		<hr>
		<a href="" class="btn btn-warning">Link</a>
		<input type="submit"  value="Submit" class="btn btn-warning">
		<input type="button" value="Boton" class="btn btn-warning">
		<button class="btn btn-warning">Etiqueta</button>

		<hr>
		<a href="" class="btn btn-info">Link</a>
		<input type="submit"  value="Submit" class="btn btn-info">
		<input type="button" value="Boton" class="btn btn-info">
		<button class="btn btn-info">Etiqueta</button>

		<hr>
		<a href="" class="btn btn-danger">Link</a>
		<input type="submit"  value="Submit" class="btn btn-danger">
		<input type="button" value="Boton" class="btn btn-danger">
		<button class="btn btn-danger">Etiqueta</button>

		<hr>
		<a href="" class="btn btn-inverse">Link</a>
		<input type="submit"  value="Submit" class="btn btn-inverse">
		<input type="button" value="Boton" class="btn btn-inverse">
		<button class="btn btn-inverse">Etiqueta</button>


	

	</div>
	<div class="span4">
			
		<a href="" class="btn  btn-small ">Link</a>
		<input type="submit"  value="Submit" class="btn btn-small">
		<input type="button" value="Boton" class="btn btn-small">
		<button class="btn btn-small">Etiqueta</button>

		<hr>
		<a href="" class="btn  btn-mini ">Link</a>
		<input type="submit"  value="Submit" class="btn btn-mini">
		<input type="button" value="Boton" class="btn btn-mini">
		<button class="btn btn-mini">Etiqueta</button>

		<hr>
		<a href="" class="btn  btn-block ">Link</a>
		<input type="submit"  value="Submit" class="btn btn-block">
		<input type="button" value="Boton" class="btn btn-block">
		<button class="btn btn-block">Etiqueta</button>



	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>TABLAS</h1>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span12">
		<table class="table table-bordered table-striped table-hover table-condensed">
			<tr>
				<th>Valor de Prueba</th>
				<th>Valor de Prueba</th>
				<th>Valor de Prueba</th>
				<th>Valor de Prueba</th>
			</tr>
			<tr>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
			</tr>
			<tr>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
			</tr>
			<tr>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
				<td>Valor de Prueba</td>
			</tr>
		</table>

	</div>
</div>
<div class="row-fluid">
	<div class="span12">
		<div class="page-header">
			<h1>Formularios</h1>
		</div>
	</div>
</div>

<div class="row-fluid">
	<div class="span6">
		<form action="">
		<legend>Datos Personales</legend>
			<label for="">Name</label>		
			<input type="text">
		<legend>Datos Facturacion</legend>
			<label for="">Name</label>		
			<input type="text">
			<label for="">Name</label>		
			<input type="text">
			<br>
			<input type="submit" class="btn">
		</form>
	</div>
	<div class="span6">
	<input type="text" class="search-query">
	<hr>
	<form action="" class="form-inline">
	<input type="text">
	<input type="submit" class="btn">
	</form>
	<form action="">
		<div class="input-prepend">
		<span class="add-on">@</span>
		<input type="text">
		</div>
		<div class="input-append">
		<input type="text">
		<span class="add-on">@</span>
		</div>

		<div class="input-append input-prepend">
		<span class="add-on">$</span>
		<input type="text">
		<span class="add-on">&</span>
		</div>

		<div class="input-append">
		<input type="text">
		<input type="submit" class="btn">
		</div>


	</form>
		


	</div>
</div>





	<div class="row-fluid">
		<div class="span12"> &nbsp; </div>
	</div>

	<div class="row-fluid">
		<div class="span12">
			<div class="well  visible-desktop">
				<h1 class="text-center">Desktop</h1>
			</div>

			<div class="well  hidden-desktop">
				<h1 class="text-center">Tablet</h1>
			</div>

		</div>
		



	</div>




	<div class="row">
		<div class="span12">
			<h1>Esta es una prueba</h1>
			<p>
			Por primera vez, en la historia del Campus Party – Ecuador,
			 el Área de Ciencia contará con un reto diseñado por la Universidad 
			 Regional Amazónica – IKIAM. 
			 El desafío consiste en desarrollar una aplicación para dispositivos 
			 móviles que permita capturar y subir fotografías con datos y ubicación
			 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
			 de crear una enciclopedia fotográfica y un mapa digital. 
			</p>
		</div>
	</div>

	<div class="row">
		<div class="span6">
			<div class="row">
				<div class="span3">

					<h1>Esta es una prueba</h1>
					<p>
					Por primera vez, en la historia del Campus Party – Ecuador,
					 el Área de Ciencia contará con un reto diseñado por la Universidad 
					 Regional Amazónica – IKIAM. 
					 El desafío consiste en desarrollar una aplicación para dispositivos 
					 móviles que permita capturar y subir fotografías con datos y ubicación
					 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
					 de crear una enciclopedia fotográfica y un mapa digital. 
					</p>
				</div>
				<div class="span3">

					<h1>Esta es una prueba</h1>
					<p>
					Por primera vez, en la historia del Campus Party – Ecuador,
					 el Área de Ciencia contará con un reto diseñado por la Universidad 
					 Regional Amazónica – IKIAM. 
					 El desafío consiste en desarrollar una aplicación para dispositivos 
					 móviles que permita capturar y subir fotografías con datos y ubicación
					 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
					 de crear una enciclopedia fotográfica y un mapa digital. 
					</p>
				</div>
			</div>
		</div>

		<div class="span6">
			<h1>Esta es una prueba</h1>
			<p>
			Por primera vez, en la historia del Campus Party – Ecuador,
			 el Área de Ciencia contará con un reto diseñado por la Universidad 
			 Regional Amazónica – IKIAM. 
			 El desafío consiste en desarrollar una aplicación para dispositivos 
			 móviles que permita capturar y subir fotografías con datos y ubicación
			 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
			 de crear una enciclopedia fotográfica y un mapa digital. 
			</p>
		</div>
	</div>



	<div class="row-fluid">
		<div class="span3">
			<div class="row-fluid">
				<div class="span6">

					<h1>Esta es una prueba</h1>
					<p>
					Por primera vez, en la historia del Campus Party – Ecuador,
					 el Área de Ciencia contará con un reto diseñado por la Universidad 
					 Regional Amazónica – IKIAM. 
					 El desafío consiste en desarrollar una aplicación para dispositivos 
					 móviles que permita capturar y subir fotografías con datos y ubicación
					 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
					 de crear una enciclopedia fotográfica y un mapa digital. 
					</p>
				</div>


			
				<div class="span6">

					<h1>Esta es una prueba</h1>
					<p>
					Por primera vez, en la historia del Campus Party – Ecuador,
					 el Área de Ciencia contará con un reto diseñado por la Universidad 
					 Regional Amazónica – IKIAM. 
					 El desafío consiste en desarrollar una aplicación para dispositivos 
					 móviles que permita capturar y subir fotografías con datos y ubicación
					 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
					 de crear una enciclopedia fotográfica y un mapa digital. 
					</p>
				</div>
			</div>
		</div>

		<div class="span3">
			<h1>Esta es una prueba</h1>
			<p>
			Por primera vez, en la historia del Campus Party – Ecuador,
			 el Área de Ciencia contará con un reto diseñado por la Universidad 
			 Regional Amazónica – IKIAM. 
			 El desafío consiste en desarrollar una aplicación para dispositivos 
			 móviles que permita capturar y subir fotografías con datos y ubicación
			 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
			 de crear una enciclopedia fotográfica y un mapa digital. 
			</p>
		</div>

		<div class="span3">
			<h1>Esta es una prueba</h1>
			<p>
			Por primera vez, en la historia del Campus Party – Ecuador,
			 el Área de Ciencia contará con un reto diseñado por la Universidad 
			 Regional Amazónica – IKIAM. 
			 El desafío consiste en desarrollar una aplicación para dispositivos 
			 móviles que permita capturar y subir fotografías con datos y ubicación
			 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
			 de crear una enciclopedia fotográfica y un mapa digital. 
			</p>
		</div>

		<div class="span3">
			<h1>Esta es una prueba</h1>
			<p>
			Por primera vez, en la historia del Campus Party – Ecuador,
			 el Área de Ciencia contará con un reto diseñado por la Universidad 
			 Regional Amazónica – IKIAM. 
			 El desafío consiste en desarrollar una aplicación para dispositivos 
			 móviles que permita capturar y subir fotografías con datos y ubicación
			 geográfica de especies de la flora y la fauna de Ecuador con el objetivo
			 de crear una enciclopedia fotográfica y un mapa digital. 
			</p>
		</div>

	</div>

	


	
</div>

</body>
</html>