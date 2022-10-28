<?php

// VERIFICANDO SESION.

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

// ACTUALIZANDO LA TABLA DE EQUIPOS

try{
	
	$grupo=htmlentities(addslashes($_POST["grupo"]));
	$equipo01=htmlentities(addslashes($_POST["equipo01"]));
	$equipo02=htmlentities(addslashes($_POST["equipo02"]));
	$equipo03=htmlentities(addslashes($_POST["equipo03"]));
	$equipo04=htmlentities(addslashes($_POST["equipo04"]));
	require ("conexion.php");
	$consulta="UPDATE `equipos` SET EQ1='$equipo01', EQ2='$equipo02', EQ3='$equipo03', EQ4='$equipo04' WHERE EQUIPOS='$grupo'";
	$resultados=mysqli_query($conexion,$consulta);
	mysqli_close($conexion);
	//header("location:QMF2016_Adm_Grupos.php");
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

// ACTUALIZANDO EQUIPOS DE LA 1° RONDA DE LA TABLA RESULTADOS.
	require ("conexion.php");
	$consulta_02="SELECT * FROM `equipos`";
	$resultados_02=mysqli_query($conexion,$consulta_02);
	$cta=1;
	while(($fila=mysqli_fetch_array($resultados_02))==true and $cta<=48){
		$eq1=$fila['EQ1'];
		$eq2=$fila['EQ2'];
		$eq3=$fila['EQ3'];
		$eq4=$fila['EQ4'];	
		$consulta_03="UPDATE `resultados` SET EQUIPO_1='$eq1', EQUIPO_2='$eq2' WHERE ID='$cta'";
		$resultados_03=mysqli_query($conexion,$consulta_03);$cta=$cta+1;
		$consulta_04="UPDATE `resultados` SET EQUIPO_1='$eq1', EQUIPO_2='$eq3' WHERE ID='$cta'";
		$resultados_04=mysqli_query($conexion,$consulta_04);$cta=$cta+1;
		$consulta_05="UPDATE `resultados` SET EQUIPO_1='$eq1', EQUIPO_2='$eq4' WHERE ID='$cta'";
		$resultados_05=mysqli_query($conexion,$consulta_05);$cta=$cta+1;
		$consulta_06="UPDATE `resultados` SET EQUIPO_1='$eq2', EQUIPO_2='$eq3' WHERE ID='$cta'";
		$resultados_06=mysqli_query($conexion,$consulta_06);$cta=$cta+1;
		$consulta_07="UPDATE `resultados` SET EQUIPO_1='$eq2', EQUIPO_2='$eq4' WHERE ID='$cta'";
		$resultados_07=mysqli_query($conexion,$consulta_07);$cta=$cta+1;
		$consulta_08="UPDATE `resultados` SET EQUIPO_1='$eq3', EQUIPO_2='$eq4' WHERE ID='$cta'";
		$resultados_08=mysqli_query($conexion,$consulta_08);$cta=$cta+1;
	}
	mysqli_close($conexion);
	header("location:QMF2016_Adm_Grupos.php");
?>