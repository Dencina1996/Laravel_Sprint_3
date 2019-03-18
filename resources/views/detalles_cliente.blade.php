@extends('home')
<html>
	<head>
		<title>Listado de Clientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/listaClientes.css') }}">
		<link rel="shortcut icon" href="{{ asset('svg/favicon.png') }}">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{ asset('js/clientList.js') }}"></script>
		<script type="text/javascript" src="{{ asset('js/min.js') }}"></script>
	</head>
	<body>
		@section('content')
		<br><br><br>
		<div class="tablaClientes">
			<table>
				<tr>
					<td><b>ID</b></td>
					<td><b>Nombre</b></td>
					<td><b>Email</b></td>
					<td><b>Teléfono</b></td>
					<td><b>CIF/NIF</b></td>
					<td><b>Dirección</b></td>
					<td><b>Província</b></td>
					<td><b>Localidad</b></td>
					<td><b>Código Postal</b></td>
					<td></td>
				</tr>
				@foreach ($clientes as $cliente)
				<tr>
					<td>{{ $cliente->ID_Cliente}}</td>
					<td>{{ $cliente->Nombre}}</td>
					<td>{{ $cliente->Email}}</td>
					<td>{{ $cliente->Telefono}}</td>
					<td>{{ $cliente->CIF_NIF}}</td>
					<td>{{ $cliente->Direccion}}</td>
					<td>{{ $cliente->Provincia}}</td>
					<td>{{ $cliente->Localidad}}</td>
					<td>{{ $cliente->CP}}</td>
					<td><input type="button" name="Editar" value="Editar Cliente" onclick="checkRow(this)"></td>
				</tr>
				@endforeach
			</table>
			<div id="detallesUsuario" style="display: none;">
				<form action = "/detallesCliente" method = "post">
					<br>
					<div style="float: left; width: 50%; text-align: left;">
						<label>Nombre: </label>
							<input type="text" name="user_name" placeholder="Nombre" maxlength="100" value="{{ $cliente->Nombre}}">
							<br>
						<label>E-Mail: </label>
							<input type="email" name="user_mail" placeholder="Email" maxlength="100" value="{{ $cliente->Email}}">
							<br>
						<label>Teléfono: </label>
							<input type="text" name="user_phone" placeholder="Teléfono" maxlength="9" value="{{ $cliente->Telefono}}">
							<br>
						<label>CIF/NIF/DNI: </label>
							<input type="text" name="user_dni" placeholder="CIF/NIF" maxlength="9" 
							value="{{ $cliente->CIF_NIF}}">
							<br>		
					</div>
					<div style="float: right; width: 50%; text-align: right;">
						<label>Dirección: </label>
							<input type="text" name="user_address" placeholder="Dirección" maxlength="100" value="{{ $cliente->Direccion}}">
							<br>		
						<label>Província: </label>
							<input type="text" name="user_country" placeholder="Província" maxlength="50" value="{{ $cliente->Provincia}}">
							<br>		
						<label>Localidad: </label>
							<input type="text" name="user_city" placeholder="Código Postal" maxlength="5" value="{{ $cliente->Localidad}}">
							<br>		
						<label>Código Postal: </label>
							<input type="text" name="user_cp" placeholder="Código Postal" maxlength="5" value="{{ $cliente->CP}}">
							<br>
					</div>
					<input type="submit" name="submit" value="Guardar">
				</form>
			</div>
			<br><br><br><br><br><br>
			<table>
				<tr>
					<td>ID Venta</td>
					<td>Descripcion</td>
					<td>Estado</td>
					<td>ID Cliente</td>
					<td></td>
				</tr>
				@foreach ($ventas as $venta)
				<tr>
					<form action="detallesVenta" method="post">
						@csrf
						<td>{{ $venta->ID_Venta}}<input type="number" name="idVenta" value="{{ $venta->ID_Venta}}" style="display: none"></td>
						<td>{{ $venta->Descripcion}}</td>
						<td>{{ $venta->Estado}}</td>
						<td>{{ $venta->ID_Cliente}}</td>
						<td><input type="submit" name="detalleVentas" value="Detalles"></td>
					</form>
				</tr>
				@endforeach
			</table>
			@stop
			@csrf
		</div>
	</body>
</html>