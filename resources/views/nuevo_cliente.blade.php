@extends('home')
<!DOCTYPE html>
<html>
<head>
	<title>Nou Client</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/nuevoCliente.css') }}">
	<link rel="shortcut icon" href="{{ asset('svg/favicon.png') }}">
</head>
<body>
	@section('content')
	<br>
	<div class="formularioCliente">
		<form action = "/create" method = "post">
			@csrf
			<input type="text" name="name" placeholder="Nombre" maxlength="100">
			<br>
			<input type="email" name="mail" placeholder="Email" maxlength="100">
			<br>
			<input type="text" name="phone" placeholder="Teléfono" maxlength="9">
			<br>
			<input type="text" name="dni" placeholder="CIF/NIF" maxlength="9">
			<br>
			<input type="text" name="address" placeholder="Dirección" maxlength="100">
			<br>
			<input type="text" name="country" placeholder="Província" maxlength="50">
			<br>
			<input type="text" name="city" placeholder="Ciudad" maxlength="50">
			<br>
			<input type="text" name="cp" placeholder="Código Postal" maxlength="5">
			<br>
			<input type="submit" value="Registrar Cliente">
			@stop
		</form>
	</div>
</body>
</html>
 