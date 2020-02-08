<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/pro.css">
<head>
<?php
require ("../php/conexion.php");
?>
	<title></title>
</head>
	<body>
<form class="form" method="POST">
			<h1>Proveedores</h1>
			<div id="creacion">
				<a href="../php/pro.php">Crear nuevo proveedor</a><br>
            <a href="../index.html">Volver inicio</a>
			</div>
                <div class="tabla">
            <?php
// Realizar una consulta MySQL
$query = 'SELECT idnacional,nombre FROM Proveedor order by idnacional desc';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table id='tablita' border='1'>\n";
    echo "\t<tr>\n";
    echo "\t\t<td width='110px'>IDnacional</td>\n";
    echo "\t\t<td width='110px'>Nombre</td>\n";
    echo "\t\t<td width='110px'>Herramientas</td>\n";
    echo "\t</tr>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td width='110px'>$col_value</td>\n";
    }
    echo "\t\t<td width='110px'><a href='../php/pro_ver.php'><img  width='30px' height='30px' src='../imagenes/lapiz.jpg'><a href='../php/pro_ver.php'><img  width='30px' height='30px' src='../imagenes/Borrar.jpg'><a href='../php/pro_ver.php'><img  width='30px' height='30px' src='../imagenes/lup.jpg'></td>\n";
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar resultados
mysql_free_result($result);
      ?>  <br>
    </form>
      <div id="crud">
      <img  width='30px' height='30px' src='../imagenes/lapiz.jpg'><spam>: Editar</spam>
      <img  width='30px' height='30px' src='../imagenes/Borrar.jpg'><spam>: ELiminar</spam>
        <img  width='30px' height='30px' src='../imagenes/lup.jpg'><spam>: Ver</spam>
       
     </div>
     <br>
   </body>

</html>