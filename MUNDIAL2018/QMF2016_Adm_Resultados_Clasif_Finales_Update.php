<?php

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `clasif_finales` WHERE ID=1";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fila06=mysqli_fetch_array($resultados))==true){
		$equipoclasif=$fila06["CLASIFICADO"];
		$consulta="UPDATE `resultados` SET EQUIPO_1='$equipoclasif' WHERE ID='64'";
		$resultados=mysqli_query($conexion,$consulta);}
	//echo "$equipoclasif<br>";
	$consulta="SELECT * FROM `clasif_finales` WHERE ID=2";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fila06=mysqli_fetch_array($resultados))==true){
		$equipoclasif=$fila06["CLASIFICADO"];
		$consulta="UPDATE `resultados` SET EQUIPO_2='$equipoclasif' WHERE ID='64'";
		$resultados=mysqli_query($conexion,$consulta);}
	//echo "$equipoclasif<br>";
	$consulta="SELECT * FROM `clasif_finales` WHERE ID=3";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fila06=mysqli_fetch_array($resultados))==true){
		$equipoclasif=$fila06["CLASIFICADO"];
		$consulta="UPDATE `resultados` SET EQUIPO_1='$equipoclasif' WHERE ID='63'";
		$resultados=mysqli_query($conexion,$consulta);}
	//echo "$equipoclasif<br>";
	$consulta="SELECT * FROM `clasif_finales` WHERE ID=4";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fila06=mysqli_fetch_array($resultados))==true){
		$equipoclasif=$fila06["CLASIFICADO"];
		$consulta="UPDATE `resultados` SET EQUIPO_2='$equipoclasif' WHERE ID='63'";
		$resultados=mysqli_query($conexion,$consulta);}
	//echo "$equipoclasif<br>";
			
	mysqli_close($conexion);
	header("location:QMF2016_Adm_Resultados.php");
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>