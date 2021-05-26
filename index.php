<?php
include ("conexion.php");
$usuario= "SELECT  * FROM datos WHERE id "


?>



<!DOCTYPE html>

<html>
<head>
	<title>conexion</title>
	<link rel="stylesheet" type="text/css" href="base.css">
</head>
<body bgcolor="green">
	<section class="formu"><center>
	<form method="POST" action="base.php">
		
 <div class="controls"><input  type="text=" name="nombre" id="nombre" placeholder="ingresa tu nombre"></div>

<div class="controls">
<textarea   name="mensaje" id="mensaje" placeholder="ingresa mensaje"></textarea>
</div>
<input class="boton" type="submit" name="enviar" value="Enviar">
	</form></center></section>
	<a href="mostrar.html" class="ver"> registros</a>

	<div>nombre</div>
	<div>mensaje</div>

	<?php $resultado= mysqli_query($conexion,$usuario);
	while ( $row= mysqli_fetch_assoc($resultado)) {?>
	<div> <?php echo $row["nombre"]?></div>
	<div><?php echo $row["mensaje"]?></div>
		
	<?php } mysqli_free_result($resultado); ?>

</body>
</html>