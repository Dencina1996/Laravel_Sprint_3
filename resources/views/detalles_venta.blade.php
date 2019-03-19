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
					<td>Tipo</td>
					<td>Ruta Archivo</td>
				</tr>
				@foreach ($archivos as $archivo)
				<tr>
					<td>{{ $archivo->ID_Archivo}}</td>
					<td>{{ $archivo->ID_Cliente}}</td>
					<td>{{ $archivo->ID_Venta}}</td>
					<td>{{ $archivo->Tipo}}</td>
					<td>{{ $archivo->Ruta_Archivo}}</td>
				</tr>
				@endforeach
			</table>
			<br><br><br><br><br>
		</div>
			<div class="FormularioArchivos">
			<p name="error" align="center"></p>
				<div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkFactura()">
						@csrf
						<label for="archivo">Factura</label><br>
						<input type="number" name="idCliente" value="{{$venta->ID_Cliente}}" style="display: none;">
						<input type="number" name="idVenta" value="{{$venta->ID_Venta}}" style="display: none;">
						<input type="text" name="tipo" value="Factura" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="factura">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkAlbaran()">
						@csrf
						<label for="archivo">Albarán </label><br>
						<input type="number" name="idCliente" value="{{$venta->ID_Cliente}}" style="display: none;">
						<input type="number" name="idVenta" value="{{$venta->ID_Venta}}" style="display: none;">
						<input type="text" name="tipo" value="Albarán" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="albaran">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkPresupuesto()">
						@csrf
						<label for="archivo">Presupuesto </label><br>
						<input type="number" name="idCliente" value="{{$venta->ID_Cliente}}" style="display: none;">
						<input type="number" name="idVenta" value="{{$venta->ID_Venta}}" style="display: none;">
						<input type="text" name="tipo" value="Presupuesto" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="presupuesto">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkDocX()">
						@csrf
						<label for="archivo">Documento X </label><br>
						<input type="number" name="idCliente" value="{{$venta->ID_Cliente}}" style="display: none;">
						<input type="number" name="idVenta" value="{{$venta->ID_Venta}}" style="display: none;">
						<input type="text" name="tipo" value="Documento X" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="docX">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkDocY()">
						@csrf
						<label for="archivo">Documento Y </label><br>
						<input type="number" name="idCliente" value="{{$venta->ID_Cliente}}" style="display: none;">
						<input type="number" name="idVenta" value="{{$venta->ID_Venta}}" style="display: none;">
						<input type="text" name="tipo" value="Documento Y" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="docY">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			</div>

			@stop
			@csrf
		</div>
	</body>
</html>