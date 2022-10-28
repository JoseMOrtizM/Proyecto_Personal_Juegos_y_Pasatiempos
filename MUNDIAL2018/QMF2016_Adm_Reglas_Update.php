<?php

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

try{
	
	$fase=htmlentities(addslashes($_POST["fase"]));
	$en_pos=htmlentities(addslashes($_POST["en_pos"]));
	$otra_pos=htmlentities(addslashes($_POST["otra_pos"]));
	$gol01=htmlentities(addslashes($_POST["gol01"]));
	$gana_res=htmlentities(addslashes($_POST["gana_res"]));
	$gana_ext=htmlentities(addslashes($_POST["gana_ext"]));
	$goleador_ext=htmlentities(addslashes($_POST["goleador_ext"]));
	require ("conexion.php");
	$consulta="UPDATE `reglas` SET EN_SU_POS='$en_pos', OTRA_POS='$otra_pos', GOL='$gol01', GANA_RESULT='$gana_res', GANA_EXTRA='$gana_ext', EQUIPO_GOLEADOR='$goleador_ext' WHERE FASE='$fase'";
	$resultados=mysqli_query($conexion,$consulta);

	mysqli_close($conexion);
	header("location:QMF2016_Adm_Reglas.php");
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>