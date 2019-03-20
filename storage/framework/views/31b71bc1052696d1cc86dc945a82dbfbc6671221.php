<!DOCTYPE html>
<html>
<head>
	<title>File Manager - AWS2</title>
	<link rel="stylesheet" href="<?php echo e(asset('/css/home.css')); ?>"/>
	<link rel="stylesheet" href="<?php echo e(asset('/css/min.css')); ?>"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="icon" type="image/png" href="svg/favicon.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<?php $__env->startSection('header'); ?>
		<div class="header">
			<h1>DK Manager</h1>
		</div>
		<div class="headerDirectories">
			<a href="/" class="buttonLinks">Inicio</a>
			<a href="/listaClientes" class="buttonLinks">Listado de Clientes</a>
		</div>
	<?php echo $__env->yieldSection(); ?>
	<div class="Content">
		<?php echo $__env->yieldContent('content'); ?>
	</div>
</body>
</html>