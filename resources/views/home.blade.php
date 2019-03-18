<!DOCTYPE html>
<html>
<head>
	<title>File Manager - AWS2</title>
	<link rel="stylesheet" href="{{ asset('/css/home.css') }}"/>
	<link rel="stylesheet" href="{{ asset('/css/min.css') }}"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="icon" type="image/png" href="svg/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	@section('header')
		<div class="header">
			<h1>DK Manager</h1>
		</div>
		<div class="headerDirectories">
			<a href="/" class="buttonLinks">Inicio</a>
			<a href="/listaClientes" class="buttonLinks">Listado de Clientes</a>
		</div>
	@show
	<div class="Content">
		@yield('content')
	</div>
</body>
</html>