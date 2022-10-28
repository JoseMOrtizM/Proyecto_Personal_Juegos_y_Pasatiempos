<?php
//REALIZANDO CONEXION
require ("conexion.php");
//CARGANDO DATOS DE LA VISITA
require ("insertar_trafico.php");
//DEFINIENDO NIVEL
if(isset($_POST['nivel'])){
	$nivel=$_POST['nivel'];
	if($nivel=="Aleatorio"){
		$nivel_aleatorio=rand(1,4);
		if($nivel_aleatorio==1){$nivel="FACIL";}
		if($nivel_aleatorio==2){$nivel="INTERMEDIO";}
		if($nivel_aleatorio==3){$nivel="DIFICIL";}
		if($nivel_aleatorio==4){$nivel="EXPERTO";}
	}
}else{
	$nivel_aleatorio=rand(1,4);
	if($nivel_aleatorio==1){$nivel="FACIL";}
	if($nivel_aleatorio==2){$nivel="INTERMEDIO";}
	if($nivel_aleatorio==3){$nivel="DIFICIL";}
	if($nivel_aleatorio==4){$nivel="EXPERTO";}
}
//DEFINIENDO SOLUCION
if(isset($_POST['solucion'])){
	$solucion=$_POST['solucion'];
}else{
	$solucion="NO";
}
//OBTENIENDO CANTIDAD DE FRASES
$consulta="SELECT COUNT(ID) AS NUM_FRASES FROM `frases`";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$nun_frases=$fila["NUM_FRASES"];
//ELIGIENDO Y OBTENIENDO FRASE AL AZAR O POR FORM
if(isset($_POST['id_elegido'])){
	$prueba=$_POST['id_elegido'];
	if($prueba=="Aleatorio"){
		$id_elegido=rand(1, $nun_frases);
	}else{
		$id_elegido=$_POST['id_elegido'];
	}
}else{
	$id_elegido=rand(1, $nun_frases);
}
$consulta="SELECT FRASE FROM `frases` WHERE ID='$id_elegido'";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$frase_elegida=$fila["FRASE"];
//CONVIRTIENDO LA FRASE EN UN ARRAY DE CARACTERES
$frase_array=str_split($frase_elegida,1);
//OBTENIENDO LA CANTIDAD DE CARACTERES
$caracteres=0;
while(isset($frase_array[$caracteres])){$caracteres=$caracteres+1;}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CRYPTOGRAMA</TITLE>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="Estilo_Principal.css"/>
<style>
section table th{
	font:Verdana, Geneva, sans-serif; 
	font-size:13px;
	margin:0px;
	padding:0px 2px;
	background-color:#CCCCCC;
	border:1px solid #333;
	text-align:center;
	color:#000;
	width:4%;
}
section table td{
	font:Verdana, Geneva, sans-serif; 
	font-size:13px;
	margin:0px;
	padding:0px 2px;
	background:#FFFFFF;
	border:1px solid #333;
	text-align:center;
	color:#F00;
	width:4%;
}
.letras{
	font:Verdana, Geneva, sans-serif; 
	font-size:13px;
	margin:0px;
	padding:0px 2px;
	background:#FFC;
	border:0px;
	text-align:center;
	color:#000;
	width:90%;
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
//ASIGNANDO NÚMEROS AL AZAR A CADA LETRA (DEL 10 AL 99)
$ltr_A=rand(10,99);
$ltr_B=rand(10,99);
while($ltr_A==$ltr_B){
	$ltr_B=rand(10,99);
}
$ltr_C=rand(10,99);
while($ltr_A==$ltr_C or $ltr_B==$ltr_C){
	$ltr_C=rand(10,99);
}
$ltr_D=rand(10,99);
while($ltr_A==$ltr_D or $ltr_B==$ltr_D or $ltr_C==$ltr_D){
	$ltr_D=rand(10,99);
}
$ltr_E=rand(10,99);
while($ltr_A==$ltr_E or $ltr_B==$ltr_E or $ltr_C==$ltr_E or $ltr_D==$ltr_E){
	$ltr_E=rand(10,99);
}
$ltr_F=rand(10,99);
while($ltr_A==$ltr_F or $ltr_B==$ltr_F or $ltr_C==$ltr_F or $ltr_D==$ltr_F or $ltr_E==$ltr_F){
	$ltr_F=rand(10,99);
}
$ltr_G=rand(10,99);
while($ltr_A==$ltr_G or $ltr_B==$ltr_G or $ltr_C==$ltr_G or $ltr_D==$ltr_G or $ltr_E==$ltr_G or $ltr_F==$ltr_G){
	$ltr_G=rand(10,99);
}
$ltr_H=rand(10,99);
while($ltr_A==$ltr_H or $ltr_B==$ltr_H or $ltr_C==$ltr_H or $ltr_D==$ltr_H or $ltr_E==$ltr_H or $ltr_F==$ltr_H or $ltr_G==$ltr_H){
	$ltr_H=rand(10,99);
}
$ltr_I=rand(10,99);
while($ltr_A==$ltr_I or $ltr_B==$ltr_I or $ltr_C==$ltr_I or $ltr_D==$ltr_I or $ltr_E==$ltr_I or $ltr_F==$ltr_I or $ltr_G==$ltr_I or $ltr_H==$ltr_I){
	$ltr_I=rand(10,99);
}
$ltr_J=rand(10,99);
while($ltr_A==$ltr_J or $ltr_B==$ltr_J or $ltr_C==$ltr_J or $ltr_D==$ltr_J or $ltr_E==$ltr_J or $ltr_F==$ltr_J or $ltr_G==$ltr_J or $ltr_H==$ltr_J or $ltr_I==$ltr_J){
	$ltr_J=rand(10,99);
}
$ltr_K=rand(10,99);
while($ltr_A==$ltr_K or $ltr_B==$ltr_K or $ltr_C==$ltr_K or $ltr_D==$ltr_K or $ltr_E==$ltr_K or $ltr_F==$ltr_K or $ltr_G==$ltr_K or $ltr_H==$ltr_K or $ltr_I==$ltr_K or $ltr_J==$ltr_K){
	$ltr_K=rand(10,99);
}
$ltr_L=rand(10,99);
while($ltr_A==$ltr_L or $ltr_B==$ltr_L or $ltr_C==$ltr_L or $ltr_D==$ltr_L or $ltr_E==$ltr_L or $ltr_F==$ltr_L or $ltr_G==$ltr_L or $ltr_H==$ltr_L or $ltr_I==$ltr_L or $ltr_J==$ltr_L or $ltr_K==$ltr_L){
	$ltr_L=rand(10,99);
}
$ltr_M=rand(10,99);
while($ltr_A==$ltr_M or $ltr_B==$ltr_M or $ltr_C==$ltr_M or $ltr_D==$ltr_M or $ltr_E==$ltr_M or $ltr_F==$ltr_M or $ltr_G==$ltr_M or $ltr_H==$ltr_M or $ltr_I==$ltr_M or $ltr_J==$ltr_M or $ltr_K==$ltr_M or $ltr_L==$ltr_M){
	$ltr_M=rand(10,99);
}
$ltr_N=rand(10,99);
while($ltr_A==$ltr_N or $ltr_B==$ltr_N or $ltr_C==$ltr_N or $ltr_D==$ltr_N or $ltr_E==$ltr_N or $ltr_F==$ltr_N or $ltr_G==$ltr_N or $ltr_H==$ltr_N or $ltr_I==$ltr_N or $ltr_J==$ltr_N or $ltr_K==$ltr_N or $ltr_L==$ltr_N or $ltr_M==$ltr_N){
	$ltr_N=rand(10,99);
}
$ltr_Ñ=rand(10,99);
while($ltr_A==$ltr_Ñ or $ltr_B==$ltr_Ñ or $ltr_C==$ltr_Ñ or $ltr_D==$ltr_Ñ or $ltr_E==$ltr_Ñ or $ltr_F==$ltr_Ñ or $ltr_G==$ltr_Ñ or $ltr_H==$ltr_Ñ or $ltr_I==$ltr_Ñ or $ltr_J==$ltr_Ñ or $ltr_K==$ltr_Ñ or $ltr_L==$ltr_Ñ or $ltr_M==$ltr_Ñ or $ltr_N==$ltr_Ñ){
	$ltr_Ñ=rand(10,99);
}
$ltr_O=rand(10,99);
while($ltr_A==$ltr_O or $ltr_B==$ltr_O or $ltr_C==$ltr_O or $ltr_D==$ltr_O or $ltr_E==$ltr_O or $ltr_F==$ltr_O or $ltr_G==$ltr_O or $ltr_H==$ltr_O or $ltr_I==$ltr_O or $ltr_J==$ltr_O or $ltr_K==$ltr_O or $ltr_L==$ltr_O or $ltr_M==$ltr_O or $ltr_N==$ltr_O or $ltr_Ñ==$ltr_O){
	$ltr_O=rand(10,99);
}
$ltr_P=rand(10,99);
while($ltr_A==$ltr_P or $ltr_B==$ltr_P or $ltr_C==$ltr_P or $ltr_D==$ltr_P or $ltr_E==$ltr_P or $ltr_F==$ltr_P or $ltr_G==$ltr_P or $ltr_H==$ltr_P or $ltr_I==$ltr_P or $ltr_J==$ltr_P or $ltr_K==$ltr_P or $ltr_L==$ltr_P or $ltr_M==$ltr_P or $ltr_N==$ltr_P or $ltr_Ñ==$ltr_P or $ltr_O==$ltr_P){
	$ltr_P=rand(10,99);
}
$ltr_Q=rand(10,99);
while($ltr_A==$ltr_Q or $ltr_B==$ltr_Q or $ltr_C==$ltr_Q or $ltr_D==$ltr_Q or $ltr_E==$ltr_Q or $ltr_F==$ltr_Q or $ltr_G==$ltr_Q or $ltr_H==$ltr_Q or $ltr_I==$ltr_Q or $ltr_J==$ltr_Q or $ltr_K==$ltr_Q or $ltr_L==$ltr_Q or $ltr_M==$ltr_Q or $ltr_N==$ltr_Q or $ltr_Ñ==$ltr_Q or $ltr_O==$ltr_Q or $ltr_P==$ltr_Q){
	$ltr_Q=rand(10,99);
}
$ltr_R=rand(10,99);
while($ltr_A==$ltr_R or $ltr_B==$ltr_R or $ltr_C==$ltr_R or $ltr_D==$ltr_R or $ltr_E==$ltr_R or $ltr_F==$ltr_R or $ltr_G==$ltr_R or $ltr_H==$ltr_R or $ltr_I==$ltr_R or $ltr_J==$ltr_R or $ltr_K==$ltr_R or $ltr_L==$ltr_R or $ltr_M==$ltr_R or $ltr_N==$ltr_R or $ltr_Ñ==$ltr_R or $ltr_O==$ltr_R or $ltr_P==$ltr_R or $ltr_Q==$ltr_R){
	$ltr_R=rand(10,99);
}
$ltr_S=rand(10,99);
while($ltr_A==$ltr_S or $ltr_B==$ltr_S or $ltr_C==$ltr_S or $ltr_D==$ltr_S or $ltr_E==$ltr_S or $ltr_F==$ltr_S or $ltr_G==$ltr_S or $ltr_H==$ltr_S or $ltr_I==$ltr_S or $ltr_J==$ltr_S or $ltr_K==$ltr_S or $ltr_L==$ltr_S or $ltr_M==$ltr_S or $ltr_N==$ltr_S or $ltr_Ñ==$ltr_S or $ltr_O==$ltr_S or $ltr_P==$ltr_S or $ltr_Q==$ltr_S or $ltr_R==$ltr_S){
	$ltr_S=rand(10,99);
}
$ltr_T=rand(10,99);
while($ltr_A==$ltr_T or $ltr_B==$ltr_T or $ltr_C==$ltr_T or $ltr_D==$ltr_T or $ltr_E==$ltr_T or $ltr_F==$ltr_T or $ltr_G==$ltr_T or $ltr_H==$ltr_T or $ltr_I==$ltr_T or $ltr_J==$ltr_T or $ltr_K==$ltr_T or $ltr_L==$ltr_T or $ltr_M==$ltr_T or $ltr_N==$ltr_T or $ltr_Ñ==$ltr_T or $ltr_O==$ltr_T or $ltr_P==$ltr_T or $ltr_Q==$ltr_T or $ltr_R==$ltr_T or $ltr_S==$ltr_T){
	$ltr_T=rand(10,99);
}
$ltr_U=rand(10,99);
while($ltr_A==$ltr_U or $ltr_B==$ltr_U or $ltr_C==$ltr_U or $ltr_D==$ltr_U or $ltr_E==$ltr_U or $ltr_F==$ltr_U or $ltr_G==$ltr_U or $ltr_H==$ltr_U or $ltr_I==$ltr_U or $ltr_J==$ltr_U or $ltr_K==$ltr_U or $ltr_L==$ltr_U or $ltr_M==$ltr_U or $ltr_N==$ltr_U or $ltr_Ñ==$ltr_U or $ltr_O==$ltr_U or $ltr_P==$ltr_U or $ltr_Q==$ltr_U or $ltr_R==$ltr_U or $ltr_S==$ltr_U or $ltr_T==$ltr_U){
	$ltr_U=rand(10,99);
}
$ltr_V=rand(10,99);
while($ltr_A==$ltr_V or $ltr_B==$ltr_V or $ltr_C==$ltr_V or $ltr_D==$ltr_V or $ltr_E==$ltr_V or $ltr_F==$ltr_V or $ltr_G==$ltr_V or $ltr_H==$ltr_V or $ltr_I==$ltr_V or $ltr_J==$ltr_V or $ltr_K==$ltr_V or $ltr_L==$ltr_V or $ltr_M==$ltr_V or $ltr_N==$ltr_V or $ltr_Ñ==$ltr_V or $ltr_O==$ltr_V or $ltr_P==$ltr_V or $ltr_Q==$ltr_V or $ltr_R==$ltr_V or $ltr_S==$ltr_V or $ltr_T==$ltr_V or $ltr_U==$ltr_V){
	$ltr_V=rand(10,99);
}
$ltr_W=rand(10,99);
while($ltr_A==$ltr_W or $ltr_B==$ltr_W or $ltr_C==$ltr_W or $ltr_D==$ltr_W or $ltr_E==$ltr_W or $ltr_F==$ltr_W or $ltr_G==$ltr_W or $ltr_H==$ltr_W or $ltr_I==$ltr_W or $ltr_J==$ltr_W or $ltr_K==$ltr_W or $ltr_L==$ltr_W or $ltr_M==$ltr_W or $ltr_N==$ltr_W or $ltr_Ñ==$ltr_W or $ltr_O==$ltr_W or $ltr_P==$ltr_W or $ltr_Q==$ltr_W or $ltr_R==$ltr_W or $ltr_S==$ltr_W or $ltr_T==$ltr_W or $ltr_U==$ltr_W or $ltr_V==$ltr_W){
	$ltr_W=rand(10,99);
}
$ltr_X=rand(10,99);
while($ltr_A==$ltr_X or $ltr_B==$ltr_X or $ltr_C==$ltr_X or $ltr_D==$ltr_X or $ltr_E==$ltr_X or $ltr_F==$ltr_X or $ltr_G==$ltr_X or $ltr_H==$ltr_X or $ltr_I==$ltr_X or $ltr_J==$ltr_X or $ltr_K==$ltr_X or $ltr_L==$ltr_X or $ltr_M==$ltr_X or $ltr_N==$ltr_X or $ltr_Ñ==$ltr_X or $ltr_O==$ltr_X or $ltr_P==$ltr_X or $ltr_Q==$ltr_X or $ltr_R==$ltr_X or $ltr_S==$ltr_X or $ltr_T==$ltr_X or $ltr_U==$ltr_X or $ltr_V==$ltr_X or $ltr_W==$ltr_X){
	$ltr_X=rand(10,99);
}
$ltr_Y=rand(10,99);
while($ltr_A==$ltr_Y or $ltr_B==$ltr_Y or $ltr_C==$ltr_Y or $ltr_D==$ltr_Y or $ltr_E==$ltr_Y or $ltr_F==$ltr_Y or $ltr_G==$ltr_Y or $ltr_H==$ltr_Y or $ltr_I==$ltr_Y or $ltr_J==$ltr_Y or $ltr_K==$ltr_Y or $ltr_L==$ltr_Y or $ltr_M==$ltr_Y or $ltr_N==$ltr_Y or $ltr_Ñ==$ltr_Y or $ltr_O==$ltr_Y or $ltr_P==$ltr_Y or $ltr_Q==$ltr_Y or $ltr_R==$ltr_Y or $ltr_S==$ltr_Y or $ltr_T==$ltr_Y or $ltr_U==$ltr_Y or $ltr_V==$ltr_Y or $ltr_W==$ltr_Y or $ltr_X==$ltr_Y){
	$ltr_Y=rand(10,99);
}
$ltr_Z=rand(10,99);
while($ltr_A==$ltr_Z or $ltr_B==$ltr_Z or $ltr_C==$ltr_Z or $ltr_D==$ltr_Z or $ltr_E==$ltr_Z or $ltr_F==$ltr_Z or $ltr_G==$ltr_Z or $ltr_H==$ltr_Z or $ltr_I==$ltr_Z or $ltr_J==$ltr_Z or $ltr_K==$ltr_Z or $ltr_L==$ltr_Z or $ltr_M==$ltr_Z or $ltr_N==$ltr_Z or $ltr_Ñ==$ltr_Z or $ltr_O==$ltr_Z or $ltr_P==$ltr_Z or $ltr_Q==$ltr_Z or $ltr_R==$ltr_Z or $ltr_S==$ltr_Z or $ltr_T==$ltr_Z or $ltr_U==$ltr_Z or $ltr_V==$ltr_Z or $ltr_W==$ltr_Z or $ltr_X==$ltr_Z or $ltr_Y==$ltr_Z){
	$ltr_Z=rand(10,99);
}
//CONTANDO CADA LETRA
$veces_A=substr_count($frase_elegida,"A");
$veces_B=substr_count($frase_elegida,"B");
$veces_C=substr_count($frase_elegida,"C");
$veces_D=substr_count($frase_elegida,"D");
$veces_E=substr_count($frase_elegida,"E");
$veces_F=substr_count($frase_elegida,"F");
$veces_G=substr_count($frase_elegida,"G");
$veces_H=substr_count($frase_elegida,"H");
$veces_I=substr_count($frase_elegida,"I");
$veces_J=substr_count($frase_elegida,"J");
$veces_K=substr_count($frase_elegida,"K");
$veces_L=substr_count($frase_elegida,"L");
$veces_M=substr_count($frase_elegida,"M");
$veces_N=substr_count($frase_elegida,"N");
$veces_Ñ=substr_count($frase_elegida,"Ñ");
$veces_O=substr_count($frase_elegida,"O");
$veces_P=substr_count($frase_elegida,"P");
$veces_Q=substr_count($frase_elegida,"Q");
$veces_R=substr_count($frase_elegida,"R");
$veces_S=substr_count($frase_elegida,"S");
$veces_T=substr_count($frase_elegida,"T");
$veces_U=substr_count($frase_elegida,"U");
$veces_V=substr_count($frase_elegida,"V");
$veces_W=substr_count($frase_elegida,"W");
$veces_X=substr_count($frase_elegida,"X");
$veces_Y=substr_count($frase_elegida,"Y");
$veces_Z=substr_count($frase_elegida,"Z");
$cta_vocales=array(
	"A" => $veces_A,
	"E" => $veces_E,
	"I" => $veces_I,
	"O" => $veces_O,
	"U" => $veces_U);
arsort($cta_vocales);
$i=0;
foreach ($cta_vocales as $key => $val) {
    $vocal[$i]=$key;
	$vocal_cantidad[$i]=$val;
	$i=$i+1;
}
$cta_consonantes=array(
	"B" => $veces_B,
	"C" => $veces_C,
	"D" => $veces_D,
	"F" => $veces_F,
	"G" => $veces_G,
	"H" => $veces_H,
	"J" => $veces_J,
	"K" => $veces_K,
	"L" => $veces_L,
	"M" => $veces_M,
	"N" => $veces_N,
	"Ñ" => $veces_Ñ,
	"P" => $veces_P,
	"Q" => $veces_Q,
	"R" => $veces_R,
	"S" => $veces_S,
	"T" => $veces_T,
	"V" => $veces_V,
	"W" => $veces_W,
	"X" => $veces_X,
	"Y" => $veces_Y,
	"Z" => $veces_Z);
arsort($cta_consonantes);
$i=0;
foreach ($cta_consonantes as $key => $val) {
    $consonantes[$i]=$key;
	$consonantes_cantidad[$i]=$val;
	$i=$i+1;
}
//IMPRIMIENDO TABLA CON PLANTILLA PROBLEMA PARA EL USUARIO
	echo "<div style='text-align:center; margin:auto;'><h4>CRYPTOGRAMAS (Nivel: $nivel / N°: $id_elegido)</h4><h6 style='color:#f00;'>A cada letra le corresponde un número, descubre la frase...</h6></div><br>";
	echo "<table>";
	echo "<tr>";
	echo "<form name='crypto_select' id='crypto_select' action='cryptograma.php' method='post'>
	<th colspan='25'>Nivel: 
	<select name='nivel'><option>Aleatorio</option><option>FACIL</option><option>INTERMEDIO</option><option>DIFICIL</option><option>EXPERTO</option></select> Cryptograma N°: <select name='id_elegido'><option>Aleatorio</option>";
	$u=1;
	while($u<=$nun_frases){
		echo "<option>$u</option>";
		$u=$u+1;
	}	
	echo "</select> <input type='submit' name='imprimir' value='Nuevo Juego'></th>";
	echo "</form></tr>";
//SI EL NIVEL ES FACIL
if($nivel=="FACIL"){
	$e=0;
	$cta_vocal_1=0;
	$cta_vocal_2=0;
	$cta_cste_1=0;
	$cta_cste_2=0;
	$cta_cste_3=0;
	while(isset($frase_array[$e])){
		echo "<tr>";
		$i=$e;
		$o=$i+25;
		while($i<$o){
			if(!isset($frase_array[$i])){echo "<th>@</th>";}else{
			if($frase_array[$i]=="A"){echo "<th>$ltr_A</th>";}else{
			if($frase_array[$i]=="B"){echo "<th>$ltr_B</th>";}else{
			if($frase_array[$i]=="C"){echo "<th>$ltr_C</th>";}else{
			if($frase_array[$i]=="D"){echo "<th>$ltr_D</th>";}else{
			if($frase_array[$i]=="E"){echo "<th>$ltr_E</th>";}else{
			if($frase_array[$i]=="F"){echo "<th>$ltr_F</th>";}else{
			if($frase_array[$i]=="G"){echo "<th>$ltr_G</th>";}else{
			if($frase_array[$i]=="H"){echo "<th>$ltr_H</th>";}else{
			if($frase_array[$i]=="I"){echo "<th>$ltr_I</th>";}else{
			if($frase_array[$i]=="J"){echo "<th>$ltr_J</th>";}else{
			if($frase_array[$i]=="K"){echo "<th>$ltr_K</th>";}else{
			if($frase_array[$i]=="L"){echo "<th>$ltr_L</th>";}else{
			if($frase_array[$i]=="M"){echo "<th>$ltr_M</th>";}else{
			if($frase_array[$i]=="N"){echo "<th>$ltr_N</th>";}else{
			if($frase_array[$i]=="Ñ"){echo "<th>$ltr_Ñ</th>";}else{
			if($frase_array[$i]=="O"){echo "<th>$ltr_O</th>";}else{
			if($frase_array[$i]=="P"){echo "<th>$ltr_P</th>";}else{
			if($frase_array[$i]=="Q"){echo "<th>$ltr_Q</th>";}else{
			if($frase_array[$i]=="R"){echo "<th>$ltr_R</th>";}else{
			if($frase_array[$i]=="S"){echo "<th>$ltr_S</th>";}else{
			if($frase_array[$i]=="T"){echo "<th>$ltr_T</th>";}else{
			if($frase_array[$i]=="U"){echo "<th>$ltr_U</th>";}else{
			if($frase_array[$i]=="V"){echo "<th>$ltr_V</th>";}else{
			if($frase_array[$i]=="W"){echo "<th>$ltr_W</th>";}else{
			if($frase_array[$i]=="X"){echo "<th>$ltr_X</th>";}else{
			if($frase_array[$i]=="Y"){echo "<th>$ltr_Y</th>";}else{
			if($frase_array[$i]=="Z"){echo "<th>$ltr_Z</th>";}else{echo "<th>@</th>";}}}}}}}}}}}}}}}}}}}}}}}}}}}}
			$i=$i+1;
		}
		echo "</tr>";
		echo "<tr>";
		$i=$e;
		while($i<$o){
			if(!isset($frase_array[$i]) or $frase_array[$i]==" "){
				if(!isset($frase_array[$i])){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value=''><th>@</th>";}else{
				if($frase_array[$i]==" "){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value='$frase_array[$i]'><th>@</th>";}}
			}else{
				if($frase_array[$i]==$vocal[0] and $cta_vocal_1==0){
					echo "<td>$vocal[0]</td>";
					$cta_vocal_1=1;
				}else{
					if($frase_array[$i]==$vocal[1] and $cta_vocal_2==0){
						echo "<td>$vocal[1]</td>";
						$cta_vocal_2=1;
					}else{
						if($frase_array[$i]==$consonantes[0] and $cta_cste_1==0){
							echo "<td>$consonantes[0]</td>";
							$cta_cste_1=1;
						}else{
							if($frase_array[$i]==$consonantes[1] and $cta_cste_2==0){
								echo "<td>$consonantes[1]</td>";
								$cta_cste_2=1;
							}else{
								if($frase_array[$i]==$consonantes[2] and $cta_cste_3==0){
									echo "<td>$consonantes[2]</td>";
									$cta_cste_3=1;
								}else{
									if($frase_array[$i]<>"A" and $frase_array[$i]<>"B" and $frase_array[$i]<>"C" and $frase_array[$i]<>"D" and $frase_array[$i]<>"E" and $frase_array[$i]<>"F" and $frase_array[$i]<>"G" and $frase_array[$i]<>"H" and $frase_array[$i]<>"I" and $frase_array[$i]<>"J" and $frase_array[$i]<>"K" and $frase_array[$i]<>"L" and $frase_array[$i]<>"M" and $frase_array[$i]<>"N" and $frase_array[$i]<>"Ñ" and $frase_array[$i]<>"O" and $frase_array[$i]<>"P" and $frase_array[$i]<>"Q" and $frase_array[$i]<>"R" and $frase_array[$i]<>"S" and $frase_array[$i]<>"T" and $frase_array[$i]<>"U" and $frase_array[$i]<>"V" and $frase_array[$i]<>"W" and $frase_array[$i]<>"X" and $frase_array[$i]<>"Y" and $frase_array[$i]<>"Z"){
										echo "<td>$frase_array[$i]</td>";
									}else{
										echo "<td><input class='letras' type='text' id='letra_" . $i . "' name='letra_" . $i . "'></td>";
									}
								}
							}
						}
					}
				}
			}
			$i=$i+1;
		}
		echo "</tr>";
		$e=$e+25;
	}
}
//SI EL NIVEL ES INTERMEDIO
if($nivel=="INTERMEDIO"){
	$e=0;
	$cta_vocal_1=0;
	$cta_cste_1=0;
	$cta_cste_2=0;
	$cta_cste_3=0;
	while(isset($frase_array[$e])){
		echo "<tr>";
		$i=$e;
		$o=$i+25;
		while($i<$o){
			if(!isset($frase_array[$i])){echo "<th>@</th>";}else{
			if($frase_array[$i]=="A"){echo "<th>$ltr_A</th>";}else{
			if($frase_array[$i]=="B"){echo "<th>$ltr_B</th>";}else{
			if($frase_array[$i]=="C"){echo "<th>$ltr_C</th>";}else{
			if($frase_array[$i]=="D"){echo "<th>$ltr_D</th>";}else{
			if($frase_array[$i]=="E"){echo "<th>$ltr_E</th>";}else{
			if($frase_array[$i]=="F"){echo "<th>$ltr_F</th>";}else{
			if($frase_array[$i]=="G"){echo "<th>$ltr_G</th>";}else{
			if($frase_array[$i]=="H"){echo "<th>$ltr_H</th>";}else{
			if($frase_array[$i]=="I"){echo "<th>$ltr_I</th>";}else{
			if($frase_array[$i]=="J"){echo "<th>$ltr_J</th>";}else{
			if($frase_array[$i]=="K"){echo "<th>$ltr_K</th>";}else{
			if($frase_array[$i]=="L"){echo "<th>$ltr_L</th>";}else{
			if($frase_array[$i]=="M"){echo "<th>$ltr_M</th>";}else{
			if($frase_array[$i]=="N"){echo "<th>$ltr_N</th>";}else{
			if($frase_array[$i]=="Ñ"){echo "<th>$ltr_Ñ</th>";}else{
			if($frase_array[$i]=="O"){echo "<th>$ltr_O</th>";}else{
			if($frase_array[$i]=="P"){echo "<th>$ltr_P</th>";}else{
			if($frase_array[$i]=="Q"){echo "<th>$ltr_Q</th>";}else{
			if($frase_array[$i]=="R"){echo "<th>$ltr_R</th>";}else{
			if($frase_array[$i]=="S"){echo "<th>$ltr_S</th>";}else{
			if($frase_array[$i]=="T"){echo "<th>$ltr_T</th>";}else{
			if($frase_array[$i]=="U"){echo "<th>$ltr_U</th>";}else{
			if($frase_array[$i]=="V"){echo "<th>$ltr_V</th>";}else{
			if($frase_array[$i]=="W"){echo "<th>$ltr_W</th>";}else{
			if($frase_array[$i]=="X"){echo "<th>$ltr_X</th>";}else{
			if($frase_array[$i]=="Y"){echo "<th>$ltr_Y</th>";}else{
			if($frase_array[$i]=="Z"){echo "<th>$ltr_Z</th>";}else{echo "<th>@</th>";}}}}}}}}}}}}}}}}}}}}}}}}}}}}
			$i=$i+1;
		}
		echo "</tr>";
		echo "<tr>";
		$i=$e;
		while($i<$o){
			if(!isset($frase_array[$i]) or $frase_array[$i]==" "){
				if(!isset($frase_array[$i])){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value=''><th>@</th>";}else{
				if($frase_array[$i]==" "){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value='$frase_array[$i]'><th>@</th>";}}
			}else{
				if($frase_array[$i]==$vocal[0] and $cta_vocal_1==0){
					echo "<td>$vocal[0]</td>";
					$cta_vocal_1=1;
				}else{
					if($frase_array[$i]==$consonantes[0] and $cta_cste_1==0){
						echo "<td>$consonantes[0]</td>";
						$cta_cste_1=1;
					}else{
						if($frase_array[$i]==$consonantes[1] and $cta_cste_2==0){
							echo "<td>$consonantes[1]</td>";
							$cta_cste_2=1;
						}else{
							if($frase_array[$i]==$consonantes[2] and $cta_cste_3==0){
								echo "<td>$consonantes[2]</td>";
								$cta_cste_3=1;
							}else{
								if($frase_array[$i]<>"A" and $frase_array[$i]<>"B" and $frase_array[$i]<>"C" and $frase_array[$i]<>"D" and $frase_array[$i]<>"E" and $frase_array[$i]<>"F" and $frase_array[$i]<>"G" and $frase_array[$i]<>"H" and $frase_array[$i]<>"I" and $frase_array[$i]<>"J" and $frase_array[$i]<>"K" and $frase_array[$i]<>"L" and $frase_array[$i]<>"M" and $frase_array[$i]<>"N" and $frase_array[$i]<>"Ñ" and $frase_array[$i]<>"O" and $frase_array[$i]<>"P" and $frase_array[$i]<>"Q" and $frase_array[$i]<>"R" and $frase_array[$i]<>"S" and $frase_array[$i]<>"T" and $frase_array[$i]<>"U" and $frase_array[$i]<>"V" and $frase_array[$i]<>"W" and $frase_array[$i]<>"X" and $frase_array[$i]<>"Y" and $frase_array[$i]<>"Z"){
									echo "<td>$frase_array[$i]</td>";
								}else{
									echo "<td><input class='letras' type='text' id='letra_" . $i . "' name='letra_" . $i . "'></td>";
								}
							}
						}
					}
				}
			}
			$i=$i+1;
		}
		echo "</tr>";
		$e=$e+25;
	}
}
//SI EL NIVEL ES DIFICIL
if($nivel=="DIFICIL"){
	$e=0;
	$cta_vocal_1=0;
	$cta_cste_1=0;
	$cta_cste_2=0;
	while(isset($frase_array[$e])){
		echo "<tr>";
		$i=$e;
		$o=$i+25;
		while($i<$o){
			if(!isset($frase_array[$i])){echo "<th>@</th>";}else{
			if($frase_array[$i]=="A"){echo "<th>$ltr_A</th>";}else{
			if($frase_array[$i]=="B"){echo "<th>$ltr_B</th>";}else{
			if($frase_array[$i]=="C"){echo "<th>$ltr_C</th>";}else{
			if($frase_array[$i]=="D"){echo "<th>$ltr_D</th>";}else{
			if($frase_array[$i]=="E"){echo "<th>$ltr_E</th>";}else{
			if($frase_array[$i]=="F"){echo "<th>$ltr_F</th>";}else{
			if($frase_array[$i]=="G"){echo "<th>$ltr_G</th>";}else{
			if($frase_array[$i]=="H"){echo "<th>$ltr_H</th>";}else{
			if($frase_array[$i]=="I"){echo "<th>$ltr_I</th>";}else{
			if($frase_array[$i]=="J"){echo "<th>$ltr_J</th>";}else{
			if($frase_array[$i]=="K"){echo "<th>$ltr_K</th>";}else{
			if($frase_array[$i]=="L"){echo "<th>$ltr_L</th>";}else{
			if($frase_array[$i]=="M"){echo "<th>$ltr_M</th>";}else{
			if($frase_array[$i]=="N"){echo "<th>$ltr_N</th>";}else{
			if($frase_array[$i]=="Ñ"){echo "<th>$ltr_Ñ</th>";}else{
			if($frase_array[$i]=="O"){echo "<th>$ltr_O</th>";}else{
			if($frase_array[$i]=="P"){echo "<th>$ltr_P</th>";}else{
			if($frase_array[$i]=="Q"){echo "<th>$ltr_Q</th>";}else{
			if($frase_array[$i]=="R"){echo "<th>$ltr_R</th>";}else{
			if($frase_array[$i]=="S"){echo "<th>$ltr_S</th>";}else{
			if($frase_array[$i]=="T"){echo "<th>$ltr_T</th>";}else{
			if($frase_array[$i]=="U"){echo "<th>$ltr_U</th>";}else{
			if($frase_array[$i]=="V"){echo "<th>$ltr_V</th>";}else{
			if($frase_array[$i]=="W"){echo "<th>$ltr_W</th>";}else{
			if($frase_array[$i]=="X"){echo "<th>$ltr_X</th>";}else{
			if($frase_array[$i]=="Y"){echo "<th>$ltr_Y</th>";}else{
			if($frase_array[$i]=="Z"){echo "<th>$ltr_Z</th>";}else{echo "<th>@</th>";}}}}}}}}}}}}}}}}}}}}}}}}}}}}
			$i=$i+1;
		}
		echo "</tr>";
		echo "<tr>";
		$i=$e;
		while($i<$o){
			if(!isset($frase_array[$i]) or $frase_array[$i]==" "){
				if(!isset($frase_array[$i])){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value=''><th>@</th>";}else{
				if($frase_array[$i]==" "){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value='$frase_array[$i]'><th>@</th>";}}
			}else{
				if($frase_array[$i]==$vocal[0] and $cta_vocal_1==0){
					echo "<td>$vocal[0]</td>";
					$cta_vocal_1=1;
				}else{
					if($frase_array[$i]==$consonantes[0] and $cta_cste_1==0){
						echo "<td>$consonantes[0]</td>";
						$cta_cste_1=1;
					}else{
						if($frase_array[$i]==$consonantes[1] and $cta_cste_2==0){
							echo "<td>$consonantes[1]</td>";
							$cta_cste_2=1;
						}else{
							if($frase_array[$i]<>"A" and $frase_array[$i]<>"B" and $frase_array[$i]<>"C" and $frase_array[$i]<>"D" and $frase_array[$i]<>"E" and $frase_array[$i]<>"F" and $frase_array[$i]<>"G" and $frase_array[$i]<>"H" and $frase_array[$i]<>"I" and $frase_array[$i]<>"J" and $frase_array[$i]<>"K" and $frase_array[$i]<>"L" and $frase_array[$i]<>"M" and $frase_array[$i]<>"N" and $frase_array[$i]<>"Ñ" and $frase_array[$i]<>"O" and $frase_array[$i]<>"P" and $frase_array[$i]<>"Q" and $frase_array[$i]<>"R" and $frase_array[$i]<>"S" and $frase_array[$i]<>"T" and $frase_array[$i]<>"U" and $frase_array[$i]<>"V" and $frase_array[$i]<>"W" and $frase_array[$i]<>"X" and $frase_array[$i]<>"Y" and $frase_array[$i]<>"Z"){
								echo "<td>$frase_array[$i]</td>";
							}else{
								echo "<td><input class='letras' type='text' id='letra_" . $i . "' name='letra_" . $i . "'></td>";
							}
						}
					}
				}
			}
			$i=$i+1;
		}
		echo "</tr>";
		$e=$e+25;
	}
}
//SI EL NIVEL ES EXPERTO
if($nivel=="EXPERTO"){
	$e=0;
	$cta_cste_1=0;
	$cta_cste_2=0;
	$cta_cste_3=0;
	while(isset($frase_array[$e])){
		echo "<tr>";
		$i=$e;
		$o=$i+25;
		while($i<$o){
			if(!isset($frase_array[$i])){echo "<th>@</th>";}else{
			if($frase_array[$i]=="A"){echo "<th>$ltr_A</th>";}else{
			if($frase_array[$i]=="B"){echo "<th>$ltr_B</th>";}else{
			if($frase_array[$i]=="C"){echo "<th>$ltr_C</th>";}else{
			if($frase_array[$i]=="D"){echo "<th>$ltr_D</th>";}else{
			if($frase_array[$i]=="E"){echo "<th>$ltr_E</th>";}else{
			if($frase_array[$i]=="F"){echo "<th>$ltr_F</th>";}else{
			if($frase_array[$i]=="G"){echo "<th>$ltr_G</th>";}else{
			if($frase_array[$i]=="H"){echo "<th>$ltr_H</th>";}else{
			if($frase_array[$i]=="I"){echo "<th>$ltr_I</th>";}else{
			if($frase_array[$i]=="J"){echo "<th>$ltr_J</th>";}else{
			if($frase_array[$i]=="K"){echo "<th>$ltr_K</th>";}else{
			if($frase_array[$i]=="L"){echo "<th>$ltr_L</th>";}else{
			if($frase_array[$i]=="M"){echo "<th>$ltr_M</th>";}else{
			if($frase_array[$i]=="N"){echo "<th>$ltr_N</th>";}else{
			if($frase_array[$i]=="Ñ"){echo "<th>$ltr_Ñ</th>";}else{
			if($frase_array[$i]=="O"){echo "<th>$ltr_O</th>";}else{
			if($frase_array[$i]=="P"){echo "<th>$ltr_P</th>";}else{
			if($frase_array[$i]=="Q"){echo "<th>$ltr_Q</th>";}else{
			if($frase_array[$i]=="R"){echo "<th>$ltr_R</th>";}else{
			if($frase_array[$i]=="S"){echo "<th>$ltr_S</th>";}else{
			if($frase_array[$i]=="T"){echo "<th>$ltr_T</th>";}else{
			if($frase_array[$i]=="U"){echo "<th>$ltr_U</th>";}else{
			if($frase_array[$i]=="V"){echo "<th>$ltr_V</th>";}else{
			if($frase_array[$i]=="W"){echo "<th>$ltr_W</th>";}else{
			if($frase_array[$i]=="X"){echo "<th>$ltr_X</th>";}else{
			if($frase_array[$i]=="Y"){echo "<th>$ltr_Y</th>";}else{
			if($frase_array[$i]=="Z"){echo "<th>$ltr_Z</th>";}else{echo "<th>@</th>";}}}}}}}}}}}}}}}}}}}}}}}}}}}}
			$i=$i+1;
		}
		echo "</tr>";
		echo "<tr>";
		$i=$e;
		while($i<$o){
			if(!isset($frase_array[$i]) or $frase_array[$i]==" "){
				if(!isset($frase_array[$i])){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value=''><th>@</th>";}else{
				if($frase_array[$i]==" "){echo "<input type='hidden' id='letra_" . $i . "' name='letra_" . $i . "' value='$frase_array[$i]'><th>@</th>";}}
			}else{
				if($frase_array[$i]==$consonantes[0] and $cta_cste_1==0){
					echo "<td>$consonantes[0]</td>";
					$cta_cste_1=1;
				}else{
					if($frase_array[$i]==$consonantes[1] and $cta_cste_2==0){
						echo "<td>$consonantes[1]</td>";
						$cta_cste_2=1;
					}else{
						if($frase_array[$i]==$consonantes[2] and $cta_cste_3==0){
							echo "<td>$consonantes[2]</td>";
							$cta_cste_3=1;
						}else{
							if($frase_array[$i]<>"A" and $frase_array[$i]<>"B" and $frase_array[$i]<>"C" and $frase_array[$i]<>"D" and $frase_array[$i]<>"E" and $frase_array[$i]<>"F" and $frase_array[$i]<>"G" and $frase_array[$i]<>"H" and $frase_array[$i]<>"I" and $frase_array[$i]<>"J" and $frase_array[$i]<>"K" and $frase_array[$i]<>"L" and $frase_array[$i]<>"M" and $frase_array[$i]<>"N" and $frase_array[$i]<>"Ñ" and $frase_array[$i]<>"O" and $frase_array[$i]<>"P" and $frase_array[$i]<>"Q" and $frase_array[$i]<>"R" and $frase_array[$i]<>"S" and $frase_array[$i]<>"T" and $frase_array[$i]<>"U" and $frase_array[$i]<>"V" and $frase_array[$i]<>"W" and $frase_array[$i]<>"X" and $frase_array[$i]<>"Y" and $frase_array[$i]<>"Z"){
								echo "<td>$frase_array[$i]</td>";
							}else{
								echo "<td><input class='letras' type='text' id='letra_" . $i . "' name='letra_" . $i . "'></td>";
							}
						}
					}
				}
			}
			$i=$i+1;
		}
		echo "</tr>";
		$e=$e+25;
	}
}
echo "<form name='crypto_solucion' id='crypto_solucion' action='cryptograma.php' method='post'>";
echo "<tr><th colspan='25'>Mostrar Solución<select name='solucion'><option>NO</option><option>SI</option></select><input type='hidden' name='nivel' value='$nivel'><input type='hidden' name='id_elegido' value='$id_elegido'><input type='submit' name='enviar' value='>'></th></tr>";
if($solucion=="SI"){
	echo "<tr><th colspan='25'><textarea rows='3' style='width:95%; font-size:11px; text-align:justify;'>SOLUCIÓN N° $id_elegido: -> $frase_elegida</textarea></th></tr>";
}
echo "</form>";
echo "</table>";
mysqli_close($conexion);
?>
</section>
<?php
require ("footer.php");
?>
<br><br>
</body>
</html>