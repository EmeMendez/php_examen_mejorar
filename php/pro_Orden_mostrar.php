<!DOCTYPE html>
<html>
	<link rel="stylesheet" type="text/css" href="../css/pro.css">
	<meta charset="UTF-8">
	
<head>
<?PHP 		
			require ("../php/conexion.php");
			@$numero	= $_POST['numero'];
			@$proveedor	= $_POST['proveedor'];
			@$fecha	= $_POST['fecha'];
			//productos
			@$pro1	= $_POST['pro1'];
			@$pro2	= $_POST['pro2'];
			@$pro3	= $_POST['pro3'];
			//cantidad
			@$cant1	= $_POST['cant1'];
			@$cant2	= $_POST['cant2'];
			@$cant3	= $_POST['cant3'];
			//valor
			@$precio1	= $_POST['precio1'];
			@$precio2	= $_POST['precio2'];
			@$precio3	= $_POST['precio3'];

			$total=($cant1*$precio1)+($cant2*$precio2)+($cant3*$precio3);
			

			$prov = "SELECT idnacional FROM Proveedor where nombre='$proveedor'";
				$pv = mysql_query($prov) or die('Consulta fallida: ' . mysql_error());
					  while ($line = mysql_fetch_array($pv, MYSQL_ASSOC)) {
    				  foreach ($line as $proveed) {


    				}
				}
				


			$q1 = "SELECT producto_cod FROM producto where producto_nomb='$pro1'";
				$r1 = mysql_query($q1) or die('Consulta fallida: ' . mysql_error());
					  while ($line = mysql_fetch_array($r1, MYSQL_ASSOC)) {
    				  foreach ($line as $pk_p1) {
    				}
				}

			$q2 = "SELECT producto_cod FROM producto where producto_nomb='$pro2'";
				$r2 = mysql_query($q2) or die('Consulta fallida: ' . mysql_error());
					  while ($line = mysql_fetch_array($r2, MYSQL_ASSOC)) {
    				  foreach ($line as $pk_p2) {
    				}
				}
			

			$q3 = "SELECT producto_cod FROM producto where producto_nomb='$pro3'";
				$r3 = mysql_query($q3) or die('Consulta fallida: ' . mysql_error());
					  while ($line = mysql_fetch_array($r3, MYSQL_ASSOC)) {
    				  foreach ($line as $pk_p3) {
        			 
    				}

				}

						mysql_query("INSERT INTO orden_compra(fecha,total,idnacional) 
				   VALUES('$fecha','$total','$proveed')");	
				
			mysql_query("INSERT INTO productos_orden(producto,cantidad,precio_unitario) 
				   VALUES('$pk_p1','$cant1','$precio1')");	
			mysql_query("INSERT INTO productos_orden(producto,cantidad,precio_unitario) 
				   VALUES('$pk_p2','$cant2','$precio2')");
			mysql_query("INSERT INTO productos_orden(producto,cantidad,precio_unitario) 
				   VALUES('$pk_p3','$cant3','$precio3')");

				


?>			



</style>
	<title></title>
</head>
<body>
	<div class="orden1">
	<div class="orden-sub"> 
	<h1>Orden de compra 1</h1>
			<span>Fecha:</span>
			<span><?php echo $fecha; ?></span>
		<br>
		<br>
		
			<span>Proveedor:</span>
			<span><?php echo $proveedor; ?></span>
		<br>
		<br>
			<span>ID nacional:</span>
			<?php 

			$query1 = "SELECT idnacional FROM Proveedor where nombre='$proveedor'";
				$result1 = mysql_query($query1) or die('Consulta fallida: ' . mysql_error());
				echo "<span >\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<span >$col_value</span>\n";
    				}

				}
				echo "</span>\n";

			?>

		<br>
		<br>
			<span>Dirección:</span>
			<?php 

			$query2 = "SELECT direccion FROM Proveedor where nombre='$proveedor'";
				$result2 = mysql_query($query2) or die('Consulta fallida: ' . mysql_error());
				echo "<span >\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<span >$col_value</span>\n";
    				}

				}
				echo "</span>\n";

			?>

		<br>
		<br>
			<span>Teléfono:</span>
			<?php 

			$query3 = "SELECT telefono FROM Proveedor where nombre='$proveedor'";
				$result3 = mysql_query($query3) or die('Consulta fallida: ' . mysql_error());
				echo "<span >\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result3, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<span >$col_value</span>\n";
    				}

				}
				echo "</span>\n";

			?>

		<br>
		<br>
			<span>E-mail:<span>
			<?php 

			$query4 = "SELECT email FROM Proveedor where nombre='$proveedor'";
				$result4 = mysql_query($query4) or die('Consulta fallida: ' . mysql_error());
				echo "<span >\n";
					  //echo "\t\t<option selected>---seleccione---</option>\n";
					  while ($line = mysql_fetch_array($result4, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<span >$col_value</span>\n";
    				}

				}
				echo "</span>\n";

			?>

		<br>
		<br>
			<span><h2>Productos</h2></span>
		<br>

		<div class="tabla">
			<table id="tablita" border="1">
   					<td id="cab">Codigo</td>
   					<td id="cab">Descripción</td>
   					<td id="cab">Precio Unitario</td>
   					<td id="cab">Cantidad</td>
   					<td id="cab">Total</td>
   				</tr>
   				 <tr >
   					
