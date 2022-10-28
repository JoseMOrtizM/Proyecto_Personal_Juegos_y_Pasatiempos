<?php
session_start();
if(!isset($_SESSION["usuario_Adm"])){
	header("location:index.php");
}
if(isset($_POST['quiniela_devuelta'])){$quin_devuelta=$_POST['quiniela_devuelta'];}
if(!isset($_POST['quiniela_devuelta'])){$quin_devuelta="";}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Quiniela_Mundial_2018/Adm_detalle_quinielas</title>
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
<blockquote><a href="QMF2016_Adm_Detalle_Quinielas.php">**Detalle de Quinielas**</a></blockquote>
<blockquote><a href="QMF2016_Adm_Resultados.php">Cargar Resultados</a></blockquote>
<blockquote><a href="QMF2016_Adm_Calendario.php">Calendario</a></blockquote><blockquote><a href="QMF2016_Adm_Tabla_Usuarios.php">Usuarios</a></blockquote><blockquote><a href="QMF2016_Adm_Reglas.php">Reglas</a></blockquote>
<blockquote><a href="QMF2016_Adm_Grupos.php">Grupos</a></blockquote>
</div>
</nav>

<section>

<h2 style="margin-left:160px">Se han Cargado <?php

try{
	require ("conexion.php");
	$consulta="SELECT * FROM `resultados` WHERE JUGADO='SI'";
	$resultados=mysqli_query($conexion,$consulta);
	$contador01=0;
	while(($fil=mysqli_fetch_array($resultados))==true){
		$contador01=$contador01+1;}
	echo "$contador01";
	mysqli_close($conexion);
}catch(Exeption $e){die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();}
?>	
	Partidos Jugados</h2>

<table>
  <tr>
  	<td colspan="9" style="background-color:#BA9F7A">ESTE ES EL RESUMEN DE POSICIONES</td>
  </tr>
  <tr>
    <td rowspan="2" style="width:200px">Usuario</td>
    <td rowspan="2" style="width:70px">Puntos Totales</td>
    <td colspan="7">Total de Puntos por Fase:</td>
  </tr>
  <tr>
    <td style="width:67px">1° Ronda</td>
    <td style="width:67px">8° Final</td>
	<td style="width:67px">4° Final</td>
	<td style="width:67px">S-F</td>
	<td style="width:65px">3°Lugar</td>
	<td style="width:65px">G-F</td>
    <td style="width:65px">Goleador</td>
  </tr>


<?php

try{
	require ("conexion.php");

/// paginado parte 1

	$registros_filtrados=16;
	if(isset($_GET["pagina"])){
	$pagina=$_GET["pagina"];
	}else{
		$pagina=1;
	}
	$empesar_desde=($pagina-1)*$registros_filtrados;
	$consulta="SELECT * FROM `quinielas`";
	$resultado=mysqli_query($conexion,$consulta);	
	$numero_filas=0;
	while(($fila=mysqli_fetch_array($resultado))==true){
		$numero_filas=$numero_filas+1;
	}
	$total_paginas=ceil($numero_filas/$registros_filtrados);

	$consulta="SELECT * FROM `quinielas` ORDER BY TOTAL_PUNTOS DESC LIMIT $empesar_desde,$registros_filtrados";
	$resultados=mysqli_query($conexion,$consulta);

	while(($fil=mysqli_fetch_array($resultados))==true){	
		$usuario=$fil["USUAIRO"];
		$Total=$fil["TOTAL_PUNTOS"];
		$Ronda1=$fil["PTOS_A1_A2"]+$fil["PTOS_A1_A3"]+$fil["PTOS_A1_A4"]+$fil["PTOS_A2_A3"]+$fil["PTOS_A2_A4"]+$fil["PTOS_A3_A4"]+$fil["PTOS_B1_B2"]+$fil["PTOS_B1_B3"]+$fil["PTOS_B1_B4"]+$fil["PTOS_B2_B3"]+$fil["PTOS_B2_B4"]+$fil["PTOS_B3_B4"]+$fil["PTOS_C1_C2"]+$fil["PTOS_C1_C3"]+$fil["PTOS_C1_C4"]+$fil["PTOS_C2_C3"]+$fil["PTOS_C2_C4"]+$fil["PTOS_C3_C4"]+$fil["PTOS_D1_D2"]+$fil["PTOS_D1_D3"]+$fil["PTOS_D1_D4"]+$fil["PTOS_D2_D3"]+$fil["PTOS_D2_D4"]+$fil["PTOS_D3_D4"]+$fil["PTOS_E1_E2"]+$fil["PTOS_E1_E3"]+$fil["PTOS_E1_E4"]+$fil["PTOS_E2_E3"]+$fil["PTOS_E2_E4"]+$fil["PTOS_E3_E4"]+$fil["PTOS_F1_F2"]+$fil["PTOS_F1_F3"]+$fil["PTOS_F1_F4"]+$fil["PTOS_F2_F3"]+$fil["PTOS_F2_F4"]+$fil["PTOS_F3_F4"]+$fil["PTOS_G1_G2"]+$fil["PTOS_G1_G3"]+$fil["PTOS_G1_G4"]+$fil["PTOS_G2_G3"]+$fil["PTOS_G2_G4"]+$fil["PTOS_G3_G4"]+$fil["PTOS_H1_H2"]+$fil["PTOS_H1_H3"]+$fil["PTOS_H1_H4"]+$fil["PTOS_H2_H3"]+$fil["PTOS_H2_H4"]+$fil["PTOS_H3_H4"]+$fil["PTOS_OCT_EN_SU_POS"]+$fil["PTOS_OCT_OTRA_POS"];
		$Oct_final=$fil["PTOS_OCT_1_A1_B2"]+$fil["PTOS_OCT_2_B1_A2"]+$fil["PTOS_OCT_3_C1_D2"]+$fil["PTOS_OCT_4_D1_C2"]+$fil["PTOS_OCT_5_E1_F2"]+$fil["PTOS_OCT_6_F1_E2"]+$fil["PTOS_OCT_7_G1_H2"]+$fil["PTOS_OCT_8_H1_G2"]+$fil["PTOS_CTO_EN_SU_POS"]+$fil["PTOS_CTO_OTRA_POS"];
		$Cuart_final=$fil["PTOS_CTO_1_OCT_1_OCT_3"]+$fil["PTOS_CTO_2_OCT_2_OCT_4"]+$fil["PTOS_CTO_3_OCT_5_OCT_7"]+$fil["PTOS_CTO_4_OCT_6_OCT_8"]+$fil["PTOS_SF_EN_SU_POS"]+$fil["PTOS_SF_OTRA_POS"];
		$SF=$fil["PTOS_SF1_CTO_1_CTO_3"]+$fil["PTOS_SF2_CTO_2_CTO_4"]+$fil["PTOS_TERCERO_EN_SU_POS"]+$fil["PTOS_TERCERO_OTRA_POS"]+$fil["PTOS_GF_EN_SU_POS"]+$fil["PTOS_GF_OTRA_POS"];
		$Tercero=$fil["PTOS_TERCERO_PSF1_PSF2"]+$fil["PTOS_EXTRA_TERCERO"];
		$GF=$fil["PTOS_G_F_GSF1_GSF2"]+$fil["PTOS_EXTRA_CAMPEON"];
		$Goleador=$fil["PTOS_EXTRA_GOLEADOR"];

	echo "<tr style='background-color:#FFF'><td>$usuario</td><td>$Total</td><td>$Ronda1</td><td>$Oct_final</td><td>$Cuart_final</td><td>$SF</td><td>$Tercero</td><td>$GF</td><td>$Goleador</td></tr>";
	
	}

	echo "<tr><td colspan='9'>Página Actual: $pagina (Páginas disponibles: ";
	for($i=1; $i<=$total_paginas; $i++){
		echo "<a href='?pagina=" . $i . "'>" . $i . "</a>&nbsp;&nbsp;";
	}
	echo ") hay registradas  $numero_filas quinielas en total.</td></tr>";

	mysqli_close($conexion);
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();}
?>

