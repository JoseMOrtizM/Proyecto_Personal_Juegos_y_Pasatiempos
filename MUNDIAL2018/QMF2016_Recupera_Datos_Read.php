<?php 

	if(!isset($_POST["codigo_inicio"])){$cod_ini="";}else{	
	$cod_ini=htmlentities(addslashes($_POST["codigo_inicio"]));}
	require ("conexion.php");
	
	$consulta="SELECT * FROM `datos_usuarios` WHERE CODIGO_INICIO = '$cod_ini'";
	$resultado=mysqli_query($conexion,$consulta);
	
	if(($filas=mysqli_fetch_array($resultado))==true){
		$logging=$filas["USUARIO"];
		$password=$filas["CONTRASENA"];
		$verf_cod_ini="ok";
	}else {$verf_cod_ini="error";$logging="";$password="";}

?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<title>Quiniela_Mundial_2018/recupera_datos_read</TITLE>
	<link rel="stylesheet" href="estilo_index.css"/>
</head>

<body>

<header>
  <h1><strong id="titulo_en movimiento">Quiniela RUSIA-2018</strong><br><h2 style="font-size:24px">Autenticaci&oacute;n de Usuario</h2></h1>
</header>
<br><br>

<section>

<br><br><br>

<?php

	if($verf_cod_ini=="error"){
		echo "<table><tr><td style='width:250px'>CODIGO DE USUARIO INVALIDO</td></tr><tr><td style='width:250px'>por favor verifíquelo e intentelo nuevamente.</td></tr><tr><td><a href='QMF2016_Recupera_Datos.php'>Volver a Recupera Datos</a></td></tr></table>";
	}else {
		echo "<table><tr><td style='width:250px'>Su Código de Inicio es:</td></tr>
		<tr><td style='width:250px'><input type='text' style='text-align:center' value='$cod_ini'></td></tr>
		<tr><td style='width:250px'>Su Usuario es:</td></tr>
		<tr><td style='width:250px'><input type='text' style='text-align:center' value='$logging'></td></tr>
		<tr><td style='width:250px'>Su Contraseña es:</td></tr>
		<tr><td style='width:250px'><input type='text' style='text-align:center' value='$password'></td></tr>
		<tr><td><a href='index.php'>Volver al Inicio</a></td></tr></table>";
	}

?>

<br><br><br>

</section>
<br><br><br><br><br><br><br><br><br><br>
<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>