<?php
//CONECTANDO
require ("conexion.php");
//CARGANDO DATOS DE LA VISITA
require ("insertar_trafico.php");
//OBTENIENDO CANTIDAD DE PALABRAS
$consulta="SELECT COUNT(ID) AS ID FROM `palabra_oculta`";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$total_palabras=$fila['ID'];
//EMPESANDO A ARMAR EL MENSAJE
$mensaje="";
//OBTENIENDO PALABRA SECRETA Y SU ID
if(isset($_POST['solucion'])==false and isset($_POST['palabra_usuario'])==false){
	$id_elegido=rand(0, $total_palabras-1);
	$consulta="SELECT ID FROM `palabra_oculta` WHERE OCULTA = 'SI' ";
	$resultado=mysqli_query($conexion,$consulta);
	$e=0;
	while(($fila=mysqli_fetch_array($resultado))==true){
		$array_id_oculto[$e]=$fila['ID'];
		$e=$e+1;
	}
	$total_palabras_ocultas=$e;
	$aleatorio_de_id_oculto=rand(0, $total_palabras_ocultas-1);
	$id_elegido=$array_id_oculto[$aleatorio_de_id_oculto];
}else{
	$id_elegido=$_POST['id_elegido'];
}
$consulta="SELECT PALABRA FROM `palabra_oculta` WHERE ID = '$id_elegido' ";
$resultado=mysqli_query($conexion,$consulta);
$fila=mysqli_fetch_array($resultado);
$palabra_elegida=$fila['PALABRA'];
//RESCATANDO VALORES DEL FORM
//ARRIBA
if(isset($_POST['arriba'])==true){
	if($_POST['arriba']==''){
		$arriba_form='';
		$id_arriba_form=1;
	}else{
		$arriba_form=$_POST['arriba'];
		$consulta="SELECT ID  FROM `palabra_oculta` WHERE PALABRA = '$arriba_form' ";
		$resultado=mysqli_query($conexion,$consulta);
		$fila=mysqli_fetch_array($resultado);
		$id_arriba_form=$fila['ID'];
	}
}else{
	$arriba_form='';
	$id_arriba_form=1;
}
//ABAJO
if(isset($_POST['abajo'])==true){
	if($_POST['abajo']==''){
		$abajo_form='';
		$id_abajo_form=$total_palabras;
	}else{
		$abajo_form=$_POST['abajo'];
		$consulta="SELECT ID  FROM `palabra_oculta` WHERE PALABRA = '$abajo_form' ";
		$resultado=mysqli_query($conexion,$consulta);
		$fila=mysqli_fetch_array($resultado);
		$id_abajo_form=$fila['ID'];
	}
}else{
	$abajo_form='';
	$id_abajo_form=$total_palabras;
}
//PALABRA_USUARIO
if(isset($_POST['palabra_usuario'])==true){
	$palabra_usuario_form=$_POST['palabra_usuario'];
	$consulta="SELECT ID  FROM `palabra_oculta` WHERE PALABRA = '$palabra_usuario_form' ";
	$resultado=mysqli_query($conexion,$consulta);
	if(($fila=mysqli_fetch_array($resultado))==true){
		$id_palabra_usuario_form=$fila['ID'];
	}else{
		$mensaje=$mensaje . "<br><b style='color:red;'><strong>$palabra_usuario_form</strong> palabra no válida</b>";
		$palabra_usuario_form='';
		$id_palabra_usuario_form=$total_palabras;
	}
}else{
	$arriba=$arriba_form;
	$abajo=$abajo_form;
	$palabra_usuario_form='';
	$id_palabra_usuario_form=$total_palabras;
}
//DEFINIENDO HACIA DONDE SE MUEVE LA PALABRA DISPUESTA POR EL USUARIO
if($mensaje=='<br>Palabra no válida'){
	$arriba=$arriba_form;
	$abajo=$abajo_form;
}else{
	if($id_palabra_usuario_form<=$id_arriba_form){
		$arriba=$arriba_form;
		$abajo=$abajo_form;
	}else{
		if($id_palabra_usuario_form>$id_arriba_form and $id_palabra_usuario_form<$id_elegido){
			$arriba=$palabra_usuario_form;
			$abajo=$abajo_form;
		}else{
			if($id_palabra_usuario_form==$id_elegido){
				$arriba=$arriba_form;
				$abajo=$abajo_form;
				$mensaje=$mensaje . "<br><b style='color:red; font-size:20px;'>¡¡¡Felicitaciones!!!</b><br><b style='color:blue;'>Has Acertado</b>";
			}else{
				if($id_palabra_usuario_form>$id_elegido and $id_palabra_usuario_form<$id_abajo_form){
					$arriba=$arriba_form;
					$abajo=$palabra_usuario_form;
				}else{
					if($id_palabra_usuario_form>=$id_abajo_form){
						$arriba=$arriba_form;
						$abajo=$abajo_form;
					}else{
						$arriba=$arriba_form;
						$abajo=$abajo_form;
						$mensaje=$mensaje . "<br>Error grave, Vuelva a empesar";
					}
				}
			}
		}
	}
}
//DEFINIENDO CANTIDAD DE PALABRAS RESTANTES PARA EL MENSAJE
$consulta="SELECT ID  FROM `palabra_oculta` WHERE PALABRA = '$arriba' ";
$resultado=mysqli_query($conexion,$consulta);
if(($fila=mysqli_fetch_array($resultado))==true){
	$id_arriba=$fila['ID'];
}else{
	$id_arriba=1;
}
$consulta="SELECT ID  FROM `palabra_oculta` WHERE PALABRA = '$abajo' ";
$resultado=mysqli_query($conexion,$consulta);
if(($fila=mysqli_fetch_array($resultado))==true){
	$id_abajo=$fila['ID'];
}else{
	$id_abajo=$total_palabras;
}
$palabras_restantes=$id_abajo-$id_arriba+1;
if($mensaje=="<br><b style='color:red; font-size:20px;'>¡¡¡Felicitaciones!!!</b><br><b style='color:blue;'>Has Acertado</b>"){
}else{
	$mensaje=$mensaje . "<br>Restan $palabras_restantes palabras";
}
//PARA MOSTRAR SOLUCION
if(isset($_POST['solucion'])==true){
	$mensaje="<br>La palabra Oculta es:<br><b style='color:red;font-size:20px;'>$palabra_elegida</b>";
}
//CONTANDO INTENTOS
$intentos=0;
if(isset($_POST['intentos'])==true){
	$intentos=$_POST['intentos']+1;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>PALABRA OCULTA</TITLE>
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="icon" /> 
<link type="image/x-icon" href="IMAGENES/favicon.ico" rel="shortcut icon" />
<link rel="stylesheet" href="Estilo_Principal.css"/>
<style>
section table td{
	border:#000 solid 1px;
	margin:0px 0px;
	padding:5px 1px;
	text-align:center;
	vertical-align:middle;
	font-size:14px;
}
section table th{
	border:#000 solid 1px;
	border-bottom:0px;
	margin:0px 0px;
	padding:5px 1px;
	text-align:center;
	vertical-align:middle;
	background-color:#FFF;
	font-size:14px;
}
section table ul{
	list-style:none;
	list-style-type:disc;
	padding:3px;
	list-style-position:inside;
	text-align:justify;
	font-size:14px;
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
//IMPRIMIENDO PLANTILLA
//ENCABEZADO
echo "<div style='text-align:center; margin:auto;'><h2>LA PALABRA OCULTA</h2><h5>Encuentra la palabra oculta</h5></div><br>";
echo "<table style='text-align:center; margin:auto;'>";
echo "<tr><th><form name='nuevo_juego' id='nuevo_juego' action='palabra_oculta.php' method='post'>
<input type='submit' name='imprimir' value='Nuevo Juego'></form></th>";
echo "<td rowspan='6' style='width:50%; padding:20px;'><h5 style='color:red;'>Instrucciones:</h5>
	<ul>
			<li> En orden alfabético, la palabra secreta está entre las pistas sombreadas en color gris.</li>
			<li>Escriba una palabra en la casilla central y presione el botón ADIVINAR.</li>
			<li>Las pistas irán cambiando según la palabra que usted escriba.</li>
			<li>Continúe escribiendo palabras hasta hallar LA PALABRA OCULTA o presione en ME RINDO para revelarla.</li>
		</ul>
</td></tr>";
echo "<tr><form name='form_adivinar' id='form_adivinar' action='palabra_oculta.php' method='post'>";
echo "<td>Arriba: <input type='hidden' name='arriba' value='$arriba'><input type='text' name='arriba_imp' value='$arriba' disabled style='background-color:#ddd; color:#000; font:bolder; width:200px;'></td>";
echo "<tr><td><input type='hidden' name='id_elegido' value='$id_elegido'><input type='hidden' name='intentos' value='$intentos'>";
echo "<input type='text' name='palabra_usuario' required autofocus placeholder='Escribe una Palabra' style='background-color:#EE5; width:170px;'>";
echo "&nbsp&nbsp<input type='submit' name='adivinar' value='Adivinar'></td></tr>";
ECHO "<tr><td>Abajo: <input type='hidden' name='abajo' value='$abajo'><input type='text' name='abajo_imp' value='$abajo' disabled style='background-color:#ddd; color:#000; font:bolder; width:200px;'></td></tr></form>";
echo "<tr><td><form name='nostrar_solucion' id='nostrar_solucion' action='palabra_oculta.php' method='post'><input type='hidden' name='solucion' value='SI'><input type='hidden' name='id_elegido' value='$id_elegido'> <input type='submit' name='solucion' value='Me rindo'></form></td></tr>";
echo "<tr><td style='height:50px;'><strong>Comentario: ";
if($intentos==0){}else{echo "<b style='color:red;'>(Intentos: $intentos)</b>";}
echo "</strong>$mensaje<br></td></tr>";
echo "</table>";
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