</table>

<table style="background-color:#FFF; border-bottom-color:#666666; width:705px">
  <tr>
  	<td colspan="10" style="background-color:#BA9F7A">ESTE ES EL RESUMEN POR QUINIELA</td>
  </tr>
    <td>
    	<table>
          <tr><td colspan="6" style="font-size:39px;">Resultados Reales</td></tr>	
  		  <tr>
            <td style="width:200px">Descripción</td>
            <td>Eq-1</td>
            <td>Gol-1</td>
            <td>Gol-2</td>
            <td>Eq-2</td>
            <td>Jug?</td>
          </tr>
<?php

try{
	require ("conexion.php");

	$consulta="SELECT * FROM `resultados`";
	$resultados=mysqli_query($conexion,$consulta);

	while(($fil=mysqli_fetch_array($resultados))==true){	
		$Descripcion=$fil["JUEGO"];
		$Eq_01=$fil["EQUIPO_1"];
		$Eq_02=$fil["EQUIPO_2"];
		$gol_01=$fil["GOL_1"];
		$gol_02=$fil["GOL_2"];
		$jug=$fil["JUGADO"];

	echo "<tr><td>$Descripcion</td><td style='background-color:#B0DFFF'>$Eq_01</td><td style='background-color:#FFF'>$gol_01</td><td style='background-color:#FFF'>$gol_02</td><td style='background-color:#B0DFFF'>$Eq_02</td><td style='background-color:#FFF'>$jug</td></tr>";
	}
	
// DEFINIENDO El EQUIPO GOLEADOR

	$consulta="SELECT * FROM `ganadores` WHERE ID='5'";
	$resultados=mysqli_query($conexion,$consulta);
	if(($fil=mysqli_fetch_array($resultados))==true){	
		$eq_goleador=$fil["GANADORES"];}	
		
	echo "<tr><td colspan='4'>Equipo Goleador del Torneo</td><td  colspan='4'  style='background-color:#B0DFFF'>$eq_goleador</td></tr>";
	
	mysqli_close($conexion);
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

    	</table>
    </td>
    <td>
    	<table>
          <tr>
            <form name="selct_quiniela" action="QMF2016_Adm_Detalle_Quin_Select.php" method="post"><td colspan='6'>
            <label>Selecciona una Quiniela:</label>
            <select name='quin_select'>

<?php

try{
	require ("conexion.php");

	$consulta="SELECT * FROM `quinielas` ORDER BY TOTAL_PUNTOS DESC";
	$resultados=mysqli_query($conexion,$consulta);

	while(($fil=mysqli_fetch_array($resultados))==true){	
		$usuario=$fil["USUAIRO"];

	echo "<option>$usuario</option>";
	}
     echo "<option selected></option>";

	mysqli_close($conexion);
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>
            </select>
            <input type="submit" name="quiniela_enviar" value="Consultar"></td></form>
          </tr>
  		  <tr>
            <td colspan="6">Quiniela:&nbsp;<input style="width:200px; background-color:#FFFFFF; font-size:10px;" type="text" disabled value="<?php echo "$quin_devuelta"; ?>"></td>
          </tr>
  		  <tr>
            <td>Eq-1</td>
            <td>Gol-1</td>
            <td>Gol-2</td>
            <td>Eq-2</td>
            <td>Ptos</td>
            <td>Adic</td>
          </tr>
          

<?php

try{
	require ("conexion.php");

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

// rescatando los valores de la quiniela seleccionada

	$consulta="SELECT * FROM `quinielas` WHERE USUAIRO='$quin_devuelta'";
	$resultados=mysqli_query($conexion,$consulta);

	if(($fil=mysqli_fetch_array($resultados))==true){
	// AQUI SE RESCATA EL ID DE LA QUINIELA DEL USUARIO
		$id=$fil["ID"];
	// AQUI SE RESCATAN LOS PUNTOS DE LA QUINIELA DEL USUARIO		
		$Total=$fil["TOTAL_PUNTOS"];
		$Puntos_01=$fil["PTOS_A1_A2"];
		$Puntos_02=$fil["PTOS_A1_A3"];
		$Puntos_03=$fil["PTOS_A1_A4"];
		$Puntos_04=$fil["PTOS_A2_A3"];
		$Puntos_05=$fil["PTOS_A2_A4"];
		$Puntos_06=$fil["PTOS_A3_A4"];
		$Puntos_07=$fil["PTOS_B1_B2"];
		$Puntos_08=$fil["PTOS_B1_B3"];
		$Puntos_09=$fil["PTOS_B1_B4"];
		$Puntos_10=$fil["PTOS_B2_B3"];
		$Puntos_11=$fil["PTOS_B2_B4"];
		$Puntos_12=$fil["PTOS_B3_B4"];
		$Puntos_13=$fil["PTOS_C1_C2"];
		$Puntos_14=$fil["PTOS_C1_C3"];
		$Puntos_15=$fil["PTOS_C1_C4"];
		$Puntos_16=$fil["PTOS_C2_C3"];
		$Puntos_17=$fil["PTOS_C2_C4"];
		$Puntos_18=$fil["PTOS_C3_C4"];
		$Puntos_19=$fil["PTOS_D1_D2"];
		$Puntos_20=$fil["PTOS_D1_D3"];
		$Puntos_21=$fil["PTOS_D1_D4"];
		$Puntos_22=$fil["PTOS_D2_D3"];
		$Puntos_23=$fil["PTOS_D2_D4"];
		$Puntos_24=$fil["PTOS_D3_D4"];
		$Puntos_25=$fil["PTOS_E1_E2"];
		$Puntos_26=$fil["PTOS_E1_E3"];
		$Puntos_27=$fil["PTOS_E1_E4"];
		$Puntos_28=$fil["PTOS_E2_E3"];
		$Puntos_29=$fil["PTOS_E2_E4"];
		$Puntos_30=$fil["PTOS_E3_E4"];
		$Puntos_31=$fil["PTOS_F1_F2"];
		$Puntos_32=$fil["PTOS_F1_F3"];
		$Puntos_33=$fil["PTOS_F1_F4"];
		$Puntos_34=$fil["PTOS_F2_F3"];
		$Puntos_35=$fil["PTOS_F2_F4"];
		$Puntos_36=$fil["PTOS_F3_F4"];
		$Puntos_37=$fil["PTOS_G1_G2"];
		$Puntos_38=$fil["PTOS_G1_G3"];
		$Puntos_39=$fil["PTOS_G1_G4"];
		$Puntos_40=$fil["PTOS_G2_G3"];
		$Puntos_41=$fil["PTOS_G2_G4"];
		$Puntos_42=$fil["PTOS_G3_G4"];
		$Puntos_43=$fil["PTOS_H1_H2"];
		$Puntos_44=$fil["PTOS_H1_H3"];
		$Puntos_45=$fil["PTOS_H1_H4"];
		$Puntos_46=$fil["PTOS_H2_H3"];
		$Puntos_47=$fil["PTOS_H2_H4"];
		$Puntos_48=$fil["PTOS_H3_H4"];
		$Puntos_48_adic=$fil["PTOS_OCT_EN_SU_POS"]+$fil["PTOS_OCT_OTRA_POS"];

		$Puntos_49=$fil["PTOS_OCT_1_A1_B2"];
		$Puntos_50=$fil["PTOS_OCT_2_B1_A2"];
		$Puntos_51=$fil["PTOS_OCT_3_C1_D2"];
		$Puntos_52=$fil["PTOS_OCT_4_D1_C2"];
		$Puntos_53=$fil["PTOS_OCT_5_E1_F2"];
		$Puntos_54=$fil["PTOS_OCT_6_F1_E2"];
		$Puntos_55=$fil["PTOS_OCT_7_G1_H2"];
		$Puntos_56=$fil["PTOS_OCT_8_H1_G2"];
		$Puntos_56_adic=$fil["PTOS_CTO_EN_SU_POS"]+$fil["PTOS_CTO_OTRA_POS"];

		$Puntos_57=$fil["PTOS_CTO_1_OCT_1_OCT_3"];
		$Puntos_58=$fil["PTOS_CTO_2_OCT_2_OCT_4"];
		$Puntos_59=$fil["PTOS_CTO_3_OCT_5_OCT_7"];
		$Puntos_60=$fil["PTOS_CTO_4_OCT_6_OCT_8"];
		$Puntos_60_adic=$fil["PTOS_SF_EN_SU_POS"]+$fil["PTOS_SF_OTRA_POS"];

		$Puntos_61=$fil["PTOS_SF1_CTO_1_CTO_3"];
		$Puntos_62=$fil["PTOS_SF2_CTO_2_CTO_4"];
		$Puntos_62_adic=$fil["PTOS_TERCERO_EN_SU_POS"]+$fil["PTOS_TERCERO_OTRA_POS"]+$fil["PTOS_GF_EN_SU_POS"]+$fil["PTOS_GF_OTRA_POS"];

		$Puntos_63=$fil["PTOS_TERCERO_PSF1_PSF2"];
		$Puntos_63_adic=$fil["PTOS_EXTRA_TERCERO"];
		$Puntos_64=$fil["PTOS_G_F_GSF1_GSF2"];
		$Puntos_64_adic=$fil["PTOS_EXTRA_CAMPEON"]+$fil["PTOS_EXTRA_GOLEADOR"];

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
	}else{

		$id='N/A';
		$Total='N/A';
		$Puntos_01='N/A';
		$Puntos_02='N/A';
		$Puntos_03='N/A';
		$Puntos_04='N/A';
		$Puntos_05='N/A';
		$Puntos_06='N/A';
		$Puntos_07='N/A';
		$Puntos_08='N/A';
		$Puntos_09='N/A';
		$Puntos_10='N/A';
		$Puntos_11='N/A';
		$Puntos_12='N/A';
		$Puntos_13='N/A';
		$Puntos_14='N/A';
		$Puntos_15='N/A';
		$Puntos_16='N/A';
		$Puntos_17='N/A';
		$Puntos_18='N/A';
		$Puntos_19='N/A';
		$Puntos_20='N/A';
		$Puntos_21='N/A';
		$Puntos_22='N/A';
		$Puntos_23='N/A';
		$Puntos_24='N/A';
		$Puntos_25='N/A';
		$Puntos_26='N/A';
		$Puntos_27='N/A';
		$Puntos_28='N/A';
		$Puntos_29='N/A';
		$Puntos_30='N/A';
		$Puntos_31='N/A';
		$Puntos_32='N/A';
		$Puntos_33='N/A';
		$Puntos_34='N/A';
		$Puntos_35='N/A';
		$Puntos_36='N/A';
		$Puntos_37='N/A';
		$Puntos_38='N/A';
		$Puntos_39='N/A';
		$Puntos_40='N/A';
		$Puntos_41='N/A';
		$Puntos_42='N/A';
		$Puntos_43='N/A';
		$Puntos_44='N/A';
		$Puntos_45='N/A';
		$Puntos_46='N/A';
		$Puntos_47='N/A';
		$Puntos_48='N/A';
		$Puntos_48_adic='N/A';
		$Puntos_49='N/A';
		$Puntos_50='N/A';
		$Puntos_51='N/A';
		$Puntos_52='N/A';
		$Puntos_53='N/A';
		$Puntos_54='N/A';
		$Puntos_55='N/A';
		$Puntos_56='N/A';
		$Puntos_56_adic='N/A';
		$Puntos_57='N/A';
		$Puntos_58='N/A';
		$Puntos_59='N/A';
		$Puntos_60='N/A';
		$Puntos_60_adic='N/A';
		$Puntos_61='N/A';
		$Puntos_62='N/A';
		$Puntos_62_adic='N/A';
		$Puntos_63='N/A';
		$Puntos_63_adic='N/A';
		$Puntos_64='N/A';
		$Puntos_64_adic='N/A';
		$Quin_gol_A1A2_A1='N/A';
		$Quin_gol_A1A2_A2='N/A';
		$Quin_gol_A1A3_A1='N/A';
		$Quin_gol_A1A3_A3='N/A';
		$Quin_gol_A1A4_A1='N/A';
		$Quin_gol_A1A4_A4='N/A';
		$Quin_gol_A2A3_A2='N/A';
		$Quin_gol_A2A3_A3='N/A';
		$Quin_gol_A2A4_A2='N/A';
		$Quin_gol_A2A4_A4='N/A';
		$Quin_gol_A3A4_A3='N/A';
		$Quin_gol_A3A4_A4='N/A';
		$Quin_gol_B1B2_B1='N/A';
		$Quin_gol_B1B2_B2='N/A';
		$Quin_gol_B1B3_B1='N/A';
		$Quin_gol_B1B3_B3='N/A';
		$Quin_gol_B1B4_B1='N/A';
		$Quin_gol_B1B4_B4='N/A';
		$Quin_gol_B2B3_B2='N/A';
		$Quin_gol_B2B3_B3='N/A';
		$Quin_gol_B2B4_B2='N/A';
		$Quin_gol_B2B4_B4='N/A';
		$Quin_gol_B3B4_B3='N/A';
		$Quin_gol_B3B4_B4='N/A';
		$Quin_gol_C1C2_C1='N/A';
		$Quin_gol_C1C2_C2='N/A';
		$Quin_gol_C1C3_C1='N/A';
		$Quin_gol_C1C3_C3='N/A';
		$Quin_gol_C1C4_C1='N/A';
		$Quin_gol_C1C4_C4='N/A';
		$Quin_gol_C2C3_C2='N/A';
		$Quin_gol_C2C3_C3='N/A';
		$Quin_gol_C2C4_C2='N/A';
		$Quin_gol_C2C4_C4='N/A';
		$Quin_gol_C3C4_C3='N/A';
		$Quin_gol_C3C4_C4='N/A';
		$Quin_gol_D1D2_D1='N/A';
		$Quin_gol_D1D2_D2='N/A';
		$Quin_gol_D1D3_D1='N/A';
		$Quin_gol_D1D3_D3='N/A';
		$Quin_gol_D1D4_D1='N/A';
		$Quin_gol_D1D4_D4='N/A';
		$Quin_gol_D2D3_D2='N/A';
		$Quin_gol_D2D3_D3='N/A';
		$Quin_gol_D2D4_D2='N/A';
		$Quin_gol_D2D4_D4='N/A';
		$Quin_gol_D3D4_D3='N/A';
		$Quin_gol_D3D4_D4='N/A';
		$Quin_gol_E1E2_E1='N/A';
		$Quin_gol_E1E2_E2='N/A';
		$Quin_gol_E1E3_E1='N/A';
		$Quin_gol_E1E3_E3='N/A';
		$Quin_gol_E1E4_E1='N/A';
		$Quin_gol_E1E4_E4='N/A';
		$Quin_gol_E2E3_E2='N/A';
		$Quin_gol_E2E3_E3='N/A';
		$Quin_gol_E2E4_E2='N/A';
		$Quin_gol_E2E4_E4='N/A';
		$Quin_gol_E3E4_E3='N/A';
		$Quin_gol_E3E4_E4='N/A';
		$Quin_gol_F1F2_F1='N/A';
		$Quin_gol_F1F2_F2='N/A';
		$Quin_gol_F1F3_F1='N/A';
		$Quin_gol_F1F3_F3='N/A';
		$Quin_gol_F1F4_F1='N/A';
		$Quin_gol_F1F4_F4='N/A';
		$Quin_gol_F2F3_F2='N/A';
		$Quin_gol_F2F3_F3='N/A';
		$Quin_gol_F2F4_F2='N/A';
		$Quin_gol_F2F4_F4='N/A';
		$Quin_gol_F3F4_F3='N/A';
		$Quin_gol_F3F4_F4='N/A';
		$Quin_gol_G1G2_G1='N/A';
		$Quin_gol_G1G2_G2='N/A';
		$Quin_gol_G1G3_G1='N/A';
		$Quin_gol_G1G3_G3='N/A';
		$Quin_gol_G1G4_G1='N/A';
		$Quin_gol_G1G4_G4='N/A';
		$Quin_gol_G2G3_G2='N/A';
		$Quin_gol_G2G3_G3='N/A';
		$Quin_gol_G2G4_G2='N/A';
		$Quin_gol_G2G4_G4='N/A';
		$Quin_gol_G3G4_G3='N/A';
		$Quin_gol_G3G4_G4='N/A';
		$Quin_gol_H1H2_H1='N/A';
		$Quin_gol_H1H2_H2='N/A';
		$Quin_gol_H1H3_H1='N/A';
		$Quin_gol_H1H3_H3='N/A';
		$Quin_gol_H1H4_H1='N/A';
		$Quin_gol_H1H4_H4='N/A';
		$Quin_gol_H2H3_H2='N/A';
		$Quin_gol_H2H3_H3='N/A';
		$Quin_gol_H2H4_H2='N/A';
		$Quin_gol_H2H4_H4='N/A';
		$Quin_gol_H3H4_H3='N/A';
		$Quin_gol_H3H4_H4='N/A';
		$Quin_Clasificado_A1='N/A';
		$Quin_Clasificado_B2='N/A';
		$Quin_Gol_Oct_A1='N/A';
		$Quin_Gol_Oct_B2='N/A';
		$Quin_Clasificado_B1='N/A';
		$Quin_Clasificado_A2='N/A';
		$Quin_Gol_Oct_B1='N/A';
		$Quin_Gol_Oct_A2='N/A';
		$Quin_Clasificado_C1='N/A';
		$Quin_Clasificado_D2='N/A';
		$Quin_Gol_Oct_C1='N/A';
		$Quin_Gol_Oct_D2='N/A';
		$Quin_Clasificado_D1='N/A';
		$Quin_Clasificado_C2='N/A';
		$Quin_Gol_Oct_D1='N/A';
		$Quin_Gol_Oct_C2='N/A';
		$Quin_Clasificado_E1='N/A';
		$Quin_Clasificado_F2='N/A';
		$Quin_Gol_Oct_E1='N/A';
		$Quin_Gol_Oct_F2='N/A';
		$Quin_Clasificado_F1='N/A';
		$Quin_Clasificado_E2='N/A';
		$Quin_Gol_Oct_F1='N/A';
		$Quin_Gol_Oct_E2='N/A';
		$Quin_Clasificado_G1='N/A';
		$Quin_Clasificado_H2='N/A';
		$Quin_Gol_Oct_G1='N/A';
		$Quin_Gol_Oct_H2='N/A';
		$Quin_Clasificado_H1='N/A';
		$Quin_Clasificado_G2='N/A';
		$Quin_Gol_Oct_H1='N/A';
		$Quin_Gol_Oct_G2='N/A';
		$Quin_Clasificado_81='N/A';
		$Quin_Clasificado_83='N/A';
		$Quin_Gol_Cuart_81='N/A';
		$Quin_Gol_Cuart_83='N/A';
		$Quin_Clasificado_82='N/A';
		$Quin_Clasificado_84='N/A';
		$Quin_Gol_Cuart_82='N/A';
		$Quin_Gol_Cuart_84='N/A';
		$Quin_Clasificado_85='N/A';
		$Quin_Clasificado_87='N/A';
		$Quin_Gol_Cuart_85='N/A';
		$Quin_Gol_Cuart_87='N/A';
		$Quin_Clasificado_86='N/A';
		$Quin_Clasificado_88='N/A';
		$Quin_Gol_Cuart_86='N/A';
		$Quin_Gol_Cuart_88='N/A';
		$Quin_Clasificado_41='N/A';
		$Quin_Clasificado_43='N/A';
		$Quin_Gol_SF_41='N/A';
		$Quin_Gol_SF_43='N/A';
		$Quin_Clasificado_42='N/A';
		$Quin_Clasificado_44='N/A';
		$Quin_Gol_SF_42='N/A';
		$Quin_Gol_SF_44='N/A';
		$Quin_Clasificado_Tercero_1='N/A';
		$Quin_Clasificado_Tercero_2='N/A';
		$Quin_Gol_PSF_1='N/A';
		$Quin_Gol_PSF_2='N/A';
		$Quin_Clasificado_GF_1='N/A';
		$Quin_Clasificado_GF_2='N/A';
		$Quin_Gol_GSF_1='N/A';
		$Quin_Gol_GSF_2='N/A';
		$Quin_eq_campeon='N/A';
		$Quin_eq_goleador='N/A';
	}

	echo "<tr><td style='background-color:#B0DFFF'>$grupo_A1</td><td style='background-color:#FFF'>$Quin_gol_A1A2_A1</td><td style='background-color:#FFF'>$Quin_gol_A1A2_A2</td><td style='background-color:#B0DFFF'>$grupo_A2</td><td style='background-color:#FFF'>$Puntos_01</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_A1</td><td style='background-color:#FFF'>$Quin_gol_A1A3_A1</td><td style='background-color:#FFF'>$Quin_gol_A1A3_A3</td><td style='background-color:#B0DFFF'>$grupo_A3</td><td style='background-color:#FFF'>$Puntos_02</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_A1</td><td style='background-color:#FFF'>$Quin_gol_A1A4_A1</td><td style='background-color:#FFF'>$Quin_gol_A1A4_A4</td><td style='background-color:#B0DFFF'>$grupo_A4</td><td style='background-color:#FFF'>$Puntos_03</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_A2</td><td style='background-color:#FFF'>$Quin_gol_A2A3_A2</td><td style='background-color:#FFF'>$Quin_gol_A2A3_A3</td><td style='background-color:#B0DFFF'>$grupo_A3</td><td style='background-color:#FFF'>$Puntos_04</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_A2</td><td style='background-color:#FFF'>$Quin_gol_A2A4_A2</td><td style='background-color:#FFF'>$Quin_gol_A2A4_A4</td><td style='background-color:#B0DFFF'>$grupo_A4</td><td style='background-color:#FFF'>$Puntos_05</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_A3</td><td style='background-color:#FFF'>$Quin_gol_A3A4_A3</td><td style='background-color:#FFF'>$Quin_gol_A3A4_A4</td><td style='background-color:#B0DFFF'>$grupo_A4</td><td style='background-color:#FFF'>$Puntos_06</td><td></td></tr>";

	echo "<tr><td style='background-color:#B0DFFF'>$grupo_B1</td><td style='background-color:#FFF'>$Quin_gol_B1B2_B1</td><td style='background-color:#FFF'>$Quin_gol_B1B2_B2</td><td style='background-color:#B0DFFF'>$grupo_B2</td><td style='background-color:#FFF'>$Puntos_07</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_B1</td><td style='background-color:#FFF'>$Quin_gol_B1B3_B1</td><td style='background-color:#FFF'>$Quin_gol_B1B3_B3</td><td style='background-color:#B0DFFF'>$grupo_B3</td><td style='background-color:#FFF'>$Puntos_08</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_B1</td><td style='background-color:#FFF'>$Quin_gol_B1B4_B1</td><td style='background-color:#FFF'>$Quin_gol_B1B4_B4</td><td style='background-color:#B0DFFF'>$grupo_B4</td><td style='background-color:#FFF'>$Puntos_09</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_B2</td><td style='background-color:#FFF'>$Quin_gol_B2B3_B2</td><td style='background-color:#FFF'>$Quin_gol_B2B3_B3</td><td style='background-color:#B0DFFF'>$grupo_B3</td><td style='background-color:#FFF'>$Puntos_10</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_B2</td><td style='background-color:#FFF'>$Quin_gol_B2B4_B2</td><td style='background-color:#FFF'>$Quin_gol_B2B4_B4</td><td style='background-color:#B0DFFF'>$grupo_B4</td><td style='background-color:#FFF'>$Puntos_11</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_B3</td><td style='background-color:#FFF'>$Quin_gol_B3B4_B3</td><td style='background-color:#FFF'>$Quin_gol_B3B4_B4</td><td style='background-color:#B0DFFF'>$grupo_B4</td><td style='background-color:#FFF'>$Puntos_12</td><td></td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_C1</td><td style='background-color:#FFF'>$Quin_gol_C1C2_C1</td><td style='background-color:#FFF'>$Quin_gol_C1C2_C2</td><td style='background-color:#B0DFFF'>$grupo_C2</td><td style='background-color:#FFF'>$Puntos_13</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_C1</td><td style='background-color:#FFF'>$Quin_gol_C1C3_C1</td><td style='background-color:#FFF'>$Quin_gol_C1C3_C3</td><td style='background-color:#B0DFFF'>$grupo_C3</td><td style='background-color:#FFF'>$Puntos_14</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_C1</td><td style='background-color:#FFF'>$Quin_gol_C1C4_C1</td><td style='background-color:#FFF'>$Quin_gol_C1C4_C4</td><td style='background-color:#B0DFFF'>$grupo_C4</td><td style='background-color:#FFF'>$Puntos_15</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_C2</td><td style='background-color:#FFF'>$Quin_gol_C2C3_C2</td><td style='background-color:#FFF'>$Quin_gol_C2C3_C3</td><td style='background-color:#B0DFFF'>$grupo_C3</td><td style='background-color:#FFF'>$Puntos_16</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_C2</td><td style='background-color:#FFF'>$Quin_gol_C2C4_C2</td><td style='background-color:#FFF'>$Quin_gol_C2C4_C4</td><td style='background-color:#B0DFFF'>$grupo_C4</td><td style='background-color:#FFF'>$Puntos_17</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_C3</td><td style='background-color:#FFF'>$Quin_gol_C3C4_C3</td><td style='background-color:#FFF'>$Quin_gol_C3C4_C4</td><td style='background-color:#B0DFFF'>$grupo_C4</td><td style='background-color:#FFF'>$Puntos_18</td><td></td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_D1</td><td style='background-color:#FFF'>$Quin_gol_D1D2_D1</td><td style='background-color:#FFF'>$Quin_gol_D1D2_D2</td><td style='background-color:#B0DFFF'>$grupo_D2</td><td style='background-color:#FFF'>$Puntos_19</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_D1</td><td style='background-color:#FFF'>$Quin_gol_D1D3_D1</td><td style='background-color:#FFF'>$Quin_gol_D1D3_D3</td><td style='background-color:#B0DFFF'>$grupo_D3</td><td style='background-color:#FFF'>$Puntos_20</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_D1</td><td style='background-color:#FFF'>$Quin_gol_D1D4_D1</td><td style='background-color:#FFF'>$Quin_gol_D1D4_D4</td><td style='background-color:#B0DFFF'>$grupo_D4</td><td style='background-color:#FFF'>$Puntos_21</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_D2</td><td style='background-color:#FFF'>$Quin_gol_D2D3_D2</td><td style='background-color:#FFF'>$Quin_gol_D2D3_D3</td><td style='background-color:#B0DFFF'>$grupo_D3</td><td style='background-color:#FFF'>$Puntos_22</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_D2</td><td style='background-color:#FFF'>$Quin_gol_D2D4_D2</td><td style='background-color:#FFF'>$Quin_gol_D2D4_D4</td><td style='background-color:#B0DFFF'>$grupo_D4</td><td style='background-color:#FFF'>$Puntos_23</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_D3</td><td style='background-color:#FFF'>$Quin_gol_D3D4_D3</td><td style='background-color:#FFF'>$Quin_gol_D3D4_D4</td><td style='background-color:#B0DFFF'>$grupo_D4</td><td style='background-color:#FFF'>$Puntos_24</td><td></td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_E1</td><td style='background-color:#FFF'>$Quin_gol_E1E2_E1</td><td style='background-color:#FFF'>$Quin_gol_E1E2_E2</td><td style='background-color:#B0DFFF'>$grupo_E2</td><td style='background-color:#FFF'>$Puntos_25</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_E1</td><td style='background-color:#FFF'>$Quin_gol_E1E3_E1</td><td style='background-color:#FFF'>$Quin_gol_E1E3_E3</td><td style='background-color:#B0DFFF'>$grupo_E3</td><td style='background-color:#FFF'>$Puntos_26</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_E1</td><td style='background-color:#FFF'>$Quin_gol_E1E4_E1</td><td style='background-color:#FFF'>$Quin_gol_E1E4_E4</td><td style='background-color:#B0DFFF'>$grupo_E4</td><td style='background-color:#FFF'>$Puntos_27</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_E2</td><td style='background-color:#FFF'>$Quin_gol_E2E3_E2</td><td style='background-color:#FFF'>$Quin_gol_E2E3_E3</td><td style='background-color:#B0DFFF'>$grupo_E3</td><td style='background-color:#FFF'>$Puntos_28</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_E2</td><td style='background-color:#FFF'>$Quin_gol_E2E4_E2</td><td style='background-color:#FFF'>$Quin_gol_E2E4_E4</td><td style='background-color:#B0DFFF'>$grupo_E4</td><td style='background-color:#FFF'>$Puntos_29</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_E3</td><td style='background-color:#FFF'>$Quin_gol_E3E4_E3</td><td style='background-color:#FFF'>$Quin_gol_E3E4_E4</td><td style='background-color:#B0DFFF'>$grupo_E4</td><td style='background-color:#FFF'>$Puntos_30</td><td></td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_F1</td><td style='background-color:#FFF'>$Quin_gol_F1F2_F1</td><td style='background-color:#FFF'>$Quin_gol_F1F2_F2</td><td style='background-color:#B0DFFF'>$grupo_F2</td><td style='background-color:#FFF'>$Puntos_31</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_F1</td><td style='background-color:#FFF'>$Quin_gol_F1F3_F1</td><td style='background-color:#FFF'>$Quin_gol_F1F3_F3</td><td style='background-color:#B0DFFF'>$grupo_F3</td><td style='background-color:#FFF'>$Puntos_32</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_F1</td><td style='background-color:#FFF'>$Quin_gol_F1F4_F1</td><td style='background-color:#FFF'>$Quin_gol_F1F4_F4</td><td style='background-color:#B0DFFF'>$grupo_F4</td><td style='background-color:#FFF'>$Puntos_33</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_F2</td><td style='background-color:#FFF'>$Quin_gol_F2F3_F2</td><td style='background-color:#FFF'>$Quin_gol_F2F3_F3</td><td style='background-color:#B0DFFF'>$grupo_F3</td><td style='background-color:#FFF'>$Puntos_34</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_F2</td><td style='background-color:#FFF'>$Quin_gol_F2F4_F2</td><td style='background-color:#FFF'>$Quin_gol_F2F4_F4</td><td style='background-color:#B0DFFF'>$grupo_F4</td><td style='background-color:#FFF'>$Puntos_35</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_F3</td><td style='background-color:#FFF'>$Quin_gol_F3F4_F3</td><td style='background-color:#FFF'>$Quin_gol_F3F4_F4</td><td style='background-color:#B0DFFF'>$grupo_F4</td><td style='background-color:#FFF'>$Puntos_36</td><td></td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_G1</td><td style='background-color:#FFF'>$Quin_gol_G1G2_G1</td><td style='background-color:#FFF'>$Quin_gol_G1G2_G2</td><td style='background-color:#B0DFFF'>$grupo_G2</td><td style='background-color:#FFF'>$Puntos_37</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_G1</td><td style='background-color:#FFF'>$Quin_gol_G1G3_G1</td><td style='background-color:#FFF'>$Quin_gol_G1G3_G3</td><td style='background-color:#B0DFFF'>$grupo_G3</td><td style='background-color:#FFF'>$Puntos_38</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_G1</td><td style='background-color:#FFF'>$Quin_gol_G1G4_G1</td><td style='background-color:#FFF'>$Quin_gol_G1G4_G4</td><td style='background-color:#B0DFFF'>$grupo_G4</td><td style='background-color:#FFF'>$Puntos_39</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_G2</td><td style='background-color:#FFF'>$Quin_gol_G2G3_G2</td><td style='background-color:#FFF'>$Quin_gol_G2G3_G3</td><td style='background-color:#B0DFFF'>$grupo_G3</td><td style='background-color:#FFF'>$Puntos_40</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_G2</td><td style='background-color:#FFF'>$Quin_gol_G2G4_G2</td><td style='background-color:#FFF'>$Quin_gol_G2G4_G4</td><td style='background-color:#B0DFFF'>$grupo_G4</td><td style='background-color:#FFF'>$Puntos_41</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_G3</td><td style='background-color:#FFF'>$Quin_gol_G3G4_G3</td><td style='background-color:#FFF'>$Quin_gol_G3G4_G4</td><td style='background-color:#B0DFFF'>$grupo_G4</td><td style='background-color:#FFF'>$Puntos_42</td><td></td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_H1</td><td style='background-color:#FFF'>$Quin_gol_H1H2_H1</td><td style='background-color:#FFF'>$Quin_gol_H1H2_H2</td><td style='background-color:#B0DFFF'>$grupo_H2</td><td style='background-color:#FFF'>$Puntos_43</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_H1</td><td style='background-color:#FFF'>$Quin_gol_H1H3_H1</td><td style='background-color:#FFF'>$Quin_gol_H1H3_H3</td><td style='background-color:#B0DFFF'>$grupo_H3</td><td style='background-color:#FFF'>$Puntos_44</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_H1</td><td style='background-color:#FFF'>$Quin_gol_H1H4_H1</td><td style='background-color:#FFF'>$Quin_gol_H1H4_H4</td><td style='background-color:#B0DFFF'>$grupo_H4</td><td style='background-color:#FFF'>$Puntos_45</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_H2</td><td style='background-color:#FFF'>$Quin_gol_H2H3_H2</td><td style='background-color:#FFF'>$Quin_gol_H2H3_H3</td><td style='background-color:#B0DFFF'>$grupo_H3</td><td style='background-color:#FFF'>$Puntos_46</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_H2</td><td style='background-color:#FFF'>$Quin_gol_H2H4_H2</td><td style='background-color:#FFF'>$Quin_gol_H2H4_H4</td><td style='background-color:#B0DFFF'>$grupo_H4</td><td style='background-color:#FFF'>$Puntos_47</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$grupo_H3</td><td style='background-color:#FFF'>$Quin_gol_H3H4_H3</td><td style='background-color:#FFF'>$Quin_gol_H3H4_H4</td><td style='background-color:#B0DFFF'>$grupo_H4</td><td style='background-color:#FFF'>$Puntos_48</td><td style='background-color:#FFF'>$Puntos_48_adic</td></tr>";

	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_A1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_A1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_B2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_B2</td><td style='background-color:#FFF'>$Puntos_49</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_B1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_B1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_A2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_A2</td><td style='background-color:#FFF'>$Puntos_50</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_C1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_C1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_D2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_D2</td><td style='background-color:#FFF'>$Puntos_51</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_D1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_D1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_C2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_C2</td><td style='background-color:#FFF'>$Puntos_52</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_E1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_E1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_F2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_F2</td><td style='background-color:#FFF'>$Puntos_53</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_F1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_F1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_E2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_E2</td><td style='background-color:#FFF'>$Puntos_54</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_G1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_G1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_H2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_H2</td><td style='background-color:#FFF'>$Puntos_55</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_H1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_H1</td><td style='background-color:#FFF'>$Quin_Gol_Oct_G2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_G2</td><td style='background-color:#FFF'>$Puntos_56</td><td style='background-color:#FFF'>$Puntos_56_adic</td></tr>";

	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_81</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_81</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_83</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_83</td><td style='background-color:#FFF'>$Puntos_57</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_82</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_82</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_84</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_84</td><td style='background-color:#FFF'>$Puntos_58</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_85</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_85</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_87</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_87</td><td style='background-color:#FFF'>$Puntos_59</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_86</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_86</td><td style='background-color:#FFF'>$Quin_Gol_Cuart_88</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_88</td><td style='background-color:#FFF'>$Puntos_60</td><td style='background-color:#FFF'>$Puntos_60_adic</td></tr>";
	
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_41</td><td style='background-color:#FFF'>$Quin_Gol_SF_41</td><td style='background-color:#FFF'>$Quin_Gol_SF_43</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_43</td><td style='background-color:#FFF'>$Puntos_61</td><td></td></tr>";
	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_42</td><td style='background-color:#FFF'>$Quin_Gol_SF_42</td><td style='background-color:#FFF'>$Quin_Gol_SF_44</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_44</td><td style='background-color:#FFF'>$Puntos_62</td><td style='background-color:#FFF'>$Puntos_62_adic</td></tr>";

	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_Tercero_1</td><td style='background-color:#FFF'>$Quin_Gol_PSF_1</td><td style='background-color:#FFF'>$Quin_Gol_PSF_2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_Tercero_2</td><td style='background-color:#FFF'>$Puntos_63</td><td style='background-color:#FFF'>$Puntos_63_adic</td></tr>";

	echo "<tr><td style='background-color:#B0DFFF'>$Quin_Clasificado_GF_1</td><td style='background-color:#FFF'>$Quin_Gol_GSF_1</td><td style='background-color:#FFF'>$Quin_Gol_GSF_2</td><td style='background-color:#B0DFFF'>$Quin_Clasificado_GF_2</td><td style='background-color:#FFF'>$Puntos_64</td><td style='background-color:#FFF'>$Puntos_64_adic</td></tr>";

	echo "<tr><td colspan='4'>Equipo Goleador del Torneo</td><td  colspan='2'  style='background-color:#B0DFFF'>$Quin_eq_goleador</td></tr>";
	
	mysqli_close($conexion);
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>
    	</table>
    </td>
  </tr>
</table>

</section>

<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>