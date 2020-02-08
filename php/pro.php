<!DOCTYPE html>
<html>
<?php
	//inclucion se clase
	require ("../php/conexion.php");

	@$IDnacional=$_POST['IDnacional'];
    @$nombre=$_POST['nombre'];
    @$direccion=$_POST['direccion'];
    @$telefono=$_POST['telefono'];
    @$email=$_POST['email'];
    @$contacto=$_POST['contacto'];  

    
		if($_POST){
    $nuevo_usuario=mysql_query("SELECT idnacional FROM Proveedor WHERE idnacional='$IDnacional'"); 
	if(mysql_num_rows($nuevo_usuario)>0) 
		{
			echo "<div id='existe' align='center'><h3 >¡El proveedor ya existe!<h3></div>";
		}
		else
		{
			header('Location: ../html/pro_crear.html');
			mysql_query("INSERT INTO Proveedor(IDnacional,nombre,direccion,telefono,email,contacto) 
				   VALUES('$IDnacional','$nombre','$direccion','$telefono','$email','$contacto')");	
		}
	
}
?>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/pro.css">
<head>
	<title></title>

</head>
<body >
	<form name="from1" class="form" method="POST" >
	<br><a href="../index.html">Volver Inicio</a>
		<style> a{margin-left: 10%; padding-bottom: 3%;}
				#existe{font-family: helvetica;}</style>
	<h1>Creacion de Proveedor</h1>
	<table >

		<tr>
			<td>ID nacional</td>
			<td><input class="input" type="text" placeholder="Ingrese ID" required name="IDnacional"></td>
		</tr>
		<tr>
			<td>Nombre</td>
			<td><input class="input" type="text" placeholder="Ingrese nombre" required name="nombre"></td>
		</tr>

		<tr>
			<td>Direccion</td>
			<td><input  class="input" type="text" placeholder="Ingrese direccion" required name="direccion"></td>
		</tr>

		<tr>
			<td>Telefono</td>
			<td><input  class="input" type="text" placeholder="Ingrese telefono" required name="telefono"></td>
		</tr>

		<tr>
			<td>E-mail</td>
			<td><input  class="input" type="email" placeholder="Ingrese e-mail" required name="email"></td>
		</tr>

		<tr>
			<td>Contacto</td>
			<td><input class="input" type="text" placeholder="Ingrese contacto" required name="contacto" ></td>
		</tr>
		
		<tr>
			<td></td>
			<td ><input id="boton" type="submit" value="Guardar"></td>
		</tr>
	</table>
		
	</form>
</body>


</html>


