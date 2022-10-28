<?php

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

try{
	
	$id=htmlentities(addslashes($_POST['id']));
	$fecha=htmlentities(addslashes($_POST['fecha']));
	$hora=htmlentities(addslashes($_POST['hora']));
	$descripcion=htmlentities(addslashes($_POST['descripcion']));
	$equipo01=htmlentities(addslashes($_POST['equipo01']));
	$equipo02=htmlentities(addslashes($_POST['equipo02']));
	$ciudad=htmlentities(addslashes($_POST['ciudad']));
	require ("conexion.php");
	$consulta="UPDATE `calendario` SET FECHA='$fecha', HORA='$hora', DESCRIPCION='$descripcion', EQUIPO_01='$equipo01', EQUIPO_02='$equipo02', CIUDAD='$ciudad' WHERE ID='$id'";
	$resultados=mysqli_query($conexion,$consulta);
	mysqli_close($conexion);
	header("location:QMF2016_Adm_Calendario.php");
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>