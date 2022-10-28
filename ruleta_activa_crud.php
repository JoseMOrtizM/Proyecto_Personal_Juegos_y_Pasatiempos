<?php
//INICIANDO SESSION
session_start();
//VERIFICANDO SESSION
if(!isset($_SESSION["usuario_ADM"])){
	header("location:salir.php");
}
// RESCATANDO USUARIO
$usuario=$_SESSION["usuario_ADM"];
//CONECTANDO CON LA BD
require ("conexion.php");
//OBTENIENDO NOMBRE DEL ARCHIVO PHP ACTUAL y FECHA
require("fecha_y_pagina_actual.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>ZONA ADM</title>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="Estilo_Principal.css"/>
<style>
section table th{
	border:1px solid #000;
	text-align:center;
	background-color:#ddd;
}
section table td{
	border:1px solid #000;
	text-align:center;
	background-color:#fff;
}
</style>
<?php
require ("efecto_entrada.php");
?>
</head>
<body>
<?php
require ("header.php");
require ("nav.php");
require("aside.php");
?>
<section>
<?php
//NUMEROS
$consulta="SELECT NUMERO FROM `ruleta_datos` GROUP BY NUMERO ORDER BY NUMERO";
$resultado=mysqli_query($conexion,$consulta);
$e=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$numeros[$e]=$fila['NUMERO'];
	$e=$e+1;
}
//HORAS
$consulta="SELECT HORA FROM `ruleta_datos` GROUP BY HORA ORDER BY HORA";
$resultado=mysqli_query($conexion,$consulta);
$e=0;
while(($fila=mysqli_fetch_array($resultado))==true){
	$horas[$e]=$fila['HORA'];
	$e=$e+1;
}
//PAGINADO 1 DE 2
$registros_filtrados=15;
if(isset($_GET["pagina"])){
	if($_GET["pagina"]==1){
		header("location:ruleta_activa_crud.php");
	}else{
		$pagina=$_GET["pagina"];
	}
}else{
	$pagina=1;
}
$empesar_desde=($pagina-1)*$registros_filtrados;
$sql_total="SELECT COUNT(ID) AS ID FROM `ruleta_datos`";
$resultado=mysqli_query($conexion,$sql_total);
$fila=mysqli_fetch_array($resultado);
$numero_filas=$fila['ID'];
$total_paginas=ceil($numero_filas/$registros_filtrados);
$consulta="SELECT * FROM `ruleta_datos`ORDER BY FECHA, HORA, ID LIMIT $empesar_desde,$registros_filtrados";
$resultado=mysqli_query($conexion,$consulta);
//IMPRIMIENDO TABLA DE CRUD
echo "<table style='width:100%;'>";
echo "<tr><th colspan='6' style='background-color:#cc0000; color:#fff;'><strong>RESULTADOS DEL SORTEO</strong> (Página: $pagina / $registros_filtrados Registros por Página)</th><tr>";
echo "<tr><th style='width:9%;'>ID</th><th style='width:18%;'>Fecha</th><th style='width:23%;'>Hora</th><th style='width:25%;'>Número</th><th colspan='2' style='width:25%;'>ACCIONES</th><tr>";
while(($fila=mysqli_fetch_array($resultado))==true){
	$id_ra=$fila['ID'];
	$fecha_ra=$fila['FECHA'];
	$hora_ra=$fila['HORA'];
	$numero_ra=$fila['NUMERO'];
	echo "<form action='ruleta_activa_crud_update.php' method='post'><tr>";
	echo "<td>$id_ra<input type='hidden' name='pagina' value='$pagina'><input type='hidden' name='id' value='$id_ra'></td>";
	echo "<td><input type='text' name='fecha' value='$fecha_ra' required style='width:90%; font-size:12px;'></td>";
	echo "<td><select name='hora' required style='width:90%; font-size:12px;'><option>$hora_ra</option>";
	$e=0;
	while(isset($horas[$e])==true){
		echo "<option>$horas[$e]</option>";
		$e=$e+1;
	}
	echo "</select></td>";	
	echo "<td><select name='numero' required style='width:90%; font-size:12px;'><option>$numero_ra</option>";
	$e=0;
	while(isset($numero[$e])==true){
		echo "<option>$numeros[$e]</option>";
		$e=$e+1;
	}
	echo "</select></td>";	
	echo "<td><input class='boton' type='submit' name='actualizar' value='Actualizar'></td></form>";
	echo "<td><a href='ruleta_activa_crud_delete.php?Id=$id_ra&pagina=$pagina'><input class='boton' type='submit' name='borrar' value='Borrar'></a></td>";
	echo "</tr>";
}
echo "<form action='ruleta_activa_crud_insert.php' method='post'><tr>";
echo "<th>Nuevo:</th>";
echo "<td><input type='hidden' name='pagina' value='$pagina'><input type='text' name='fecha' required style='width:90%; font-size:12px;'></td>";
	echo "<td><select name='hora' required style='width:90%; font-size:12px;'><option></option>";
	$e=0;
	while(isset($horas[$e])==true){
		echo "<option>$horas[$e]</option>";
		$e=$e+1;
	}
	echo "</select></td>";	
echo "<td><select name='numero' required style='width:90%; font-size:12px;'><option></option>";
$e=0;
while(isset($numeros[$e])==true){
	echo "<option>$numeros[$e]</option>";
	$e=$e+1;
}
echo "</select></td>";
echo "<th colspan='2'><input class='boton' type='submit' name='insertar' value='Insertar'></th>";
echo "</tr></form>";
//PAGINADO 2 DE 2
echo "<tr><th colspan='6' style='font-size:12px;'>";
$pasos_de_pagina=intval(($total_paginas-10)/5);
echo "Páginas disponibles:  ";
if($total_paginas<=15){
	for($i=1; $i<=$total_paginas; $i++){
		echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
	}
}else{
	if($pagina<=5){
		for($i=1; $i<=5; $i++){
			echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
		}
		echo " < < < ";	
		for($o=6; $o<=$total_paginas-5; $o=$o+$pasos_de_pagina){
			echo "<a href='?pagina=" . $o . "'>" . $o . "</a>  ";
		}		
		echo " > > > ";		
		echo "<a href='?pagina=" . $total_paginas . "'>" . "Ultima Página (" . $total_paginas . ")" . "</a>  ";
	}else{
	if($pagina>=$total_paginas-5){
		echo "<a href='?pagina=1'>Página-1</a>  ";
		echo " < < < ";	
		for($o=$total_paginas-($pasos_de_pagina*5); $o<=$total_paginas-4; $o=$o+$pasos_de_pagina){
			echo "<a href='?pagina=" . $o . "'>" . $o . "</a>  ";
		}		
		echo " > > > ";		
		for($e=$total_paginas-4; $e<=$total_paginas; $e++){
			echo "<a href='?pagina=" . $e . "'>" . $e . "</a>  ";
		}
	}else{	
	if($pagina>5 and $pagina<$total_paginas-4){
		echo "<a href='?pagina=1'>Página-1)</a>  ";
		echo " < < < ";	
		for($o=$pagina-5; $o<=$pagina+5; $o++){
			echo "<a href='?pagina=" . $o . "'>" . $o . "</a>  ";
		}		
		echo " > > > ";		
		echo "<a href='?pagina=" . $total_paginas . "'>" . "Ultima Página (" . $total_paginas . ")" . "</a>  ";
	}}}
}
echo "</th></tr></table>";
?>
</section>
<?php
require ("footer.php");
?>
<br><br>
</body>
</html>
<?php
mysqli_close($conexion);
?>