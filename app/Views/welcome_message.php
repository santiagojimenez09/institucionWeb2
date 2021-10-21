<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Incio</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php base_url() ?>public/assets/css/estilo1.css">
</head>
<body>
	<h2>Bienvenido a mi sitio <?= $nombre ?> </h2>
	<ul>
		<?php foreach ($programas as $programa) {?>
			<li><?php echo $programa ?></li>
			<?php } ?>
	</ul>
	<select name="progs" id="progs">
		<?php foreach ($programas as $prog) {?>
		<option value="<?php echo $prog ?>"><?= $prog ?></option>
		<?php }?>
	</select>
	<table class="table table-hover">
		<?php foreach ($programas as $miprog): ?>
			<tr>
				<td><?= $miprog ?></td>
			</tr>
		<?php endforeach ?>
	</table>
	<ol>
		<?php foreach ($contacto as $cont) {?>
			<li><?php echo $cont ?></li>
		<?php } ?>
	</ol>
	<span>
		Cedula: <?= $contacto['cedula'] ?>
		Nombre: <?= $contacto['nombre'] ?>
		Salario: <?= $contacto['salario'] ?>
	</span>
</body>
</html>
