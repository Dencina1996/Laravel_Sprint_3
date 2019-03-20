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
		<a id="nuevoUsuario" class="buttonLinks" onclick="mostrarPanelUsuario()">Añadir Cliente</a>
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
					<form action="detallesCliente" method="post">
					<?php echo csrf_field(); ?>
					<td><?php echo e($cliente->ID_Cliente); ?><input type="number" name="id" value="<?php echo e($cliente->ID_Cliente); ?>" style="display: none"></td>
					<td><?php echo e($cliente->Nombre); ?></td>
					<td><?php echo e($cliente->Email); ?></td>
					<td><?php echo e($cliente->Telefono); ?></td>
					<td><?php echo e($cliente->CIF_NIF); ?></td>
					<td><?php echo e($cliente->Direccion); ?></td>
					<td><?php echo e($cliente->Provincia); ?></td>
					<td><?php echo e($cliente->Localidad); ?></td>
					<td><?php echo e($cliente->CP); ?></td>
					<td><input type="submit" name="Detalles" value="Detalles"></td>
					</form>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
			</div>
			<div class="formularioCliente" style="visibility: hidden;">
				<form action = "/create" method = "post" onsubmit="return checkEmptyFields()">
					<?php echo csrf_field(); ?>
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
					<p name="errors"></p>
				</form>
			</div>
		<?php $__env->stopSection(); ?>
		<?php echo csrf_field(); ?>
	</div>
	</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>