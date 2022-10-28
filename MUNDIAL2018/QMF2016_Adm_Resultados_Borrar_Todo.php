<?php

// VERIFICANDO SESION.

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

// BORRANDO LA TABLA DE RESULTADOS

try{
	require ("conexion.php");
	$consulta="UPDATE `resultados` SET GOL_1='', GOL_2='', JUGADO='NO'";
	$resultados=mysqli_query($conexion,$consulta);
	$consulta="UPDATE `resultados` SET EQUIPO_1='', EQUIPO_2='' WHERE ID>48";
	$resultados=mysqli_query($conexion,$consulta);
	$consulta="UPDATE `clasif_8_final`SET PTOS_1='', PTOS_2='', PTOS_3='', PTOS_4='', CLASIF_1='', CLASIF_2=''";
	$resultados=mysqli_query($conexion,$consulta);
	$consulta="UPDATE `clasif_4_final` SET CLASIFICADO=''";
	$resultados=mysqli_query($conexion,$consulta);
	$consulta="UPDATE `clasif_semifinal` SET CLASIFICADO=''";
	$resultados=mysqli_query($conexion,$consulta);
	$consulta="UPDATE `clasif_finales` SET CLASIFICADO=''";
	$resultados=mysqli_query($conexion,$consulta);
	$consulta="UPDATE `ganadores` SET GANADORES=''";
	$resultados=mysqli_query($conexion,$consulta);
	mysqli_close($conexion);
	header("location:QMF2016_Adm_Resultados.php");
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>