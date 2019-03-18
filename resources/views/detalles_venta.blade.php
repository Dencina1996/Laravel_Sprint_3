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
		<table>
			<tr>
				<td>ID Venta</td>
				<td>Descripcion</td>
				<td>Estado</td>
				<td>ID Cliente</td>
			</tr>
			@foreach ($ventas as $venta)
			<tr>
				<td>{{ $venta->ID_Venta}}</td>
				<td>{{ $venta->Descripcion}}</td>
				<td>{{ $venta->Estado}}</td>
				<td>{{ $venta->ID_Cliente}}</td>
			</tr>
			@endforeach
		</table>
		<br><br><br>
			<table>
				<tr>
					<td>ID Archivo</td>
					<td>ID Cliente</td>
					<td>ID Venta</td>
					<td>Ruta Archivo</td>
				</tr>
				@foreach ($archivos as $archivo)
				<tr>
					<td>{{ $archivo->ID_Archivo}}</td>
					<td>{{ $archivo->ID_Cliente}}</td>
					<td>{{ $archivo->ID_Venta}}</td>
					<td>{{ $archivo->Ruta_Archivo}}</td>
				</tr>
				@endforeach
			</table>

			<form action="addFile" method="post" enctype="multipart/form-data">
				@csrf
				<input type="number" name="idCliente" style="visibility: hidden;">
		        <input type="file" name="archivo" id="archivo">>
		        <input type="submit" value="Subir archivo">
	        </form>
			@stop
			@csrf
		</div>
	</body>
</html>