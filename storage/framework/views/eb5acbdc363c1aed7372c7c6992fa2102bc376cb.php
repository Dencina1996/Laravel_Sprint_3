<html>
	<head>
		<title>Listado de Clientes</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/listaClientes.css')); ?>">
		<link rel="shortcut icon" href="<?php echo e(asset('svg/favicon.png')); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo e(asset('js/clientList.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(asset('js/min.js')); ?>"></script>
	</head>
	<body>
		<?php $__env->startSection('content'); ?>
		<a id="nuevoUsuario" class="buttonLinks" onclick="mostrarPanelUsuario()">Añadir Venta</a>
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
				<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($cliente->ID_Cliente); ?></td>
					<td><?php echo e($cliente->Nombre); ?></td>
					<td><?php echo e($cliente->Email); ?></td>
					<td><?php echo e($cliente->Telefono); ?></td>
					<td><?php echo e($cliente->CIF_NIF); ?></td>
					<td><?php echo e($cliente->Direccion); ?></td>
					<td><?php echo e($cliente->Provincia); ?></td>
					<td><?php echo e($cliente->Localidad); ?></td>
					<td><?php echo e($cliente->CP); ?></td>
					<td><input type="button" name="Editar" value="Editar Cliente" onclick="checkRow(this)"></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
			<div id="detallesUsuario" style="display: none;">
				<form action = "/detallesCliente" method = "post">
					<br>
					<div style="float: left; width: 50%; text-align: left;">
						<label>Nombre: </label>
							<input type="text" name="user_name" placeholder="Nombre" maxlength="100" value="<?php echo e($cliente->Nombre); ?>">
							<br>
						<label>E-Mail: </label>
							<input type="email" name="user_mail" placeholder="Email" maxlength="100" value="<?php echo e($cliente->Email); ?>">
							<br>
						<label>Teléfono: </label>
							<input type="text" name="user_phone" placeholder="Teléfono" maxlength="9" value="<?php echo e($cliente->Telefono); ?>">
							<br>
						<label>CIF/NIF/DNI: </label>
							<input type="text" name="user_dni" placeholder="CIF/NIF" maxlength="9" 
							value="<?php echo e($cliente->CIF_NIF); ?>">
							<br>		
					</div>
					<div style="float: right; width: 50%; text-align: right;">
						<label>Dirección: </label>
							<input type="text" name="user_address" placeholder="Dirección" maxlength="100" value="<?php echo e($cliente->Direccion); ?>">
							<br>		
						<label>Província: </label>
							<input type="text" name="user_country" placeholder="Província" maxlength="50" value="<?php echo e($cliente->Provincia); ?>">
							<br>		
						<label>Localidad: </label>
							<input type="text" name="user_city" placeholder="Código Postal" maxlength="5" value="<?php echo e($cliente->Localidad); ?>">
							<br>		
						<label>Código Postal: </label>
							<input type="text" name="user_cp" placeholder="Código Postal" maxlength="5" value="<?php echo e($cliente->CP); ?>">
							<br>
					</div>
					<input type="submit" name="submit" value="Guardar">
				</form>
			</div>
			<table style="margin-top: 20px;">
				<tr>
					<td>ID Venta</td>
					<td>Descripcion</td>
					<td>Estado</td>
					<td>ID Cliente</td>
					<td></td>
				</tr>
				<?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<form action="detallesVenta" method="post">
						<?php echo csrf_field(); ?>
						<td><?php echo e($venta->ID_Venta); ?><input type="number" name="idVenta" value="<?php echo e($venta->ID_Venta); ?>" style="display: none"></td>
						<td><?php echo e($venta->Descripcion); ?></td>
						<td><?php echo e($venta->Estado); ?></td>
						<td><?php echo e($venta->ID_Cliente); ?></td>
						<td><input type="submit" name="detalleVentas" value="Detalles"></td>
					</form>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
			<div class="formularioCliente" style="display: none;">
				<form action = "insertVenta" method = "post" onsubmit="return checkEmptyFields()">
					<?php echo csrf_field(); ?>
					<label for="descripcion">Descripción</label><br>
					<input type="text" name="descripcion" placeholder="Descripción" maxlength="100">
					<br>
					<input type="text" name="estado" placeholder="Estado" maxlength="9" value="Activa" style="display: none;">
					<br>
					<input type="text" name="id_Cliente" placeholder="ID Cliente" maxlength="9" value="<?php echo e($cliente->ID_Cliente); ?>" style="display: none;">
					<br>
					<input type="submit" value="Añadir Venta">
					<p name="errors"></p>
				</form>
			</div>
		</div>
		<?php $__env->stopSection(); ?>
		<?php echo csrf_field(); ?>
	</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>