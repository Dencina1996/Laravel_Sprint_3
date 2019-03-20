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
		<br><br><br>
		<table>
			<tr>
				<td>ID Venta</td>
				<td>Descripcion</td>
				<td>Estado</td>
				<td>ID Cliente</td>
			</tr>
			<?php $__currentLoopData = $ventas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $venta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($venta->ID_Venta); ?></td>
				<td><?php echo e($venta->Descripcion); ?></td>
				<td><?php echo e($venta->Estado); ?></td>
				<td><?php echo e($venta->ID_Cliente); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
		<br><br><br>
			<table>
				<tr>
					<td>ID Archivo</td>
					<td>ID Cliente</td>
					<td>ID Venta</td>
					<td>Tipo</td>
					<td>Ruta Archivo</td>
					<td></td>
				</tr>
				<?php $__currentLoopData = $archivos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archivo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($archivo->ID_Archivo); ?></td>
					<td><?php echo e($archivo->ID_Cliente); ?></td>
					<td><?php echo e($archivo->ID_Venta); ?></td>
					<td><?php echo e($archivo->Tipo); ?></td>
					<td><?php echo e($archivo->Ruta_Archivo); ?></td>
					<td><a href="storage/<?php echo e($archivo->Ruta_Archivo); ?>" download>Descargar Archivo</a></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</table>
			<br><br><br><br><br>
		</div>
			<div class="FormularioArchivos">
			<p name="error" align="center"></p>
				<div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkFactura()">
						<?php echo csrf_field(); ?>
						<label for="archivo">Factura</label><br>
						<input type="number" name="idCliente" value="<?php echo e($venta->ID_Cliente); ?>" style="display: none;">
						<input type="number" name="idVenta" value="<?php echo e($venta->ID_Venta); ?>" style="display: none;">
						<input type="text" name="tipo" value="Factura" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="factura">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkAlbaran()">
						<?php echo csrf_field(); ?>
						<label for="archivo">Albarán </label><br>
						<input type="number" name="idCliente" value="<?php echo e($venta->ID_Cliente); ?>" style="display: none;">
						<input type="number" name="idVenta" value="<?php echo e($venta->ID_Venta); ?>" style="display: none;">
						<input type="text" name="tipo" value="Albarán" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="albaran">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkPresupuesto()">
						<?php echo csrf_field(); ?>
						<label for="archivo">Presupuesto </label><br>
						<input type="number" name="idCliente" value="<?php echo e($venta->ID_Cliente); ?>" style="display: none;">
						<input type="number" name="idVenta" value="<?php echo e($venta->ID_Venta); ?>" style="display: none;">
						<input type="text" name="tipo" value="Presupuesto" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="presupuesto">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkDocX()">
						<?php echo csrf_field(); ?>
						<label for="archivo">Documento X </label><br>
						<input type="number" name="idCliente" value="<?php echo e($venta->ID_Cliente); ?>" style="display: none;">
						<input type="number" name="idVenta" value="<?php echo e($venta->ID_Venta); ?>" style="display: none;">
						<input type="text" name="tipo" value="Documento X" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="docX">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			    <div>
					<form action="addFile" method="post" enctype="multipart/form-data" onsubmit="return checkDocY()">
						<?php echo csrf_field(); ?>
						<label for="archivo">Documento Y </label><br>
						<input type="number" name="idCliente" value="<?php echo e($venta->ID_Cliente); ?>" style="display: none;">
						<input type="number" name="idVenta" value="<?php echo e($venta->ID_Venta); ?>" style="display: none;">
						<input type="text" name="tipo" value="Documento Y" style="display: none;">
				        <input type="file" class="type" name="archivo" id="archivo" x="docY">
				        <input type="submit" value="Subir archivo">
				    </form>
			    </div>
			</div>

			<?php $__env->stopSection(); ?>
			<?php echo csrf_field(); ?>
		</div>
	</body>
</html>
<?php echo $__env->make('home', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>