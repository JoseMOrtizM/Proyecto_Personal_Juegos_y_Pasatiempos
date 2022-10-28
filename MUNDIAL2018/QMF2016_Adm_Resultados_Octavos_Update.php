<?php

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

try{
	
	$id=htmlentities(addslashes($_POST['id']));
	$juego=htmlentities(addslashes($_POST['juego']));
	$equipo_1=htmlentities(addslashes($_POST['equipo_1']));
	$gol_1=htmlentities(addslashes($_POST['gol_1']));
	$gol_2=htmlentities(addslashes($_POST['gol_2']));
	$equipo_2=htmlentities(addslashes($_POST['equipo_2']));
	$jugado=htmlentities(addslashes($_POST['jugado']));
	require ("conexion.php");
	$consulta="UPDATE `resultados` SET GOL_1=$gol_1, GOL_2=$gol_2, JUGADO='$jugado' WHERE ID='$id'";
	$resultados=mysqli_query($conexion,$consulta);

	mysqli_close($conexion);
	header("location:QMF2016_Adm_Resultados.php");
	
////// aqui empiesa la lumpia de pegar los nombres de los equipos de OCTAVOS para ADELANTE...
	require ("conexion.php");

	$consulta05="SELECT * FROM `clasif_8_final`";
	$resultados05=mysqli_query($conexion,$consulta05);
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_A1=$fila05["CLASIF_1"];
		$Clasif_A2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_B1=$fila05["CLASIF_1"];
		$Clasif_B2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_C1=$fila05["CLASIF_1"];
		$Clasif_C2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_D1=$fila05["CLASIF_1"];
		$Clasif_D2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_E1=$fila05["CLASIF_1"];
		$Clasif_E2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_F1=$fila05["CLASIF_1"];
		$Clasif_F2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_G1=$fila05["CLASIF_1"];
		$Clasif_G2=$fila05["CLASIF_2"];}
	if(($fila05=mysqli_fetch_array($resultados05))==true){
		$Clasif_H1=$fila05["CLASIF_1"];
		$Clasif_H2=$fila05["CLASIF_2"];}

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_A1', EQUIPO_2='$Clasif_B2' WHERE ID=49";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_B1', EQUIPO_2='$Clasif_A2' WHERE ID=50";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_C1', EQUIPO_2='$Clasif_D2' WHERE ID=51";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_D1', EQUIPO_2='$Clasif_C2' WHERE ID=52";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_E1', EQUIPO_2='$Clasif_F2' WHERE ID=53";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_F1', EQUIPO_2='$Clasif_E2' WHERE ID=54";
	$resultados05=mysqli_query($conexion,$consulta);
	
	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_G1', EQUIPO_2='$Clasif_H2' WHERE ID=55";
	$resultados05=mysqli_query($conexion,$consulta);

	$consulta="UPDATE `resultados` SET EQUIPO_1='$Clasif_H1', EQUIPO_2='$Clasif_G2' WHERE ID=56";
	$resultados05=mysqli_query($conexion,$consulta);

	mysqli_close($conexion);
	header("location:QMF2016_Adm_Resultados.php");	


}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>