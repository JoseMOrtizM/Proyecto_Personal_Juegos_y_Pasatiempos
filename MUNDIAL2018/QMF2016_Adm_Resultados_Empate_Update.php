<?php

session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<title>Quiniela_Mundial_2018/QMF2016_Adm_Resultados_Empate_Update</TITLE>
	<link rel="stylesheet" href="estilo_index.css"/>
</head>

<body>

<header>
  <h1><strong id="titulo_en movimiento">ERROR</strong><br></h1>
</header>
<br><br>

<section>

<?php

try{

	$grupo=$_POST['grupo'];
	$Clasif_1=$_POST['Clasif_1'];
	$Clasif_2=$_POST['Clasif_2'];
	$clasif_1_emp=htmlentities(addslashes($_POST['clasif_1_emp']));
	$clasif_2_emp=htmlentities(addslashes($_POST['clasif_2_emp']));

	if($Clasif_1=="Empate" and $Clasif_2=="Empate" and $clasif_1_emp=="" and $clasif_2_emp==""){
		echo "2 empates y sin desempate<br>";
		echo "<h2>Ha ocurrido un Empate Técnico en el $grupo. para los 2 clasificados. Es necesario que vuelva a la <a href='QMF2016_Adm_Resultados.php'>Página Anterior</a> y seleccione los equipos clasificados de forma manual según el sorteo FIFA, y vuelva a oprimir el botón de DESEMPATE</h2>";	
	}

	if($Clasif_1=="Empate" and $Clasif_2=="Empate" and $clasif_1_emp<>"" and $clasif_2_emp==""){
		echo "2 empates y solo seleccionó al Clasif_1_desempate<br>";
		echo "<h2>Ha ocurrido un Empate Técnico en el $grupo. para los 2 clasificados, y usted sólo eligió desempate para el Primer Clasificado. Es necesario que vuelva a la <a href='QMF2016_Adm_Resultados.php'>Página Anterior</a> y seleccione los equipos clasificados de forma manual según el sorteo FIFA, y vuelva a oprimir el botón de DESEMPATE</h2>";	

	}

	if($Clasif_1=="Empate" and $Clasif_2=="Empate" and $clasif_1_emp=="" and $clasif_2_emp<>""){
		echo "2 empates y solo seleccionó al Clasif_2_desempate<br>";	
		echo "<h2>Ha ocurrido un Empate Técnico en el $grupo. para los 2 clasificados, y usted sólo eligió desempate para el Segundo Clasificado. Es necesario que vuelva a la <a href='QMF2016_Adm_Resultados.php'>Página Anterior</a> y seleccione los equipos clasificados de forma manual según el sorteo FIFA, y vuelva a oprimir el botón de DESEMPATE</h2>";	

	}

	if($Clasif_1=="Empate" and $Clasif_2=="Empate" and $clasif_1_emp<>"" and $clasif_2_emp<>""){
		//echo "2 empates y sus 2 desempate, aqui debe haber consulta y redirigir<br>";	
	require ("conexion.php");
		$consulta="UPDATE `clasif_8_final` SET CLASIF_1='$clasif_1_emp', CLASIF_2='$clasif_2_emp' WHERE GRUPOS='$grupo'";
		$resultados=mysqli_query($conexion,$consulta);
		mysqli_close($conexion);
		header("location:QMF2016_Adm_Resultados.php");	
	}

	if($Clasif_1=="Empate" and $Clasif_2<>"Empate" and $clasif_1_emp=="" and ($clasif_2_emp<>"" or $clasif_2_emp=="")){
		echo "empate del primero pero no se eligió desempate<br>";	
		echo "<h2>Ha ocurrido un Empate Técnico en el Primero Lugar del $grupo. y usted no eligió desempate para este puesto. Es necesario que vuelva a la <a href='QMF2016_Adm_Resultados.php'>Página Anterior</a> y seleccione el equipo clasificado de forma manual según el sorteo FIFA, y vuelva a oprimir el botón de DESEMPATE</h2>";	
	}

	if($Clasif_1=="Empate" and $Clasif_2<>"Empate" and $clasif_1_emp<>"" and ($clasif_2_emp<>"" or $clasif_2_emp=="")){
		//echo "empate del primero y eligió desempate, aqui debe haber consulta y redirigir<br>";
	require ("conexion.php");
		$consulta="UPDATE `clasif_8_final` SET CLASIF_1='$clasif_1_emp' WHERE GRUPOS='$grupo'";
		$resultados=mysqli_query($conexion,$consulta);
		mysqli_close($conexion);
		header("location:QMF2016_Adm_Resultados.php");	
	}

	if($Clasif_1<>"Empate" and $Clasif_2=="Empate" and ($clasif_1_emp=="" or $clasif_1_emp<>"") and $clasif_2_emp==""){
		echo "empate del segundo pero no se eligió desempate<br>";	
		echo "<h2>Ha ocurrido un Empate Técnico en el Segundo Lugar del $grupo. y usted no eligió desempate para este puesto. Es necesario que vuelva a la <a href='QMF2016_Adm_Resultados.php'>Página Anterior</a> y seleccione el equipo clasificado de forma manual según el sorteo FIFA, y vuelva a oprimir el botón de DESEMPATE</h2>";
	}

	if($Clasif_1<>"Empate" and $Clasif_2=="Empate" and ($clasif_1_emp=="" or $clasif_1_emp<>"") and $clasif_2_emp<>""){
		//echo "empate del segundo y eligió desempate, aqui debe haber consulta y redirigir<br>";	
	require ("conexion.php");
		$consulta="UPDATE `clasif_8_final` SET CLASIF_2='$clasif_2_emp' WHERE GRUPOS='$grupo'";
		$resultados=mysqli_query($conexion,$consulta);
		mysqli_close($conexion);
		header("location:QMF2016_Adm_Resultados.php");	
	}
	
	if($Clasif_1<>"Empate" and $Clasif_2<>"Empate" and ($clasif_1_emp=="" or $clasif_1_emp<>"") and ($clasif_2_emp=="" or $clasif_2_emp<>"")){
		//echo "no hay ningun tipo de empate, solo redirigir<br>";
		header("location:QMF2016_Adm_Resultados.php");
	}

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>

</section>
<br><br><br><br><br><br><br><br><br><br>
<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>