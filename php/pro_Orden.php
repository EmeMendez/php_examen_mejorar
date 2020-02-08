<!DOCTYPE html>
<html>
	<meta CHARSET="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/pro.css">
<head>
	<title></title>
	<?php

		require ("../php/conexion.php");
		

	?>
</head>
<body>
	<form class="form_orden" method="POST" action="../php/pro_Orden_mostrar.php">
	<h1>Orden de compra</h1>
	<table>
		<tr>
			<td>Número</td>
			<td><input class="input" type="text" required name="nombre" ></td>

			<td>Fecha</td>
			<td><input class="input" id="fecha" type="date" required value="2000-01-01" name="fecha"></td>
		<tr>
			<td>Proveedor</td>
			<td>
				<?php 
				$query = 'SELECT nombre FROM Proveedor ';
				$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
				echo "<select class='input' name='proveedor'>\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<option name='proveedor'>$col_value</option>\n";
    				}

				}
				echo "</select>\n"; ?>
			</td>
		</tr>
		<tr>
			<td><h2>Productos</h2></td>
		</tr>


		<tr>
			<td>Producto 1</td>
			<td>
				<?php 

				$query = 'SELECT producto_nomb FROM producto ';
				$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
				echo "<select class='input' name='pro1'>\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<option name='pro1'>$col_value</option>\n";
    				}

				}
				echo "</select>\n"; ?>
			</td>
			<td>Cantidad</td>
			<td>
				<input class="input" id="cantidad" class="num" type="number" min="1"  value="1" required name="cant1">
		
			<td>Precio Unitario</td>
			<td><input class="input" id="uni" type="textbox" required name="precio1"></td>
		</tr>

		<tr>
			<td>Producto 2</td>
			<td>
				<?php 
				$query = 'SELECT producto_nomb FROM producto ';
				$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
				echo "<select name='pro2' class='input'>\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<option name='pro2'>$col_value</option>\n";
    				}

				}
				echo "</select>\n"; ?>
			</td>
			<td>Cantidad</td>
			<td>
				<input  class="input" id="cantidad" required type="number" min="1" value="1" name="cant2"></td>
			<td>Precio Unitario</td>
			<td><input class="input" id="uni" type="textbox" required name="precio2"></td>
		</tr>

		<tr>
			<td>Producto 3</td>
			<td>
				<?php 
				$query = 'SELECT producto_nomb FROM producto ';
				$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());
				echo "<select name='pro3' class='input'>\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<option name='pro3'>$col_value</option>\n";
    				}

				}
				echo "</select>\n"; ?>
			</td>
			<td>Cantidad</td>
			<td>
				<input class="input" id="cantidad" type="number" min="1" value="1" name="cant3" >
			</td>
			<td>Precio Unitario</td>
			<td><input class="input" id="uni" type="textbox" required name="precio3"></td>
		</tr>
		<tr>
		<td>Usuario:</td>
		<td><input  class="input" type="textbox"></td>
		<td>Contraseña:</td>
		<td><input class="input" type="password"></td>
		<tr>
			<td></td>
			<td><input class="input" id="boton" type="submit" value="Crear Orden"></td>
		</tr>
	</table>
	<br>
	</form>


</body>

</html>