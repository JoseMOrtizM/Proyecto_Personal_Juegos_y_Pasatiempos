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
<title>Quiniela_Mundial_2018/Adm_resultados</title>
	<link rel="stylesheet" href="estilo_general.css"/>
	<script src="jquery-1.10.2.js"></script>
	<script>
        /* Array con las imagenes que se iran mostrando en la web*/
        var imagenes_01=new Array(
			'IMAGENES2/BALON01.png',
			'IMAGENES2/BALON02.png',
			'IMAGENES2/BALON03.png',
			'IMAGENES2/BALON04.png',
			'IMAGENES2/BALON05.png',
			'IMAGENES2/BALON06.png',
			'IMAGENES2/BALON07.png',
			'IMAGENES2/BALON08.png',
			'IMAGENES2/BALON09.png',
			'IMAGENES2/BALON10.png',
			'IMAGENES2/BALON11.png',
			'IMAGENES2/BALON12.png',
			'IMAGENES2/BALON13.png',
			'IMAGENES2/BALON14.png',
			'IMAGENES2/BALON15.png',
			'IMAGENES2/BALON16.png',
			'IMAGENES2/BALON17.png',
			'IMAGENES2/BALON18.png',
			'IMAGENES2/BALON19.png',
			'IMAGENES2/BALON20.png'
		);
        var imagenes_02=new Array(
			'IMAGENES2/BANDERAS.png',
			'IMAGENES2/BANDERASPEQUENAS.png',
			'IMAGENES2/CONFEDERACION01.png',
			'IMAGENES2/CONFEDERACION02.png',
			'IMAGENES2/CONFEDERACION03.png',
			'IMAGENES2/CONFEDERACION04.png',
			'IMAGENES2/CONFEDERACION05.png',
			'IMAGENES2/CONFEDERACION06.png',
			'IMAGENES2/CONFEDERACIONESTODAS.png'
		);
        var imagenes_03=new Array(
			'IMAGENES2/CAMPEONES01.png',
			'IMAGENES2/CAMPEONES02.png',
			'IMAGENES2/CAMPEONES03.png',
			'IMAGENES2/CAMPEONES04.png',
			'IMAGENES2/CAMPEONES05.png',
			'IMAGENES2/CAMPEONES06.png',
			'IMAGENES2/CAMPEONES07.png',
			'IMAGENES2/CAMPEONES08.png',
			'IMAGENES2/CAMPEONES09.png',
			'IMAGENES2/CAMPEONES10.png',
			'IMAGENES2/CAMPEONES11.png',
			'IMAGENES2/CAMPEONES12.png',
			'IMAGENES2/CAMPEONES13.png',
			'IMAGENES2/CAMPEONES14.png',
			'IMAGENES2/CAMPEONES15.png',
			'IMAGENES2/CAMPEONES16.png',
			'IMAGENES2/CAMPEONES17.png',
			'IMAGENES2/CAMPEONES18.png',
			'IMAGENES2/CAMPEONES19.png',
			'IMAGENES2/CAMPEONES20.png'
		);
        var imagenes_04=new Array(
			'IMAGENES2/ESTADIO01.png',
			'IMAGENES2/ESTADIO02.png',
			'IMAGENES2/ESTADIO03.png',
			'IMAGENES2/ESTADIO04.png',
			'IMAGENES2/ESTADIO05.png',
			'IMAGENES2/ESTADIO06.png',
			'IMAGENES2/ESTADIO07.png',
			'IMAGENES2/ESTADIO08.png',
			'IMAGENES2/ESTADIO09.png',
			'IMAGENES2/ESTADIO10.png',
			'IMAGENES2/ESTADIO11.png',
			'IMAGENES2/ESTADIO12.png',
			'IMAGENES2/ESTADIO13.png',
			'IMAGENES2/ESTADIO14.png',
			'IMAGENES2/ESTADIO15.png',
			'IMAGENES2/ESTADIO16.png',
			'IMAGENES2/ESTADIO17.png',
			'IMAGENES2/ESTADIO18.png',
			'IMAGENES2/ESTADIO19.png',
			'IMAGENES2/ESTADIO20.png'
		);
        var imagenes_05=new Array(
			'IMAGENES2/LOGO1.png',
			'IMAGENES2/LOGOS001.png',
			'IMAGENES2/LOGOS002.png',
			'IMAGENES2/LOGOS003.png',
			'IMAGENES2/LOGOS004.png',
			'IMAGENES2/LOGOS005.png',
			'IMAGENES2/LOGOS006.png',
			'IMAGENES2/LOGOS007.png',
			'IMAGENES2/LOGOS008.png',
			'IMAGENES2/LOGOS009.png',
			'IMAGENES2/LOGOS010.png',
			'IMAGENES2/LOGOS011.png',
			'IMAGENES2/LOGOS012.png',
			'IMAGENES2/LOGOS013.png',
			'IMAGENES2/LOGOS014.png',
			'IMAGENES2/LOGOS015.png',
			'IMAGENES2/LOGOS016.png',
			'IMAGENES2/LOGOS017.png',
			'IMAGENES2/LOGOS018.png',
			'IMAGENES2/LOGOS019.png',
			'IMAGENES2/LOGOS020.png',
			'IMAGENES2/LOGOSTODOS.png'
		);
        var imagenes_06=new Array(
			'IMAGENES2/MEJORESEQUIPOS01.png',
			'IMAGENES2/MEJORESEQUIPOS02.png',
			'IMAGENES2/MEJORESEQUIPOS03.png',
			'IMAGENES2/MEJORESEQUIPOS04.png',
			'IMAGENES2/MEJORESEQUIPOS05.png',
			'IMAGENES2/MEJORESEQUIPOS06.png',
			'IMAGENES2/MEJORESEQUIPOS07.png',
			'IMAGENES2/MEJORESEQUIPOS08.png',
			'IMAGENES2/MEJORESEQUIPOS09.png',
			'IMAGENES2/MEJORESEQUIPOS10.png',
			'IMAGENES2/MEJORESEQUIPOS11.png',
			'IMAGENES2/MEJORESEQUIPOS12.png',
			'IMAGENES2/MEJORESEQUIPOS13.png',
			'IMAGENES2/MEJORESEQUIPOS14.png',
			'IMAGENES2/MEJORESEQUIPOS15.png',
			'IMAGENES2/MEJORESEQUIPOS16.png',
			'IMAGENES2/MEJORESEQUIPOS17.png',
			'IMAGENES2/MEJORESEQUIPOS18.png',
			'IMAGENES2/MEJORESEQUIPOS19.png',
			'IMAGENES2/MEJORESEQUIPOS20.png'
		);
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto01(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen01").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_01.length));
            // cambiamos la imagen
            document.getElementById("imagen01").src=imagenes_01[index];
            // aparece la imagen
            $("#imagen01").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto02(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen02").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_02.length));
            // cambiamos la imagen
            document.getElementById("imagen02").src=imagenes_02[index];
            // aparece la imagen
            $("#imagen02").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto03(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen03").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_03.length));
            // cambiamos la imagen
            document.getElementById("imagen03").src=imagenes_03[index];
            // aparece la imagen
            $("#imagen03").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto04(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen04").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_04.length));
            // cambiamos la imagen
            document.getElementById("imagen04").src=imagenes_04[index];
            // aparece la imagen
            $("#imagen04").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto05(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen05").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_05.length));
            // cambiamos la imagen
            document.getElementById("imagen05").src=imagenes_05[index];
            // aparece la imagen
            $("#imagen05").fadeOut(1000);
        }
        /*Funcion para cambiar la imagen*/
        function CambiarImagenConEfecto06(){
			//IMAGEN01
            //desaparece la imagen
            $("#imagen06").fadeIn(1500).delay(1000);
            // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
            var index=Math.floor((Math.random()*imagenes_06.length));
            // cambiamos la imagen
            document.getElementById("imagen06").src=imagenes_06[index];
            // aparece la imagen
            $("#imagen06").fadeOut(1000);
        }

        /*Función que se ejecuta una vez cargada la página*/
        onload=function(){
            // Indicamos que cada 5 segundos cambie la imagen
            setInterval(CambiarImagenConEfecto01,3800);
            setInterval(CambiarImagenConEfecto02,3600);
            setInterval(CambiarImagenConEfecto03,3900);
            setInterval(CambiarImagenConEfecto04,3850);
            setInterval(CambiarImagenConEfecto05,3650);
            setInterval(CambiarImagenConEfecto06,3950);
        }
    </script>
</head>

<body>

<aside>
  <figure>
  <img src="IMAGENES/LOGO1.jpg" width="164" height="261">
  </figure>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/BALON01.png" id="imagen01"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/BANDERAS.png" id="imagen02"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/CAMPEONES01.png" id="imagen03"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/ESTADIO01.png" id="imagen04"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/LOGOSTODOS.png" id="imagen05"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/MEJORESEQUIPOS01.png" id="imagen06"></div>

</aside>

<header>
  <h1>Quiniela RUSIA-2018</h1>
</header>

<nav>
<div id="usuario"><?php echo "Bienvenido: " . $_SESSION["usuario_Adm"] . "&nbsp;&nbsp;&nbsp;"; ?></div>
<div>
<blockquote><a href="QMF2016_Adm_Salir.php">Salir</a></blockquote>
<blockquote><a href="QMF2016_Adm_Detalle_Quinielas.php">Detalle de Quinielas</a></blockquote>
<blockquote><a href="QMF2016_Adm_Resultados.php">**Cargar Resultados**</a></blockquote>
<blockquote><a href="QMF2016_Adm_Calendario.php">Calendario</a></blockquote><blockquote><a href="QMF2016_Adm_Tabla_Usuarios.php">Usuarios</a></blockquote>
<blockquote><a href="QMF2016_Adm_Reglas.php">Reglas</a></blockquote>
<blockquote><a href="QMF2016_Adm_Grupos.php">Grupos</a></blockquote>
</div>
</nav>

<section>

<h2 style="margin-left:120px">Plantilla para Cargar Resultados de los Partidos</h2>

<table>
  <tr>
  	<td colspan="8" style="background-color:#BA9F7A">JUEGOS DE LA PRIMERA RONDA</td>
  </tr>
  <tr>
    <td>Juego N°</td>
    <td style="width:150px">Descripción</td>
    <td>Equipo 1</td>
    <td>Goles 1</td>
    <td>Goles 2</td>
    <td>Equipo 2</td>
	<td>¿Jugado?</td>
	<td>ACCIÓN</td>
  </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` LIMIT 0,48";
	$resultados=mysqli_query($conexion,$consulta);
	
	while(($fila=mysqli_fetch_array($resultados))==true){
	$juego=$fila["JUEGO"];
	$equipo_1=$fila["EQUIPO_1"];
	$gol_1=$fila["GOL_1"];
	$gol_2=$fila["GOL_2"];
	$equipo_2=$fila["EQUIPO_2"];
	$jugado=$fila["JUGADO"];
	$id=$fila["ID"];
	$jugado_contrario="SI";
	if($jugado=="SI"){$jugado_contrario="NO";}else{$jugado_contrario="SI";}
	echo "<tr><form action='QMF2016_Adm_Resultados_Update.php' method='post'>";
	echo "<td>$id<input type='hidden' name='id' value='$id'></td>";
	echo "<td style='background-color:#F7CED5'>$juego<input type='hidden' name='juego' value='$juego'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_1<input type='hidden' name='equipo_1' value='$equipo_1'></td>";
	echo "<td><input type='number' name='gol_1' value='$gol_1'></td>";
	echo "<td><input type='number' name='gol_2' value='$gol_2'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_2<input type='hidden' name='equipo_2' value='$equipo_2'></td>";
	echo "<td><select name='jugado'><option>$jugado_contrario</option><option selected>$jugado</option></select></td>";
	echo "<td><input type='submit' name='actualizar' value='Registrar'></td></form></tr>";
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>

	<tr>
    	<td colspan="6" style="background-color:#BA9F7A">RESUMEN DE PUNTOS 1° RONDA</td>
    	<td colspan="3" style="background-color:#F1A5B3">EN CASO DE EMPATE</td>
    </tr>
	<tr>
    	<td>Grupos</td>
        <td>Equipo 1</td>
        <td>Equipo 2</td>
        <td>Equipo 3</td>
        <td>Equipo 4</td>
        <td>Observación</td>
        <td>Clasif 1</td>
        <td>Clasif 2</td>
        <td>ACCIÓN</td>
     </tr>

<?php 

try{
	require ("conexion.php");
	$consulta_01="SELECT * FROM `cñasif_8_final`";
	$resultados_01=mysqli_query($conexion,$consulta_01);
	$consulta_02="SELECT * FROM `equipos`";
	$resultados_02=mysqli_query($conexion,$consulta_02);
	$contador=1;

	while($contador<=8){
	if(($fila01=mysqli_fetch_array($resultados_02))==true){
	$eq_de_A=$fila01['EQUIPOS'];
	$eq_de_A1=$fila01['EQ1'];
	$eq_de_A2=$fila01['EQ2'];
	$eq_de_A3=$fila01['EQ3'];
	$eq_de_A4=$fila01['EQ4'];
	}
	if(($fila02=mysqli_fetch_array($resultados_01))==true){
	$ptos_de_A1=intval($fila02['PTOS_1']);
	$ptos_de_A2=intval($fila02['PTOS_2']);
	$ptos_de_A3=intval($fila02['PTOS_3']);
	$ptos_de_A4=intval($fila02['PTOS_4']);
	$clasif_1=$fila02['CLASIF_1'];
	$clasif_2=$fila02['CLASIF_2'];

	$imprimiendo_observacion="Clasif 1: " . $clasif_1 . " Clasif 2: " . $clasif_2 . ".";

	echo "<tr><form action='QMF2016_Adm_Resultados_Empate_Update.php' method='post'><td rowspan='2' style='background-color:#F7CED5'>$eq_de_A<input type='hidden' name='grupo' value='$eq_de_A'></td><td style='background-color:#B0DFFF'>$eq_de_A1</td><td style='background-color:#B0DFFF'>$eq_de_A2</td><td style='background-color:#B0DFFF'>$eq_de_A3</td><td style='background-color:#B0DFFF'>$eq_de_A4</td ><td rowspan='2' style='width:150px'>$imprimiendo_observacion<input type='hidden' name='Clasif_1' value='$clasif_1'><input type='hidden' name='Clasif_2' value='$clasif_2'></td><td rowspan='2'><select name='clasif_1_emp'><option>$eq_de_A1</option><option>$eq_de_A2</option><option>$eq_de_A3</option><option>$eq_de_A4</option><option selected></option></select></td><td rowspan='2'><select name='clasif_2_emp'><option>$eq_de_A1</option><option>$eq_de_A2</option><option>$eq_de_A3</option><option>$eq_de_A4</option><option selected></option></select></td><td rowspan='2'><input type='submit' name='desempatar' value='Desempatar'></td></form></tr>";
	echo "<tr><td style='background-color:#FFFFFF'>$ptos_de_A1</td><td style='background-color:#FFFFFF'>$ptos_de_A2</td><td style='background-color:#FFFFFF'>$ptos_de_A3</td><td style='background-color:#FFFFFF'>$ptos_de_A4</td></tr>";
	$contador=$contador+1;
	}
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
  <tr>
  	<td colspan="8" style="background-color:#BA9F7A">JUEGOS DE OCTAVOS DE FINAL</td>
  </tr>
  <tr>
    <td>Juego N°</td>
    <td style="width:150px">Descripción</td>
    <td>Equipo 1</td>
    <td>Goles 1</td>
    <td>Goles 2</td>
    <td>Equipo 2</td>
	<td>¿Jugado?</td>
	<td>ACCIÓN</td>
  </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` LIMIT 48,8";
	$resultados=mysqli_query($conexion,$consulta);
	
	while(($fila=mysqli_fetch_array($resultados))==true){
	$juego=$fila["JUEGO"];
	$equipo_1=$fila["EQUIPO_1"];
	$gol_1=$fila["GOL_1"];
	$gol_2=$fila["GOL_2"];
	$equipo_2=$fila["EQUIPO_2"];
	$jugado=$fila["JUGADO"];
	$id=$fila["ID"];
	$jugado_contrario="SI";
	if($jugado=="SI"){$jugado_contrario="NO";}else{$jugado_contrario="SI";}
	echo "<tr><form action='QMF2016_Adm_Resultados_Octavos_Update.php' method='post'>";
	echo "<td>$id<input type='hidden' name='id' value='$id'></td>";
	echo "<td style='background-color:#F7CED5'>$juego<input type='hidden' name='juego' value='$juego'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_1<input type='hidden' name='equipo_1' value='$equipo_1'></td>";
	echo "<td><input type='number' name='gol_1' value='$gol_1'></td>";
	echo "<td><input type='number' name='gol_2' value='$gol_2'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_2<input type='hidden' name='equipo_2' value='$equipo_2'></td>";
	echo "<td><select name='jugado'><option>$jugado_contrario</option><option selected>$jugado</option></select></td>";
	echo "<td><input type='submit' name='actualizar' value='Registrar'></td></form></tr>";
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
	<tr>
    	<td colspan="9" style="background-color:#BA9F7A">CLASIFICADOS A CUARTOS DE FINAL</td>
    </tr>
    <tr>
    	<td>Clasif 8°1</td>
    	<td>Clasif 8°2</td>
    	<td>Clasif 8°3</td>
    	<td>Clasif 8°4</td>
    	<td>Clasif 8°5</td>
    	<td>Clasif 8°6</td>
    	<td>Clasif 8°7</td>
    	<td>Clasif 8°8</td>
        <td>ACCIÓN</td>
    </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 48,8";
	$resultados=mysqli_query($conexion,$consulta);
	$contador02=0;
	while(($fila=mysqli_fetch_array($resultados))==true){
		$contador02=$contador02+1;}
	if($contador02==8){
		$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 48,8";
		$resultados=mysqli_query($conexion,$consulta);		
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_81=$equipo1;}else{if($goles1<$goles2){$clasif_81=$equipo2;}else{$clasif_81="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_82=$equipo1;}else{if($goles1<$goles2){$clasif_82=$equipo2;}else{$clasif_82="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_83=$equipo1;}else{if($goles1<$goles2){$clasif_83=$equipo2;}else{$clasif_83="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_84=$equipo1;}else{if($goles1<$goles2){$clasif_84=$equipo2;}else{$clasif_84="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_85=$equipo1;}else{if($goles1<$goles2){$clasif_85=$equipo2;}else{$clasif_85="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_86=$equipo1;}else{if($goles1<$goles2){$clasif_86=$equipo2;}else{$clasif_86="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_87=$equipo1;}else{if($goles1<$goles2){$clasif_87=$equipo2;}else{$clasif_87="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_88=$equipo1;}else{if($goles1<$goles2){$clasif_88=$equipo2;}else{$clasif_88="Empate";}}}

		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_81'WHERE ID='1'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_82'WHERE ID='2'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_83'WHERE ID='3'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_84'WHERE ID='4'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_85'WHERE ID='5'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_86'WHERE ID='6'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_87'WHERE ID='7'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_4_final` SET CLASIFICADO='$clasif_88'WHERE ID='8'";
		$resultados=mysqli_query($conexion,$consulta);	

	}
	echo "<form action='QMF2016_Adm_Resultados_Clasif_Cuartos_Update.php' method='post'><tr>";
	$consulta="SELECT * FROM `clasif_4_final`";
	$resultados=mysqli_query($conexion,$consulta);
	while(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_clasificado=$fila["CLASIFICADO"];
		echo "<td style='background-color:#B0DFFF'>$equipo_clasificado</td>";	
	}
	
	echo "<td><input type='submit' name='a_cuartos' value='A Cuartos'></td></tr></form>";
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
  <tr>
  	<td colspan="8" style="background-color:#BA9F7A">JUEGOS DE CUARTOS DE FINAL</td>
  </tr>
  <tr>
    <td>Juego N°</td>
    <td style="width:150px">Descripción</td>
    <td>Equipo 1</td>
    <td>Goles 1</td>
    <td>Goles 2</td>
    <td>Equipo 2</td>
	<td>¿Jugado?</td>
	<td>ACCIÓN</td>
  </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` LIMIT 56,4";
	$resultados=mysqli_query($conexion,$consulta);
	
	while(($fila=mysqli_fetch_array($resultados))==true){
	$juego=$fila["JUEGO"];
	$equipo_1=$fila["EQUIPO_1"];
	$gol_1=$fila["GOL_1"];
	$gol_2=$fila["GOL_2"];
	$equipo_2=$fila["EQUIPO_2"];
	$jugado=$fila["JUGADO"];
	$id=$fila["ID"];
	$jugado_contrario="SI";
	if($jugado=="SI"){$jugado_contrario="NO";}else{$jugado_contrario="SI";}
	echo "<tr><form action='QMF2016_Adm_Resultados_Octavos_Update.php' method='post'>";
	echo "<td>$id<input type='hidden' name='id' value='$id'></td>";
	echo "<td style='background-color:#F7CED5'>$juego<input type='hidden' name='juego' value='$juego'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_1<input type='hidden' name='equipo_1' value='$equipo_1'></td>";
	echo "<td><input type='number' name='gol_1' value='$gol_1'></td>";
	echo "<td><input type='number' name='gol_2' value='$gol_2'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_2<input type='hidden' name='equipo_2' value='$equipo_2'></td>";
	echo "<td><select name='jugado'><option>$jugado_contrario</option><option selected>$jugado</option></select></td>";
	echo "<td><input type='submit' name='actualizar' value='Registrar'></td></form></tr>";
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
	<tr>
    	<td colspan="5" style="background-color:#BA9F7A">CLASIFICADOS A SEMI FINALES</td>
    </tr>
    <tr>
    	<td style="width:140px">Clasif 4°1</td>
    	<td style="width:140px">Clasif 4°2</td>
    	<td style="width:140px">Clasif 4°3</td>
    	<td style="width:140px">Clasif 4°4</td>
        <td style="width:140px">ACCIÓN</td>
    </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 56,4";
	$resultados=mysqli_query($conexion,$consulta);
	$contador03=0;
	while(($fila=mysqli_fetch_array($resultados))==true){
		$contador03=$contador03+1;}
	if($contador03==4){
		$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 56,4";
		$resultados=mysqli_query($conexion,$consulta);		
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_41=$equipo1;}else{if($goles1<$goles2){$clasif_41=$equipo2;}else{$clasif_41="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_42=$equipo1;}else{if($goles1<$goles2){$clasif_42=$equipo2;}else{$clasif_42="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_43=$equipo1;}else{if($goles1<$goles2){$clasif_43=$equipo2;}else{$clasif_43="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_44=$equipo1;}else{if($goles1<$goles2){$clasif_44=$equipo2;}else{$clasif_44="Empate";}}}

		$consulta="UPDATE `clasif_semifinal` SET CLASIFICADO='$clasif_41'WHERE ID='1'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_semifinal` SET CLASIFICADO='$clasif_42'WHERE ID='2'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_semifinal` SET CLASIFICADO='$clasif_43'WHERE ID='3'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_semifinal` SET CLASIFICADO='$clasif_44'WHERE ID='4'";
		$resultados=mysqli_query($conexion,$consulta);	
	}
	echo "<form action='QMF2016_Adm_Resultados_Clasif_Semi_Update.php' method='post'><tr>";
	$consulta="SELECT * FROM `clasif_semifinal`";
	$resultados=mysqli_query($conexion,$consulta);
	while(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_clasificado=$fila["CLASIFICADO"];
		echo "<td style='background-color:#B0DFFF'>$equipo_clasificado</td>";	
	}
	
	echo "<td><input type='submit' name='a_semifinales' value='a S-Finales'></td></tr></form>";
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
  <tr>
  	<td colspan="8" style="background-color:#BA9F7A">JUEGOS DE SEMI-FINAL</td>
  </tr>
  <tr>
    <td>Juego N°</td>
    <td style="width:150px">Descripción</td>
    <td>Equipo 1</td>
    <td>Goles 1</td>
    <td>Goles 2</td>
    <td>Equipo 2</td>
	<td>¿Jugado?</td>
	<td>ACCIÓN</td>
  </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` LIMIT 60,2";
	$resultados=mysqli_query($conexion,$consulta);
	
	while(($fila=mysqli_fetch_array($resultados))==true){
	$juego=$fila["JUEGO"];
	$equipo_1=$fila["EQUIPO_1"];
	$gol_1=$fila["GOL_1"];
	$gol_2=$fila["GOL_2"];
	$equipo_2=$fila["EQUIPO_2"];
	$jugado=$fila["JUGADO"];
	$id=$fila["ID"];
	$jugado_contrario="SI";
	if($jugado=="SI"){$jugado_contrario="NO";}else{$jugado_contrario="SI";}
	echo "<tr><form action='QMF2016_Adm_Resultados_Octavos_Update.php' method='post'>";
	echo "<td>$id<input type='hidden' name='id' value='$id'></td>";
	echo "<td style='background-color:#F7CED5'>$juego<input type='hidden' name='juego' value='$juego'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_1<input type='hidden' name='equipo_1' value='$equipo_1'></td>";
	echo "<td><input type='number' name='gol_1' value='$gol_1'></td>";
	echo "<td><input type='number' name='gol_2' value='$gol_2'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_2<input type='hidden' name='equipo_2' value='$equipo_2'></td>";
	echo "<td><select name='jugado'><option>$jugado_contrario</option><option selected>$jugado</option></select></td>";
	echo "<td><input type='submit' name='actualizar' value='Registrar'></td></form></tr>";
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>
    
</table>

<table>
	<tr>
    	<td colspan="5" style="background-color:#BA9F7A">CLASIFICADOS AL JUEGO POR EL TERCER LUGAR Y A LA GRAN FINAL</td>
    </tr>
    <tr>
    	<td style="width:140px">Ganador SF-1</td>
    	<td style="width:140px">Ganador SF-2</td>
    	<td style="width:140px">Perdedor SF-1</td>
    	<td style="width:140px">Perdedor SF-2</td>
        <td style="width:140px">ACCIÓN</td>
    </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 60,2";
	$resultados=mysqli_query($conexion,$consulta);
	$contador04=0;
	while(($fila=mysqli_fetch_array($resultados))==true){
		$contador04=$contador04+1;}
	if($contador04==2){
		$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 60,2";
		$resultados=mysqli_query($conexion,$consulta);		
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_final_1=$equipo1;$clasif_tercero_1=$equipo2;}else{if($goles1<$goles2){$clasif_final_1=$equipo2;$clasif_tercero_1=$equipo1;}else{$clasif_final_1="Empate";$clasif_tercero_1="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$clasif_final_2=$equipo1;$clasif_tercero_2=$equipo2;}else{if($goles1<$goles2){$clasif_final_2=$equipo2;$clasif_tercero_2=$equipo1;}else{$clasif_final_2="Empate";$clasif_tercero_2="Empate";}}}

		$consulta="UPDATE `clasif_finales` SET CLASIFICADO='$clasif_final_1' WHERE ID='1'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_finales` SET CLASIFICADO='$clasif_final_2' WHERE ID='2'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_finales` SET CLASIFICADO='$clasif_tercero_1' WHERE ID='3'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `clasif_finales` SET CLASIFICADO='$clasif_tercero_2' WHERE ID='4'";
		$resultados=mysqli_query($conexion,$consulta);	
	}
	echo "<form action='QMF2016_Adm_Resultados_Clasif_Finales_Update.php' method='post'><tr>";
	$consulta="SELECT * FROM `clasif_finales`";
	$resultados=mysqli_query($conexion,$consulta);
	while(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_clasificado=$fila["CLASIFICADO"];
		echo "<td style='background-color:#B0DFFF'>$equipo_clasificado</td>";	
	}
	
	echo "<td><input type='submit' name='a_finales' value='a Finales'></td></tr></form>";
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
  <tr>
  	<td colspan="8" style="background-color:#BA9F7A">JUEGO POR EL TERCER LUGAR</td>
  </tr>
  <tr>
    <td>Juego N°</td>
    <td style="width:150px">Descripción</td>
    <td>Equipo 1</td>
    <td>Goles 1</td>
    <td>Goles 2</td>
    <td>Equipo 2</td>
	<td>¿Jugado?</td>
	<td>ACCIÓN</td>
  </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` LIMIT 62,1";
	$resultados=mysqli_query($conexion,$consulta);
	
	while(($fila=mysqli_fetch_array($resultados))==true){
	$juego=$fila["JUEGO"];
	$equipo_1=$fila["EQUIPO_1"];
	$gol_1=$fila["GOL_1"];
	$gol_2=$fila["GOL_2"];
	$equipo_2=$fila["EQUIPO_2"];
	$jugado=$fila["JUGADO"];
	$id=$fila["ID"];
	$jugado_contrario="SI";
	if($jugado=="SI"){$jugado_contrario="NO";}else{$jugado_contrario="SI";}
	echo "<tr><form action='QMF2016_Adm_Resultados_Octavos_Update.php' method='post'>";
	echo "<td>$id<input type='hidden' name='id' value='$id'></td>";
	echo "<td style='background-color:#F7CED5'>$juego<input type='hidden' name='juego' value='$juego'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_1<input type='hidden' name='equipo_1' value='$equipo_1'></td>";
	echo "<td><input type='number' name='gol_1' value='$gol_1'></td>";
	echo "<td><input type='number' name='gol_2' value='$gol_2'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_2<input type='hidden' name='equipo_2' value='$equipo_2'></td>";
	echo "<td><select name='jugado'><option>$jugado_contrario</option><option selected>$jugado</option></select></td>";
	echo "<td><input type='submit' name='actualizar' value='Registrar'></td></form></tr>";
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

  <tr>
  	<td colspan="8" style="background-color:#BA9F7A">JUEGO DE LA GRAN FINAL</td>
  </tr>
  <tr>
    <td>Juego N°</td>
    <td>Descripción</td>
    <td>Equipo 1</td>
    <td>Goles 1</td>
    <td>Goles 2</td>
    <td>Equipo 2</td>
	<td>¿Jugado?</td>
	<td>ACCIÓN</td>
  </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` LIMIT 63,1";
	$resultados=mysqli_query($conexion,$consulta);
	
	while(($fila=mysqli_fetch_array($resultados))==true){
	$juego=$fila["JUEGO"];
	$equipo_1=$fila["EQUIPO_1"];
	$gol_1=$fila["GOL_1"];
	$gol_2=$fila["GOL_2"];
	$equipo_2=$fila["EQUIPO_2"];
	$jugado=$fila["JUGADO"];
	$id=$fila["ID"];
	$jugado_contrario="SI";
	if($jugado=="SI"){$jugado_contrario="NO";}else{$jugado_contrario="SI";}
	echo "<tr><form action='QMF2016_Adm_Resultados_Octavos_Update.php' method='post'>";
	echo "<td>$id<input type='hidden' name='id' value='$id'></td>";
	echo "<td style='background-color:#F7CED5'>$juego<input type='hidden' name='juego' value='$juego'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_1<input type='hidden' name='equipo_1' value='$equipo_1'></td>";
	echo "<td><input type='number' name='gol_1' value='$gol_1'></td>";
	echo "<td><input type='number' name='gol_2' value='$gol_2'></td>";
	echo "<td style='background-color:#B0DFFF'>$equipo_2<input type='hidden' name='equipo_2' value='$equipo_2'></td>";
	echo "<td><select name='jugado'><option>$jugado_contrario</option><option selected>$jugado</option></select></td>";
	echo "<td><input type='submit' name='actualizar' value='Registrar'></td></form></tr>";
	}
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<table>
	<tr>
    	<td colspan="5" style="background-color:#BA9F7A">RESUMEN DE LA QUINIELA</td>
    </tr>
    <tr>
    	<td style="width:140px">Primer Lugar</td>
    	<td style="width:140px">Segundo Lugar</td>
    	<td style="width:140px">Tercer Lugar</td>
    	<td style="width:140px">Cuarto Lugar</td>
        <td style="width:140px">Equipo Goleador</td>
    </tr>

<?php
try{
	require ("conexion.php");
	
	$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 62,2";
	$resultados=mysqli_query($conexion,$consulta);
	$contador04=0;
	while(($fila=mysqli_fetch_array($resultados))==true){
		$contador04=$contador04+1;}
	if($contador04==2){
		$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI' LIMIT 62,2";
		$resultados=mysqli_query($conexion,$consulta);		
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$tercero=$equipo1;$cuarto=$equipo2;}else{if($goles1<$goles2){$tercero=$equipo2;$cuarto=$equipo1;}else{$tercero="Empate";$cuarto="Empate";}}}
		if(($fila=mysqli_fetch_array($resultados))==true){
			$equipo1=$fila["EQUIPO_1"];
			$equipo2=$fila["EQUIPO_2"];
			$goles1=$fila["GOL_1"];
			$goles2=$fila["GOL_2"];
			if($goles1>$goles2){$primero=$equipo1;$segundo=$equipo2;}else{if($goles1<$goles2){$primero=$equipo2;$segundo=$equipo1;}else{$primero="Empate";$segundo="Empate";}}}
		$consulta="UPDATE `ganadores` SET GANADORES='$primero' WHERE ID='1'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `ganadores` SET GANADORES='$segundo' WHERE ID='2'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `ganadores` SET GANADORES='$tercero' WHERE ID='3'";
		$resultados=mysqli_query($conexion,$consulta);	
		$consulta="UPDATE `ganadores` SET GANADORES='$cuarto' WHERE ID='4'";
		$resultados=mysqli_query($conexion,$consulta);	
	}
	
//mega lumpia de el ganador

// RESCATANDO EN VARIABLES LOS NOMBRES DE LOS EQUIPOS DE LA BD
	
	$consulta="SELECT * FROM `equipos`";
	$resultados=mysqli_query($conexion,$consulta);
	
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_A1=$fila["EQ1"];
		$grupo_A2=$fila["EQ2"];
		$grupo_A3=$fila["EQ3"];
		$grupo_A4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_B1=$fila["EQ1"];
		$grupo_B2=$fila["EQ2"];
		$grupo_B3=$fila["EQ3"];
		$grupo_B4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_C1=$fila["EQ1"];
		$grupo_C2=$fila["EQ2"];
		$grupo_C3=$fila["EQ3"];
		$grupo_C4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_D1=$fila["EQ1"];
		$grupo_D2=$fila["EQ2"];
		$grupo_D3=$fila["EQ3"];
		$grupo_D4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_E1=$fila["EQ1"];
		$grupo_E2=$fila["EQ2"];
		$grupo_E3=$fila["EQ3"];
		$grupo_E4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_F1=$fila["EQ1"];
		$grupo_F2=$fila["EQ2"];
		$grupo_F3=$fila["EQ3"];
		$grupo_F4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_G1=$fila["EQ1"];
		$grupo_G2=$fila["EQ2"];
		$grupo_G3=$fila["EQ3"];
		$grupo_G4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_H1=$fila["EQ1"];
		$grupo_H2=$fila["EQ2"];
		$grupo_H3=$fila["EQ3"];
		$grupo_H4=$fila["EQ4"];}

// DEFINIENDO EN VARIABLES LOS GOLES DE LOS EQUIPOS EN LA PRIMERA RONDA

	$consulta="SELECT * FROM `resultados`";
	$resultados=mysqli_query($conexion,$consulta);

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A1A2_A1=$fil["GOL_1"];
		$gol_A1A2_A2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A1A3_A1=$fil["GOL_1"];
		$gol_A1A3_A3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A1A4_A1=$fil["GOL_1"];
		$gol_A1A4_A4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A2A3_A2=$fil["GOL_1"];
		$gol_A2A3_A3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A2A4_A2=$fil["GOL_1"];
		$gol_A2A4_A4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A3A4_A3=$fil["GOL_1"];
		$gol_A3A4_A4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B1B2_B1=$fil["GOL_1"];
		$gol_B1B2_B2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B1B3_B1=$fil["GOL_1"];
		$gol_B1B3_B3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B1B4_B1=$fil["GOL_1"];
		$gol_B1B4_B4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B2B3_B2=$fil["GOL_1"];
		$gol_B2B3_B3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B2B4_B2=$fil["GOL_1"];
		$gol_B2B4_B4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B3B4_B3=$fil["GOL_1"];
		$gol_B3B4_B4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C1C2_C1=$fil["GOL_1"];
		$gol_C1C2_C2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C1C3_C1=$fil["GOL_1"];
		$gol_C1C3_C3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C1C4_C1=$fil["GOL_1"];
		$gol_C1C4_C4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C2C3_C2=$fil["GOL_1"];
		$gol_C2C3_C3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C2C4_C2=$fil["GOL_1"];
		$gol_C2C4_C4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C3C4_C3=$fil["GOL_1"];
		$gol_C3C4_C4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D1D2_D1=$fil["GOL_1"];
		$gol_D1D2_D2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D1D3_D1=$fil["GOL_1"];
		$gol_D1D3_D3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D1D4_D1=$fil["GOL_1"];
		$gol_D1D4_D4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D2D3_D2=$fil["GOL_1"];
		$gol_D2D3_D3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D2D4_D2=$fil["GOL_1"];
		$gol_D2D4_D4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D3D4_D3=$fil["GOL_1"];
		$gol_D3D4_D4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E1E2_E1=$fil["GOL_1"];
		$gol_E1E2_E2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E1E3_E1=$fil["GOL_1"];
		$gol_E1E3_E3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E1E4_E1=$fil["GOL_1"];
		$gol_E1E4_E4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E2E3_E2=$fil["GOL_1"];
		$gol_E2E3_E3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E2E4_E2=$fil["GOL_1"];
		$gol_E2E4_E4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E3E4_E3=$fil["GOL_1"];
		$gol_E3E4_E4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F1F2_F1=$fil["GOL_1"];
		$gol_F1F2_F2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F1F3_F1=$fil["GOL_1"];
		$gol_F1F3_F3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F1F4_F1=$fil["GOL_1"];
		$gol_F1F4_F4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F2F3_F2=$fil["GOL_1"];
		$gol_F2F3_F3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F2F4_F2=$fil["GOL_1"];
		$gol_F2F4_F4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F3F4_F3=$fil["GOL_1"];
		$gol_F3F4_F4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G1G2_G1=$fil["GOL_1"];
		$gol_G1G2_G2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G1G3_G1=$fil["GOL_1"];
		$gol_G1G3_G3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G1G4_G1=$fil["GOL_1"];
		$gol_G1G4_G4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G2G3_G2=$fil["GOL_1"];
		$gol_G2G3_G3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G2G4_G2=$fil["GOL_1"];
		$gol_G2G4_G4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G3G4_G3=$fil["GOL_1"];
		$gol_G3G4_G4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H1H2_H1=$fil["GOL_1"];
		$gol_H1H2_H2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H1H3_H1=$fil["GOL_1"];
		$gol_H1H3_H3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H1H4_H1=$fil["GOL_1"];
		$gol_H1H4_H4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H2H3_H2=$fil["GOL_1"];
		$gol_H2H3_H3=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H2H4_H2=$fil["GOL_1"];
		$gol_H2H4_H4=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H3H4_H3=$fil["GOL_1"];
		$gol_H3H4_H4=$fil["GOL_2"];}

// DEFINIENDO EN VARIABLES LOS GOLES Y EQUIPOS DE LOS EQUIPOS DE 8° DE FINAL

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_A1=$fil["EQUIPO_1"];
		$Clasificado_B2=$fil["EQUIPO_2"];
		$Gol_Oct_A1=$fil["GOL_1"];
		$Gol_Oct_B2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_B1=$fil["EQUIPO_1"];
		$Clasificado_A2=$fil["EQUIPO_2"];
		$Gol_Oct_B1=$fil["GOL_1"];
		$Gol_Oct_A2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_C1=$fil["EQUIPO_1"];
		$Clasificado_D2=$fil["EQUIPO_2"];
		$Gol_Oct_C1=$fil["GOL_1"];
		$Gol_Oct_D2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_D1=$fil["EQUIPO_1"];
		$Clasificado_C2=$fil["EQUIPO_2"];
		$Gol_Oct_D1=$fil["GOL_1"];
		$Gol_Oct_C2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_E1=$fil["EQUIPO_1"];
		$Clasificado_F2=$fil["EQUIPO_2"];
		$Gol_Oct_E1=$fil["GOL_1"];
		$Gol_Oct_F2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_F1=$fil["EQUIPO_1"];
		$Clasificado_E2=$fil["EQUIPO_2"];
		$Gol_Oct_F1=$fil["GOL_1"];
		$Gol_Oct_E2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_G1=$fil["EQUIPO_1"];
		$Clasificado_H2=$fil["EQUIPO_2"];
		$Gol_Oct_G1=$fil["GOL_1"];
		$Gol_Oct_H2=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_H1=$fil["EQUIPO_1"];
		$Clasificado_G2=$fil["EQUIPO_2"];
		$Gol_Oct_H1=$fil["GOL_1"];
		$Gol_Oct_G2=$fil["GOL_2"];}

// DEFINIENDO EN VARIABLES LOS GOLES Y EQUIOS DE LOS EQUIPOS DE 4° DE FINAL

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_81=$fil["EQUIPO_1"];
		$Clasificado_83=$fil["EQUIPO_2"];
		$Gol_Cuart_81=$fil["GOL_1"];
		$Gol_Cuart_83=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_82=$fil["EQUIPO_1"];
		$Clasificado_84=$fil["EQUIPO_2"];
		$Gol_Cuart_82=$fil["GOL_1"];
		$Gol_Cuart_84=$fil["GOL_2"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_85=$fil["EQUIPO_1"];
		$Clasificado_87=$fil["EQUIPO_2"];
		$Gol_Cuart_85=$fil["GOL_1"];
		$Gol_Cuart_87=$fil["GOL_2"];}		
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_86=$fil["EQUIPO_1"];
		$Clasificado_88=$fil["EQUIPO_2"];
		$Gol_Cuart_86=$fil["GOL_1"];
		$Gol_Cuart_88=$fil["GOL_2"];}					

// DEFINIENDO EN VARIABLES LOS GOLES y EQUIPOS DE SEMIFINALES EN ADELANTE

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_41=$fil["EQUIPO_1"];
		$Clasificado_43=$fil["EQUIPO_2"];
		$Gol_SF_41=$fil["GOL_1"];
		$Gol_SF_43=$fil["GOL_2"];}	
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_42=$fil["EQUIPO_1"];
		$Clasificado_44=$fil["EQUIPO_2"];
		$Gol_SF_42=$fil["GOL_1"];
		$Gol_SF_44=$fil["GOL_2"];}	
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_Tercero_1=$fil["EQUIPO_1"];
		$Clasificado_Tercero_2=$fil["EQUIPO_2"];
		$Gol_PSF_1=$fil["GOL_1"];
		$Gol_PSF_2=$fil["GOL_2"];}			
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_GF_1=$fil["EQUIPO_1"];
		$Clasificado_GF_2=$fil["EQUIPO_2"];
		$Gol_GSF_1=$fil["GOL_1"];
		$Gol_GSF_2=$fil["GOL_2"];}			

// CALCULANDO EL EQUIPO GOLEADOR

// GRUPO A

	if($Clasificado_A1==$grupo_A1){$oct_1=$Gol_Oct_A1;}else{$oct_1=0;}
	if($Clasificado_A2==$grupo_A1){$oct_2=$Gol_Oct_A2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_A1){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_A1){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_A1){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_A1){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_A1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_A1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_A1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_A1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_A1=$gol_A1A2_A1+$gol_A1A3_A1+$gol_A1A4_A1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_A1==$grupo_A2){$oct_1=$Gol_Oct_A1;}else{$oct_1=0;}
	if($Clasificado_A2==$grupo_A2){$oct_2=$Gol_Oct_A2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_A2){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_A2){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_A2){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_A2){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_A2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_A2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_A2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_A2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_A2=$gol_A1A2_A2+$gol_A2A3_A2+$gol_A2A4_A2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_A1==$grupo_A3){$oct_1=$Gol_Oct_A1;}else{$oct_1=0;}
	if($Clasificado_A2==$grupo_A3){$oct_2=$Gol_Oct_A2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_A3){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_A3){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_A3){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_A3){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_A3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_A3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_A3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_A3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_A3=$gol_A1A3_A3+$gol_A2A3_A3+$gol_A3A4_A3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
	if($Clasificado_A1==$grupo_A4){$oct_1=$Gol_Oct_A1;}else{$oct_1=0;}
	if($Clasificado_A2==$grupo_A4){$oct_2=$Gol_Oct_A2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_A4){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_A4){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_A4){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_A4){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_A4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_A4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_A4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_A4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_A4=$gol_A1A4_A4+$gol_A2A4_A4+$gol_A3A4_A4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

// GRUPO B

	if($Clasificado_B1==$grupo_B1){$oct_1=$Gol_Oct_B1;}else{$oct_1=0;}
	if($Clasificado_B2==$grupo_B1){$oct_2=$Gol_Oct_B2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_B1){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_B1){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_B1){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_B1){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_B1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_B1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_B1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_B1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_B1=$gol_B1B2_B1+$gol_B1B3_B1+$gol_B1B4_B1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_B1==$grupo_B2){$oct_1=$Gol_Oct_B1;}else{$oct_1=0;}
	if($Clasificado_B2==$grupo_B2){$oct_2=$Gol_Oct_B2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_B2){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_B2){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_B2){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_B2){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_B2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_B2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_B2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_B2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_B2=$gol_B1B2_B2+$gol_B2B3_B2+$gol_B2B4_B2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_B1==$grupo_B3){$oct_1=$Gol_Oct_B1;}else{$oct_1=0;}
	if($Clasificado_B2==$grupo_B3){$oct_2=$Gol_Oct_B2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_B3){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_B3){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_B3){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_B3){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_B3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_B3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_B3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_B3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_B3=$gol_B1B3_B3+$gol_B2B3_B3+$gol_B3B4_B3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
	if($Clasificado_B1==$grupo_B4){$oct_1=$Gol_Oct_B1;}else{$oct_1=0;}
	if($Clasificado_B2==$grupo_B4){$oct_2=$Gol_Oct_B2;}else{$oct_2=0;}
	if($Clasificado_81==$grupo_B4){$cuart_1=$Gol_Cuart_81;}else{$cuart_1=0;}
	if($Clasificado_82==$grupo_B4){$cuart_2=$Gol_Cuart_82;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_B4){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_B4){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_B4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_B4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_B4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_B4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_B4=$gol_B1B4_B4+$gol_B2B4_B4+$gol_B3B4_B4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
// GRUPO C

	if($Clasificado_C1==$grupo_C1){$oct_1=$Gol_Oct_C1;}else{$oct_1=0;}
	if($Clasificado_C2==$grupo_C1){$oct_2=$Gol_Oct_C2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_C1){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_C1){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_C1){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_C1){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_C1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_C1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_C1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_C1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_C1=$gol_C1C2_C1+$gol_C1C3_C1+$gol_C1C4_C1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_C1==$grupo_C2){$oct_1=$Gol_Oct_C1;}else{$oct_1=0;}
	if($Clasificado_C2==$grupo_C2){$oct_2=$Gol_Oct_C2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_C2){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_C2){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_C2){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_C2){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_C2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_C2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_C2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_C2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_C2=$gol_C1C2_C2+$gol_C2C3_C2+$gol_C2C4_C2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
	if($Clasificado_C1==$grupo_C3){$oct_1=$Gol_Oct_C1;}else{$oct_1=0;}
	if($Clasificado_C2==$grupo_C3){$oct_2=$Gol_Oct_C2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_C3){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_C3){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_C3){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_C3){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_C3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_C3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_C3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_C3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_C3=$gol_C1C3_C3+$gol_C2C3_C3+$gol_C3C4_C3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
	if($Clasificado_C1==$grupo_C4){$oct_1=$Gol_Oct_C1;}else{$oct_1=0;}
	if($Clasificado_C2==$grupo_C4){$oct_2=$Gol_Oct_C2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_C4){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_C4){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_C4){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_C4){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_C4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_C4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_C4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_C4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_C4=$gol_C1C4_C4+$gol_C2C4_C4+$gol_C3C4_C4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

// GRUPO D

	if($Clasificado_D1==$grupo_D1){$oct_1=$Gol_Oct_D1;}else{$oct_1=0;}
	if($Clasificado_D2==$grupo_D1){$oct_2=$Gol_Oct_D2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_D1){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_D1){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_D1){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_D1){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_D1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_D1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_D1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_D1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_D1=$gol_D1D2_D1+$gol_D1D3_D1+$gol_D1D4_D1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_D1==$grupo_D2){$oct_1=$Gol_Oct_D1;}else{$oct_1=0;}
	if($Clasificado_D2==$grupo_D2){$oct_2=$Gol_Oct_D2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_D2){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_D2){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_D2){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_D2){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_D2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_D2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_D2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_D2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_D2=$gol_D1D2_D2+$gol_D2D3_D2+$gol_D2D4_D2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_D1==$grupo_D3){$oct_1=$Gol_Oct_D1;}else{$oct_1=0;}
	if($Clasificado_D2==$grupo_D3){$oct_2=$Gol_Oct_D2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_D3){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_D3){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_D3){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_D3){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_D3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_D3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_D3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_D3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_D3=$gol_D1D3_D3+$gol_D2D3_D3+$gol_D3D4_D3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_D1==$grupo_D4){$oct_1=$Gol_Oct_D1;}else{$oct_1=0;}
	if($Clasificado_D2==$grupo_D4){$oct_2=$Gol_Oct_D2;}else{$oct_2=0;}
	if($Clasificado_83==$grupo_D4){$cuart_1=$Gol_Cuart_83;}else{$cuart_1=0;}
	if($Clasificado_84==$grupo_D4){$cuart_2=$Gol_Cuart_84;}else{$cuart_2=0;}
	if($Clasificado_41==$grupo_D4){$sf_1=$Gol_SF_41;}else{$sf_1=0;}
	if($Clasificado_42==$grupo_D4){$sf_2=$Gol_SF_42;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_D4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_D4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_D4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_D4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_D4=$gol_D1D4_D4+$gol_D2D4_D4+$gol_D3D4_D4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
// GRUPO E

	if($Clasificado_E1==$grupo_E1){$oct_1=$Gol_Oct_E1;}else{$oct_1=0;}
	if($Clasificado_E2==$grupo_E1){$oct_2=$Gol_Oct_E2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_E1){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_E1){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_E1){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_E1){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_E1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_E1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_E1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_E1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_E1=$gol_E1E2_E1+$gol_E1E3_E1+$gol_E1E4_E1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_E1==$grupo_E2){$oct_1=$Gol_Oct_E1;}else{$oct_1=0;}
	if($Clasificado_E2==$grupo_E2){$oct_2=$Gol_Oct_E2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_E2){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_E2){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_E2){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_E2){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_E2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_E2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_E2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_E2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_E2=$gol_E1E2_E2+$gol_E2E3_E2+$gol_E2E4_E2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_E1==$grupo_E3){$oct_1=$Gol_Oct_E1;}else{$oct_1=0;}
	if($Clasificado_E2==$grupo_E3){$oct_2=$Gol_Oct_E2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_E3){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_E3){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_E3){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_E3){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_E3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_E3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_E3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_E3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_E3=$gol_E1E3_E3+$gol_E2E3_E3+$gol_E3E4_E3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_E1==$grupo_E4){$oct_1=$Gol_Oct_E1;}else{$oct_1=0;}
	if($Clasificado_E2==$grupo_E4){$oct_2=$Gol_Oct_E2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_E4){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_E4){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_E4){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_E4){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_E4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_E4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_E4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_E4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_E4=$gol_E1E4_E4+$gol_E2E4_E4+$gol_E3E4_E4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
// GRUPO F

	if($Clasificado_F1==$grupo_F1){$oct_1=$Gol_Oct_F1;}else{$oct_1=0;}
	if($Clasificado_F2==$grupo_F1){$oct_2=$Gol_Oct_F2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_F1){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_F1){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_F1){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_F1){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_F1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_F1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_F1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_F1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_F1=$gol_F1F2_F1+$gol_F1F3_F1+$gol_F1F4_F1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_F1==$grupo_F2){$oct_1=$Gol_Oct_F1;}else{$oct_1=0;}
	if($Clasificado_F2==$grupo_F2){$oct_2=$Gol_Oct_F2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_F2){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_F2){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_F2){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_F2){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_F2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_F2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_F2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_F2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_F2=$gol_F1F2_F2+$gol_F2F3_F2+$gol_F2F4_F2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
	if($Clasificado_F1==$grupo_F3){$oct_1=$Gol_Oct_F1;}else{$oct_1=0;}
	if($Clasificado_F2==$grupo_F3){$oct_2=$Gol_Oct_F2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_F3){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_F3){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_F3){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_F3){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_F3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_F3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_F3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_F3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_F3=$gol_F1F3_F3+$gol_F2F3_F3+$gol_F3F4_F3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
	if($Clasificado_F1==$grupo_F4){$oct_1=$Gol_Oct_F1;}else{$oct_1=0;}
	if($Clasificado_F2==$grupo_F4){$oct_2=$Gol_Oct_F2;}else{$oct_2=0;}
	if($Clasificado_85==$grupo_F4){$cuart_1=$Gol_Cuart_85;}else{$cuart_1=0;}
	if($Clasificado_86==$grupo_F4){$cuart_2=$Gol_Cuart_86;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_F4){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_F4){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_F4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_F4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_F4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_F4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_F4=$gol_F1F4_F4+$gol_F2F4_F4+$gol_F3F4_F4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;
	
// GRUPO G

	if($Clasificado_G1==$grupo_G1){$oct_1=$Gol_Oct_G1;}else{$oct_1=0;}
	if($Clasificado_G2==$grupo_G1){$oct_2=$Gol_Oct_G2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_G1){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_G1){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_G1){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_G1){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_G1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_G1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_G1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_G1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_G1=$gol_G1G2_G1+$gol_G1G3_G1+$gol_G1G4_G1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_G1==$grupo_G2){$oct_1=$Gol_Oct_G1;}else{$oct_1=0;}
	if($Clasificado_G2==$grupo_G2){$oct_2=$Gol_Oct_G2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_G2){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_G2){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_G2){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_G2){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_G2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_G2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_G2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_G2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_G2=$gol_G1G2_G2+$gol_G2G3_G2+$gol_G2G4_G2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_G1==$grupo_G3){$oct_1=$Gol_Oct_G1;}else{$oct_1=0;}
	if($Clasificado_G2==$grupo_G3){$oct_2=$Gol_Oct_G2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_G3){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_G3){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_G3){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_G3){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_G3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_G3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_G3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_G3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_G3=$gol_G1G3_G3+$gol_G2G3_G3+$gol_G3G4_G3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_G1==$grupo_G4){$oct_1=$Gol_Oct_G1;}else{$oct_1=0;}
	if($Clasificado_G2==$grupo_G4){$oct_2=$Gol_Oct_G2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_G4){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_G4){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_G4){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_G4){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_G4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_G4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_G4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_G4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_G4=$gol_G1G4_G4+$gol_G2G4_G4+$gol_G3G4_G4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

// GRUPO H

	if($Clasificado_H1==$grupo_H1){$oct_1=$Gol_Oct_H1;}else{$oct_1=0;}
	if($Clasificado_H2==$grupo_H1){$oct_2=$Gol_Oct_H2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_H1){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_H1){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_H1){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_H1){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_H1){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_H1){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_H1){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_H1){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_H1=$gol_H1H2_H1+$gol_H1H3_H1+$gol_H1H4_H1+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_H1==$grupo_H2){$oct_1=$Gol_Oct_H1;}else{$oct_1=0;}
	if($Clasificado_H2==$grupo_H2){$oct_2=$Gol_Oct_H2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_H2){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_H2){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_H2){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_H2){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_H2){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_H2){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_H2){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_H2){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_H2=$gol_H1H2_H2+$gol_H2H3_H2+$gol_H2H4_H2+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_H1==$grupo_H3){$oct_1=$Gol_Oct_H1;}else{$oct_1=0;}
	if($Clasificado_H2==$grupo_H3){$oct_2=$Gol_Oct_H2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_H3){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_H3){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_H3){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_H3){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_H3){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_H3){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_H3){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_H3){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_H3=$gol_H1H3_H3+$gol_H2H3_H3+$gol_H3H4_H3+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	if($Clasificado_H1==$grupo_H4){$oct_1=$Gol_Oct_H1;}else{$oct_1=0;}
	if($Clasificado_H2==$grupo_H4){$oct_2=$Gol_Oct_H2;}else{$oct_2=0;}
	if($Clasificado_87==$grupo_H4){$cuart_1=$Gol_Cuart_87;}else{$cuart_1=0;}
	if($Clasificado_88==$grupo_H4){$cuart_2=$Gol_Cuart_88;}else{$cuart_2=0;}
	if($Clasificado_43==$grupo_H4){$sf_1=$Gol_SF_43;}else{$sf_1=0;}
	if($Clasificado_44==$grupo_H4){$sf_2=$Gol_SF_44;}else{$sf_2=0;}
	if($Clasificado_Tercero_1==$grupo_H4){$terc_lugar_1=$Gol_PSF_1;}else{$terc_lugar_1=0;}
	if($Clasificado_Tercero_2==$grupo_H4){$terc_lugar_2=$Gol_PSF_2;}else{$terc_lugar_2=0;}
	if($Clasificado_GF_1==$grupo_H4){$gf_1=$Gol_GSF_1;}else{$gf_1=0;}
	if($Clasificado_GF_2==$grupo_H4){$gf_2=$Gol_GSF_2;}else{$gf_2=0;}
	$Total_Goles_Equipo_H4=$gol_H1H4_H4+$gol_H2H4_H4+$gol_H3H4_H4+$oct_1+$oct_2+$cuart_1+$cuart_2+$sf_1+$sf_2+$terc_lugar_1+$terc_lugar_2+$gf_1+$gf_2;

	$ordenador = array($grupo_A1=>$Total_Goles_Equipo_A1,$grupo_A2=>$Total_Goles_Equipo_A2,$grupo_A3=>$Total_Goles_Equipo_A3,$grupo_A4=>$Total_Goles_Equipo_A4,$grupo_B1=>$Total_Goles_Equipo_B1,$grupo_B2=>$Total_Goles_Equipo_B2,$grupo_B3=>$Total_Goles_Equipo_B3,$grupo_B4=>$Total_Goles_Equipo_B4,$grupo_C1=>$Total_Goles_Equipo_C1,$grupo_C2=>$Total_Goles_Equipo_C2,$grupo_C3=>$Total_Goles_Equipo_C3,$grupo_C4=>$Total_Goles_Equipo_C4,$grupo_D1=>$Total_Goles_Equipo_D1,$grupo_D2=>$Total_Goles_Equipo_D2,$grupo_D3=>$Total_Goles_Equipo_D3,$grupo_D4=>$Total_Goles_Equipo_D4,$grupo_E1=>$Total_Goles_Equipo_E1,$grupo_E2=>$Total_Goles_Equipo_E2,$grupo_E3=>$Total_Goles_Equipo_E3,$grupo_E4=>$Total_Goles_Equipo_E4,$grupo_F1=>$Total_Goles_Equipo_F1,$grupo_F2=>$Total_Goles_Equipo_F2,$grupo_F3=>$Total_Goles_Equipo_F3,$grupo_F4=>$Total_Goles_Equipo_F4,$grupo_G1=>$Total_Goles_Equipo_G1,$grupo_G2=>$Total_Goles_Equipo_G2,$grupo_G3=>$Total_Goles_Equipo_G3,$grupo_G4=>$Total_Goles_Equipo_G4,$grupo_H1=>$Total_Goles_Equipo_H1,$grupo_H2=>$Total_Goles_Equipo_H2,$grupo_H3=>$Total_Goles_Equipo_H3,$grupo_H4=>$Total_Goles_Equipo_H4);
	asort($ordenador);
	foreach ($ordenador as $key => $val){$eq_goleador=$key;}

	$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI'";
	$resultados=mysqli_query($conexion,$consulta);
	$contador08=0;
	while(($fila=mysqli_fetch_array($resultados))==true){
		$contador08=$contador08+1;}
	if($contador08==64){$eq_goleador=$eq_goleador;}else{$eq_goleador='';}

//fin de la mega lumpia del ganador	
	
	echo "<tr>";
	$consulta="SELECT * FROM `ganadores` LIMIT 0,4";
	$resultados=mysqli_query($conexion,$consulta);
	while(($fila=mysqli_fetch_array($resultados))==true){
		$equipo_clasificado=$fila["GANADORES"];
		echo "<td style='background-color:#F7CED5'>$equipo_clasificado</td>";	
	}
	echo "<td style='background-color:#F7CED5'>$eq_goleador</td></tr>";
	
	$consulta="UPDATE `ganadores` SET GANADORES= '$eq_goleador' WHERE ID='5'";
	$resultados=mysqli_query($conexion,$consulta);
	
	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</table>

<h2>MUCHO CUIDADO CON EL BOTÓN DE ABAJO........ QUE BORRA TODO</h2>
<table>

	<tr>
   	<td colspan="4" style="width:600px; background-color:#FFF">Si desea resetear todos los resultados de la quiniela (Jugado="NO") haga click en este botón</td>
   	<td style="width:100px"><form action="QMF2016_Adm_Resultados_Borrar_Todo.php" method="post"><input type="submit" name="borrar_todo" value="Borrar Todo"></form></td>
    </tr>
</table>

</section>

<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>

<?php

/////////////////////////// A PARTIR DE AQUI SE SACAN TODAS LAS SUMATORIAS DE PUNTOS

try{
	require ("conexion.php");

/////////////// OBTENIENDO LOS VALORES DE LAS REGLAS
	
	$consulta="SELECT * FROM `reglas`";
	$resultados=mysqli_query($conexion,$consulta);

	if(($fila=mysqli_fetch_array($resultados))==true){	
		$R1_en_su_pos=$fila["EN_SU_POS"];
		$R1_otra_pos=$fila["OTRA_POS"];
		$R1_gol=$fila["GOL"];
		$R1_gana_result=$fila["GANA_RESULT"];
		$R1_gana_extra=$fila["GANA_EXTRA"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$Oct_en_su_pos=$fila["EN_SU_POS"];
		$Oct_otra_pos=$fila["OTRA_POS"];
		$Oct_gol=$fila["GOL"];
		$Oct_gana_result=$fila["GANA_RESULT"];
		$Oct_gana_extra=$fila["GANA_EXTRA"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$Cto_en_su_pos=$fila["EN_SU_POS"];
		$Cto_otra_pos=$fila["OTRA_POS"];
		$Cto_gol=$fila["GOL"];
		$Cto_gana_result=$fila["GANA_RESULT"];
		$Cto_gana_extra=$fila["GANA_EXTRA"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$SF_en_su_pos=$fila["EN_SU_POS"];
		$SF_otra_pos=$fila["OTRA_POS"];
		$SF_gol=$fila["GOL"];
		$SF_gana_result=$fila["GANA_RESULT"];
		$SF_gana_extra=$fila["GANA_EXTRA"];}				
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$Tcr_en_su_pos=$fila["EN_SU_POS"];
		$Tcr_otra_pos=$fila["OTRA_POS"];
		$Tcr_gol=$fila["GOL"];
		$Tcr_gana_result=$fila["GANA_RESULT"];
		$Tcr_gana_extra=$fila["GANA_EXTRA"];}			
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$GF_en_su_pos=$fila["EN_SU_POS"];
		$GF_otra_pos=$fila["OTRA_POS"];
		$GF_gol=$fila["GOL"];
		$GF_gana_result=$fila["GANA_RESULT"];
		$GF_gana_extra=$fila["GANA_EXTRA"];
		$EQ_Goleador_extra=$fila["EQUIPO_GOLEADOR"];}

/////////////// OBTENIENDO LOS VALORES DE LA BASE DE DATOS DE RESULTADOS REALES

// RESCATANDO EN VARIABLES LOS NOMBRES DE LOS EQUIPOS DE LA BD
	
	$consulta="SELECT * FROM `equipos`";
	$resultados=mysqli_query($conexion,$consulta);
	
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_A1=$fila["EQ1"];
		$grupo_A2=$fila["EQ2"];
		$grupo_A3=$fila["EQ3"];
		$grupo_A4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_B1=$fila["EQ1"];
		$grupo_B2=$fila["EQ2"];
		$grupo_B3=$fila["EQ3"];
		$grupo_B4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_C1=$fila["EQ1"];
		$grupo_C2=$fila["EQ2"];
		$grupo_C3=$fila["EQ3"];
		$grupo_C4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_D1=$fila["EQ1"];
		$grupo_D2=$fila["EQ2"];
		$grupo_D3=$fila["EQ3"];
		$grupo_D4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_E1=$fila["EQ1"];
		$grupo_E2=$fila["EQ2"];
		$grupo_E3=$fila["EQ3"];
		$grupo_E4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_F1=$fila["EQ1"];
		$grupo_F2=$fila["EQ2"];
		$grupo_F3=$fila["EQ3"];
		$grupo_F4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_G1=$fila["EQ1"];
		$grupo_G2=$fila["EQ2"];
		$grupo_G3=$fila["EQ3"];
		$grupo_G4=$fila["EQ4"];}
	if(($fila=mysqli_fetch_array($resultados))==true){	
		$grupo_H1=$fila["EQ1"];
		$grupo_H2=$fila["EQ2"];
		$grupo_H3=$fila["EQ3"];
		$grupo_H4=$fila["EQ4"];}

// DEFINIENDO EN VARIABLES LOS GOLES DE LOS EQUIPOS EN LA PRIMERA RONDA

	$consulta="SELECT * FROM `resultados`";
	$resultados=mysqli_query($conexion,$consulta);

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A1A2_A1=$fil["GOL_1"];
		$gol_A1A2_A2=$fil["GOL_2"];
		$jugado_A1A2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A1A3_A1=$fil["GOL_1"];
		$gol_A1A3_A3=$fil["GOL_2"];
		$jugado_A1A3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A1A4_A1=$fil["GOL_1"];
		$gol_A1A4_A4=$fil["GOL_2"];
		$jugado_A1A4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A2A3_A2=$fil["GOL_1"];
		$gol_A2A3_A3=$fil["GOL_2"];
		$jugado_A2A3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A2A4_A2=$fil["GOL_1"];
		$gol_A2A4_A4=$fil["GOL_2"];
		$jugado_A2A4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_A3A4_A3=$fil["GOL_1"];
		$gol_A3A4_A4=$fil["GOL_2"];
		$jugado_A3A4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B1B2_B1=$fil["GOL_1"];
		$gol_B1B2_B2=$fil["GOL_2"];
		$jugado_B1B2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B1B3_B1=$fil["GOL_1"];
		$gol_B1B3_B3=$fil["GOL_2"];
		$jugado_B1B3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B1B4_B1=$fil["GOL_1"];
		$gol_B1B4_B4=$fil["GOL_2"];
		$jugado_B1B4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B2B3_B2=$fil["GOL_1"];
		$gol_B2B3_B3=$fil["GOL_2"];
		$jugado_B2B3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B2B4_B2=$fil["GOL_1"];
		$gol_B2B4_B4=$fil["GOL_2"];
		$jugado_B2B4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_B3B4_B3=$fil["GOL_1"];
		$gol_B3B4_B4=$fil["GOL_2"];
		$jugado_B3B4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C1C2_C1=$fil["GOL_1"];
		$gol_C1C2_C2=$fil["GOL_2"];
		$jugado_C1C2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C1C3_C1=$fil["GOL_1"];
		$gol_C1C3_C3=$fil["GOL_2"];
		$jugado_C1C3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C1C4_C1=$fil["GOL_1"];
		$gol_C1C4_C4=$fil["GOL_2"];
		$jugado_C1C4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C2C3_C2=$fil["GOL_1"];
		$gol_C2C3_C3=$fil["GOL_2"];
		$jugado_C2C3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C2C4_C2=$fil["GOL_1"];
		$gol_C2C4_C4=$fil["GOL_2"];
		$jugado_C2C4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_C3C4_C3=$fil["GOL_1"];
		$gol_C3C4_C4=$fil["GOL_2"];
		$jugado_C3C4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D1D2_D1=$fil["GOL_1"];
		$gol_D1D2_D2=$fil["GOL_2"];
		$jugado_D1D2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D1D3_D1=$fil["GOL_1"];
		$gol_D1D3_D3=$fil["GOL_2"];
		$jugado_D1D3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D1D4_D1=$fil["GOL_1"];
		$gol_D1D4_D4=$fil["GOL_2"];
		$jugado_D1D4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D2D3_D2=$fil["GOL_1"];
		$gol_D2D3_D3=$fil["GOL_2"];
		$jugado_D2D3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D2D4_D2=$fil["GOL_1"];
		$gol_D2D4_D4=$fil["GOL_2"];
		$jugado_D2D4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_D3D4_D3=$fil["GOL_1"];
		$gol_D3D4_D4=$fil["GOL_2"];
		$jugado_D3D4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E1E2_E1=$fil["GOL_1"];
		$gol_E1E2_E2=$fil["GOL_2"];
		$jugado_E1E2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E1E3_E1=$fil["GOL_1"];
		$gol_E1E3_E3=$fil["GOL_2"];
		$jugado_E1E3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E1E4_E1=$fil["GOL_1"];
		$gol_E1E4_E4=$fil["GOL_2"];
		$jugado_E1E4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E2E3_E2=$fil["GOL_1"];
		$gol_E2E3_E3=$fil["GOL_2"];
		$jugado_E2E3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E2E4_E2=$fil["GOL_1"];
		$gol_E2E4_E4=$fil["GOL_2"];
		$jugado_E2E4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_E3E4_E3=$fil["GOL_1"];
		$gol_E3E4_E4=$fil["GOL_2"];
		$jugado_E3E4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F1F2_F1=$fil["GOL_1"];
		$gol_F1F2_F2=$fil["GOL_2"];
		$jugado_F1F2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F1F3_F1=$fil["GOL_1"];
		$gol_F1F3_F3=$fil["GOL_2"];
		$jugado_F1F3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F1F4_F1=$fil["GOL_1"];
		$gol_F1F4_F4=$fil["GOL_2"];
		$jugado_F1F4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F2F3_F2=$fil["GOL_1"];
		$gol_F2F3_F3=$fil["GOL_2"];
		$jugado_F2F3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F2F4_F2=$fil["GOL_1"];
		$gol_F2F4_F4=$fil["GOL_2"];
		$jugado_F2F4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_F3F4_F3=$fil["GOL_1"];
		$gol_F3F4_F4=$fil["GOL_2"];
		$jugado_F3F4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G1G2_G1=$fil["GOL_1"];
		$gol_G1G2_G2=$fil["GOL_2"];
		$jugado_G1G2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G1G3_G1=$fil["GOL_1"];
		$gol_G1G3_G3=$fil["GOL_2"];
		$jugado_G1G3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G1G4_G1=$fil["GOL_1"];
		$gol_G1G4_G4=$fil["GOL_2"];
		$jugado_G1G4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G2G3_G2=$fil["GOL_1"];
		$gol_G2G3_G3=$fil["GOL_2"];
		$jugado_G2G3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G2G4_G2=$fil["GOL_1"];
		$gol_G2G4_G4=$fil["GOL_2"];
		$jugado_G2G4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_G3G4_G3=$fil["GOL_1"];
		$gol_G3G4_G4=$fil["GOL_2"];
		$jugado_G3G4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H1H2_H1=$fil["GOL_1"];
		$gol_H1H2_H2=$fil["GOL_2"];
		$jugado_H1H2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H1H3_H1=$fil["GOL_1"];
		$gol_H1H3_H3=$fil["GOL_2"];
		$jugado_H1H3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H1H4_H1=$fil["GOL_1"];
		$gol_H1H4_H4=$fil["GOL_2"];
		$jugado_H1H4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H2H3_H2=$fil["GOL_1"];
		$gol_H2H3_H3=$fil["GOL_2"];
		$jugado_H2H3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H2H4_H2=$fil["GOL_1"];
		$gol_H2H4_H4=$fil["GOL_2"];
		$jugado_H2H4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$gol_H3H4_H3=$fil["GOL_1"];
		$gol_H3H4_H4=$fil["GOL_2"];
		$jugado_H3H4=$fil["JUGADO"];}

// DEFINIENDO EN VARIABLES LOS GOLES Y EQUIPOS DE LOS EQUIPOS DE 8° DE FINAL

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_A1=$fil["EQUIPO_1"];
		$Clasificado_B2=$fil["EQUIPO_2"];
		$Gol_Oct_A1=$fil["GOL_1"];
		$Gol_Oct_B2=$fil["GOL_2"];
		$jugado_Oct_1=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_B1=$fil["EQUIPO_1"];
		$Clasificado_A2=$fil["EQUIPO_2"];
		$Gol_Oct_B1=$fil["GOL_1"];
		$Gol_Oct_A2=$fil["GOL_2"];
		$jugado_Oct_2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_C1=$fil["EQUIPO_1"];
		$Clasificado_D2=$fil["EQUIPO_2"];
		$Gol_Oct_C1=$fil["GOL_1"];
		$Gol_Oct_D2=$fil["GOL_2"];
		$jugado_Oct_3=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_D1=$fil["EQUIPO_1"];
		$Clasificado_C2=$fil["EQUIPO_2"];
		$Gol_Oct_D1=$fil["GOL_1"];
		$Gol_Oct_C2=$fil["GOL_2"];
		$jugado_Oct_4=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_E1=$fil["EQUIPO_1"];
		$Clasificado_F2=$fil["EQUIPO_2"];
		$Gol_Oct_E1=$fil["GOL_1"];
		$Gol_Oct_F2=$fil["GOL_2"];
		$jugado_Oct_5=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_F1=$fil["EQUIPO_1"];
		$Clasificado_E2=$fil["EQUIPO_2"];
		$Gol_Oct_F1=$fil["GOL_1"];
		$Gol_Oct_E2=$fil["GOL_2"];
		$jugado_Oct_6=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_G1=$fil["EQUIPO_1"];
		$Clasificado_H2=$fil["EQUIPO_2"];
		$Gol_Oct_G1=$fil["GOL_1"];
		$Gol_Oct_H2=$fil["GOL_2"];
		$jugado_Oct_7=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_H1=$fil["EQUIPO_1"];
		$Clasificado_G2=$fil["EQUIPO_2"];
		$Gol_Oct_H1=$fil["GOL_1"];
		$Gol_Oct_G2=$fil["GOL_2"];
		$jugado_Oct_8=$fil["JUGADO"];}

// DEFINIENDO EN VARIABLES LOS GOLES Y EQUIOS DE LOS EQUIPOS DE 4° DE FINAL

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_81=$fil["EQUIPO_1"];
		$Clasificado_83=$fil["EQUIPO_2"];
		$Gol_Cuart_81=$fil["GOL_1"];
		$Gol_Cuart_83=$fil["GOL_2"];
		$jugado_Cto_1=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_82=$fil["EQUIPO_1"];
		$Clasificado_84=$fil["EQUIPO_2"];
		$Gol_Cuart_82=$fil["GOL_1"];
		$Gol_Cuart_84=$fil["GOL_2"];
		$jugado_Cto_2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_85=$fil["EQUIPO_1"];
		$Clasificado_87=$fil["EQUIPO_2"];
		$Gol_Cuart_85=$fil["GOL_1"];
		$Gol_Cuart_87=$fil["GOL_2"];
		$jugado_Cto_3=$fil["JUGADO"];}		
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_86=$fil["EQUIPO_1"];
		$Clasificado_88=$fil["EQUIPO_2"];
		$Gol_Cuart_86=$fil["GOL_1"];
		$Gol_Cuart_88=$fil["GOL_2"];
		$jugado_Cto_4=$fil["JUGADO"];}					

// DEFINIENDO EN VARIABLES LOS GOLES y EQUIPOS DE SEMIFINALES EN ADELANTE

	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_41=$fil["EQUIPO_1"];
		$Clasificado_43=$fil["EQUIPO_2"];
		$Gol_SF_41=$fil["GOL_1"];
		$Gol_SF_43=$fil["GOL_2"];
		$jugado_SF_1=$fil["JUGADO"];}	
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_42=$fil["EQUIPO_1"];
		$Clasificado_44=$fil["EQUIPO_2"];
		$Gol_SF_42=$fil["GOL_1"];
		$Gol_SF_44=$fil["GOL_2"];
		$jugado_SF_2=$fil["JUGADO"];}
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_Tercero_1=$fil["EQUIPO_1"];
		$Clasificado_Tercero_2=$fil["EQUIPO_2"];
		$Gol_PSF_1=$fil["GOL_1"];
		$Gol_PSF_2=$fil["GOL_2"];
		$jugado_Tcr=$fil["JUGADO"];}			
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$Clasificado_GF_1=$fil["EQUIPO_1"];
		$Clasificado_GF_2=$fil["EQUIPO_2"];
		$Gol_GSF_1=$fil["GOL_1"];
		$Gol_GSF_2=$fil["GOL_2"];
		$jugado_GF=$fil["JUGADO"];}	
		
// DEFINIENDO El EQUIPO CAMPEON

	$consulta="SELECT * FROM `ganadores` WHERE ID='1'";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$eq_campeon=$fil["GANADORES"];}	
				
// DEFINIENDO El EQUIPO GOLEADOR

	$consulta="SELECT * FROM `ganadores` WHERE ID='5'";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$eq_goleador=$fil["GANADORES"];}	
	

/////////////// OBTENIENDO LOS VALORES DE LAS QUINIELAS
	
	$consulta="SELECT * FROM `quinielas` ORDER BY ID";
	$resultados=mysqli_query($conexion,$consulta);

	while(($fil=mysqli_fetch_array($resultados))==true){
	// AQUI SE RESCATA EL ID DE LA QUINIELA DEL USUARIO
		$id=$fil["ID"];
	// AQUI SE RESCATAN TODOS LOS RESULTADOS DE LA QUINIELA DEL USUARIO
		$Quin_gol_A1A2_A1=$fil["J01_GOL_A1"];
		$Quin_gol_A1A2_A2=$fil["J01_GOL_A2"];
		$Quin_gol_A1A3_A1=$fil["J02_GOL_A1"];
		$Quin_gol_A1A3_A3=$fil["J02_GOL_A3"];
		$Quin_gol_A1A4_A1=$fil["J03_GOL_A1"];
		$Quin_gol_A1A4_A4=$fil["J03_GOL_A4"];
		$Quin_gol_A2A3_A2=$fil["J04_GOL_A2"];
		$Quin_gol_A2A3_A3=$fil["J04_GOL_A3"];
		$Quin_gol_A2A4_A2=$fil["J05_GOL_A2"];
		$Quin_gol_A2A4_A4=$fil["J05_GOL_A4"];
		$Quin_gol_A3A4_A3=$fil["J06_GOL_A3"];
		$Quin_gol_A3A4_A4=$fil["J06_GOL_A4"];
		$Quin_gol_B1B2_B1=$fil["J07_GOL_B1"];
		$Quin_gol_B1B2_B2=$fil["J07_GOL_B2"];
		$Quin_gol_B1B3_B1=$fil["J08_GOL_B1"];
		$Quin_gol_B1B3_B3=$fil["J08_GOL_B3"];
		$Quin_gol_B1B4_B1=$fil["J09_GOL_B1"];
		$Quin_gol_B1B4_B4=$fil["J09_GOL_B4"];
		$Quin_gol_B2B3_B2=$fil["J10_GOL_B2"];
		$Quin_gol_B2B3_B3=$fil["J10_GOL_B3"];
		$Quin_gol_B2B4_B2=$fil["J11_GOL_B2"];
		$Quin_gol_B2B4_B4=$fil["J11_GOL_B4"];
		$Quin_gol_B3B4_B3=$fil["J12_GOL_B3"];
		$Quin_gol_B3B4_B4=$fil["J12_GOL_B4"];
		$Quin_gol_C1C2_C1=$fil["J13_GOL_C1"];
		$Quin_gol_C1C2_C2=$fil["J13_GOL_C2"];
		$Quin_gol_C1C3_C1=$fil["J14_GOL_C1"];
		$Quin_gol_C1C3_C3=$fil["J14_GOL_C3"];
		$Quin_gol_C1C4_C1=$fil["J15_GOL_C1"];
		$Quin_gol_C1C4_C4=$fil["J15_GOL_C4"];
		$Quin_gol_C2C3_C2=$fil["J16_GOL_C2"];
		$Quin_gol_C2C3_C3=$fil["J16_GOL_C3"];
		$Quin_gol_C2C4_C2=$fil["J17_GOL_C2"];
		$Quin_gol_C2C4_C4=$fil["J17_GOL_C4"];
		$Quin_gol_C3C4_C3=$fil["J18_GOL_C3"];
		$Quin_gol_C3C4_C4=$fil["J18_GOL_C4"];
		$Quin_gol_D1D2_D1=$fil["J19_GOL_D1"];
		$Quin_gol_D1D2_D2=$fil["J19_GOL_D2"];
		$Quin_gol_D1D3_D1=$fil["J20_GOL_D1"];
		$Quin_gol_D1D3_D3=$fil["J20_GOL_D3"];
		$Quin_gol_D1D4_D1=$fil["J21_GOL_D1"];
		$Quin_gol_D1D4_D4=$fil["J21_GOL_D4"];
		$Quin_gol_D2D3_D2=$fil["J22_GOL_D2"];
		$Quin_gol_D2D3_D3=$fil["J22_GOL_D3"];
		$Quin_gol_D2D4_D2=$fil["J23_GOL_D2"];
		$Quin_gol_D2D4_D4=$fil["J23_GOL_D4"];
		$Quin_gol_D3D4_D3=$fil["J24_GOL_D3"];
		$Quin_gol_D3D4_D4=$fil["J24_GOL_D4"];
		$Quin_gol_E1E2_E1=$fil["J25_GOL_E1"];
		$Quin_gol_E1E2_E2=$fil["J25_GOL_E2"];
		$Quin_gol_E1E3_E1=$fil["J26_GOL_E1"];
		$Quin_gol_E1E3_E3=$fil["J26_GOL_E3"];
		$Quin_gol_E1E4_E1=$fil["J27_GOL_E1"];
		$Quin_gol_E1E4_E4=$fil["J27_GOL_E4"];
		$Quin_gol_E2E3_E2=$fil["J28_GOL_E2"];
		$Quin_gol_E2E3_E3=$fil["J28_GOL_E3"];
		$Quin_gol_E2E4_E2=$fil["J29_GOL_E2"];
		$Quin_gol_E2E4_E4=$fil["J29_GOL_E4"];
		$Quin_gol_E3E4_E3=$fil["J30_GOL_E3"];
		$Quin_gol_E3E4_E4=$fil["J30_GOL_E4"];
		$Quin_gol_F1F2_F1=$fil["J31_GOL_F1"];
		$Quin_gol_F1F2_F2=$fil["J31_GOL_F2"];
		$Quin_gol_F1F3_F1=$fil["J32_GOL_F1"];
		$Quin_gol_F1F3_F3=$fil["J32_GOL_F3"];
		$Quin_gol_F1F4_F1=$fil["J33_GOL_F1"];
		$Quin_gol_F1F4_F4=$fil["J33_GOL_F4"];
		$Quin_gol_F2F3_F2=$fil["J34_GOL_F2"];
		$Quin_gol_F2F3_F3=$fil["J34_GOL_F3"];
		$Quin_gol_F2F4_F2=$fil["J35_GOL_F2"];
		$Quin_gol_F2F4_F4=$fil["J35_GOL_F4"];
		$Quin_gol_F3F4_F3=$fil["J36_GOL_F3"];
		$Quin_gol_F3F4_F4=$fil["J36_GOL_F4"];
		$Quin_gol_G1G2_G1=$fil["J37_GOL_G1"];
		$Quin_gol_G1G2_G2=$fil["J37_GOL_G2"];
		$Quin_gol_G1G3_G1=$fil["J38_GOL_G1"];
		$Quin_gol_G1G3_G3=$fil["J38_GOL_G3"];
		$Quin_gol_G1G4_G1=$fil["J39_GOL_G1"];
		$Quin_gol_G1G4_G4=$fil["J39_GOL_G4"];
		$Quin_gol_G2G3_G2=$fil["J40_GOL_G2"];
		$Quin_gol_G2G3_G3=$fil["J40_GOL_G3"];
		$Quin_gol_G2G4_G2=$fil["J41_GOL_G2"];
		$Quin_gol_G2G4_G4=$fil["J41_GOL_G4"];
		$Quin_gol_G3G4_G3=$fil["J42_GOL_G3"];
		$Quin_gol_G3G4_G4=$fil["J42_GOL_G4"];
		$Quin_gol_H1H2_H1=$fil["J43_GOL_H1"];
		$Quin_gol_H1H2_H2=$fil["J43_GOL_H2"];
		$Quin_gol_H1H3_H1=$fil["J44_GOL_H1"];
		$Quin_gol_H1H3_H3=$fil["J44_GOL_H3"];
		$Quin_gol_H1H4_H1=$fil["J45_GOL_H1"];
		$Quin_gol_H1H4_H4=$fil["J45_GOL_H4"];
		$Quin_gol_H2H3_H2=$fil["J46_GOL_H2"];
		$Quin_gol_H2H3_H3=$fil["J46_GOL_H3"];
		$Quin_gol_H2H4_H2=$fil["J47_GOL_H2"];
		$Quin_gol_H2H4_H4=$fil["J47_GOL_H4"];
		$Quin_gol_H3H4_H3=$fil["J48_GOL_H3"];
		$Quin_gol_H3H4_H4=$fil["J48_GOL_H4"];

		$Quin_Clasificado_A1=$fil["OCT_1_A1"];
		$Quin_Clasificado_B2=$fil["OCT_1_B2"];
		$Quin_Gol_Oct_A1=$fil["GOL_A1"];
		$Quin_Gol_Oct_B2=$fil["GOL_B2"];
		$Quin_Clasificado_B1=$fil["OCT_2_B1"];
		$Quin_Clasificado_A2=$fil["OCT_2_A2"];
		$Quin_Gol_Oct_B1=$fil["GOL_B1"];
		$Quin_Gol_Oct_A2=$fil["GOL_A2"];
		$Quin_Clasificado_C1=$fil["OCT_3_C1"];
		$Quin_Clasificado_D2=$fil["OCT_3_D2"];
		$Quin_Gol_Oct_C1=$fil["GOL_C1"];
		$Quin_Gol_Oct_D2=$fil["GOL_D2"];
		$Quin_Clasificado_D1=$fil["OCT_4_D1"];
		$Quin_Clasificado_C2=$fil["OCT_4_C2"];
		$Quin_Gol_Oct_D1=$fil["GOL_D1"];
		$Quin_Gol_Oct_C2=$fil["GOL_C2"];
		$Quin_Clasificado_E1=$fil["OCT_5_E1"];
		$Quin_Clasificado_F2=$fil["OCT_5_F2"];
		$Quin_Gol_Oct_E1=$fil["GOL_E1"];
		$Quin_Gol_Oct_F2=$fil["GOL_F2"];
		$Quin_Clasificado_F1=$fil["OCT_6_F1"];
		$Quin_Clasificado_E2=$fil["OCT_6_E2"];
		$Quin_Gol_Oct_F1=$fil["GOL_F1"];
		$Quin_Gol_Oct_E2=$fil["GOL_E2"];
		$Quin_Clasificado_G1=$fil["OCT_7_G1"];
		$Quin_Clasificado_H2=$fil["OCT_7_H2"];
		$Quin_Gol_Oct_G1=$fil["GOL_G1"];
		$Quin_Gol_Oct_H2=$fil["GOL_H2"];
		$Quin_Clasificado_H1=$fil["OCT_8_H1"];
		$Quin_Clasificado_G2=$fil["OCT_8_G2"];
		$Quin_Gol_Oct_H1=$fil["GOL_H1"];
		$Quin_Gol_Oct_G2=$fil["GOL_G2"];

		$Quin_Clasificado_81=$fil["CTO_1_OCT_1"];
		$Quin_Clasificado_83=$fil["CTO_1_OCT_3"];
		$Quin_Gol_Cuart_81=$fil["GOL_OCT_1"];
		$Quin_Gol_Cuart_83=$fil["GOL_OCT_3"];
		$Quin_Clasificado_82=$fil["CTO_2_OCT_2"];
		$Quin_Clasificado_84=$fil["CTO_2_OCT_4"];
		$Quin_Gol_Cuart_82=$fil["GOL_OCT_2"];
		$Quin_Gol_Cuart_84=$fil["GOL_OCT_4"];
		$Quin_Clasificado_85=$fil["CTO_3_OCT_5"];
		$Quin_Clasificado_87=$fil["CTO_3_OCT_7"];
		$Quin_Gol_Cuart_85=$fil["GOL_OCT_5"];
		$Quin_Gol_Cuart_87=$fil["GOL_OCT_7"];
		$Quin_Clasificado_86=$fil["CTO_4_OCT_6"];
		$Quin_Clasificado_88=$fil["CTO_4_OCT_8"];
		$Quin_Gol_Cuart_86=$fil["GOL_OCT_6"];
		$Quin_Gol_Cuart_88=$fil["GOL_OCT_8"];

		$Quin_Clasificado_41=$fil["SF1_CTO_1"];
		$Quin_Clasificado_43=$fil["SF1_CTO_3"];
		$Quin_Gol_SF_41=$fil["GOL_CTO_1"];
		$Quin_Gol_SF_43=$fil["GOL_CTO_3"];
		$Quin_Clasificado_42=$fil["SF2_CTO_2"];
		$Quin_Clasificado_44=$fil["SF2_CTO_4"];
		$Quin_Gol_SF_42=$fil["GOL_CTO_2"];
		$Quin_Gol_SF_44=$fil["GOL_CTO_4"];
		$Quin_Clasificado_Tercero_1=$fil["TERCERO_PSF1"];
		$Quin_Clasificado_Tercero_2=$fil["TERCERO_PSF2"];
		$Quin_Gol_PSF_1=$fil["GOL_PSF1"];
		$Quin_Gol_PSF_2=$fil["GOL_PSF2"];
		$Quin_Clasificado_GF_1=$fil["G_F_GSF1"];
		$Quin_Clasificado_GF_2=$fil["G_F_GSF2"];
		$Quin_Gol_GSF_1=$fil["GOL_GSF1"];
		$Quin_Gol_GSF_2=$fil["GOL_GSF2"];
		$Quin_eq_campeon=$fil["CAMPEON"];
		$Quin_eq_goleador=$fil["EQUIPO_GOLEADOR"];

		// Calculando Puntos de los Partidos de la Primera Ronda
		if($jugado_A1A2=="NO"){$ptos_A1A2=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_A1A2_A1==$gol_A1A2_A1){$Ptos_1=$R1_gol;}
			if($Quin_gol_A1A2_A2==$gol_A1A2_A2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_A1A2_A1<$Quin_gol_A1A2_A2 and $gol_A1A2_A1<$gol_A1A2_A2) or 
			   ($Quin_gol_A1A2_A1>$Quin_gol_A1A2_A2 and $gol_A1A2_A1>$gol_A1A2_A2) or 
			   ($Quin_gol_A1A2_A1==$Quin_gol_A1A2_A2 and $gol_A1A2_A1==$gol_A1A2_A2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_A1A2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_A1A3=="NO"){$ptos_A1A3=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_A1A3_A1==$gol_A1A3_A1){$Ptos_1=$R1_gol;}
			if($Quin_gol_A1A3_A3==$gol_A1A3_A3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_A1A3_A1<$Quin_gol_A1A3_A3 and $gol_A1A3_A1<$gol_A1A3_A3) or 
			   ($Quin_gol_A1A3_A1>$Quin_gol_A1A3_A3 and $gol_A1A3_A1>$gol_A1A3_A3) or 
			   ($Quin_gol_A1A3_A1==$Quin_gol_A1A3_A3 and $gol_A1A3_A1==$gol_A1A3_A3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_A1A3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_A1A4=="NO"){$ptos_A1A4=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_A1A4_A1==$gol_A1A4_A1){$Ptos_1=$R1_gol;}
			if($Quin_gol_A1A4_A4==$gol_A1A4_A4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_A1A4_A1<$Quin_gol_A1A4_A4 and $gol_A1A4_A1<$gol_A1A4_A4) or 
			   ($Quin_gol_A1A4_A1>$Quin_gol_A1A4_A4 and $gol_A1A4_A1>$gol_A1A4_A4) or 
			   ($Quin_gol_A1A4_A1==$Quin_gol_A1A4_A4 and $gol_A1A4_A1==$gol_A1A4_A4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_A1A4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_A2A3=="NO"){$ptos_A2A3=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_A2A3_A2==$gol_A2A3_A2){$Ptos_1=$R1_gol;}
			if($Quin_gol_A2A3_A3==$gol_A2A3_A3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_A2A3_A2<$Quin_gol_A2A3_A3 and $gol_A2A3_A2<$gol_A2A3_A3) or 
			   ($Quin_gol_A2A3_A2>$Quin_gol_A2A3_A3 and $gol_A2A3_A2>$gol_A2A3_A3) or 
			   ($Quin_gol_A2A3_A2==$Quin_gol_A2A3_A3 and $gol_A2A3_A2==$gol_A2A3_A3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_A2A3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_A2A4=="NO"){$ptos_A2A4=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_A2A4_A2==$gol_A2A4_A2){$Ptos_1=$R1_gol;}
			if($Quin_gol_A2A4_A4==$gol_A2A4_A4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_A2A4_A2<$Quin_gol_A2A4_A4 and $gol_A2A4_A2<$gol_A2A4_A4) or 
			   ($Quin_gol_A2A4_A2>$Quin_gol_A2A4_A4 and $gol_A2A4_A2>$gol_A2A4_A4) or 
			   ($Quin_gol_A2A4_A2==$Quin_gol_A2A4_A4 and $gol_A2A4_A2==$gol_A2A4_A4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_A2A4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_A3A4=="NO"){$ptos_A3A4=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_A3A4_A3==$gol_A3A4_A3){$Ptos_1=$R1_gol;}
			if($Quin_gol_A3A4_A4==$gol_A3A4_A4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_A3A4_A3<$Quin_gol_A3A4_A4 and $gol_A3A4_A3<$gol_A3A4_A4) or 
			   ($Quin_gol_A3A4_A3>$Quin_gol_A3A4_A4 and $gol_A3A4_A3>$gol_A3A4_A4) or 
			   ($Quin_gol_A3A4_A3==$Quin_gol_A3A4_A4 and $gol_A3A4_A3==$gol_A3A4_A4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_A3A4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_B1B2=="NO"){$ptos_B1B2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_B1B2_B1==$gol_B1B2_B1){$Ptos_1=$R1_gol;}
			if($Quin_gol_B1B2_B2==$gol_B1B2_B2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_B1B2_B1<$Quin_gol_B1B2_B2 and $gol_B1B2_B1<$gol_B1B2_B2) or 
			   ($Quin_gol_B1B2_B1>$Quin_gol_B1B2_B2 and $gol_B1B2_B1>$gol_B1B2_B2) or 
			   ($Quin_gol_B1B2_B1==$Quin_gol_B1B2_B2 and $gol_B1B2_B1==$gol_B1B2_B2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_B1B2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_B1B3=="NO"){$ptos_B1B3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_B1B3_B1==$gol_B1B3_B1){$Ptos_1=$R1_gol;}
			if($Quin_gol_B1B3_B3==$gol_B1B3_B3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_B1B3_B1<$Quin_gol_B1B3_B3 and $gol_B1B3_B1<$gol_B1B3_B3) or 
			   ($Quin_gol_B1B3_B1>$Quin_gol_B1B3_B3 and $gol_B1B3_B1>$gol_B1B3_B3) or 
			   ($Quin_gol_B1B3_B1==$Quin_gol_B1B3_B3 and $gol_B1B3_B1==$gol_B1B3_B3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_B1B3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_B1B4=="NO"){$ptos_B1B4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_B1B4_B1==$gol_B1B4_B1){$Ptos_1=$R1_gol;}
			if($Quin_gol_B1B4_B4==$gol_B1B4_B4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_B1B4_B1<$Quin_gol_B1B4_B4 and $gol_B1B4_B1<$gol_B1B4_B4) or 
			   ($Quin_gol_B1B4_B1>$Quin_gol_B1B4_B4 and $gol_B1B4_B1>$gol_B1B4_B4) or 
			   ($Quin_gol_B1B4_B1==$Quin_gol_B1B4_B4 and $gol_B1B4_B1==$gol_B1B4_B4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_B1B4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_B2B3=="NO"){$ptos_B2B3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_B2B3_B2==$gol_B2B3_B2){$Ptos_1=$R1_gol;}
			if($Quin_gol_B2B3_B3==$gol_B2B3_B3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_B2B3_B2<$Quin_gol_B2B3_B3 and $gol_B2B3_B2<$gol_B2B3_B3) or 
			   ($Quin_gol_B2B3_B2>$Quin_gol_B2B3_B3 and $gol_B2B3_B2>$gol_B2B3_B3) or 
			   ($Quin_gol_B2B3_B2==$Quin_gol_B2B3_B3 and $gol_B2B3_B2==$gol_B2B3_B3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_B2B3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_B2B4=="NO"){$ptos_B2B4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_B2B4_B2==$gol_B2B4_B2){$Ptos_1=$R1_gol;}
			if($Quin_gol_B2B4_B4==$gol_B2B4_B4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_B2B4_B2<$Quin_gol_B2B4_B4 and $gol_B2B4_B2<$gol_B2B4_B4) or 
			   ($Quin_gol_B2B4_B2>$Quin_gol_B2B4_B4 and $gol_B2B4_B2>$gol_B2B4_B4) or 
			   ($Quin_gol_B2B4_B2==$Quin_gol_B2B4_B4 and $gol_B2B4_B2==$gol_B2B4_B4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_B2B4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_B3B4=="NO"){$ptos_B3B4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_B3B4_B3==$gol_B3B4_B3){$Ptos_1=$R1_gol;}
			if($Quin_gol_B3B4_B4==$gol_B3B4_B4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_B3B4_B3<$Quin_gol_B3B4_B4 and $gol_B3B4_B3<$gol_B3B4_B4) or 
			   ($Quin_gol_B3B4_B3>$Quin_gol_B3B4_B4 and $gol_B3B4_B3>$gol_B3B4_B4) or 
			   ($Quin_gol_B3B4_B3==$Quin_gol_B3B4_B4 and $gol_B3B4_B3==$gol_B3B4_B4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_B3B4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_C1C2=="NO"){$ptos_C1C2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_C1C2_C1==$gol_C1C2_C1){$Ptos_1=$R1_gol;}
			if($Quin_gol_C1C2_C2==$gol_C1C2_C2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_C1C2_C1<$Quin_gol_C1C2_C2 and $gol_C1C2_C1<$gol_C1C2_C2) or 
			   ($Quin_gol_C1C2_C1>$Quin_gol_C1C2_C2 and $gol_C1C2_C1>$gol_C1C2_C2) or 
			   ($Quin_gol_C1C2_C1==$Quin_gol_C1C2_C2 and $gol_C1C2_C1==$gol_C1C2_C2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_C1C2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_C1C3=="NO"){$ptos_C1C3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_C1C3_C1==$gol_C1C3_C1){$Ptos_1=$R1_gol;}
			if($Quin_gol_C1C3_C3==$gol_C1C3_C3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_C1C3_C1<$Quin_gol_C1C3_C3 and $gol_C1C3_C1<$gol_C1C3_C3) or 
			   ($Quin_gol_C1C3_C1>$Quin_gol_C1C3_C3 and $gol_C1C3_C1>$gol_C1C3_C3) or 
			   ($Quin_gol_C1C3_C1==$Quin_gol_C1C3_C3 and $gol_C1C3_C1==$gol_C1C3_C3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_C1C3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_C1C4=="NO"){$ptos_C1C4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_C1C4_C1==$gol_C1C4_C1){$Ptos_1=$R1_gol;}
			if($Quin_gol_C1C4_C4==$gol_C1C4_C4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_C1C4_C1<$Quin_gol_C1C4_C4 and $gol_C1C4_C1<$gol_C1C4_C4) or 
			   ($Quin_gol_C1C4_C1>$Quin_gol_C1C4_C4 and $gol_C1C4_C1>$gol_C1C4_C4) or 
			   ($Quin_gol_C1C4_C1==$Quin_gol_C1C4_C4 and $gol_C1C4_C1==$gol_C1C4_C4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_C1C4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_C2C3=="NO"){$ptos_C2C3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_C2C3_C2==$gol_C2C3_C2){$Ptos_1=$R1_gol;}
			if($Quin_gol_C2C3_C3==$gol_C2C3_C3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_C2C3_C2<$Quin_gol_C2C3_C3 and $gol_C2C3_C2<$gol_C2C3_C3) or 
			   ($Quin_gol_C2C3_C2>$Quin_gol_C2C3_C3 and $gol_C2C3_C2>$gol_C2C3_C3) or 
			   ($Quin_gol_C2C3_C2==$Quin_gol_C2C3_C3 and $gol_C2C3_C2==$gol_C2C3_C3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_C2C3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_C2C4=="NO"){$ptos_C2C4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_C2C4_C2==$gol_C2C4_C2){$Ptos_1=$R1_gol;}
			if($Quin_gol_C2C4_C4==$gol_C2C4_C4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_C2C4_C2<$Quin_gol_C2C4_C4 and $gol_C2C4_C2<$gol_C2C4_C4) or 
			   ($Quin_gol_C2C4_C2>$Quin_gol_C2C4_C4 and $gol_C2C4_C2>$gol_C2C4_C4) or 
			   ($Quin_gol_C2C4_C2==$Quin_gol_C2C4_C4 and $gol_C2C4_C2==$gol_C2C4_C4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_C2C4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_C3C4=="NO"){$ptos_C3C4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_C3C4_C3==$gol_C3C4_C3){$Ptos_1=$R1_gol;}
			if($Quin_gol_C3C4_C4==$gol_C3C4_C4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_C3C4_C3<$Quin_gol_C3C4_C4 and $gol_C3C4_C3<$gol_C3C4_C4) or 
			   ($Quin_gol_C3C4_C3>$Quin_gol_C3C4_C4 and $gol_C3C4_C3>$gol_C3C4_C4) or 
			   ($Quin_gol_C3C4_C3==$Quin_gol_C3C4_C4 and $gol_C3C4_C3==$gol_C3C4_C4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_C3C4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_D1D2=="NO"){$ptos_D1D2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_D1D2_D1==$gol_D1D2_D1){$Ptos_1=$R1_gol;}
			if($Quin_gol_D1D2_D2==$gol_D1D2_D2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_D1D2_D1<$Quin_gol_D1D2_D2 and $gol_D1D2_D1<$gol_D1D2_D2) or 
			   ($Quin_gol_D1D2_D1>$Quin_gol_D1D2_D2 and $gol_D1D2_D1>$gol_D1D2_D2) or 
			   ($Quin_gol_D1D2_D1==$Quin_gol_D1D2_D2 and $gol_D1D2_D1==$gol_D1D2_D2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_D1D2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_D1D3=="NO"){$ptos_D1D3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_D1D3_D1==$gol_D1D3_D1){$Ptos_1=$R1_gol;}
			if($Quin_gol_D1D3_D3==$gol_D1D3_D3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_D1D3_D1<$Quin_gol_D1D3_D3 and $gol_D1D3_D1<$gol_D1D3_D3) or 
			   ($Quin_gol_D1D3_D1>$Quin_gol_D1D3_D3 and $gol_D1D3_D1>$gol_D1D3_D3) or 
			   ($Quin_gol_D1D3_D1==$Quin_gol_D1D3_D3 and $gol_D1D3_D1==$gol_D1D3_D3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_D1D3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_D1D4=="NO"){$ptos_D1D4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_D1D4_D1==$gol_D1D4_D1){$Ptos_1=$R1_gol;}
			if($Quin_gol_D1D4_D4==$gol_D1D4_D4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_D1D4_D1<$Quin_gol_D1D4_D4 and $gol_D1D4_D1<$gol_D1D4_D4) or 
			   ($Quin_gol_D1D4_D1>$Quin_gol_D1D4_D4 and $gol_D1D4_D1>$gol_D1D4_D4) or 
			   ($Quin_gol_D1D4_D1==$Quin_gol_D1D4_D4 and $gol_D1D4_D1==$gol_D1D4_D4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_D1D4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_D2D3=="NO"){$ptos_D2D3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_D2D3_D2==$gol_D2D3_D2){$Ptos_1=$R1_gol;}
			if($Quin_gol_D2D3_D3==$gol_D2D3_D3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_D2D3_D2<$Quin_gol_D2D3_D3 and $gol_D2D3_D2<$gol_D2D3_D3) or 
			   ($Quin_gol_D2D3_D2>$Quin_gol_D2D3_D3 and $gol_D2D3_D2>$gol_D2D3_D3) or 
			   ($Quin_gol_D2D3_D2==$Quin_gol_D2D3_D3 and $gol_D2D3_D2==$gol_D2D3_D3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_D2D3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_D2D4=="NO"){$ptos_D2D4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_D2D4_D2==$gol_D2D4_D2){$Ptos_1=$R1_gol;}
			if($Quin_gol_D2D4_D4==$gol_D2D4_D4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_D2D4_D2<$Quin_gol_D2D4_D4 and $gol_D2D4_D2<$gol_D2D4_D4) or 
			   ($Quin_gol_D2D4_D2>$Quin_gol_D2D4_D4 and $gol_D2D4_D2>$gol_D2D4_D4) or 
			   ($Quin_gol_D2D4_D2==$Quin_gol_D2D4_D4 and $gol_D2D4_D2==$gol_D2D4_D4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_D2D4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_D3D4=="NO"){$ptos_D3D4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_D3D4_D3==$gol_D3D4_D3){$Ptos_1=$R1_gol;}
			if($Quin_gol_D3D4_D4==$gol_D3D4_D4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_D3D4_D3<$Quin_gol_D3D4_D4 and $gol_D3D4_D3<$gol_D3D4_D4) or 
			   ($Quin_gol_D3D4_D3>$Quin_gol_D3D4_D4 and $gol_D3D4_D3>$gol_D3D4_D4) or 
			   ($Quin_gol_D3D4_D3==$Quin_gol_D3D4_D4 and $gol_D3D4_D3==$gol_D3D4_D4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_D3D4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_E1E2=="NO"){$ptos_E1E2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_E1E2_E1==$gol_E1E2_E1){$Ptos_1=$R1_gol;}
			if($Quin_gol_E1E2_E2==$gol_E1E2_E2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_E1E2_E1<$Quin_gol_E1E2_E2 and $gol_E1E2_E1<$gol_E1E2_E2) or 
			   ($Quin_gol_E1E2_E1>$Quin_gol_E1E2_E2 and $gol_E1E2_E1>$gol_E1E2_E2) or 
			   ($Quin_gol_E1E2_E1==$Quin_gol_E1E2_E2 and $gol_E1E2_E1==$gol_E1E2_E2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_E1E2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_E1E3=="NO"){$ptos_E1E3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_E1E3_E1==$gol_E1E3_E1){$Ptos_1=$R1_gol;}
			if($Quin_gol_E1E3_E3==$gol_E1E3_E3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_E1E3_E1<$Quin_gol_E1E3_E3 and $gol_E1E3_E1<$gol_E1E3_E3) or 
			   ($Quin_gol_E1E3_E1>$Quin_gol_E1E3_E3 and $gol_E1E3_E1>$gol_E1E3_E3) or 
			   ($Quin_gol_E1E3_E1==$Quin_gol_E1E3_E3 and $gol_E1E3_E1==$gol_E1E3_E3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_E1E3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_E1E4=="NO"){$ptos_E1E4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_E1E4_E1==$gol_E1E4_E1){$Ptos_1=$R1_gol;}
			if($Quin_gol_E1E4_E4==$gol_E1E4_E4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_E1E4_E1<$Quin_gol_E1E4_E4 and $gol_E1E4_E1<$gol_E1E4_E4) or 
			   ($Quin_gol_E1E4_E1>$Quin_gol_E1E4_E4 and $gol_E1E4_E1>$gol_E1E4_E4) or 
			   ($Quin_gol_E1E4_E1==$Quin_gol_E1E4_E4 and $gol_E1E4_E1==$gol_E1E4_E4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_E1E4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_E2E3=="NO"){$ptos_E2E3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_E2E3_E2==$gol_E2E3_E2){$Ptos_1=$R1_gol;}
			if($Quin_gol_E2E3_E3==$gol_E2E3_E3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_E2E3_E2<$Quin_gol_E2E3_E3 and $gol_E2E3_E2<$gol_E2E3_E3) or 
			   ($Quin_gol_E2E3_E2>$Quin_gol_E2E3_E3 and $gol_E2E3_E2>$gol_E2E3_E3) or 
			   ($Quin_gol_E2E3_E2==$Quin_gol_E2E3_E3 and $gol_E2E3_E2==$gol_E2E3_E3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_E2E3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_E2E4=="NO"){$ptos_E2E4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_E2E4_E2==$gol_E2E4_E2){$Ptos_1=$R1_gol;}
			if($Quin_gol_E2E4_E4==$gol_E2E4_E4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_E2E4_E2<$Quin_gol_E2E4_E4 and $gol_E2E4_E2<$gol_E2E4_E4) or 
			   ($Quin_gol_E2E4_E2>$Quin_gol_E2E4_E4 and $gol_E2E4_E2>$gol_E2E4_E4) or 
			   ($Quin_gol_E2E4_E2==$Quin_gol_E2E4_E4 and $gol_E2E4_E2==$gol_E2E4_E4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_E2E4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_E3E4=="NO"){$ptos_E3E4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_E3E4_E3==$gol_E3E4_E3){$Ptos_1=$R1_gol;}
			if($Quin_gol_E3E4_E4==$gol_E3E4_E4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_E3E4_E3<$Quin_gol_E3E4_E4 and $gol_E3E4_E3<$gol_E3E4_E4) or 
			   ($Quin_gol_E3E4_E3>$Quin_gol_E3E4_E4 and $gol_E3E4_E3>$gol_E3E4_E4) or 
			   ($Quin_gol_E3E4_E3==$Quin_gol_E3E4_E4 and $gol_E3E4_E3==$gol_E3E4_E4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_E3E4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_F1F2=="NO"){$ptos_F1F2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_F1F2_F1==$gol_F1F2_F1){$Ptos_1=$R1_gol;}
			if($Quin_gol_F1F2_F2==$gol_F1F2_F2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_F1F2_F1<$Quin_gol_F1F2_F2 and $gol_F1F2_F1<$gol_F1F2_F2) or 
			   ($Quin_gol_F1F2_F1>$Quin_gol_F1F2_F2 and $gol_F1F2_F1>$gol_F1F2_F2) or 
			   ($Quin_gol_F1F2_F1==$Quin_gol_F1F2_F2 and $gol_F1F2_F1==$gol_F1F2_F2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_F1F2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_F1F3=="NO"){$ptos_F1F3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_F1F3_F1==$gol_F1F3_F1){$Ptos_1=$R1_gol;}
			if($Quin_gol_F1F3_F3==$gol_F1F3_F3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_F1F3_F1<$Quin_gol_F1F3_F3 and $gol_F1F3_F1<$gol_F1F3_F3) or 
			   ($Quin_gol_F1F3_F1>$Quin_gol_F1F3_F3 and $gol_F1F3_F1>$gol_F1F3_F3) or 
			   ($Quin_gol_F1F3_F1==$Quin_gol_F1F3_F3 and $gol_F1F3_F1==$gol_F1F3_F3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_F1F3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_F1F4=="NO"){$ptos_F1F4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_F1F4_F1==$gol_F1F4_F1){$Ptos_1=$R1_gol;}
			if($Quin_gol_F1F4_F4==$gol_F1F4_F4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_F1F4_F1<$Quin_gol_F1F4_F4 and $gol_F1F4_F1<$gol_F1F4_F4) or 
			   ($Quin_gol_F1F4_F1>$Quin_gol_F1F4_F4 and $gol_F1F4_F1>$gol_F1F4_F4) or 
			   ($Quin_gol_F1F4_F1==$Quin_gol_F1F4_F4 and $gol_F1F4_F1==$gol_F1F4_F4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_F1F4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_F2F3=="NO"){$ptos_F2F3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_F2F3_F2==$gol_F2F3_F2){$Ptos_1=$R1_gol;}
			if($Quin_gol_F2F3_F3==$gol_F2F3_F3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_F2F3_F2<$Quin_gol_F2F3_F3 and $gol_F2F3_F2<$gol_F2F3_F3) or 
			   ($Quin_gol_F2F3_F2>$Quin_gol_F2F3_F3 and $gol_F2F3_F2>$gol_F2F3_F3) or 
			   ($Quin_gol_F2F3_F2==$Quin_gol_F2F3_F3 and $gol_F2F3_F2==$gol_F2F3_F3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_F2F3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_F2F4=="NO"){$ptos_F2F4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_F2F4_F2==$gol_F2F4_F2){$Ptos_1=$R1_gol;}
			if($Quin_gol_F2F4_F4==$gol_F2F4_F4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_F2F4_F2<$Quin_gol_F2F4_F4 and $gol_F2F4_F2<$gol_F2F4_F4) or 
			   ($Quin_gol_F2F4_F2>$Quin_gol_F2F4_F4 and $gol_F2F4_F2>$gol_F2F4_F4) or 
			   ($Quin_gol_F2F4_F2==$Quin_gol_F2F4_F4 and $gol_F2F4_F2==$gol_F2F4_F4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_F2F4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_F3F4=="NO"){$ptos_F3F4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_F3F4_F3==$gol_F3F4_F3){$Ptos_1=$R1_gol;}
			if($Quin_gol_F3F4_F4==$gol_F3F4_F4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_F3F4_F3<$Quin_gol_F3F4_F4 and $gol_F3F4_F3<$gol_F3F4_F4) or 
			   ($Quin_gol_F3F4_F3>$Quin_gol_F3F4_F4 and $gol_F3F4_F3>$gol_F3F4_F4) or 
			   ($Quin_gol_F3F4_F3==$Quin_gol_F3F4_F4 and $gol_F3F4_F3==$gol_F3F4_F4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_F3F4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_G1G2=="NO"){$ptos_G1G2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_G1G2_G1==$gol_G1G2_G1){$Ptos_1=$R1_gol;}
			if($Quin_gol_G1G2_G2==$gol_G1G2_G2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_G1G2_G1<$Quin_gol_G1G2_G2 and $gol_G1G2_G1<$gol_G1G2_G2) or 
			   ($Quin_gol_G1G2_G1>$Quin_gol_G1G2_G2 and $gol_G1G2_G1>$gol_G1G2_G2) or 
			   ($Quin_gol_G1G2_G1==$Quin_gol_G1G2_G2 and $gol_G1G2_G1==$gol_G1G2_G2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_G1G2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_G1G3=="NO"){$ptos_G1G3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_G1G3_G1==$gol_G1G3_G1){$Ptos_1=$R1_gol;}
			if($Quin_gol_G1G3_G3==$gol_G1G3_G3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_G1G3_G1<$Quin_gol_G1G3_G3 and $gol_G1G3_G1<$gol_G1G3_G3) or 
			   ($Quin_gol_G1G3_G1>$Quin_gol_G1G3_G3 and $gol_G1G3_G1>$gol_G1G3_G3) or 
			   ($Quin_gol_G1G3_G1==$Quin_gol_G1G3_G3 and $gol_G1G3_G1==$gol_G1G3_G3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_G1G3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_G1G4=="NO"){$ptos_G1G4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_G1G4_G1==$gol_G1G4_G1){$Ptos_1=$R1_gol;}
			if($Quin_gol_G1G4_G4==$gol_G1G4_G4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_G1G4_G1<$Quin_gol_G1G4_G4 and $gol_G1G4_G1<$gol_G1G4_G4) or 
			   ($Quin_gol_G1G4_G1>$Quin_gol_G1G4_G4 and $gol_G1G4_G1>$gol_G1G4_G4) or 
			   ($Quin_gol_G1G4_G1==$Quin_gol_G1G4_G4 and $gol_G1G4_G1==$gol_G1G4_G4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_G1G4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_G2G3=="NO"){$ptos_G2G3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_G2G3_G2==$gol_G2G3_G2){$Ptos_1=$R1_gol;}
			if($Quin_gol_G2G3_G3==$gol_G2G3_G3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_G2G3_G2<$Quin_gol_G2G3_G3 and $gol_G2G3_G2<$gol_G2G3_G3) or 
			   ($Quin_gol_G2G3_G2>$Quin_gol_G2G3_G3 and $gol_G2G3_G2>$gol_G2G3_G3) or 
			   ($Quin_gol_G2G3_G2==$Quin_gol_G2G3_G3 and $gol_G2G3_G2==$gol_G2G3_G3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_G2G3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_G2G4=="NO"){$ptos_G2G4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_G2G4_G2==$gol_G2G4_G2){$Ptos_1=$R1_gol;}
			if($Quin_gol_G2G4_G4==$gol_G2G4_G4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_G2G4_G2<$Quin_gol_G2G4_G4 and $gol_G2G4_G2<$gol_G2G4_G4) or 
			   ($Quin_gol_G2G4_G2>$Quin_gol_G2G4_G4 and $gol_G2G4_G2>$gol_G2G4_G4) or 
			   ($Quin_gol_G2G4_G2==$Quin_gol_G2G4_G4 and $gol_G2G4_G2==$gol_G2G4_G4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_G2G4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_G3G4=="NO"){$ptos_G3G4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_G3G4_G3==$gol_G3G4_G3){$Ptos_1=$R1_gol;}
			if($Quin_gol_G3G4_G4==$gol_G3G4_G4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_G3G4_G3<$Quin_gol_G3G4_G4 and $gol_G3G4_G3<$gol_G3G4_G4) or 
			   ($Quin_gol_G3G4_G3>$Quin_gol_G3G4_G4 and $gol_G3G4_G3>$gol_G3G4_G4) or 
			   ($Quin_gol_G3G4_G3==$Quin_gol_G3G4_G4 and $gol_G3G4_G3==$gol_G3G4_G4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_G3G4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_H1H2=="NO"){$ptos_H1H2=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_H1H2_H1==$gol_H1H2_H1){$Ptos_1=$R1_gol;}
			if($Quin_gol_H1H2_H2==$gol_H1H2_H2){$Ptos_2=$R1_gol;}
			if(($Quin_gol_H1H2_H1<$Quin_gol_H1H2_H2 and $gol_H1H2_H1<$gol_H1H2_H2) or 
			   ($Quin_gol_H1H2_H1>$Quin_gol_H1H2_H2 and $gol_H1H2_H1>$gol_H1H2_H2) or 
			   ($Quin_gol_H1H2_H1==$Quin_gol_H1H2_H2 and $gol_H1H2_H1==$gol_H1H2_H2))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_H1H2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_H1H3=="NO"){$ptos_H1H3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_H1H3_H1==$gol_H1H3_H1){$Ptos_1=$R1_gol;}
			if($Quin_gol_H1H3_H3==$gol_H1H3_H3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_H1H3_H1<$Quin_gol_H1H3_H3 and $gol_H1H3_H1<$gol_H1H3_H3) or 
			   ($Quin_gol_H1H3_H1>$Quin_gol_H1H3_H3 and $gol_H1H3_H1>$gol_H1H3_H3) or 
			   ($Quin_gol_H1H3_H1==$Quin_gol_H1H3_H3 and $gol_H1H3_H1==$gol_H1H3_H3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_H1H3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_H1H4=="NO"){$ptos_H1H4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_H1H4_H1==$gol_H1H4_H1){$Ptos_1=$R1_gol;}
			if($Quin_gol_H1H4_H4==$gol_H1H4_H4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_H1H4_H1<$Quin_gol_H1H4_H4 and $gol_H1H4_H1<$gol_H1H4_H4) or 
			   ($Quin_gol_H1H4_H1>$Quin_gol_H1H4_H4 and $gol_H1H4_H1>$gol_H1H4_H4) or 
			   ($Quin_gol_H1H4_H1==$Quin_gol_H1H4_H4 and $gol_H1H4_H1==$gol_H1H4_H4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_H1H4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_H2H3=="NO"){$ptos_H2H3=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_H2H3_H2==$gol_H2H3_H2){$Ptos_1=$R1_gol;}
			if($Quin_gol_H2H3_H3==$gol_H2H3_H3){$Ptos_2=$R1_gol;}
			if(($Quin_gol_H2H3_H2<$Quin_gol_H2H3_H3 and $gol_H2H3_H2<$gol_H2H3_H3) or 
			   ($Quin_gol_H2H3_H2>$Quin_gol_H2H3_H3 and $gol_H2H3_H2>$gol_H2H3_H3) or 
			   ($Quin_gol_H2H3_H2==$Quin_gol_H2H3_H3 and $gol_H2H3_H2==$gol_H2H3_H3))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_H2H3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_H2H4=="NO"){$ptos_H2H4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_H2H4_H2==$gol_H2H4_H2){$Ptos_1=$R1_gol;}
			if($Quin_gol_H2H4_H4==$gol_H2H4_H4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_H2H4_H2<$Quin_gol_H2H4_H4 and $gol_H2H4_H2<$gol_H2H4_H4) or 
			   ($Quin_gol_H2H4_H2>$Quin_gol_H2H4_H4 and $gol_H2H4_H2>$gol_H2H4_H4) or 
			   ($Quin_gol_H2H4_H2==$Quin_gol_H2H4_H4 and $gol_H2H4_H2==$gol_H2H4_H4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_H2H4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_H3H4=="NO"){$ptos_H3H4=0;}else{	
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_gol_H3H4_H3==$gol_H3H4_H3){$Ptos_1=$R1_gol;}
			if($Quin_gol_H3H4_H4==$gol_H3H4_H4){$Ptos_2=$R1_gol;}
			if(($Quin_gol_H3H4_H3<$Quin_gol_H3H4_H4 and $gol_H3H4_H3<$gol_H3H4_H4) or 
			   ($Quin_gol_H3H4_H3>$Quin_gol_H3H4_H4 and $gol_H3H4_H3>$gol_H3H4_H4) or 
			   ($Quin_gol_H3H4_H3==$Quin_gol_H3H4_H4 and $gol_H3H4_H3==$gol_H3H4_H4))
			   {$Ptos_3=$R1_gana_result;}
			   $ptos_H3H4=$Ptos_1+$Ptos_2+$Ptos_3;}

		// Calculando los Puntos por pase de equipos a Octavos de Final (En Su Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI"){
			$ptos_81=0;$ptos_82=0;$ptos_83=0;$ptos_84=0;
			$ptos_85=0;$ptos_86=0;$ptos_87=0;$ptos_88=0;
			$ptos_89=0;$ptos_810=0;$ptos_811=0;$ptos_812=0;
			$ptos_813=0;$ptos_814=0;$ptos_815=0;$ptos_816=0;
			if($Quin_Clasificado_A1==$Clasificado_A1){$ptos_81=$Oct_en_su_pos;}
			if($Quin_Clasificado_B2==$Clasificado_B2){$ptos_82=$Oct_en_su_pos;}
			if($Quin_Clasificado_B1==$Clasificado_B1){$ptos_83=$Oct_en_su_pos;}
			if($Quin_Clasificado_A2==$Clasificado_A2){$ptos_84=$Oct_en_su_pos;}
			if($Quin_Clasificado_C1==$Clasificado_C1){$ptos_85=$Oct_en_su_pos;}
			if($Quin_Clasificado_D2==$Clasificado_D2){$ptos_86=$Oct_en_su_pos;}
			if($Quin_Clasificado_D1==$Clasificado_D1){$ptos_87=$Oct_en_su_pos;}
			if($Quin_Clasificado_C2==$Clasificado_C2){$ptos_88=$Oct_en_su_pos;}
			if($Quin_Clasificado_E1==$Clasificado_E1){$ptos_89=$Oct_en_su_pos;}
			if($Quin_Clasificado_F2==$Clasificado_F2){$ptos_810=$Oct_en_su_pos;}
			if($Quin_Clasificado_F1==$Clasificado_F1){$ptos_811=$Oct_en_su_pos;}
			if($Quin_Clasificado_E2==$Clasificado_E2){$ptos_812=$Oct_en_su_pos;}
			if($Quin_Clasificado_G1==$Clasificado_G1){$ptos_813=$Oct_en_su_pos;}
			if($Quin_Clasificado_H2==$Clasificado_H2){$ptos_814=$Oct_en_su_pos;}
			if($Quin_Clasificado_H1==$Clasificado_H1){$ptos_815=$Oct_en_su_pos;}
			if($Quin_Clasificado_G2==$Clasificado_G2){$ptos_816=$Oct_en_su_pos;}
			$ptos_oct_en_su_pos=$ptos_81+$ptos_82+$ptos_83+$ptos_84+$ptos_85+$ptos_86+$ptos_87+$ptos_88+$ptos_89+$ptos_810+$ptos_811+$ptos_812+$ptos_813+$ptos_814+$ptos_815+$ptos_816;
			}else{$ptos_oct_en_su_pos=0;}

		// Calculando los Puntos por pase de equipos a Octasvos de Final (En Otra Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI"){
			$ptos_81=0;$ptos_82=0;$ptos_83=0;$ptos_84=0;
			$ptos_85=0;$ptos_86=0;$ptos_87=0;$ptos_88=0;
			$ptos_89=0;$ptos_810=0;$ptos_811=0;$ptos_812=0;
			$ptos_813=0;$ptos_814=0;$ptos_815=0;$ptos_816=0;
			if($Quin_Clasificado_A1==$Clasificado_A2){$ptos_81=$Oct_otra_pos;}
			if($Quin_Clasificado_B2==$Clasificado_B1){$ptos_82=$Oct_otra_pos;}
			if($Quin_Clasificado_B1==$Clasificado_B2){$ptos_83=$Oct_otra_pos;}
			if($Quin_Clasificado_A2==$Clasificado_A1){$ptos_84=$Oct_otra_pos;}
			if($Quin_Clasificado_C1==$Clasificado_C2){$ptos_85=$Oct_otra_pos;}
			if($Quin_Clasificado_D2==$Clasificado_D1){$ptos_86=$Oct_otra_pos;}
			if($Quin_Clasificado_D1==$Clasificado_D2){$ptos_87=$Oct_otra_pos;}
			if($Quin_Clasificado_C2==$Clasificado_C1){$ptos_88=$Oct_otra_pos;}
			if($Quin_Clasificado_E1==$Clasificado_E2){$ptos_89=$Oct_otra_pos;}
			if($Quin_Clasificado_F2==$Clasificado_F1){$ptos_810=$Oct_otra_pos;}
			if($Quin_Clasificado_F1==$Clasificado_F2){$ptos_811=$Oct_otra_pos;}
			if($Quin_Clasificado_E2==$Clasificado_E1){$ptos_812=$Oct_otra_pos;}
			if($Quin_Clasificado_G1==$Clasificado_G2){$ptos_813=$Oct_otra_pos;}
			if($Quin_Clasificado_H2==$Clasificado_H1){$ptos_814=$Oct_otra_pos;}
			if($Quin_Clasificado_H1==$Clasificado_H2){$ptos_815=$Oct_otra_pos;}
			if($Quin_Clasificado_G2==$Clasificado_G1){$ptos_816=$Oct_otra_pos;}
			$ptos_oct_otra_pos=$ptos_81+$ptos_82+$ptos_83+$ptos_84+$ptos_85+$ptos_86+$ptos_87+$ptos_88+$ptos_89+$ptos_810+$ptos_811+$ptos_812+$ptos_813+$ptos_814+$ptos_815+$ptos_816;
			}else{$ptos_oct_otra_pos=0;}

		// Calculando Puntos de los Partidos de Octavos de Final
		if($jugado_Oct_1=="NO"){$ptos_Oct_1=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_A1==$Clasificado_A1 and $Quin_Gol_Oct_A1==$Gol_Oct_A1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_B2==$Clasificado_B2 and $Quin_Gol_Oct_B2==$Gol_Oct_B2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_A1==$Clasificado_A1 and $Quin_Gol_Oct_A1>$Quin_Gol_Oct_B2 and $Gol_Oct_A1>$Gol_Oct_B2) or 
			   ($Quin_Clasificado_B2==$Clasificado_B2 and $Quin_Gol_Oct_B2>$Quin_Gol_Oct_A1 and $Gol_Oct_B2>$Gol_Oct_A1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_1=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_2=="NO"){$ptos_Oct_2=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_B1==$Clasificado_B1 and $Quin_Gol_Oct_B1==$Gol_Oct_B1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_A2==$Clasificado_A2 and $Quin_Gol_Oct_A2==$Gol_Oct_A2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_B1==$Clasificado_B1 and $Quin_Gol_Oct_B1>$Quin_Gol_Oct_A2 and $Gol_Oct_B1>$Gol_Oct_A2) or 
			   ($Quin_Clasificado_A2==$Clasificado_A2 and $Quin_Gol_Oct_A2>$Quin_Gol_Oct_B1 and $Gol_Oct_A2>$Gol_Oct_B1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_3=="NO"){$ptos_Oct_3=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_C1==$Clasificado_C1 and $Quin_Gol_Oct_C1==$Gol_Oct_C1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_D2==$Clasificado_D2 and $Quin_Gol_Oct_D2==$Gol_Oct_D2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_C1==$Clasificado_C1 and $Quin_Gol_Oct_C1>$Quin_Gol_Oct_D2 and $Gol_Oct_C1>$Gol_Oct_D2) or 
			   ($Quin_Clasificado_D2==$Clasificado_D2 and $Quin_Gol_Oct_D2>$Quin_Gol_Oct_C1 and $Gol_Oct_D2>$Gol_Oct_C1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_4=="NO"){$ptos_Oct_4=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_D1==$Clasificado_D1 and $Quin_Gol_Oct_D1==$Gol_Oct_D1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_C2==$Clasificado_C2 and $Quin_Gol_Oct_C2==$Gol_Oct_C2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_D1==$Clasificado_D1 and $Quin_Gol_Oct_D1>$Quin_Gol_Oct_C2 and $Gol_Oct_D1>$Gol_Oct_C2) or 
			   ($Quin_Clasificado_C2==$Clasificado_C2 and $Quin_Gol_Oct_C2>$Quin_Gol_Oct_D1 and $Gol_Oct_C2>$Gol_Oct_D1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_4=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_5=="NO"){$ptos_Oct_5=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_E1==$Clasificado_E1 and $Quin_Gol_Oct_E1==$Gol_Oct_E1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_F2==$Clasificado_F2 and $Quin_Gol_Oct_F2==$Gol_Oct_F2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_E1==$Clasificado_E1 and $Quin_Gol_Oct_E1>$Quin_Gol_Oct_F2 and $Gol_Oct_E1>$Gol_Oct_F2) or 
			   ($Quin_Clasificado_F2==$Clasificado_F2 and $Quin_Gol_Oct_F2>$Quin_Gol_Oct_E1 and $Gol_Oct_F2>$Gol_Oct_E1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_5=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_6=="NO"){$ptos_Oct_6=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_F1==$Clasificado_F1 and $Quin_Gol_Oct_F1==$Gol_Oct_F1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_E2==$Clasificado_E2 and $Quin_Gol_Oct_E2==$Gol_Oct_E2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_F1==$Clasificado_F1 and $Quin_Gol_Oct_F1>$Quin_Gol_Oct_E2 and $Gol_Oct_F1>$Gol_Oct_E2) or 
			   ($Quin_Clasificado_E2==$Clasificado_E2 and $Quin_Gol_Oct_E2>$Quin_Gol_Oct_F1 and $Gol_Oct_E2>$Gol_Oct_F1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_6=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_7=="NO"){$ptos_Oct_7=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_G1==$Clasificado_G1 and $Quin_Gol_Oct_G1==$Gol_Oct_G1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_H2==$Clasificado_H2 and $Quin_Gol_Oct_H2==$Gol_Oct_H2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_G1==$Clasificado_G1 and $Quin_Gol_Oct_G1>$Quin_Gol_Oct_H2 and $Gol_Oct_G1>$Gol_Oct_H2) or 
			   ($Quin_Clasificado_H2==$Clasificado_H2 and $Quin_Gol_Oct_H2>$Quin_Gol_Oct_G1 and $Gol_Oct_H2>$Gol_Oct_G1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_7=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Oct_8=="NO"){$ptos_Oct_8=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_H1==$Clasificado_H1 and $Quin_Gol_Oct_H1==$Gol_Oct_H1){$Ptos_1=$Oct_gol;}
			if($Quin_Clasificado_G2==$Clasificado_G2 and $Quin_Gol_Oct_G2==$Gol_Oct_G2){$Ptos_2=$Oct_gol;}
			if(($Quin_Clasificado_H1==$Clasificado_H1 and $Quin_Gol_Oct_H1>$Quin_Gol_Oct_G2 and $Gol_Oct_H1>$Gol_Oct_G2) or 
			   ($Quin_Clasificado_G2==$Clasificado_G2 and $Quin_Gol_Oct_G2>$Quin_Gol_Oct_H1 and $Gol_Oct_G2>$Gol_Oct_H1))
			   {$Ptos_3=$Oct_gana_result;}
			   $ptos_Oct_8=$Ptos_1+$Ptos_2+$Ptos_3;}

		// Calculando los Puntos por pase de equipos a Cuartos de Final (En Su Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI"){
			$ptos_41=0;$ptos_42=0;$ptos_43=0;$ptos_44=0;
			$ptos_45=0;$ptos_46=0;$ptos_47=0;$ptos_48=0;
			if($Quin_Clasificado_81==$Clasificado_81){$ptos_41=$Cto_en_su_pos;}
			if($Quin_Clasificado_82==$Clasificado_82){$ptos_42=$Cto_en_su_pos;}
			if($Quin_Clasificado_83==$Clasificado_83){$ptos_43=$Cto_en_su_pos;}
			if($Quin_Clasificado_84==$Clasificado_84){$ptos_44=$Cto_en_su_pos;}
			if($Quin_Clasificado_85==$Clasificado_85){$ptos_45=$Cto_en_su_pos;}
			if($Quin_Clasificado_86==$Clasificado_86){$ptos_46=$Cto_en_su_pos;}
			if($Quin_Clasificado_87==$Clasificado_87){$ptos_47=$Cto_en_su_pos;}
			if($Quin_Clasificado_88==$Clasificado_88){$ptos_48=$Cto_en_su_pos;}
			$ptos_Cto_en_su_pos=$ptos_41+$ptos_42+$ptos_43+$ptos_44+$ptos_45+$ptos_46+$ptos_47+$ptos_48;
			}else{$ptos_Cto_en_su_pos=0;}

		// Calculando los Puntos por pase de equipos a Cuartos de Final (En Otra Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI"){
			$ptos_41=0;$ptos_42=0;$ptos_43=0;$ptos_44=0;
			$ptos_45=0;$ptos_46=0;$ptos_47=0;$ptos_48=0;
			if($Quin_Clasificado_81==$Clasificado_82){$ptos_41=$Cto_otra_pos;}
			if($Quin_Clasificado_82==$Clasificado_81){$ptos_42=$Cto_otra_pos;}
			if($Quin_Clasificado_83==$Clasificado_84){$ptos_43=$Cto_otra_pos;}
			if($Quin_Clasificado_84==$Clasificado_83){$ptos_44=$Cto_otra_pos;}
			if($Quin_Clasificado_85==$Clasificado_86){$ptos_45=$Cto_otra_pos;}
			if($Quin_Clasificado_86==$Clasificado_85){$ptos_46=$Cto_otra_pos;}
			if($Quin_Clasificado_87==$Clasificado_88){$ptos_47=$Cto_otra_pos;}
			if($Quin_Clasificado_88==$Clasificado_87){$ptos_48=$Cto_otra_pos;}
			$ptos_Cto_otra_pos=$ptos_41+$ptos_42+$ptos_43+$ptos_44+$ptos_45+$ptos_46+$ptos_47+$ptos_48;
			}else{$ptos_Cto_otra_pos=0;}

		// Calculando Puntos de los Partidos de Cuartos de Final
		if($jugado_Cto_1=="NO"){$ptos_Cuart_1=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_81==$Clasificado_81 and $Quin_Gol_Cuart_81==$Gol_Cuart_81){$Ptos_1=$Cto_gol;}
			if($Quin_Clasificado_83==$Clasificado_83 and $Quin_Gol_Cuart_83==$Gol_Cuart_83){$Ptos_2=$Cto_gol;}
			if(($Quin_Clasificado_81==$Clasificado_81 and $Quin_Gol_Cuart_81>$Quin_Gol_Cuart_83 and $Gol_Cuart_81>$Gol_Cuart_83) or 
			   ($Quin_Clasificado_83==$Clasificado_83 and $Quin_Gol_Cuart_83>$Quin_Gol_Cuart_81 and $Gol_Cuart_83>$Gol_Cuart_81))
			   {$Ptos_3=$Cto_gana_result;}
			   $ptos_Cuart_1=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Cto_2=="NO"){$ptos_Cuart_2=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_82==$Clasificado_82 and $Quin_Gol_Cuart_82==$Gol_Cuart_82){$Ptos_1=$Cto_gol;}
			if($Quin_Clasificado_84==$Clasificado_84 and $Quin_Gol_Cuart_84==$Gol_Cuart_84){$Ptos_2=$Cto_gol;}
			if(($Quin_Clasificado_82==$Clasificado_82 and $Quin_Gol_Cuart_82>$Quin_Gol_Cuart_84 and $Gol_Cuart_82>$Gol_Cuart_84) or 
			   ($Quin_Clasificado_84==$Clasificado_84 and $Quin_Gol_Cuart_84>$Quin_Gol_Cuart_82 and $Gol_Cuart_84>$Gol_Cuart_82))
			   {$Ptos_3=$Cto_gana_result;}
			   $ptos_Cuart_2=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Cto_3=="NO"){$ptos_Cuart_3=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_85==$Clasificado_85 and $Quin_Gol_Cuart_85==$Gol_Cuart_85){$Ptos_1=$Cto_gol;}
			if($Quin_Clasificado_87==$Clasificado_87 and $Quin_Gol_Cuart_87==$Gol_Cuart_87){$Ptos_2=$Cto_gol;}
			if(($Quin_Clasificado_85==$Clasificado_85 and $Quin_Gol_Cuart_85>$Quin_Gol_Cuart_87 and $Gol_Cuart_85>$Gol_Cuart_87) or 
			   ($Quin_Clasificado_87==$Clasificado_87 and $Quin_Gol_Cuart_87>$Quin_Gol_Cuart_85 and $Gol_Cuart_87>$Gol_Cuart_85))
			   {$Ptos_3=$Cto_gana_result;}
			   $ptos_Cuart_3=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_Cto_4=="NO"){$ptos_Cuart_4=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_86==$Clasificado_86 and $Quin_Gol_Cuart_86==$Gol_Cuart_86){$Ptos_1=$Cto_gol;}
			if($Quin_Clasificado_88==$Clasificado_88 and $Quin_Gol_Cuart_88==$Gol_Cuart_88){$Ptos_2=$Cto_gol;}
			if(($Quin_Clasificado_86==$Clasificado_86 and $Quin_Gol_Cuart_86>$Quin_Gol_Cuart_88 and $Gol_Cuart_86>$Gol_Cuart_88) or 
			   ($Quin_Clasificado_88==$Clasificado_88 and $Quin_Gol_Cuart_88>$Quin_Gol_Cuart_86 and $Gol_Cuart_88>$Gol_Cuart_86))
			   {$Ptos_3=$Cto_gana_result;}
			   $ptos_Cuart_4=$Ptos_1+$Ptos_2+$Ptos_3;}			   
			   
		// Calculando los Puntos por pase de equipos a SemiFinales (En Su Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI"){
			$ptos_SF_1=0;$ptos_SF_2=0;$ptos_SF_3=0;$ptos_SF_4=0;
			if($Quin_Clasificado_41==$Clasificado_41){$ptos_SF_1=$SF_en_su_pos;}
			if($Quin_Clasificado_42==$Clasificado_42){$ptos_SF_2=$SF_en_su_pos;}
			if($Quin_Clasificado_43==$Clasificado_43){$ptos_SF_3=$SF_en_su_pos;}
			if($Quin_Clasificado_44==$Clasificado_44){$ptos_SF_4=$SF_en_su_pos;}
			$ptos_SF_en_su_pos=$ptos_SF_1+$ptos_SF_2+$ptos_SF_3+$ptos_SF_4;
			}else{$ptos_SF_en_su_pos=0;}

		// Calculando los Puntos por pase de equipos a SemiFinales (En Otra Posición)			   

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI"){
			$ptos_SF_1=0;$ptos_SF_2=0;$ptos_SF_3=0;$ptos_SF_4=0;
			if($Quin_Clasificado_41==$Clasificado_42){$ptos_SF_1=$SF_otra_pos;}
			if($Quin_Clasificado_42==$Clasificado_41){$ptos_SF_2=$SF_otra_pos;}
			if($Quin_Clasificado_43==$Clasificado_44){$ptos_SF_3=$SF_otra_pos;}
			if($Quin_Clasificado_44==$Clasificado_43){$ptos_SF_4=$SF_otra_pos;}
			$ptos_SF_otra_pos=$ptos_SF_1+$ptos_SF_2+$ptos_SF_3+$ptos_SF_4;
			}else{$ptos_SF_otra_pos=0;}

		// Calculando Puntos de los Partidos de SemiFinales
		if($jugado_SF_1=="NO"){$ptos_SF_1=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_41==$Clasificado_41 and $Quin_Gol_SF_41==$Gol_SF_41){$Ptos_1=$SF_gol;}
			if($Quin_Clasificado_43==$Clasificado_43 and $Quin_Gol_SF_43==$Gol_SF_43){$Ptos_2=$SF_gol;}
			if(($Quin_Clasificado_41==$Clasificado_41 and $Quin_Gol_SF_41>$Quin_Gol_SF_43 and $Gol_SF_41>$Gol_SF_43) or 
			   ($Quin_Clasificado_43==$Clasificado_43 and $Quin_Gol_SF_43>$Quin_Gol_SF_41 and $Gol_SF_43>$Gol_SF_41))
			   {$Ptos_3=$SF_gana_result;}
			   $ptos_SF_1=$Ptos_1+$Ptos_2+$Ptos_3;}
		if($jugado_SF_2=="NO"){$ptos_SF_2=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_42==$Clasificado_42 and $Quin_Gol_SF_42==$Gol_SF_42){$Ptos_1=$SF_gol;}
			if($Quin_Clasificado_44==$Clasificado_44 and $Quin_Gol_SF_44==$Gol_SF_44){$Ptos_2=$SF_gol;}
			if(($Quin_Clasificado_42==$Clasificado_42 and $Quin_Gol_SF_42>$Quin_Gol_SF_44 and $Gol_SF_42>$Gol_SF_44) or 
			   ($Quin_Clasificado_44==$Clasificado_44 and $Quin_Gol_SF_44>$Quin_Gol_SF_42 and $Gol_SF_44>$Gol_SF_42))
			   {$Ptos_3=$SF_gana_result;}
			   $ptos_SF_2=$Ptos_1+$Ptos_2+$Ptos_3;}

		// Calculando los Puntos por pase de equipos a Juego por el Tercer Lugar (En Su Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI"){
			$ptos_tercero_1=0;$ptos_tercero_2=0;
			if($Quin_Clasificado_Tercero_1==$Clasificado_Tercero_1){$ptos_tercero_1=$Tcr_en_su_pos;}
			if($Quin_Clasificado_Tercero_2==$Clasificado_Tercero_2){$ptos_tercero_2=$Tcr_en_su_pos;}
			$ptos_tercero_en_su_pos=$ptos_tercero_1+$ptos_tercero_2;
			}else{$ptos_tercero_en_su_pos=0;}

		// Calculando los Puntos por pase de equipos a Juego por el Tercer Lugar (En Otra Posición)	

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI"){
			$ptos_tercero_1=0;$ptos_tercero_2=0;
			if($Quin_Clasificado_Tercero_1==$Clasificado_Tercero_2){$ptos_tercero_1=$Tcr_otra_pos;}
			if($Quin_Clasificado_Tercero_2==$Clasificado_Tercero_1){$ptos_tercero_2=$Tcr_otra_pos;}
			$ptos_tercero_otra_pos=$ptos_tercero_1+$ptos_tercero_2;
			}else{$ptos_tercero_otra_pos=0;}

		// Calculando los Puntos por pase de equipos a Juego por la Gran Final (En Su Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI"){
			$ptos_GF_1=0;$ptos_GF_2=0;
			if($Quin_Clasificado_GF_1==$Clasificado_GF_1){$ptos_GF_1=$GF_en_su_pos;}
			if($Quin_Clasificado_GF_2==$Clasificado_GF_2){$ptos_GF_2=$GF_en_su_pos;}
			$ptos_GF_en_su_pos=$ptos_GF_1+$ptos_GF_2;
			}else{$ptos_GF_en_su_pos=0;}

		// Calculando los Puntos por pase de equipos a Juego por la Gran Final (En Otra Posición)

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI"){
			$ptos_GF_1=0;$ptos_GF_2=0;
			if($Quin_Clasificado_GF_1==$Clasificado_GF_2){$ptos_GF_1=$GF_otra_pos;}
			if($Quin_Clasificado_GF_2==$Clasificado_GF_1){$ptos_GF_2=$GF_otra_pos;}
			$ptos_GF_otra_pos=$ptos_GF_1+$ptos_GF_2;
			}else{$ptos_GF_otra_pos=0;}

		// Calculando Puntos del Partido por el Tercer Puesto y Extra GANADOR
		if($jugado_Tcr=="NO"){$ptos_Tcr=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_Tercero_1==$Clasificado_Tercero_1 and $Quin_Gol_PSF_1==$Gol_PSF_1){$Ptos_1=$Tcr_gol;}
			if($Quin_Clasificado_Tercero_2==$Clasificado_Tercero_2 and $Quin_Gol_PSF_2==$Gol_PSF_2){$Ptos_2=$Tcr_gol;}
			if(($Quin_Clasificado_Tercero_1==$Clasificado_Tercero_1 and $Quin_Gol_PSF_1>$Quin_Gol_PSF_2 and $Gol_PSF_1>$Gol_PSF_2) or 
			   ($Quin_Clasificado_Tercero_2==$Clasificado_Tercero_2 and $Quin_Gol_PSF_2>$Quin_Gol_PSF_1 and $Gol_PSF_2>$Gol_PSF_1))
			   {$Ptos_3=$Tcr_gana_result;}
			   $ptos_Tcr=$Ptos_1+$Ptos_2+$Ptos_3;}

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI" and $jugado_Tcr=="SI" and ($Quin_Clasificado_Tercero_1==$Clasificado_Tercero_1 and $Quin_Gol_PSF_1>$Quin_Gol_PSF_2 and $Gol_PSF_1>$Gol_PSF_2) or ($Quin_Clasificado_Tercero_2==$Clasificado_Tercero_2 and $Quin_Gol_PSF_2>$Quin_Gol_PSF_1 and $Gol_PSF_2>$Gol_PSF_1)){
			$ptos_extra_Tcr=$Tcr_gana_extra;
			}else{$ptos_extra_Tcr=0;}

		// Calculando Puntos del Partido por la Gran Final Y extra CAMPEON
		if($jugado_GF=="NO"){$ptos_GF=0;}else{
			$Ptos_1=0; $Ptos_2=0; $Ptos_3=0;
			if($Quin_Clasificado_GF_1==$Clasificado_GF_1 and $Quin_Gol_GSF_1==$Gol_GSF_1){$Ptos_1=$GF_gol;}
			if($Quin_Clasificado_GF_2==$Clasificado_GF_2 and $Quin_Gol_GSF_2==$Gol_GSF_2){$Ptos_2=$GF_gol;}
			if(($Quin_Clasificado_GF_1==$Clasificado_GF_1 and $Quin_Gol_GSF_1>$Quin_Gol_GSF_2 and $Gol_GSF_1>$Gol_GSF_2) or 
			   ($Quin_Clasificado_GF_2==$Clasificado_GF_2 and $Quin_Gol_GSF_2>$Quin_Gol_GSF_1 and $Gol_GSF_2>$Gol_GSF_1))
			   {$Ptos_3=$GF_gana_result;}
			   $ptos_GF=$Ptos_1+$Ptos_2+$Ptos_3;}

		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI" and $jugado_Tcr=="SI" and $jugado_GF=="SI" and ($Quin_Clasificado_GF_1==$Clasificado_GF_1 and $Quin_Gol_GSF_1>$Quin_Gol_GSF_2 and $Gol_GSF_1>$Gol_GSF_2) or ($Quin_Clasificado_GF_2==$Clasificado_GF_2 and $Quin_Gol_GSF_2>$Quin_Gol_GSF_1 and $Gol_GSF_2>$Gol_GSF_1)){
			$ptos_extra_GF=$GF_gana_extra;
			}else{$ptos_extra_GF=0;}

		// Calculando Puntos por acierto del Equipo Goleador
	
		if($jugado_A1A2=="SI" and $jugado_A1A3=="SI" and $jugado_A1A4=="SI" and $jugado_A2A3=="SI" and $jugado_A2A4=="SI" and $jugado_A3A4=="SI" and $jugado_B1B2=="SI" and $jugado_B1B3=="SI" and $jugado_B1B4=="SI" and $jugado_B2B3=="SI" and $jugado_B2B4=="SI" and $jugado_B3B4=="SI" and $jugado_C1C2=="SI" and $jugado_C1C3=="SI" and $jugado_C1C4=="SI" and $jugado_C2C3=="SI" and $jugado_C2C4=="SI" and $jugado_C3C4=="SI" and $jugado_D1D2=="SI" and $jugado_D1D3=="SI" and $jugado_D1D4=="SI" and $jugado_D2D3=="SI" and $jugado_D2D4=="SI" and $jugado_D3D4=="SI" and $jugado_E1E2=="SI" and $jugado_E1E3=="SI" and $jugado_E1E4=="SI" and $jugado_E2E3=="SI" and $jugado_E2E4=="SI" and $jugado_E3E4=="SI" and $jugado_F1F2=="SI" and $jugado_F1F3=="SI" and $jugado_F1F4=="SI" and $jugado_F2F3=="SI" and $jugado_F2F4=="SI" and $jugado_F3F4=="SI" and $jugado_G1G2=="SI" and $jugado_G1G3=="SI" and $jugado_G1G4=="SI" and $jugado_G2G3=="SI" and $jugado_G2G4=="SI" and $jugado_G3G4=="SI" and $jugado_H1H2=="SI" and $jugado_H1H3=="SI" and $jugado_H1H4=="SI" and $jugado_H2H3=="SI" and $jugado_H2H4=="SI" and $jugado_H3H4=="SI" and $jugado_Oct_1=="SI" and $jugado_Oct_2=="SI" and $jugado_Oct_3=="SI" and $jugado_Oct_4=="SI" and $jugado_Oct_5=="SI" and $jugado_Oct_6=="SI" and $jugado_Oct_7=="SI" and $jugado_Oct_8=="SI" and $jugado_Cto_1=="SI" and $jugado_Cto_2=="SI" and $jugado_Cto_3=="SI" and $jugado_Cto_4=="SI" and $jugado_SF_1=="SI" and $jugado_SF_2=="SI" and $jugado_Tcr=="SI" and $jugado_GF=="SI" and $Quin_eq_goleador==$eq_goleador){
			$ptos_Goleador=$EQ_Goleador_extra;
			}else{$ptos_Goleador=0;}

		// Calculando el GRAN TOTAL de Puntos
	
			$total_ptos=$ptos_A1A2+$ptos_A1A3+$ptos_A1A4+$ptos_A2A3+$ptos_A2A4+$ptos_A3A4+$ptos_B1B2+$ptos_B1B3+$ptos_B1B4+$ptos_B2B3+$ptos_B2B4+$ptos_B3B4+$ptos_C1C2+$ptos_C1C3+$ptos_C1C4+$ptos_C2C3+$ptos_C2C4+$ptos_C3C4+$ptos_D1D2+$ptos_D1D3+$ptos_D1D4+$ptos_D2D3+$ptos_D2D4+$ptos_D3D4+$ptos_E1E2+$ptos_E1E3+$ptos_E1E4+$ptos_E2E3+$ptos_E2E4+$ptos_E3E4+$ptos_F1F2+$ptos_F1F3+$ptos_F1F4+$ptos_F2F3+$ptos_F2F4+$ptos_F3F4+$ptos_G1G2+$ptos_G1G3+$ptos_G1G4+$ptos_G2G3+$ptos_G2G4+$ptos_G3G4+$ptos_H1H2+$ptos_H1H3+$ptos_H1H4+$ptos_H2H3+$ptos_H2H4+$ptos_H3H4+$ptos_oct_en_su_pos+$ptos_oct_otra_pos+$ptos_Oct_1+$ptos_Oct_2+$ptos_Oct_3+$ptos_Oct_4+$ptos_Oct_5+$ptos_Oct_6+$ptos_Oct_7+$ptos_Oct_8+$ptos_Cto_en_su_pos+$ptos_Cto_otra_pos+$ptos_Cuart_1+$ptos_Cuart_2+$ptos_Cuart_3+$ptos_Cuart_4+$ptos_SF_en_su_pos+$ptos_SF_otra_pos+$ptos_SF_1+$ptos_SF_2+$ptos_tercero_en_su_pos+$ptos_tercero_otra_pos+$ptos_GF_en_su_pos+$ptos_GF_otra_pos+$ptos_Tcr+$ptos_GF+$ptos_extra_Tcr+$ptos_extra_GF+$ptos_Goleador;


	/*echo "<table><tr><td>$id</td><td style='width:600px'>TOTAL DE PUNTOS=$total_ptos<br>
	JUEGOS DE GRUPO A=$ptos_A1A2+$ptos_A1A3+$ptos_A1A4+$ptos_A2A3+$ptos_A2A4+$ptos_A3A4<br>
	JUEGOS DE GRUPO B=$ptos_B1B2+$ptos_B1B3+$ptos_B1B4+$ptos_B2B3+$ptos_B2B4+$ptos_B3B4<br>
	JUEGOS DE GRUPO C=$ptos_C1C2+$ptos_C1C3+$ptos_C1C4+$ptos_C2C3+$ptos_C2C4+$ptos_C3C4<br>
	JUEGOS DE GRUPO D=$ptos_D1D2+$ptos_D1D3+$ptos_D1D4+$ptos_D2D3+$ptos_D2D4+$ptos_D3D4<br>
	JUEGOS DE GRUPO E=$ptos_E1E2+$ptos_E1E3+$ptos_E1E4+$ptos_E2E3+$ptos_E2E4+$ptos_E3E4<br>
	JUEGOS DE GRUPO F=$ptos_F1F2+$ptos_F1F3+$ptos_F1F4+$ptos_F2F3+$ptos_F2F4+$ptos_F3F4<br>
	JUEGOS DE GRUPO G=$ptos_G1G2+$ptos_G1G3+$ptos_G1G4+$ptos_G2G3+$ptos_G2G4+$ptos_G3G4<br>
	JUEGOS DE GRUPO H=$ptos_H1H2+$ptos_H1H3+$ptos_H1H4+$ptos_H2H3+$ptos_H2H4+$ptos_H3H4<br>
	PASO A OCTAVOS DE FINAL=$ptos_oct_en_su_pos+$ptos_oct_otra_pos<br>
	JUEGOS DE OCTAVO DE FINAL=$ptos_Oct_1+$ptos_Oct_2+$ptos_Oct_3+$ptos_Oct_4+$ptos_Oct_5+$ptos_Oct_6+$ptos_Oct_7+$ptos_Oct_8<br>
	PASO A CUARTOS DE FINAL=$ptos_Cto_en_su_pos+$ptos_Cto_otra_pos<br>
	JUEGOS DE CUARTOS DE FINAL=$ptos_Cuart_1+$ptos_Cuart_2+$ptos_Cuart_3+$ptos_Cuart_4<br>
	PASO A SEMIFINALES=$ptos_SF_en_su_pos+$ptos_SF_otra_pos<br>
	JUEGOS DE SEMIFINALES=$ptos_SF_1+$ptos_SF_2<br>
	PASO A TERCER LUGAR=$ptos_tercero_en_su_pos+$ptos_tercero_otra_pos<br>
	PASO A GRAN FINAL=$ptos_GF_en_su_pos+$ptos_GF_otra_pos<br>
	JUEGOS DE TERCERO Y GRAN FINAL=$ptos_Tcr+$ptos_GF<br>
	PUNTOS EXTRA POR ACIERTO DE TERCERO Y CAMPEÓN=$ptos_extra_Tcr+$ptos_extra_GF<br>
	PUNTOS EXTRA POR ACIERTO DE EQUIPO GOLEADOR=$ptos_Goleador</td></tr></table>";*/

		$consultar="UPDATE `quinielas` SET TOTAL_PUNTOS=$total_ptos, PTOS_A1_A2=$ptos_A1A2, PTOS_A1_A3=$ptos_A1A3, PTOS_A1_A4=$ptos_A1A4, PTOS_A2_A3=$ptos_A2A3, PTOS_A2_A4=$ptos_A2A4, PTOS_A3_A4=$ptos_A3A4, PTOS_B1_B2=$ptos_B1B2, PTOS_B1_B3=$ptos_B1B3, PTOS_B1_B4=$ptos_B1B4, PTOS_B2_B3=$ptos_B2B3, PTOS_B2_B4=$ptos_B2B4, PTOS_B3_B4=$ptos_B3B4, PTOS_C1_C2=$ptos_C1C2, PTOS_C1_C3=$ptos_C1C3, PTOS_C1_C4=$ptos_C1C4, PTOS_C2_C3=$ptos_C2C3, PTOS_C2_C4=$ptos_C2C4, PTOS_C3_C4=$ptos_C3C4, PTOS_D1_D2=$ptos_D1D2, PTOS_D1_D3=$ptos_D1D3, PTOS_D1_D4=$ptos_D1D4, PTOS_D2_D3=$ptos_D2D3, PTOS_D2_D4=$ptos_D2D4, PTOS_D3_D4=$ptos_D3D4, PTOS_E1_E2=$ptos_E1E2, PTOS_E1_E3=$ptos_E1E3, PTOS_E1_E4=$ptos_E1E4, PTOS_E2_E3=$ptos_E2E3, PTOS_E2_E4=$ptos_E2E4, PTOS_E3_E4=$ptos_E3E4, PTOS_F1_F2=$ptos_F1F2, PTOS_F1_F3=$ptos_F1F3, PTOS_F1_F4=$ptos_F1F4, PTOS_F2_F3=$ptos_F2F3, PTOS_F2_F4=$ptos_F2F4, PTOS_F3_F4=$ptos_F3F4, PTOS_G1_G2=$ptos_G1G2, PTOS_G1_G3=$ptos_G1G3, PTOS_G1_G4=$ptos_G1G4, PTOS_G2_G3=$ptos_G2G3, PTOS_G2_G4=$ptos_G2G4, PTOS_G3_G4=$ptos_G3G4, PTOS_H1_H2=$ptos_H1H2, PTOS_H1_H3=$ptos_H1H3, PTOS_H1_H4=$ptos_H1H4, PTOS_H2_H3=$ptos_H2H3, PTOS_H2_H4=$ptos_H2H4, PTOS_H3_H4=$ptos_H3H4, PTOS_OCT_1_A1_B2=$ptos_Oct_1, PTOS_OCT_2_B1_A2=$ptos_Oct_2, PTOS_OCT_3_C1_D2=$ptos_Oct_3, PTOS_OCT_4_D1_C2=$ptos_Oct_4, PTOS_OCT_5_E1_F2=$ptos_Oct_5, PTOS_OCT_6_F1_E2=$ptos_Oct_6, PTOS_OCT_7_G1_H2=$ptos_Oct_7, PTOS_OCT_8_H1_G2=$ptos_Oct_8, PTOS_CTO_1_OCT_1_OCT_3=$ptos_Cuart_1, PTOS_CTO_2_OCT_2_OCT_4=$ptos_Cuart_2, PTOS_CTO_3_OCT_5_OCT_7=$ptos_Cuart_3, PTOS_CTO_4_OCT_6_OCT_8=$ptos_Cuart_4, PTOS_SF1_CTO_1_CTO_3=$ptos_SF_1, PTOS_SF2_CTO_2_CTO_4=$ptos_SF_2, PTOS_TERCERO_PSF1_PSF2=$ptos_Tcr, PTOS_G_F_GSF1_GSF2=$ptos_GF, PTOS_OCT_EN_SU_POS=$ptos_oct_en_su_pos, PTOS_OCT_OTRA_POS=$ptos_oct_otra_pos, PTOS_CTO_EN_SU_POS=$ptos_Cto_en_su_pos, PTOS_CTO_OTRA_POS=$ptos_Cto_otra_pos, PTOS_SF_EN_SU_POS=$ptos_SF_en_su_pos, PTOS_SF_OTRA_POS=$ptos_SF_otra_pos, PTOS_TERCERO_EN_SU_POS=$ptos_tercero_en_su_pos, PTOS_TERCERO_OTRA_POS=$ptos_tercero_otra_pos, PTOS_GF_EN_SU_POS=$ptos_GF_en_su_pos,  PTOS_GF_OTRA_POS=$ptos_GF_otra_pos, PTOS_EXTRA_TERCERO=$ptos_extra_Tcr, PTOS_EXTRA_CAMPEON=$ptos_extra_GF, PTOS_EXTRA_GOLEADOR=$ptos_Goleador WHERE ID='$id'";
		$resultar=mysqli_query($conexion,$consultar);

	}

	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>