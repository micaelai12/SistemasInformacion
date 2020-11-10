@extends('layouts.app')
@section('title'. 'Menu')
@section('content')
	<head>
	<meta charset ="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet" type="text/css" >
	<title>Menú Principal</title>
	</head>		    <!-- Navigation -->
	<nav class="navbar navbar-default">
		<div class="collapse navbar-collapse icono" id="bs-example-navbar-collapse-1">
			<div class="collapse navbar-collapse icono" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav pull-left " >
					<H4>STYLIST GROUP</H4>
				</ul>
				<ul class="nav navbar-nav">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Clientes</a>
						<ul class="dropdown-menu">
							<li><a href="altaClientes.php">Alta Clientes</a></li>
							<li><a href="#">Listado Clientes</a></li>
						</ul>
					</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Turnos</a>
						<ul class="dropdown-menu">
							<li><a href="calendario">Alta Turnos</a></li>
							<li><a href="listadoTurnos.php">Listado Turnos</a></li>
						</ul>
					</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Usuarios</a>
						<ul class="dropdown-menu">
							<li><a href="altaUsuarios.php">Alta Usuarios</a></li>
							<li><a href="listadoUsuarios.php">Listado Usuarios</a></li>
							<li><a href="index.php">Cerrar Sesión</a></li>
						</ul>
					</li>
					<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					Ayuda</a>
						<ul class="dropdown-menu">
							<li><a href="#">Manual de Usuarios</a></li>
							<li><a href="#">Acerca de...</a></li>
						</ul>
					</li>
				</ul>
			</div>
	</nav>

		    <!-- jQuery Version 1.11.1 -->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
@endsection