<?php $query5 = "SELECT producto_cod FROM producto where producto_nomb='$pro1'";
				$result5 = mysql_query($query5) or die('Consulta fallida: ' . mysql_error());
		
					  while ($line = mysql_fetch_array($result5, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<td >$col_value</td>\n";
    				}

				}
				echo "</span>\n"; ?>	
   					<td><?php echo $pro1 ?></td>
   					<td><?php echo $precio1 ?></td>
   					<td align="center"><?php echo $cant1 ?></td>
   					<td><?php echo $precio1*$cant1; ?></td>
   				</tr>
   				<tr >
   					   					
<?php $query6 = "SELECT producto_cod FROM producto where producto_nomb='$pro2'";
				$result6 = mysql_query($query6) or die('Consulta fallida: ' . mysql_error());
		
					  while ($line = mysql_fetch_array($result6, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<td >$col_value</td>\n";
    				}

				}
				echo "</span>\n"; ?>
   					<td><?php echo $pro2 ?></td>
   					<td><?php echo $precio2 ?></td>
   					<td align="center"><?php echo $cant2 ?></td>
   					<td><?php echo $precio2*$cant2; ?></td>
   				</tr>
   				<tr >
   					   					
<?php $query7 = "SELECT producto_cod FROM producto where producto_nomb='$pro3'";
				$result7 = mysql_query($query7) or die('Consulta fallida: ' . mysql_error());
		
					  while ($line = mysql_fetch_array($result7, MYSQL_ASSOC)) {
    				  foreach ($line as $col_value) {
        			  echo "\t\t<td >$col_value</td>\n";
    				}

				}
				echo "</span>\n"; ?>
   					<td><?php echo $pro3 ?></td>
   					<td><?php echo $precio3 ?></td>
   					<td align="center"><?php echo $cant3 ?></td>
   					<td><?php echo $precio3*$cant3; ?></td>
   				</tr>
   				<tr >
   					<td>   </td>
   					<td>   </td>
   					<td>   </td>
   					<td align="center">TOTAL</td>
   					<td><?php $total=($cant1*$precio1)+($cant2*$precio2)+($cant3*$precio3); echo $total ?>   </td>
   				</tr>
			</table>
			<br>
			<span><a href="../index.html">Volver</a><br></span>
			<style> tr td{padding: 15px;}</style>
			<br>
		</div>
	</div>
	</div>
</body>
	
</html>