<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
	<title>Quiniela_Mundial_2018/Registra_Usuario</TITLE>
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
<div id="usuario">Bienvenido a la zona de Nuevos Usuarios&nbsp;&nbsp;&nbsp;</div>
<div>
<blockquote><a href="QMF2016_Salir.php">Salir</a></blockquote>
</div>
</nav>

<section>

<?php

try{

// CONECTANDO
	
	require ("conexion.php");

// DEFINIENDO LAS VARIABLES DE DATOS DE USUARIO.

	$nombre_usuario=htmlentities(addslashes($_POST["nombre_usuario"]));
	$email_usuario=htmlentities(addslashes($_POST["email_usuario"]));
	$email_usuario_corr=htmlentities(addslashes($_POST["email_usuario_corr"]));
	$codigo_inicio=htmlentities(addslashes($_POST["codigo_inicio"]));
	$contrasena_usuario=htmlentities(addslashes($_POST["contrasena_usuario"]));
	$contrasena_usuario_corr=htmlentities(addslashes($_POST["contrasena_usuario_corr"]));

// VERIFICANDO USUARIO VALIDO.......
	
	$verf_email="sin datos";
	$verf_contra="sin datos";
	$verf_cod="sin datos";
	$verf_nombre_usuario="sin datos";
	
	if($email_usuario==$email_usuario_corr){$verf_email="ok";}else{$verf_email="error";}
	if($contrasena_usuario==$contrasena_usuario_corr){$verf_contra="ok";}else{$verf_contra="error";}
	
	$consulta="SELECT * FROM `datos_usuarios` WHERE CODIGO_INICIO = '$codigo_inicio'";
	$result=mysqli_query($conexion,$consulta);
	
	if(($filas=mysqli_fetch_array($result))==true){$verf_cod="ok";}else {$verf_cod="error";}
	
	$consulta2="SELECT * FROM `datos_usuarios` WHERE USUARIO = '$nombre_usuario'";
	$resultante=mysqli_query($conexion,$consulta2);

	if(($filas02=mysqli_fetch_array($resultante))==true){$verf_nombre_usuario="error";}else {$verf_nombre_usuario="ok";}

//		echo "USUARIO: $nombre_usuario<br>EMAIL: $email_usuario y $email_usuario_corr.<br>CODIGO DE INICIO: $codigo_inicio<br>CONTRASEÑA: $contrasena_usuario y $contrasena_usuario_corr<br>VERIFICACION DE CODIGO INICIO= $verf_cod USUARIO= $verf_nombre_usuario CONTRASEÑA= $verf_contra EMAIL= $verf_email<br>";

	if($verf_cod=="error"){
		echo "<h3>CODIGO DE INICIO INVALIDO</h3>";
		echo "<p>Por favor verifique que esté utilizando un Cógigo de Inicio válido...</p>";
		echo "<p><a href='QMF2016_Nuevo_Usuario.php'>Volver a la Página Anterior</a> (si  desea regresar y que todos los datos de la quiniela estén cargados con la información que usted suministró por favor utilice el boton de PÁGINA ANTERIOR del navegador)<p>";
	}
	
	if($verf_cod=="ok" and $verf_nombre_usuario=="error"){
		echo "<h3>YA EXISTE UN USUARIO IGUAL</h3>";
		echo "<p>Por favor utilice un monbre de usuario diferente, verifique que no está utilizando un CODIGO de INICIO usado previamente y vuelva a intentarlo...</p>";
		echo "<p><a href='QMF2016_Nuevo_Usuario.php'>Volver a la Página Anterior</a> (si  desea regresar y que todos los datos de la quiniela estén cargados con la información que usted suministró por favor utilice el boton de PÁGINA ANTERIOR del navegador)<p>";
	}
	
	if($verf_cod=="ok" and $verf_nombre_usuario=="ok" and $verf_email=="error"){
		echo "<h3>Los datos que introdujo de Email y Confirmación de Email no son iguales...</h3>";
		echo "<p>(Email: $email_usuario, Confirmar Email: $email_usuario_corr)</p>";
		echo "<p>Por favor Vuelva a intentarlo...</p>";
		echo "<p><a href='QMF2016_Nuevo_Usuario.php'>Volver a la Página Anterior</a> (si  desea regresar y que todos los datos de la quiniela estén cargados con la información que usted suministró por favor utilice el boton de PÁGINA ANTERIOR del navegador)<p>";
	}
	
	if($verf_cod=="ok" and $verf_nombre_usuario=="ok" and $verf_contra=="error"){
		echo "<h3>Los datos que introdujo de Contraseña y Confirmación de Contraseña no son iguales...</h3>";
		echo "<p>(Contraseña: $contrasena_usuario, Confirmar Contraseña: $contrasena_usuario_corr)</p>";
		echo "<p>Por favor Vuelva a intentarlo...</p>";
		echo "<p><a href='QMF2016_Nuevo_Usuario.php'>Volver a la Página Anterior</a> (si  desea regresar y que todos los datos de la quiniela estén cargados con la información que usted suministró por favor utilice el boton de PÁGINA ANTERIOR del navegador)<p>";
	}
	
	if($verf_cod=="ok" and $verf_nombre_usuario=="ok" and $verf_email=="ok" and $verf_contra=="ok"){

// FIN DE LA VERIFICACIÓN DE USUARIO VALIDO.......
	
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

// DEFINIENDO EN VARIABLES DE LOS NOMBRES DE LOS EQUIPOS EN CASO DE DESEMPATE

	$Empate_Tecnico_A1=$_POST["desempate_A1"];
	$Empate_Tecnico_A2=$_POST["desempate_A2"];
	$Empate_Tecnico_B1=$_POST["desempate_B1"];
	$Empate_Tecnico_B2=$_POST["desempate_B2"];
	$Empate_Tecnico_C1=$_POST["desempate_C1"];
	$Empate_Tecnico_C2=$_POST["desempate_C2"];
	$Empate_Tecnico_D1=$_POST["desempate_D1"];
	$Empate_Tecnico_D2=$_POST["desempate_D2"];
	$Empate_Tecnico_E1=$_POST["desempate_E1"];
	$Empate_Tecnico_E2=$_POST["desempate_E2"];
	$Empate_Tecnico_F1=$_POST["desempate_F1"];
	$Empate_Tecnico_F2=$_POST["desempate_F2"];
	$Empate_Tecnico_G1=$_POST["desempate_G1"];
	$Empate_Tecnico_G2=$_POST["desempate_G2"];
	$Empate_Tecnico_H1=$_POST["desempate_H1"];
	$Empate_Tecnico_H2=$_POST["desempate_H2"];

// DEFINIENDO EN VARIABLES LOS GOLES DE LOS EQUIPOS EN LA PRIMERA RONDA

	$gol_A1A2_A1=$_POST["Juego_A1_vs_A2_Gol_A1"];
	$gol_A1A2_A2=$_POST["Juego_A1_vs_A2_Gol_A2"];
	$gol_A1A3_A1=$_POST["Juego_A1_vs_A3_Gol_A1"];
	$gol_A1A3_A3=$_POST["Juego_A1_vs_A3_Gol_A3"];
	$gol_A1A4_A1=$_POST["Juego_A1_vs_A4_Gol_A1"];
	$gol_A1A4_A4=$_POST["Juego_A1_vs_A4_Gol_A4"];
	$gol_A2A3_A2=$_POST["Juego_A2_vs_A3_Gol_A2"];
	$gol_A2A3_A3=$_POST["Juego_A2_vs_A3_Gol_A3"];
	$gol_A2A4_A2=$_POST["Juego_A2_vs_A4_Gol_A2"];
	$gol_A2A4_A4=$_POST["Juego_A2_vs_A4_Gol_A4"];
	$gol_A3A4_A3=$_POST["Juego_A3_vs_A4_Gol_A3"];
	$gol_A3A4_A4=$_POST["Juego_A3_vs_A4_Gol_A4"];
	$gol_B1B2_B1=$_POST["Juego_B1_vs_B2_Gol_B1"];
	$gol_B1B2_B2=$_POST["Juego_B1_vs_B2_Gol_B2"];
	$gol_B1B3_B1=$_POST["Juego_B1_vs_B3_Gol_B1"];
	$gol_B1B3_B3=$_POST["Juego_B1_vs_B3_Gol_B3"];
	$gol_B1B4_B1=$_POST["Juego_B1_vs_B4_Gol_B1"];
	$gol_B1B4_B4=$_POST["Juego_B1_vs_B4_Gol_B4"];
	$gol_B2B3_B2=$_POST["Juego_B2_vs_B3_Gol_B2"];
	$gol_B2B3_B3=$_POST["Juego_B2_vs_B3_Gol_B3"];
	$gol_B2B4_B2=$_POST["Juego_B2_vs_B4_Gol_B2"];
	$gol_B2B4_B4=$_POST["Juego_B2_vs_B4_Gol_B4"];
	$gol_B3B4_B3=$_POST["Juego_B3_vs_B4_Gol_B3"];
	$gol_B3B4_B4=$_POST["Juego_B3_vs_B4_Gol_B4"];
	$gol_C1C2_C1=$_POST["Juego_C1_vs_C2_Gol_C1"];
	$gol_C1C2_C2=$_POST["Juego_C1_vs_C2_Gol_C2"];
	$gol_C1C3_C1=$_POST["Juego_C1_vs_C3_Gol_C1"];
	$gol_C1C3_C3=$_POST["Juego_C1_vs_C3_Gol_C3"];
	$gol_C1C4_C1=$_POST["Juego_C1_vs_C4_Gol_C1"];
	$gol_C1C4_C4=$_POST["Juego_C1_vs_C4_Gol_C4"];
	$gol_C2C3_C2=$_POST["Juego_C2_vs_C3_Gol_C2"];
	$gol_C2C3_C3=$_POST["Juego_C2_vs_C3_Gol_C3"];
	$gol_C2C4_C2=$_POST["Juego_C2_vs_C4_Gol_C2"];
	$gol_C2C4_C4=$_POST["Juego_C2_vs_C4_Gol_C4"];
	$gol_C3C4_C3=$_POST["Juego_C3_vs_C4_Gol_C3"];
	$gol_C3C4_C4=$_POST["Juego_C3_vs_C4_Gol_C4"];
	$gol_D1D2_D1=$_POST["Juego_D1_vs_D2_Gol_D1"];
	$gol_D1D2_D2=$_POST["Juego_D1_vs_D2_Gol_D2"];
	$gol_D1D3_D1=$_POST["Juego_D1_vs_D3_Gol_D1"];
	$gol_D1D3_D3=$_POST["Juego_D1_vs_D3_Gol_D3"];
	$gol_D1D4_D1=$_POST["Juego_D1_vs_D4_Gol_D1"];
	$gol_D1D4_D4=$_POST["Juego_D1_vs_D4_Gol_D4"];
	$gol_D2D3_D2=$_POST["Juego_D2_vs_D3_Gol_D2"];
	$gol_D2D3_D3=$_POST["Juego_D2_vs_D3_Gol_D3"];
	$gol_D2D4_D2=$_POST["Juego_D2_vs_D4_Gol_D2"];
	$gol_D2D4_D4=$_POST["Juego_D2_vs_D4_Gol_D4"];
	$gol_D3D4_D3=$_POST["Juego_D3_vs_D4_Gol_D3"];
	$gol_D3D4_D4=$_POST["Juego_D3_vs_D4_Gol_D4"];
	$gol_E1E2_E1=$_POST["Juego_E1_vs_E2_Gol_E1"];
	$gol_E1E2_E2=$_POST["Juego_E1_vs_E2_Gol_E2"];
	$gol_E1E3_E1=$_POST["Juego_E1_vs_E3_Gol_E1"];
	$gol_E1E3_E3=$_POST["Juego_E1_vs_E3_Gol_E3"];
	$gol_E1E4_E1=$_POST["Juego_E1_vs_E4_Gol_E1"];
	$gol_E1E4_E4=$_POST["Juego_E1_vs_E4_Gol_E4"];
	$gol_E2E3_E2=$_POST["Juego_E2_vs_E3_Gol_E2"];
	$gol_E2E3_E3=$_POST["Juego_E2_vs_E3_Gol_E3"];
	$gol_E2E4_E2=$_POST["Juego_E2_vs_E4_Gol_E2"];
	$gol_E2E4_E4=$_POST["Juego_E2_vs_E4_Gol_E4"];
	$gol_E3E4_E3=$_POST["Juego_E3_vs_E4_Gol_E3"];
	$gol_E3E4_E4=$_POST["Juego_E3_vs_E4_Gol_E4"];
	$gol_F1F2_F1=$_POST["Juego_F1_vs_F2_Gol_F1"];
	$gol_F1F2_F2=$_POST["Juego_F1_vs_F2_Gol_F2"];
	$gol_F1F3_F1=$_POST["Juego_F1_vs_F3_Gol_F1"];
	$gol_F1F3_F3=$_POST["Juego_F1_vs_F3_Gol_F3"];
	$gol_F1F4_F1=$_POST["Juego_F1_vs_F4_Gol_F1"];
	$gol_F1F4_F4=$_POST["Juego_F1_vs_F4_Gol_F4"];
	$gol_F2F3_F2=$_POST["Juego_F2_vs_F3_Gol_F2"];
	$gol_F2F3_F3=$_POST["Juego_F2_vs_F3_Gol_F3"];
	$gol_F2F4_F2=$_POST["Juego_F2_vs_F4_Gol_F2"];
	$gol_F2F4_F4=$_POST["Juego_F2_vs_F4_Gol_F4"];
	$gol_F3F4_F3=$_POST["Juego_F3_vs_F4_Gol_F3"];
	$gol_F3F4_F4=$_POST["Juego_F3_vs_F4_Gol_F4"];
	$gol_G1G2_G1=$_POST["Juego_G1_vs_G2_Gol_G1"];
	$gol_G1G2_G2=$_POST["Juego_G1_vs_G2_Gol_G2"];
	$gol_G1G3_G1=$_POST["Juego_G1_vs_G3_Gol_G1"];
	$gol_G1G3_G3=$_POST["Juego_G1_vs_G3_Gol_G3"];
	$gol_G1G4_G1=$_POST["Juego_G1_vs_G4_Gol_G1"];
	$gol_G1G4_G4=$_POST["Juego_G1_vs_G4_Gol_G4"];
	$gol_G2G3_G2=$_POST["Juego_G2_vs_G3_Gol_G2"];
	$gol_G2G3_G3=$_POST["Juego_G2_vs_G3_Gol_G3"];
	$gol_G2G4_G2=$_POST["Juego_G2_vs_G4_Gol_G2"];
	$gol_G2G4_G4=$_POST["Juego_G2_vs_G4_Gol_G4"];
	$gol_G3G4_G3=$_POST["Juego_G3_vs_G4_Gol_G3"];
	$gol_G3G4_G4=$_POST["Juego_G3_vs_G4_Gol_G4"];
	$gol_H1H2_H1=$_POST["Juego_H1_vs_H2_Gol_H1"];
	$gol_H1H2_H2=$_POST["Juego_H1_vs_H2_Gol_H2"];
	$gol_H1H3_H1=$_POST["Juego_H1_vs_H3_Gol_H1"];
	$gol_H1H3_H3=$_POST["Juego_H1_vs_H3_Gol_H3"];
	$gol_H1H4_H1=$_POST["Juego_H1_vs_H4_Gol_H1"];
	$gol_H1H4_H4=$_POST["Juego_H1_vs_H4_Gol_H4"];
	$gol_H2H3_H2=$_POST["Juego_H2_vs_H3_Gol_H2"];
	$gol_H2H3_H3=$_POST["Juego_H2_vs_H3_Gol_H3"];
	$gol_H2H4_H2=$_POST["Juego_H2_vs_H4_Gol_H2"];
	$gol_H2H4_H4=$_POST["Juego_H2_vs_H4_Gol_H4"];
	$gol_H3H4_H3=$_POST["Juego_H3_vs_H4_Gol_H3"];
	$gol_H3H4_H4=$_POST["Juego_H3_vs_H4_Gol_H4"];

// DEFINIENDO EN VARIABLES LOS GOLES DE LOS EQUIPOS DE 8° DE FINAL

	$Gol_Oct_A1=$_POST["Octavos_Juego_A1_vs_B2_Gol_A1"];
	$Gol_Oct_B2=$_POST["Octavos_Juego_A1_vs_B2_Gol_B2"];
	$Gol_Oct_B1=$_POST["Octavos_Juego_B1_vs_A2_Gol_B1"];
	$Gol_Oct_A2=$_POST["Octavos_Juego_B1_vs_A2_Gol_A2"];
	$Gol_Oct_C1=$_POST["Octavos_Juego_C1_vs_D2_Gol_C1"];
	$Gol_Oct_D2=$_POST["Octavos_Juego_C1_vs_D2_Gol_D2"];
	$Gol_Oct_D1=$_POST["Octavos_Juego_D1_vs_C2_Gol_D1"];
	$Gol_Oct_C2=$_POST["Octavos_Juego_D1_vs_C2_Gol_C2"];
	$Gol_Oct_E1=$_POST["Octavos_Juego_E1_vs_F2_Gol_E1"];
	$Gol_Oct_F2=$_POST["Octavos_Juego_E1_vs_F2_Gol_F2"];
	$Gol_Oct_F1=$_POST["Octavos_Juego_F1_vs_E2_Gol_F1"];
	$Gol_Oct_E2=$_POST["Octavos_Juego_F1_vs_E2_Gol_E2"];
	$Gol_Oct_G1=$_POST["Octavos_Juego_G1_vs_H2_Gol_G1"];
	$Gol_Oct_H2=$_POST["Octavos_Juego_G1_vs_H2_Gol_H2"];
	$Gol_Oct_H1=$_POST["Octavos_Juego_H1_vs_G2_Gol_H1"];
	$Gol_Oct_G2=$_POST["Octavos_Juego_H1_vs_G2_Gol_G2"];

// DEFINIENDO EN VARIABLES LOS GOLES DE LOS EQUIPOS DE 4° DE FINAL

	$Gol_Cuart_81=$_POST["Cuartos_Juego_81_vs_83_Gol_81"];
	$Gol_Cuart_83=$_POST["Cuartos_Juego_81_vs_83_Gol_83"];
	$Gol_Cuart_82=$_POST["Cuartos_Juego_82_vs_84_Gol_82"];
	$Gol_Cuart_84=$_POST["Cuartos_Juego_82_vs_84_Gol_84"];
	$Gol_Cuart_85=$_POST["Cuartos_Juego_85_vs_87_Gol_85"];
	$Gol_Cuart_87=$_POST["Cuartos_Juego_85_vs_87_Gol_87"];
	$Gol_Cuart_86=$_POST["Cuartos_Juego_86_vs_88_Gol_86"];
	$Gol_Cuart_88=$_POST["Cuartos_Juego_86_vs_88_Gol_88"];

// DEFINIENDO EN VARIABLES LOS GOLES DE LOS EQUIPOS DE SEMIFINALES EN ADELANTE

	$Gol_SF_41=$_POST["SemiFinales_Juego_41_vs_43_Gol_41"];
	$Gol_SF_43=$_POST["SemiFinales_Juego_41_vs_43_Gol_43"];
	$Gol_SF_42=$_POST["SemiFinales_Juego_42_vs_44_Gol_42"];
	$Gol_SF_44=$_POST["SemiFinales_Juego_42_vs_44_Gol_44"];
	$Gol_PSF_1=$_POST["TercerLugar_Juego_P1_vs_P2_Gol_P1"];
	$Gol_PSF_2=$_POST["TercerLugar_Juego_P1_vs_P2_Gol_P2"];
	$Gol_GSF_1=$_POST["GranFinal_Juego_G1_vs_G2_Gol_G1"];
	$Gol_GSF_2=$_POST["GranFinal_Juego_G1_vs_G2_Gol_G2"];

// CÁLCULOS PARA LA PRIEMRA RONDA

// Cálculo de puntos del equipo A1

	if($gol_A1A2_A1>$gol_A1A2_A2){$Puntos_de_A1_en_A1A2=3;}
	if($gol_A1A2_A1==$gol_A1A2_A2){$Puntos_de_A1_en_A1A2=1;}
	if($gol_A1A2_A1<$gol_A1A2_A2){$Puntos_de_A1_en_A1A2=0;}
	if($gol_A1A3_A1>$gol_A1A3_A3){$Puntos_de_A1_en_A1A3=3;}
	if($gol_A1A3_A1==$gol_A1A3_A3){$Puntos_de_A1_en_A1A3=1;}
	if($gol_A1A3_A1<$gol_A1A3_A3){$Puntos_de_A1_en_A1A3=0;}
	if($gol_A1A4_A1>$gol_A1A4_A4){$Puntos_de_A1_en_A1A4=3;}
	if($gol_A1A4_A1==$gol_A1A4_A4){$Puntos_de_A1_en_A1A4=1;}
	if($gol_A1A4_A1<$gol_A1A4_A4){$Puntos_de_A1_en_A1A4=0;}
	$Gol_Average_de_A1=0.001*($gol_A1A2_A1+$gol_A1A3_A1+$gol_A1A4_A1-$gol_A1A2_A2-$gol_A1A3_A3-$gol_A1A4_A4);
	$Gol_Afavor_de_A1=0.00001*($gol_A1A2_A1+$gol_A1A3_A1+$gol_A1A4_A1);
	$Total_Puntos_de_A1=$Puntos_de_A1_en_A1A2+$Puntos_de_A1_en_A1A3+$Puntos_de_A1_en_A1A4+$Gol_Average_de_A1+$Gol_Afavor_de_A1;

//Cálculo de puntos del equipo A2

	if($gol_A1A2_A2>$gol_A1A2_A1){$Puntos_de_A2_en_A1A2=3;}
	if($gol_A1A2_A2==$gol_A1A2_A1){$Puntos_de_A2_en_A1A2=1;}
	if($gol_A1A2_A2<$gol_A1A2_A1){$Puntos_de_A2_en_A1A2=0;}
	if($gol_A2A3_A2>$gol_A2A3_A3){$Puntos_de_A2_en_A2A3=3;}
	if($gol_A2A3_A2==$gol_A2A3_A3){$Puntos_de_A2_en_A2A3=1;}
	if($gol_A2A3_A2<$gol_A2A3_A3){$Puntos_de_A2_en_A2A3=0;}
	if($gol_A2A4_A2>$gol_A2A4_A4){$Puntos_de_A2_en_A2A4=3;}
	if($gol_A2A4_A2==$gol_A2A4_A4){$Puntos_de_A2_en_A2A4=1;}
	if($gol_A2A4_A2<$gol_A2A4_A4){$Puntos_de_A2_en_A2A4=0;}
	$Gol_Average_de_A2=0.001*($gol_A1A2_A2+$gol_A2A3_A2+$gol_A2A4_A2-$gol_A1A2_A1-$gol_A2A3_A3-$gol_A2A4_A4);
	$Gol_Afavor_de_A2=0.00001*($gol_A1A2_A2+$gol_A2A3_A2+$gol_A2A4_A2);
	$Total_Puntos_de_A2=$Puntos_de_A2_en_A1A2+$Puntos_de_A2_en_A2A3+$Puntos_de_A2_en_A2A4+$Gol_Average_de_A2+$Gol_Afavor_de_A2;

//Cálculo de puntos del equipo A3

	if($gol_A1A3_A3>$gol_A1A3_A1){$Puntos_de_A3_en_A1A3=3;}
	if($gol_A1A3_A3==$gol_A1A3_A1){$Puntos_de_A3_en_A1A3=1;}
	if($gol_A1A3_A3<$gol_A1A3_A1){$Puntos_de_A3_en_A1A3=0;}
	if($gol_A2A3_A3>$gol_A2A3_A2){$Puntos_de_A3_en_A2A3=3;}
	if($gol_A2A3_A3==$gol_A2A3_A2){$Puntos_de_A3_en_A2A3=1;}
	if($gol_A2A3_A3<$gol_A2A3_A2){$Puntos_de_A3_en_A2A3=0;}
	if($gol_A3A4_A3>$gol_A3A4_A4){$Puntos_de_A3_en_A3A4=3;}
	if($gol_A3A4_A3==$gol_A3A4_A4){$Puntos_de_A3_en_A3A4=1;}
	if($gol_A3A4_A3<$gol_A3A4_A4){$Puntos_de_A3_en_A3A4=0;}
	$Gol_Average_de_A3=0.001*($gol_A1A3_A3+$gol_A2A3_A3+$gol_A3A4_A3-$gol_A1A3_A1-$gol_A2A3_A2-$gol_A3A4_A4);
	$Gol_Afavor_de_A3=0.00001*($gol_A1A3_A3+$gol_A2A3_A3+$gol_A3A4_A3);
	$Total_Puntos_de_A3=$Puntos_de_A3_en_A1A3+$Puntos_de_A3_en_A2A3+$Puntos_de_A3_en_A3A4+$Gol_Average_de_A3+$Gol_Afavor_de_A3;

//Cálculo de puntos del equipo A4

	if($gol_A1A4_A4>$gol_A1A4_A1){$Puntos_de_A4_en_A1A4=3;}
	if($gol_A1A4_A4==$gol_A1A4_A1){$Puntos_de_A4_en_A1A4=1;}
	if($gol_A1A4_A4<$gol_A1A4_A1){$Puntos_de_A4_en_A1A4=0;}
	if($gol_A2A4_A4>$gol_A2A4_A2){$Puntos_de_A4_en_A2A4=3;}
	if($gol_A2A4_A4==$gol_A2A4_A2){$Puntos_de_A4_en_A2A4=1;}
	if($gol_A2A4_A4<$gol_A2A4_A2){$Puntos_de_A4_en_A2A4=0;}
	if($gol_A3A4_A4>$gol_A3A4_A3){$Puntos_de_A4_en_A3A4=3;}
	if($gol_A3A4_A4==$gol_A3A4_A3){$Puntos_de_A4_en_A3A4=1;}
	if($gol_A3A4_A4<$gol_A3A4_A3){$Puntos_de_A4_en_A3A4=0;}
	$Gol_Average_de_A4=0.001*($gol_A1A4_A4+$gol_A2A4_A4+$gol_A3A4_A4-$gol_A1A4_A1-$gol_A2A4_A2-$gol_A3A4_A3);
	$Gol_Afavor_de_A4=0.00001*($gol_A1A4_A4+$gol_A2A4_A4+$gol_A3A4_A4);
	$Total_Puntos_de_A4=$Puntos_de_A4_en_A1A4+$Puntos_de_A4_en_A2A4+$Puntos_de_A4_en_A3A4+$Gol_Average_de_A4+$Gol_Afavor_de_A4;

// CALCULO PARA REGLAS D, E y F. EQUIPOS A1

	if($Total_Puntos_de_A1==$Total_Puntos_de_A2){$Gran_Total_de_A1=$Total_Puntos_de_A1+0.0000001*($Puntos_de_A1_en_A1A2-$Puntos_de_A2_en_A1A2)+0.000000001*($gol_A1A2_A1-$gol_A1A2_A2)+0.00000000001*($gol_A1A2_A1);}
	else {if($Total_Puntos_de_A1==$Total_Puntos_de_A3){$Gran_Total_de_A1=$Total_Puntos_de_A1+0.0000001*($Puntos_de_A1_en_A1A3-$Puntos_de_A3_en_A1A3)+0.000000001*($gol_A1A3_A1-$gol_A1A3_A3)+0.00000000001*($gol_A1A3_A1);}
	else {if($Total_Puntos_de_A1==$Total_Puntos_de_A4){$Gran_Total_de_A1=$Total_Puntos_de_A1+0.0000001*($Puntos_de_A1_en_A1A4-$Puntos_de_A4_en_A1A4)+0.000000001*($gol_A1A4_A1-$gol_A1A4_A4)+0.00000000001*($gol_A1A4_A1);}
	else{$Gran_Total_de_A1=$Total_Puntos_de_A1;}}}

// CALCULO PARA REGLAS D, E y F. EQUIPOS A2

	if($Total_Puntos_de_A2==$Total_Puntos_de_A1){$Gran_Total_de_A2=$Total_Puntos_de_A2+0.0000001*($Puntos_de_A2_en_A1A2-$Puntos_de_A1_en_A1A2)+0.000000001*($gol_A1A2_A2-$gol_A1A2_A1)+0.00000000001*($gol_A1A2_A2);}
	else {if($Total_Puntos_de_A2==$Total_Puntos_de_A3){$Gran_Total_de_A2=$Total_Puntos_de_A2+0.0000001*($Puntos_de_A2_en_A2A3-$Puntos_de_A3_en_A2A3)+0.000000001*($gol_A2A3_A2-$gol_A2A3_A3)+0.00000000001*($gol_A2A3_A2);}
	else {if($Total_Puntos_de_A2==$Total_Puntos_de_A4){$Gran_Total_de_A2=$Total_Puntos_de_A2+0.0000001*($Puntos_de_A2_en_A2A4-$Puntos_de_A4_en_A2A4)+0.000000001*($gol_A2A4_A2-$gol_A2A4_A4)+0.00000000001*($gol_A2A4_A2);}
	else{$Gran_Total_de_A2=$Total_Puntos_de_A2;}}}

// CALCULO PARA REGLAS D, E y F. EQUIPOS A3

	if($Total_Puntos_de_A3==$Total_Puntos_de_A1){$Gran_Total_de_A3=$Total_Puntos_de_A3+0.0000001*($Puntos_de_A3_en_A1A3-$Puntos_de_A1_en_A1A3)+0.000000001*($gol_A1A3_A3-$gol_A1A3_A1)+0.00000000001*($gol_A1A3_A3);}
	else {if($Total_Puntos_de_A3==$Total_Puntos_de_A2){$Gran_Total_de_A3=$Total_Puntos_de_A3+0.0000001*($Puntos_de_A3_en_A2A3-$Puntos_de_A2_en_A2A3)+0.000000001*($gol_A2A3_A3-$gol_A2A3_A2)+0.00000000001*($gol_A2A3_A3);}
	else {if($Total_Puntos_de_A3==$Total_Puntos_de_A4){$Gran_Total_de_A3=$Total_Puntos_de_A3+0.0000001*($Puntos_de_A3_en_A3A4-$Puntos_de_A4_en_A3A4)+0.000000001*($gol_A3A4_A3-$gol_A3A4_A4)+0.00000000001*($gol_A3A4_A3);}
	else{$Gran_Total_de_A3=$Total_Puntos_de_A3;}}}

// CALCULO PARA REGLAS D, E y F. EQUIPOS A4

	if($Total_Puntos_de_A4==$Total_Puntos_de_A1){$Gran_Total_de_A4=$Total_Puntos_de_A4+0.0000001*($Puntos_de_A4_en_A1A4-$Puntos_de_A1_en_A1A4)+0.000000001*($gol_A1A4_A4-$gol_A1A4_A1)+0.00000000001*($gol_A1A4_A4);}
	else {if($Total_Puntos_de_A4==$Total_Puntos_de_A2){$Gran_Total_de_A4=$Total_Puntos_de_A4+0.0000001*($Puntos_de_A4_en_A2A4-$Puntos_de_A2_en_A2A4)+0.000000001*($gol_A2A4_A4-$gol_A2A4_A2)+0.00000000001*($gol_A2A4_A4);}
	else {if($Total_Puntos_de_A4==$Total_Puntos_de_A3){$Gran_Total_de_A4=$Total_Puntos_de_A4+0.0000001*($Puntos_de_A4_en_A3A4-$Puntos_de_A3_en_A3A4)+0.000000001*($gol_A3A4_A4-$gol_A3A4_A3)+0.00000000001*($gol_A3A4_A4);}
	else{$Gran_Total_de_A4=$Total_Puntos_de_A4;}}}


//Calculando los ganadores del grupo (Nuevos A1)

	if($Gran_Total_de_A1>$Gran_Total_de_A2 and $Gran_Total_de_A1>$Gran_Total_de_A3 and $Gran_Total_de_A1>$Gran_Total_de_A4){$Clasificado_A1=$grupo_A1;}
	else {if($Gran_Total_de_A2>$Gran_Total_de_A1 and $Gran_Total_de_A2>$Gran_Total_de_A3 and $Gran_Total_de_A2>$Gran_Total_de_A4){$Clasificado_A1=$grupo_A2;}
	else {if($Gran_Total_de_A3>$Gran_Total_de_A1 and $Gran_Total_de_A3>$Gran_Total_de_A2 and $Gran_Total_de_A3>$Gran_Total_de_A4){$Clasificado_A1=$grupo_A3;}
	else {if($Gran_Total_de_A4>$Gran_Total_de_A1 and $Gran_Total_de_A4>$Gran_Total_de_A2 and $Gran_Total_de_A4>$Gran_Total_de_A3){$Clasificado_A1=$grupo_A4;}
	else{$Clasificado_A1=$Empate_Tecnico_A1;}}}}
	
//Calculando los ganadores del grupo (Nuevos A2)

	if(($Gran_Total_de_A1<$Gran_Total_de_A2 and $Gran_Total_de_A1>$Gran_Total_de_A3 and $Gran_Total_de_A1>$Gran_Total_de_A4) or ($Gran_Total_de_A1>$Gran_Total_de_A2 and $Gran_Total_de_A1<$Gran_Total_de_A3 and $Gran_Total_de_A1>$Gran_Total_de_A4) or ($Gran_Total_de_A1>$Gran_Total_de_A2 and $Gran_Total_de_A1>$Gran_Total_de_A3 and $Gran_Total_de_A1<$Gran_Total_de_A4)){$Clasificado_A2=$grupo_A1;}
	else {if(($Gran_Total_de_A2<$Gran_Total_de_A1 and $Gran_Total_de_A2>$Gran_Total_de_A3 and $Gran_Total_de_A2>$Gran_Total_de_A4) or ($Gran_Total_de_A2>$Gran_Total_de_A1 and $Gran_Total_de_A2<$Gran_Total_de_A3 and $Gran_Total_de_A2>$Gran_Total_de_A4) or ($Gran_Total_de_A2>$Gran_Total_de_A1 and $Gran_Total_de_A2>$Gran_Total_de_A3 and $Gran_Total_de_A2<$Gran_Total_de_A4)){$Clasificado_A2=$grupo_A2;}
	else {if(($Gran_Total_de_A3<$Gran_Total_de_A1 and $Gran_Total_de_A3>$Gran_Total_de_A2 and $Gran_Total_de_A3>$Gran_Total_de_A4) or ($Gran_Total_de_A3>$Gran_Total_de_A1 and $Gran_Total_de_A3<$Gran_Total_de_A2 and $Gran_Total_de_A3>$Gran_Total_de_A4) or ($Gran_Total_de_A3>$Gran_Total_de_A1 and $Gran_Total_de_A3>$Gran_Total_de_A2 and $Gran_Total_de_A3<$Gran_Total_de_A4)){$Clasificado_A2=$grupo_A3;}
	else {if(($Gran_Total_de_A4<$Gran_Total_de_A1 and $Gran_Total_de_A4>$Gran_Total_de_A2 and $Gran_Total_de_A4>$Gran_Total_de_A3) or($Gran_Total_de_A4>$Gran_Total_de_A1 and $Gran_Total_de_A4<$Gran_Total_de_A2 and $Gran_Total_de_A4>$Gran_Total_de_A3) or ($Gran_Total_de_A4>$Gran_Total_de_A1 and $Gran_Total_de_A4>$Gran_Total_de_A2 and $Gran_Total_de_A4<$Gran_Total_de_A3)){$Clasificado_A2=$grupo_A4;}
	else{$Clasificado_A2=$Empate_Tecnico_A1;}}}}

// Cálculo de puntos del equipo B1	
	
	if($gol_B1B2_B1>$gol_B1B2_B2){$Puntos_de_B1_en_B1B2=3;}
	if($gol_B1B2_B1==$gol_B1B2_B2){$Puntos_de_B1_en_B1B2=1;}
	if($gol_B1B2_B1<$gol_B1B2_B2){$Puntos_de_B1_en_B1B2=0;}
	if($gol_B1B3_B1>$gol_B1B3_B3){$Puntos_de_B1_en_B1B3=3;}
	if($gol_B1B3_B1==$gol_B1B3_B3){$Puntos_de_B1_en_B1B3=1;}
	if($gol_B1B3_B1<$gol_B1B3_B3){$Puntos_de_B1_en_B1B3=0;}
	if($gol_B1B4_B1>$gol_B1B4_B4){$Puntos_de_B1_en_B1B4=3;}
	if($gol_B1B4_B1==$gol_B1B4_B4){$Puntos_de_B1_en_B1B4=1;}
	if($gol_B1B4_B1<$gol_B1B4_B4){$Puntos_de_B1_en_B1B4=0;}
	$Gol_Average_de_B1=0.001*($gol_B1B2_B1+$gol_B1B3_B1+$gol_B1B4_B1-$gol_B1B2_B2-$gol_B1B3_B3-$gol_B1B4_B4);
	$Gol_Afavor_de_B1=0.00001*($gol_B1B2_B1+$gol_B1B3_B1+$gol_B1B4_B1);
	$Total_Puntos_de_B1=$Puntos_de_B1_en_B1B2+$Puntos_de_B1_en_B1B3+$Puntos_de_B1_en_B1B4+$Gol_Average_de_B1+$Gol_Afavor_de_B1;
	
//Cálculo de puntos del equipo B2	
	
	if($gol_B1B2_B2>$gol_B1B2_B1){$Puntos_de_B2_en_B1B2=3;}
	if($gol_B1B2_B2==$gol_B1B2_B1){$Puntos_de_B2_en_B1B2=1;}
	if($gol_B1B2_B2<$gol_B1B2_B1){$Puntos_de_B2_en_B1B2=0;}
	if($gol_B2B3_B2>$gol_B2B3_B3){$Puntos_de_B2_en_B2B3=3;}
	if($gol_B2B3_B2==$gol_B2B3_B3){$Puntos_de_B2_en_B2B3=1;}
	if($gol_B2B3_B2<$gol_B2B3_B3){$Puntos_de_B2_en_B2B3=0;}
	if($gol_B2B4_B2>$gol_B2B4_B4){$Puntos_de_B2_en_B2B4=3;}
	if($gol_B2B4_B2==$gol_B2B4_B4){$Puntos_de_B2_en_B2B4=1;}
	if($gol_B2B4_B2<$gol_B2B4_B4){$Puntos_de_B2_en_B2B4=0;}
	$Gol_Average_de_B2=0.001*($gol_B1B2_B2+$gol_B2B3_B2+$gol_B2B4_B2-$gol_B1B2_B1-$gol_B2B3_B3-$gol_B2B4_B4);
	$Gol_Afavor_de_B2=0.00001*($gol_B1B2_B2+$gol_B2B3_B2+$gol_B2B4_B2);
	$Total_Puntos_de_B2=$Puntos_de_B2_en_B1B2+$Puntos_de_B2_en_B2B3+$Puntos_de_B2_en_B2B4+$Gol_Average_de_B2+$Gol_Afavor_de_B2;
	
//Cálculo de puntos del equipo B3
	
	if($gol_B1B3_B3>$gol_B1B3_B1){$Puntos_de_B3_en_B1B3=3;}
	if($gol_B1B3_B3==$gol_B1B3_B1){$Puntos_de_B3_en_B1B3=1;}
	if($gol_B1B3_B3<$gol_B1B3_B1){$Puntos_de_B3_en_B1B3=0;}
	if($gol_B2B3_B3>$gol_B2B3_B2){$Puntos_de_B3_en_B2B3=3;}
	if($gol_B2B3_B3==$gol_B2B3_B2){$Puntos_de_B3_en_B2B3=1;}
	if($gol_B2B3_B3<$gol_B2B3_B2){$Puntos_de_B3_en_B2B3=0;}
	if($gol_B3B4_B3>$gol_B3B4_B4){$Puntos_de_B3_en_B3B4=3;}
	if($gol_B3B4_B3==$gol_B3B4_B4){$Puntos_de_B3_en_B3B4=1;}
	if($gol_B3B4_B3<$gol_B3B4_B4){$Puntos_de_B3_en_B3B4=0;}
	$Gol_Average_de_B3=0.001*($gol_B1B3_B3+$gol_B2B3_B3+$gol_B3B4_B3-$gol_B1B3_B1-$gol_B2B3_B2-$gol_B3B4_B4);
	$Gol_Afavor_de_B3=0.00001*($gol_B1B3_B3+$gol_B2B3_B3+$gol_B3B4_B3);
	$Total_Puntos_de_B3=$Puntos_de_B3_en_B1B3+$Puntos_de_B3_en_B2B3+$Puntos_de_B3_en_B3B4+$Gol_Average_de_B3+$Gol_Afavor_de_B3;
	
//Cálculo de puntos del equipo B4	
	
	if($gol_B1B4_B4>$gol_B1B4_B1){$Puntos_de_B4_en_B1B4=3;}
	if($gol_B1B4_B4==$gol_B1B4_B1){$Puntos_de_B4_en_B1B4=1;}
	if($gol_B1B4_B4<$gol_B1B4_B1){$Puntos_de_B4_en_B1B4=0;}
	if($gol_B2B4_B4>$gol_B2B4_B2){$Puntos_de_B4_en_B2B4=3;}
	if($gol_B2B4_B4==$gol_B2B4_B2){$Puntos_de_B4_en_B2B4=1;}
	if($gol_B2B4_B4<$gol_B2B4_B2){$Puntos_de_B4_en_B2B4=0;}
	if($gol_B3B4_B4>$gol_B3B4_B3){$Puntos_de_B4_en_B3B4=3;}
	if($gol_B3B4_B4==$gol_B3B4_B3){$Puntos_de_B4_en_B3B4=1;}
	if($gol_B3B4_B4<$gol_B3B4_B3){$Puntos_de_B4_en_B3B4=0;}
	$Gol_Average_de_B4=0.001*($gol_B1B4_B4+$gol_B2B4_B4+$gol_B3B4_B4-$gol_B1B4_B1-$gol_B2B4_B2-$gol_B3B4_B3);
	$Gol_Afavor_de_B4=0.00001*($gol_B1B4_B4+$gol_B2B4_B4+$gol_B3B4_B4);
	$Total_Puntos_de_B4=$Puntos_de_B4_en_B1B4+$Puntos_de_B4_en_B2B4+$Puntos_de_B4_en_B3B4+$Gol_Average_de_B4+$Gol_Afavor_de_B4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS B1	
	
	if($Total_Puntos_de_B1==$Total_Puntos_de_B2){$Gran_Total_de_B1=$Total_Puntos_de_B1+0.0000001*($Puntos_de_B1_en_B1B2-$Puntos_de_B2_en_B1B2)+0.000000001*($gol_B1B2_B1-$gol_B1B2_B2)+0.00000000001*($gol_B1B2_B1);}
	else {if($Total_Puntos_de_B1==$Total_Puntos_de_B3){$Gran_Total_de_B1=$Total_Puntos_de_B1+0.0000001*($Puntos_de_B1_en_B1B3-$Puntos_de_B3_en_B1B3)+0.000000001*($gol_B1B3_B1-$gol_B1B3_B3)+0.00000000001*($gol_B1B3_B1);}
	else {if($Total_Puntos_de_B1==$Total_Puntos_de_B4){$Gran_Total_de_B1=$Total_Puntos_de_B1+0.0000001*($Puntos_de_B1_en_B1B4-$Puntos_de_B4_en_B1B4)+0.000000001*($gol_B1B4_B1-$gol_B1B4_B4)+0.00000000001*($gol_B1B4_B1);}
	else{$Gran_Total_de_B1=$Total_Puntos_de_B1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS B2	
	
	if($Total_Puntos_de_B2==$Total_Puntos_de_B1){$Gran_Total_de_B2=$Total_Puntos_de_B2+0.0000001*($Puntos_de_B2_en_B1B2-$Puntos_de_B1_en_B1B2)+0.000000001*($gol_B1B2_B2-$gol_B1B2_B1)+0.00000000001*($gol_B1B2_B2);}
	else {if($Total_Puntos_de_B2==$Total_Puntos_de_B3){$Gran_Total_de_B2=$Total_Puntos_de_B2+0.0000001*($Puntos_de_B2_en_B2B3-$Puntos_de_B3_en_B2B3)+0.000000001*($gol_B2B3_B2-$gol_B2B3_B3)+0.00000000001*($gol_B2B3_B2);}
	else {if($Total_Puntos_de_B2==$Total_Puntos_de_B4){$Gran_Total_de_B2=$Total_Puntos_de_B2+0.0000001*($Puntos_de_B2_en_B2B4-$Puntos_de_B4_en_B2B4)+0.000000001*($gol_B2B4_B2-$gol_B2B4_B4)+0.00000000001*($gol_B2B4_B2);}
	else{$Gran_Total_de_B2=$Total_Puntos_de_B2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS B3	
	
	if($Total_Puntos_de_B3==$Total_Puntos_de_B1){$Gran_Total_de_B3=$Total_Puntos_de_B3+0.0000001*($Puntos_de_B3_en_B1B3-$Puntos_de_B1_en_B1B3)+0.000000001*($gol_B1B3_B3-$gol_B1B3_B1)+0.00000000001*($gol_B1B3_B3);}
	else {if($Total_Puntos_de_B3==$Total_Puntos_de_B2){$Gran_Total_de_B3=$Total_Puntos_de_B3+0.0000001*($Puntos_de_B3_en_B2B3-$Puntos_de_B2_en_B2B3)+0.000000001*($gol_B2B3_B3-$gol_B2B3_B2)+0.00000000001*($gol_B2B3_B3);}
	else {if($Total_Puntos_de_B3==$Total_Puntos_de_B4){$Gran_Total_de_B3=$Total_Puntos_de_B3+0.0000001*($Puntos_de_B3_en_B3B4-$Puntos_de_B4_en_B3B4)+0.000000001*($gol_B3B4_B3-$gol_B3B4_B4)+0.00000000001*($gol_B3B4_B3);}
	else{$Gran_Total_de_B3=$Total_Puntos_de_B3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS B4	
	
	if($Total_Puntos_de_B4==$Total_Puntos_de_B1){$Gran_Total_de_B4=$Total_Puntos_de_B4+0.0000001*($Puntos_de_B4_en_B1B4-$Puntos_de_B1_en_B1B4)+0.000000001*($gol_B1B4_B4-$gol_B1B4_B1)+0.00000000001*($gol_B1B4_B4);}
	else {if($Total_Puntos_de_B4==$Total_Puntos_de_B2){$Gran_Total_de_B4=$Total_Puntos_de_B4+0.0000001*($Puntos_de_B4_en_B2B4-$Puntos_de_B2_en_B2B4)+0.000000001*($gol_B2B4_B4-$gol_B2B4_B2)+0.00000000001*($gol_B2B4_B4);}
	else {if($Total_Puntos_de_B4==$Total_Puntos_de_B3){$Gran_Total_de_B4=$Total_Puntos_de_B4+0.0000001*($Puntos_de_B4_en_B3B4-$Puntos_de_B3_en_B3B4)+0.000000001*($gol_B3B4_B4-$gol_B3B4_B3)+0.00000000001*($gol_B3B4_B4);}
	else{$Gran_Total_de_B4=$Total_Puntos_de_B4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos B1)	
	
	if($Gran_Total_de_B1>$Gran_Total_de_B2 and $Gran_Total_de_B1>$Gran_Total_de_B3 and $Gran_Total_de_B1>$Gran_Total_de_B4){$Clasificado_B1=$grupo_B1;}
	else {if($Gran_Total_de_B2>$Gran_Total_de_B1 and $Gran_Total_de_B2>$Gran_Total_de_B3 and $Gran_Total_de_B2>$Gran_Total_de_B4){$Clasificado_B1=$grupo_B2;}
	else {if($Gran_Total_de_B3>$Gran_Total_de_B1 and $Gran_Total_de_B3>$Gran_Total_de_B2 and $Gran_Total_de_B3>$Gran_Total_de_B4){$Clasificado_B1=$grupo_B3;}
	else {if($Gran_Total_de_B4>$Gran_Total_de_B1 and $Gran_Total_de_B4>$Gran_Total_de_B2 and $Gran_Total_de_B4>$Gran_Total_de_B3){$Clasificado_B1=$grupo_B4;}
	else{$Clasificado_B1=$Empate_Tecnico_B1;}}}}
	
//Calculando los ganadores del grupo (Nuevos B2)	
	
	if(($Gran_Total_de_B1<$Gran_Total_de_B2 and $Gran_Total_de_B1>$Gran_Total_de_B3 and $Gran_Total_de_B1>$Gran_Total_de_B4) or ($Gran_Total_de_B1>$Gran_Total_de_B2 and $Gran_Total_de_B1<$Gran_Total_de_B3 and $Gran_Total_de_B1>$Gran_Total_de_B4) or ($Gran_Total_de_B1>$Gran_Total_de_B2 and $Gran_Total_de_B1>$Gran_Total_de_B3 and $Gran_Total_de_B1<$Gran_Total_de_B4)){$Clasificado_B2=$grupo_B1;}
	else {if(($Gran_Total_de_B2<$Gran_Total_de_B1 and $Gran_Total_de_B2>$Gran_Total_de_B3 and $Gran_Total_de_B2>$Gran_Total_de_B4) or ($Gran_Total_de_B2>$Gran_Total_de_B1 and $Gran_Total_de_B2<$Gran_Total_de_B3 and $Gran_Total_de_B2>$Gran_Total_de_B4) or ($Gran_Total_de_B2>$Gran_Total_de_B1 and $Gran_Total_de_B2>$Gran_Total_de_B3 and $Gran_Total_de_B2<$Gran_Total_de_B4)){$Clasificado_B2=$grupo_B2;}
	else {if(($Gran_Total_de_B3<$Gran_Total_de_B1 and $Gran_Total_de_B3>$Gran_Total_de_B2 and $Gran_Total_de_B3>$Gran_Total_de_B4) or ($Gran_Total_de_B3>$Gran_Total_de_B1 and $Gran_Total_de_B3<$Gran_Total_de_B2 and $Gran_Total_de_B3>$Gran_Total_de_B4) or ($Gran_Total_de_B3>$Gran_Total_de_B1 and $Gran_Total_de_B3>$Gran_Total_de_B2 and $Gran_Total_de_B3<$Gran_Total_de_B4)){$Clasificado_B2=$grupo_B3;}
	else {if(($Gran_Total_de_B4<$Gran_Total_de_B1 and $Gran_Total_de_B4>$Gran_Total_de_B2 and $Gran_Total_de_B4>$Gran_Total_de_B3) or($Gran_Total_de_B4>$Gran_Total_de_B1 and $Gran_Total_de_B4<$Gran_Total_de_B2 and $Gran_Total_de_B4>$Gran_Total_de_B3) or ($Gran_Total_de_B4>$Gran_Total_de_B1 and $Gran_Total_de_B4>$Gran_Total_de_B2 and $Gran_Total_de_B4<$Gran_Total_de_B3)){$Clasificado_B2=$grupo_B4;}
	else{$Clasificado_B2=$Empate_Tecnico_B1;}}}}

// Cálculo de puntos del equipo C1	
	
	if($gol_C1C2_C1>$gol_C1C2_C2){$Puntos_de_C1_en_C1C2=3;}
	if($gol_C1C2_C1==$gol_C1C2_C2){$Puntos_de_C1_en_C1C2=1;}
	if($gol_C1C2_C1<$gol_C1C2_C2){$Puntos_de_C1_en_C1C2=0;}
	if($gol_C1C3_C1>$gol_C1C3_C3){$Puntos_de_C1_en_C1C3=3;}
	if($gol_C1C3_C1==$gol_C1C3_C3){$Puntos_de_C1_en_C1C3=1;}
	if($gol_C1C3_C1<$gol_C1C3_C3){$Puntos_de_C1_en_C1C3=0;}
	if($gol_C1C4_C1>$gol_C1C4_C4){$Puntos_de_C1_en_C1C4=3;}
	if($gol_C1C4_C1==$gol_C1C4_C4){$Puntos_de_C1_en_C1C4=1;}
	if($gol_C1C4_C1<$gol_C1C4_C4){$Puntos_de_C1_en_C1C4=0;}
	$Gol_Average_de_C1=0.001*($gol_C1C2_C1+$gol_C1C3_C1+$gol_C1C4_C1-$gol_C1C2_C2-$gol_C1C3_C3-$gol_C1C4_C4);
	$Gol_Afavor_de_C1=0.00001*($gol_C1C2_C1+$gol_C1C3_C1+$gol_C1C4_C1);
	$Total_Puntos_de_C1=$Puntos_de_C1_en_C1C2+$Puntos_de_C1_en_C1C3+$Puntos_de_C1_en_C1C4+$Gol_Average_de_C1+$Gol_Afavor_de_C1;
	
//Cálculo de puntos del equipo C2	
	
	if($gol_C1C2_C2>$gol_C1C2_C1){$Puntos_de_C2_en_C1C2=3;}
	if($gol_C1C2_C2==$gol_C1C2_C1){$Puntos_de_C2_en_C1C2=1;}
	if($gol_C1C2_C2<$gol_C1C2_C1){$Puntos_de_C2_en_C1C2=0;}
	if($gol_C2C3_C2>$gol_C2C3_C3){$Puntos_de_C2_en_C2C3=3;}
	if($gol_C2C3_C2==$gol_C2C3_C3){$Puntos_de_C2_en_C2C3=1;}
	if($gol_C2C3_C2<$gol_C2C3_C3){$Puntos_de_C2_en_C2C3=0;}
	if($gol_C2C4_C2>$gol_C2C4_C4){$Puntos_de_C2_en_C2C4=3;}
	if($gol_C2C4_C2==$gol_C2C4_C4){$Puntos_de_C2_en_C2C4=1;}
	if($gol_C2C4_C2<$gol_C2C4_C4){$Puntos_de_C2_en_C2C4=0;}
	$Gol_Average_de_C2=0.001*($gol_C1C2_C2+$gol_C2C3_C2+$gol_C2C4_C2-$gol_C1C2_C1-$gol_C2C3_C3-$gol_C2C4_C4);
	$Gol_Afavor_de_C2=0.00001*($gol_C1C2_C2+$gol_C2C3_C2+$gol_C2C4_C2);
	$Total_Puntos_de_C2=$Puntos_de_C2_en_C1C2+$Puntos_de_C2_en_C2C3+$Puntos_de_C2_en_C2C4+$Gol_Average_de_C2+$Gol_Afavor_de_C2;
	
//Cálculo de puntos del equipo C3	
	
	if($gol_C1C3_C3>$gol_C1C3_C1){$Puntos_de_C3_en_C1C3=3;}
	if($gol_C1C3_C3==$gol_C1C3_C1){$Puntos_de_C3_en_C1C3=1;}
	if($gol_C1C3_C3<$gol_C1C3_C1){$Puntos_de_C3_en_C1C3=0;}
	if($gol_C2C3_C3>$gol_C2C3_C2){$Puntos_de_C3_en_C2C3=3;}
	if($gol_C2C3_C3==$gol_C2C3_C2){$Puntos_de_C3_en_C2C3=1;}
	if($gol_C2C3_C3<$gol_C2C3_C2){$Puntos_de_C3_en_C2C3=0;}
	if($gol_C3C4_C3>$gol_C3C4_C4){$Puntos_de_C3_en_C3C4=3;}
	if($gol_C3C4_C3==$gol_C3C4_C4){$Puntos_de_C3_en_C3C4=1;}
	if($gol_C3C4_C3<$gol_C3C4_C4){$Puntos_de_C3_en_C3C4=0;}
	$Gol_Average_de_C3=0.001*($gol_C1C3_C3+$gol_C2C3_C3+$gol_C3C4_C3-$gol_C1C3_C1-$gol_C2C3_C2-$gol_C3C4_C4);
	$Gol_Afavor_de_C3=0.00001*($gol_C1C3_C3+$gol_C2C3_C3+$gol_C3C4_C3);
	$Total_Puntos_de_C3=$Puntos_de_C3_en_C1C3+$Puntos_de_C3_en_C2C3+$Puntos_de_C3_en_C3C4+$Gol_Average_de_C3+$Gol_Afavor_de_C3;
	
//Cálculo de puntos del equipo C4
	
	if($gol_C1C4_C4>$gol_C1C4_C1){$Puntos_de_C4_en_C1C4=3;}
	if($gol_C1C4_C4==$gol_C1C4_C1){$Puntos_de_C4_en_C1C4=1;}
	if($gol_C1C4_C4<$gol_C1C4_C1){$Puntos_de_C4_en_C1C4=0;}
	if($gol_C2C4_C4>$gol_C2C4_C2){$Puntos_de_C4_en_C2C4=3;}
	if($gol_C2C4_C4==$gol_C2C4_C2){$Puntos_de_C4_en_C2C4=1;}
	if($gol_C2C4_C4<$gol_C2C4_C2){$Puntos_de_C4_en_C2C4=0;}
	if($gol_C3C4_C4>$gol_C3C4_C3){$Puntos_de_C4_en_C3C4=3;}
	if($gol_C3C4_C4==$gol_C3C4_C3){$Puntos_de_C4_en_C3C4=1;}
	if($gol_C3C4_C4<$gol_C3C4_C3){$Puntos_de_C4_en_C3C4=0;}
	$Gol_Average_de_C4=0.001*($gol_C1C4_C4+$gol_C2C4_C4+$gol_C3C4_C4-$gol_C1C4_C1-$gol_C2C4_C2-$gol_C3C4_C3);
	$Gol_Afavor_de_C4=0.00001*($gol_C1C4_C4+$gol_C2C4_C4+$gol_C3C4_C4);
	$Total_Puntos_de_C4=$Puntos_de_C4_en_C1C4+$Puntos_de_C4_en_C2C4+$Puntos_de_C4_en_C3C4+$Gol_Average_de_C4+$Gol_Afavor_de_C4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS C1	
	
	if($Total_Puntos_de_C1==$Total_Puntos_de_C2){$Gran_Total_de_C1=$Total_Puntos_de_C1+0.0000001*($Puntos_de_C1_en_C1C2-$Puntos_de_C2_en_C1C2)+0.000000001*($gol_C1C2_C1-$gol_C1C2_C2)+0.00000000001*($gol_C1C2_C1);}
	else {if($Total_Puntos_de_C1==$Total_Puntos_de_C3){$Gran_Total_de_C1=$Total_Puntos_de_C1+0.0000001*($Puntos_de_C1_en_C1C3-$Puntos_de_C3_en_C1C3)+0.000000001*($gol_C1C3_C1-$gol_C1C3_C3)+0.00000000001*($gol_C1C3_C1);}
	else {if($Total_Puntos_de_C1==$Total_Puntos_de_C4){$Gran_Total_de_C1=$Total_Puntos_de_C1+0.0000001*($Puntos_de_C1_en_C1C4-$Puntos_de_C4_en_C1C4)+0.000000001*($gol_C1C4_C1-$gol_C1C4_C4)+0.00000000001*($gol_C1C4_C1);}
	else{$Gran_Total_de_C1=$Total_Puntos_de_C1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS C2	
	
	if($Total_Puntos_de_C2==$Total_Puntos_de_C1){$Gran_Total_de_C2=$Total_Puntos_de_C2+0.0000001*($Puntos_de_C2_en_C1C2-$Puntos_de_C1_en_C1C2)+0.000000001*($gol_C1C2_C2-$gol_C1C2_C1)+0.00000000001*($gol_C1C2_C2);}
	else {if($Total_Puntos_de_C2==$Total_Puntos_de_C3){$Gran_Total_de_C2=$Total_Puntos_de_C2+0.0000001*($Puntos_de_C2_en_C2C3-$Puntos_de_C3_en_C2C3)+0.000000001*($gol_C2C3_C2-$gol_C2C3_C3)+0.00000000001*($gol_C2C3_C2);}
	else {if($Total_Puntos_de_C2==$Total_Puntos_de_C4){$Gran_Total_de_C2=$Total_Puntos_de_C2+0.0000001*($Puntos_de_C2_en_C2C4-$Puntos_de_C4_en_C2C4)+0.000000001*($gol_C2C4_C2-$gol_C2C4_C4)+0.00000000001*($gol_C2C4_C2);}
	else{$Gran_Total_de_C2=$Total_Puntos_de_C2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS C3	
	
	if($Total_Puntos_de_C3==$Total_Puntos_de_C1){$Gran_Total_de_C3=$Total_Puntos_de_C3+0.0000001*($Puntos_de_C3_en_C1C3-$Puntos_de_C1_en_C1C3)+0.000000001*($gol_C1C3_C3-$gol_C1C3_C1)+0.00000000001*($gol_C1C3_C3);}
	else {if($Total_Puntos_de_C3==$Total_Puntos_de_C2){$Gran_Total_de_C3=$Total_Puntos_de_C3+0.0000001*($Puntos_de_C3_en_C2C3-$Puntos_de_C2_en_C2C3)+0.000000001*($gol_C2C3_C3-$gol_C2C3_C2)+0.00000000001*($gol_C2C3_C3);}
	else {if($Total_Puntos_de_C3==$Total_Puntos_de_C4){$Gran_Total_de_C3=$Total_Puntos_de_C3+0.0000001*($Puntos_de_C3_en_C3C4-$Puntos_de_C4_en_C3C4)+0.000000001*($gol_C3C4_C3-$gol_C3C4_C4)+0.00000000001*($gol_C3C4_C3);}
	else{$Gran_Total_de_C3=$Total_Puntos_de_C3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS C4	
	
	if($Total_Puntos_de_C4==$Total_Puntos_de_C1){$Gran_Total_de_C4=$Total_Puntos_de_C4+0.0000001*($Puntos_de_C4_en_C1C4-$Puntos_de_C1_en_C1C4)+0.000000001*($gol_C1C4_C4-$gol_C1C4_C1)+0.00000000001*($gol_C1C4_C4);}
	else {if($Total_Puntos_de_C4==$Total_Puntos_de_C2){$Gran_Total_de_C4=$Total_Puntos_de_C4+0.0000001*($Puntos_de_C4_en_C2C4-$Puntos_de_C2_en_C2C4)+0.000000001*($gol_C2C4_C4-$gol_C2C4_C2)+0.00000000001*($gol_C2C4_C4);}
	else {if($Total_Puntos_de_C4==$Total_Puntos_de_C3){$Gran_Total_de_C4=$Total_Puntos_de_C4+0.0000001*($Puntos_de_C4_en_C3C4-$Puntos_de_C3_en_C3C4)+0.000000001*($gol_C3C4_C4-$gol_C3C4_C3)+0.00000000001*($gol_C3C4_C4);}
	else{$Gran_Total_de_C4=$Total_Puntos_de_C4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos C1)	
	
	if($Gran_Total_de_C1>$Gran_Total_de_C2 and $Gran_Total_de_C1>$Gran_Total_de_C3 and $Gran_Total_de_C1>$Gran_Total_de_C4){$Clasificado_C1=$grupo_C1;}
	else {if($Gran_Total_de_C2>$Gran_Total_de_C1 and $Gran_Total_de_C2>$Gran_Total_de_C3 and $Gran_Total_de_C2>$Gran_Total_de_C4){$Clasificado_C1=$grupo_C2;}
	else {if($Gran_Total_de_C3>$Gran_Total_de_C1 and $Gran_Total_de_C3>$Gran_Total_de_C2 and $Gran_Total_de_C3>$Gran_Total_de_C4){$Clasificado_C1=$grupo_C3;}
	else {if($Gran_Total_de_C4>$Gran_Total_de_C1 and $Gran_Total_de_C4>$Gran_Total_de_C2 and $Gran_Total_de_C4>$Gran_Total_de_C3){$Clasificado_C1=$grupo_C4;}
	else{$Clasificado_C1=$Empate_Tecnico_C1;}}}}
	
//Calculando los ganadores del grupo (Nuevos C2)	
	
	if(($Gran_Total_de_C1<$Gran_Total_de_C2 and $Gran_Total_de_C1>$Gran_Total_de_C3 and $Gran_Total_de_C1>$Gran_Total_de_C4) or ($Gran_Total_de_C1>$Gran_Total_de_C2 and $Gran_Total_de_C1<$Gran_Total_de_C3 and $Gran_Total_de_C1>$Gran_Total_de_C4) or ($Gran_Total_de_C1>$Gran_Total_de_C2 and $Gran_Total_de_C1>$Gran_Total_de_C3 and $Gran_Total_de_C1<$Gran_Total_de_C4)){$Clasificado_C2=$grupo_C1;}
	else {if(($Gran_Total_de_C2<$Gran_Total_de_C1 and $Gran_Total_de_C2>$Gran_Total_de_C3 and $Gran_Total_de_C2>$Gran_Total_de_C4) or ($Gran_Total_de_C2>$Gran_Total_de_C1 and $Gran_Total_de_C2<$Gran_Total_de_C3 and $Gran_Total_de_C2>$Gran_Total_de_C4) or ($Gran_Total_de_C2>$Gran_Total_de_C1 and $Gran_Total_de_C2>$Gran_Total_de_C3 and $Gran_Total_de_C2<$Gran_Total_de_C4)){$Clasificado_C2=$grupo_C2;}
	else {if(($Gran_Total_de_C3<$Gran_Total_de_C1 and $Gran_Total_de_C3>$Gran_Total_de_C2 and $Gran_Total_de_C3>$Gran_Total_de_C4) or ($Gran_Total_de_C3>$Gran_Total_de_C1 and $Gran_Total_de_C3<$Gran_Total_de_C2 and $Gran_Total_de_C3>$Gran_Total_de_C4) or ($Gran_Total_de_C3>$Gran_Total_de_C1 and $Gran_Total_de_C3>$Gran_Total_de_C2 and $Gran_Total_de_C3<$Gran_Total_de_C4)){$Clasificado_C2=$grupo_C3;}
	else {if(($Gran_Total_de_C4<$Gran_Total_de_C1 and $Gran_Total_de_C4>$Gran_Total_de_C2 and $Gran_Total_de_C4>$Gran_Total_de_C3) or($Gran_Total_de_C4>$Gran_Total_de_C1 and $Gran_Total_de_C4<$Gran_Total_de_C2 and $Gran_Total_de_C4>$Gran_Total_de_C3) or ($Gran_Total_de_C4>$Gran_Total_de_C1 and $Gran_Total_de_C4>$Gran_Total_de_C2 and $Gran_Total_de_C4<$Gran_Total_de_C3)){$Clasificado_C2=$grupo_C4;}
	else{$Clasificado_C2=$Empate_Tecnico_C1;}}}}

// Cálculo de puntos del equipo D1
	
	if($gol_D1D2_D1>$gol_D1D2_D2){$Puntos_de_D1_en_D1D2=3;}
	if($gol_D1D2_D1==$gol_D1D2_D2){$Puntos_de_D1_en_D1D2=1;}
	if($gol_D1D2_D1<$gol_D1D2_D2){$Puntos_de_D1_en_D1D2=0;}
	if($gol_D1D3_D1>$gol_D1D3_D3){$Puntos_de_D1_en_D1D3=3;}
	if($gol_D1D3_D1==$gol_D1D3_D3){$Puntos_de_D1_en_D1D3=1;}
	if($gol_D1D3_D1<$gol_D1D3_D3){$Puntos_de_D1_en_D1D3=0;}
	if($gol_D1D4_D1>$gol_D1D4_D4){$Puntos_de_D1_en_D1D4=3;}
	if($gol_D1D4_D1==$gol_D1D4_D4){$Puntos_de_D1_en_D1D4=1;}
	if($gol_D1D4_D1<$gol_D1D4_D4){$Puntos_de_D1_en_D1D4=0;}
	$Gol_Average_de_D1=0.001*($gol_D1D2_D1+$gol_D1D3_D1+$gol_D1D4_D1-$gol_D1D2_D2-$gol_D1D3_D3-$gol_D1D4_D4);
	$Gol_Afavor_de_D1=0.00001*($gol_D1D2_D1+$gol_D1D3_D1+$gol_D1D4_D1);
	$Total_Puntos_de_D1=$Puntos_de_D1_en_D1D2+$Puntos_de_D1_en_D1D3+$Puntos_de_D1_en_D1D4+$Gol_Average_de_D1+$Gol_Afavor_de_D1;
	
//Cálculo de puntos del equipo D2
	
	if($gol_D1D2_D2>$gol_D1D2_D1){$Puntos_de_D2_en_D1D2=3;}
	if($gol_D1D2_D2==$gol_D1D2_D1){$Puntos_de_D2_en_D1D2=1;}
	if($gol_D1D2_D2<$gol_D1D2_D1){$Puntos_de_D2_en_D1D2=0;}
	if($gol_D2D3_D2>$gol_D2D3_D3){$Puntos_de_D2_en_D2D3=3;}
	if($gol_D2D3_D2==$gol_D2D3_D3){$Puntos_de_D2_en_D2D3=1;}
	if($gol_D2D3_D2<$gol_D2D3_D3){$Puntos_de_D2_en_D2D3=0;}
	if($gol_D2D4_D2>$gol_D2D4_D4){$Puntos_de_D2_en_D2D4=3;}
	if($gol_D2D4_D2==$gol_D2D4_D4){$Puntos_de_D2_en_D2D4=1;}
	if($gol_D2D4_D2<$gol_D2D4_D4){$Puntos_de_D2_en_D2D4=0;}
	$Gol_Average_de_D2=0.001*($gol_D1D2_D2+$gol_D2D3_D2+$gol_D2D4_D2-$gol_D1D2_D1-$gol_D2D3_D3-$gol_D2D4_D4);
	$Gol_Afavor_de_D2=0.00001*($gol_D1D2_D2+$gol_D2D3_D2+$gol_D2D4_D2);
	$Total_Puntos_de_D2=$Puntos_de_D2_en_D1D2+$Puntos_de_D2_en_D2D3+$Puntos_de_D2_en_D2D4+$Gol_Average_de_D2+$Gol_Afavor_de_D2;
	
//Cálculo de puntos del equipo D3	
	
	if($gol_D1D3_D3>$gol_D1D3_D1){$Puntos_de_D3_en_D1D3=3;}
	if($gol_D1D3_D3==$gol_D1D3_D1){$Puntos_de_D3_en_D1D3=1;}
	if($gol_D1D3_D3<$gol_D1D3_D1){$Puntos_de_D3_en_D1D3=0;}
	if($gol_D2D3_D3>$gol_D2D3_D2){$Puntos_de_D3_en_D2D3=3;}
	if($gol_D2D3_D3==$gol_D2D3_D2){$Puntos_de_D3_en_D2D3=1;}
	if($gol_D2D3_D3<$gol_D2D3_D2){$Puntos_de_D3_en_D2D3=0;}
	if($gol_D3D4_D3>$gol_D3D4_D4){$Puntos_de_D3_en_D3D4=3;}
	if($gol_D3D4_D3==$gol_D3D4_D4){$Puntos_de_D3_en_D3D4=1;}
	if($gol_D3D4_D3<$gol_D3D4_D4){$Puntos_de_D3_en_D3D4=0;}
	$Gol_Average_de_D3=0.001*($gol_D1D3_D3+$gol_D2D3_D3+$gol_D3D4_D3-$gol_D1D3_D1-$gol_D2D3_D2-$gol_D3D4_D4);
	$Gol_Afavor_de_D3=0.00001*($gol_D1D3_D3+$gol_D2D3_D3+$gol_D3D4_D3);
	$Total_Puntos_de_D3=$Puntos_de_D3_en_D1D3+$Puntos_de_D3_en_D2D3+$Puntos_de_D3_en_D3D4+$Gol_Average_de_D3+$Gol_Afavor_de_D3;
	
//Cálculo de puntos del equipo D4	
	
	if($gol_D1D4_D4>$gol_D1D4_D1){$Puntos_de_D4_en_D1D4=3;}
	if($gol_D1D4_D4==$gol_D1D4_D1){$Puntos_de_D4_en_D1D4=1;}
	if($gol_D1D4_D4<$gol_D1D4_D1){$Puntos_de_D4_en_D1D4=0;}
	if($gol_D2D4_D4>$gol_D2D4_D2){$Puntos_de_D4_en_D2D4=3;}
	if($gol_D2D4_D4==$gol_D2D4_D2){$Puntos_de_D4_en_D2D4=1;}
	if($gol_D2D4_D4<$gol_D2D4_D2){$Puntos_de_D4_en_D2D4=0;}
	if($gol_D3D4_D4>$gol_D3D4_D3){$Puntos_de_D4_en_D3D4=3;}
	if($gol_D3D4_D4==$gol_D3D4_D3){$Puntos_de_D4_en_D3D4=1;}
	if($gol_D3D4_D4<$gol_D3D4_D3){$Puntos_de_D4_en_D3D4=0;}
	$Gol_Average_de_D4=0.001*($gol_D1D4_D4+$gol_D2D4_D4+$gol_D3D4_D4-$gol_D1D4_D1-$gol_D2D4_D2-$gol_D3D4_D3);
	$Gol_Afavor_de_D4=0.00001*($gol_D1D4_D4+$gol_D2D4_D4+$gol_D3D4_D4);
	$Total_Puntos_de_D4=$Puntos_de_D4_en_D1D4+$Puntos_de_D4_en_D2D4+$Puntos_de_D4_en_D3D4+$Gol_Average_de_D4+$Gol_Afavor_de_D4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS D1	
	
	if($Total_Puntos_de_D1==$Total_Puntos_de_D2){$Gran_Total_de_D1=$Total_Puntos_de_D1+0.0000001*($Puntos_de_D1_en_D1D2-$Puntos_de_D2_en_D1D2)+0.000000001*($gol_D1D2_D1-$gol_D1D2_D2)+0.00000000001*($gol_D1D2_D1);}
	else {if($Total_Puntos_de_D1==$Total_Puntos_de_D3){$Gran_Total_de_D1=$Total_Puntos_de_D1+0.0000001*($Puntos_de_D1_en_D1D3-$Puntos_de_D3_en_D1D3)+0.000000001*($gol_D1D3_D1-$gol_D1D3_D3)+0.00000000001*($gol_D1D3_D1);}
	else {if($Total_Puntos_de_D1==$Total_Puntos_de_D4){$Gran_Total_de_D1=$Total_Puntos_de_D1+0.0000001*($Puntos_de_D1_en_D1D4-$Puntos_de_D4_en_D1D4)+0.000000001*($gol_D1D4_D1-$gol_D1D4_D4)+0.00000000001*($gol_D1D4_D1);}
	else{$Gran_Total_de_D1=$Total_Puntos_de_D1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS D2	
	
	if($Total_Puntos_de_D2==$Total_Puntos_de_D1){$Gran_Total_de_D2=$Total_Puntos_de_D2+0.0000001*($Puntos_de_D2_en_D1D2-$Puntos_de_D1_en_D1D2)+0.000000001*($gol_D1D2_D2-$gol_D1D2_D1)+0.00000000001*($gol_D1D2_D2);}
	else {if($Total_Puntos_de_D2==$Total_Puntos_de_D3){$Gran_Total_de_D2=$Total_Puntos_de_D2+0.0000001*($Puntos_de_D2_en_D2D3-$Puntos_de_D3_en_D2D3)+0.000000001*($gol_D2D3_D2-$gol_D2D3_D3)+0.00000000001*($gol_D2D3_D2);}
	else {if($Total_Puntos_de_D2==$Total_Puntos_de_D4){$Gran_Total_de_D2=$Total_Puntos_de_D2+0.0000001*($Puntos_de_D2_en_D2D4-$Puntos_de_D4_en_D2D4)+0.000000001*($gol_D2D4_D2-$gol_D2D4_D4)+0.00000000001*($gol_D2D4_D2);}
	else{$Gran_Total_de_D2=$Total_Puntos_de_D2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS D3	
	
	if($Total_Puntos_de_D3==$Total_Puntos_de_D1){$Gran_Total_de_D3=$Total_Puntos_de_D3+0.0000001*($Puntos_de_D3_en_D1D3-$Puntos_de_D1_en_D1D3)+0.000000001*($gol_D1D3_D3-$gol_D1D3_D1)+0.00000000001*($gol_D1D3_D3);}
	else {if($Total_Puntos_de_D3==$Total_Puntos_de_D2){$Gran_Total_de_D3=$Total_Puntos_de_D3+0.0000001*($Puntos_de_D3_en_D2D3-$Puntos_de_D2_en_D2D3)+0.000000001*($gol_D2D3_D3-$gol_D2D3_D2)+0.00000000001*($gol_D2D3_D3);}
	else {if($Total_Puntos_de_D3==$Total_Puntos_de_D4){$Gran_Total_de_D3=$Total_Puntos_de_D3+0.0000001*($Puntos_de_D3_en_D3D4-$Puntos_de_D4_en_D3D4)+0.000000001*($gol_D3D4_D3-$gol_D3D4_D4)+0.00000000001*($gol_D3D4_D3);}
	else{$Gran_Total_de_D3=$Total_Puntos_de_D3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS D4	
	
	if($Total_Puntos_de_D4==$Total_Puntos_de_D1){$Gran_Total_de_D4=$Total_Puntos_de_D4+0.0000001*($Puntos_de_D4_en_D1D4-$Puntos_de_D1_en_D1D4)+0.000000001*($gol_D1D4_D4-$gol_D1D4_D1)+0.00000000001*($gol_D1D4_D4);}
	else {if($Total_Puntos_de_D4==$Total_Puntos_de_D2){$Gran_Total_de_D4=$Total_Puntos_de_D4+0.0000001*($Puntos_de_D4_en_D2D4-$Puntos_de_D2_en_D2D4)+0.000000001*($gol_D2D4_D4-$gol_D2D4_D2)+0.00000000001*($gol_D2D4_D4);}
	else {if($Total_Puntos_de_D4==$Total_Puntos_de_D3){$Gran_Total_de_D4=$Total_Puntos_de_D4+0.0000001*($Puntos_de_D4_en_D3D4-$Puntos_de_D3_en_D3D4)+0.000000001*($gol_D3D4_D4-$gol_D3D4_D3)+0.00000000001*($gol_D3D4_D4);}
	else{$Gran_Total_de_D4=$Total_Puntos_de_D4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos D1)	
	
	if($Gran_Total_de_D1>$Gran_Total_de_D2 and $Gran_Total_de_D1>$Gran_Total_de_D3 and $Gran_Total_de_D1>$Gran_Total_de_D4){$Clasificado_D1=$grupo_D1;}
	else {if($Gran_Total_de_D2>$Gran_Total_de_D1 and $Gran_Total_de_D2>$Gran_Total_de_D3 and $Gran_Total_de_D2>$Gran_Total_de_D4){$Clasificado_D1=$grupo_D2;}
	else {if($Gran_Total_de_D3>$Gran_Total_de_D1 and $Gran_Total_de_D3>$Gran_Total_de_D2 and $Gran_Total_de_D3>$Gran_Total_de_D4){$Clasificado_D1=$grupo_D3;}
	else {if($Gran_Total_de_D4>$Gran_Total_de_D1 and $Gran_Total_de_D4>$Gran_Total_de_D2 and $Gran_Total_de_D4>$Gran_Total_de_D3){$Clasificado_D1=$grupo_D4;}
	else{$Clasificado_D1=$Empate_Tecnico_D1;}}}}
	
//Calculando los ganadores del grupo (Nuevos D2)	
	
	if(($Gran_Total_de_D1<$Gran_Total_de_D2 and $Gran_Total_de_D1>$Gran_Total_de_D3 and $Gran_Total_de_D1>$Gran_Total_de_D4) or ($Gran_Total_de_D1>$Gran_Total_de_D2 and $Gran_Total_de_D1<$Gran_Total_de_D3 and $Gran_Total_de_D1>$Gran_Total_de_D4) or ($Gran_Total_de_D1>$Gran_Total_de_D2 and $Gran_Total_de_D1>$Gran_Total_de_D3 and $Gran_Total_de_D1<$Gran_Total_de_D4)){$Clasificado_D2=$grupo_D1;}
	else {if(($Gran_Total_de_D2<$Gran_Total_de_D1 and $Gran_Total_de_D2>$Gran_Total_de_D3 and $Gran_Total_de_D2>$Gran_Total_de_D4) or ($Gran_Total_de_D2>$Gran_Total_de_D1 and $Gran_Total_de_D2<$Gran_Total_de_D3 and $Gran_Total_de_D2>$Gran_Total_de_D4) or ($Gran_Total_de_D2>$Gran_Total_de_D1 and $Gran_Total_de_D2>$Gran_Total_de_D3 and $Gran_Total_de_D2<$Gran_Total_de_D4)){$Clasificado_D2=$grupo_D2;}
	else {if(($Gran_Total_de_D3<$Gran_Total_de_D1 and $Gran_Total_de_D3>$Gran_Total_de_D2 and $Gran_Total_de_D3>$Gran_Total_de_D4) or ($Gran_Total_de_D3>$Gran_Total_de_D1 and $Gran_Total_de_D3<$Gran_Total_de_D2 and $Gran_Total_de_D3>$Gran_Total_de_D4) or ($Gran_Total_de_D3>$Gran_Total_de_D1 and $Gran_Total_de_D3>$Gran_Total_de_D2 and $Gran_Total_de_D3<$Gran_Total_de_D4)){$Clasificado_D2=$grupo_D3;}
	else {if(($Gran_Total_de_D4<$Gran_Total_de_D1 and $Gran_Total_de_D4>$Gran_Total_de_D2 and $Gran_Total_de_D4>$Gran_Total_de_D3) or($Gran_Total_de_D4>$Gran_Total_de_D1 and $Gran_Total_de_D4<$Gran_Total_de_D2 and $Gran_Total_de_D4>$Gran_Total_de_D3) or ($Gran_Total_de_D4>$Gran_Total_de_D1 and $Gran_Total_de_D4>$Gran_Total_de_D2 and $Gran_Total_de_D4<$Gran_Total_de_D3)){$Clasificado_D2=$grupo_D4;}
	else{$Clasificado_D2=$Empate_Tecnico_D1;}}}}

// Cálculo de puntos del equipo E1	
	
	if($gol_E1E2_E1>$gol_E1E2_E2){$Puntos_de_E1_en_E1E2=3;}
	if($gol_E1E2_E1==$gol_E1E2_E2){$Puntos_de_E1_en_E1E2=1;}
	if($gol_E1E2_E1<$gol_E1E2_E2){$Puntos_de_E1_en_E1E2=0;}
	if($gol_E1E3_E1>$gol_E1E3_E3){$Puntos_de_E1_en_E1E3=3;}
	if($gol_E1E3_E1==$gol_E1E3_E3){$Puntos_de_E1_en_E1E3=1;}
	if($gol_E1E3_E1<$gol_E1E3_E3){$Puntos_de_E1_en_E1E3=0;}
	if($gol_E1E4_E1>$gol_E1E4_E4){$Puntos_de_E1_en_E1E4=3;}
	if($gol_E1E4_E1==$gol_E1E4_E4){$Puntos_de_E1_en_E1E4=1;}
	if($gol_E1E4_E1<$gol_E1E4_E4){$Puntos_de_E1_en_E1E4=0;}
	$Gol_Average_de_E1=0.001*($gol_E1E2_E1+$gol_E1E3_E1+$gol_E1E4_E1-$gol_E1E2_E2-$gol_E1E3_E3-$gol_E1E4_E4);
	$Gol_Afavor_de_E1=0.00001*($gol_E1E2_E1+$gol_E1E3_E1+$gol_E1E4_E1);
	$Total_Puntos_de_E1=$Puntos_de_E1_en_E1E2+$Puntos_de_E1_en_E1E3+$Puntos_de_E1_en_E1E4+$Gol_Average_de_E1+$Gol_Afavor_de_E1;
	
//Cálculo de puntos del equipo E2	
	
	if($gol_E1E2_E2>$gol_E1E2_E1){$Puntos_de_E2_en_E1E2=3;}
	if($gol_E1E2_E2==$gol_E1E2_E1){$Puntos_de_E2_en_E1E2=1;}
	if($gol_E1E2_E2<$gol_E1E2_E1){$Puntos_de_E2_en_E1E2=0;}
	if($gol_E2E3_E2>$gol_E2E3_E3){$Puntos_de_E2_en_E2E3=3;}
	if($gol_E2E3_E2==$gol_E2E3_E3){$Puntos_de_E2_en_E2E3=1;}
	if($gol_E2E3_E2<$gol_E2E3_E3){$Puntos_de_E2_en_E2E3=0;}
	if($gol_E2E4_E2>$gol_E2E4_E4){$Puntos_de_E2_en_E2E4=3;}
	if($gol_E2E4_E2==$gol_E2E4_E4){$Puntos_de_E2_en_E2E4=1;}
	if($gol_E2E4_E2<$gol_E2E4_E4){$Puntos_de_E2_en_E2E4=0;}
	$Gol_Average_de_E2=0.001*($gol_E1E2_E2+$gol_E2E3_E2+$gol_E2E4_E2-$gol_E1E2_E1-$gol_E2E3_E3-$gol_E2E4_E4);
	$Gol_Afavor_de_E2=0.00001*($gol_E1E2_E2+$gol_E2E3_E2+$gol_E2E4_E2);
	$Total_Puntos_de_E2=$Puntos_de_E2_en_E1E2+$Puntos_de_E2_en_E2E3+$Puntos_de_E2_en_E2E4+$Gol_Average_de_E2+$Gol_Afavor_de_E2;
	
//Cálculo de puntos del equipo E3	
	
	if($gol_E1E3_E3>$gol_E1E3_E1){$Puntos_de_E3_en_E1E3=3;}
	if($gol_E1E3_E3==$gol_E1E3_E1){$Puntos_de_E3_en_E1E3=1;}
	if($gol_E1E3_E3<$gol_E1E3_E1){$Puntos_de_E3_en_E1E3=0;}
	if($gol_E2E3_E3>$gol_E2E3_E2){$Puntos_de_E3_en_E2E3=3;}
	if($gol_E2E3_E3==$gol_E2E3_E2){$Puntos_de_E3_en_E2E3=1;}
	if($gol_E2E3_E3<$gol_E2E3_E2){$Puntos_de_E3_en_E2E3=0;}
	if($gol_E3E4_E3>$gol_E3E4_E4){$Puntos_de_E3_en_E3E4=3;}
	if($gol_E3E4_E3==$gol_E3E4_E4){$Puntos_de_E3_en_E3E4=1;}
	if($gol_E3E4_E3<$gol_E3E4_E4){$Puntos_de_E3_en_E3E4=0;}
	$Gol_Average_de_E3=0.001*($gol_E1E3_E3+$gol_E2E3_E3+$gol_E3E4_E3-$gol_E1E3_E1-$gol_E2E3_E2-$gol_E3E4_E4);
	$Gol_Afavor_de_E3=0.00001*($gol_E1E3_E3+$gol_E2E3_E3+$gol_E3E4_E3);
	$Total_Puntos_de_E3=$Puntos_de_E3_en_E1E3+$Puntos_de_E3_en_E2E3+$Puntos_de_E3_en_E3E4+$Gol_Average_de_E3+$Gol_Afavor_de_E3;
	
//Cálculo de puntos del equipo E4	
	
	if($gol_E1E4_E4>$gol_E1E4_E1){$Puntos_de_E4_en_E1E4=3;}
	if($gol_E1E4_E4==$gol_E1E4_E1){$Puntos_de_E4_en_E1E4=1;}
	if($gol_E1E4_E4<$gol_E1E4_E1){$Puntos_de_E4_en_E1E4=0;}
	if($gol_E2E4_E4>$gol_E2E4_E2){$Puntos_de_E4_en_E2E4=3;}
	if($gol_E2E4_E4==$gol_E2E4_E2){$Puntos_de_E4_en_E2E4=1;}
	if($gol_E2E4_E4<$gol_E2E4_E2){$Puntos_de_E4_en_E2E4=0;}
	if($gol_E3E4_E4>$gol_E3E4_E3){$Puntos_de_E4_en_E3E4=3;}
	if($gol_E3E4_E4==$gol_E3E4_E3){$Puntos_de_E4_en_E3E4=1;}
	if($gol_E3E4_E4<$gol_E3E4_E3){$Puntos_de_E4_en_E3E4=0;}
	$Gol_Average_de_E4=0.001*($gol_E1E4_E4+$gol_E2E4_E4+$gol_E3E4_E4-$gol_E1E4_E1-$gol_E2E4_E2-$gol_E3E4_E3);
	$Gol_Afavor_de_E4=0.00001*($gol_E1E4_E4+$gol_E2E4_E4+$gol_E3E4_E4);
	$Total_Puntos_de_E4=$Puntos_de_E4_en_E1E4+$Puntos_de_E4_en_E2E4+$Puntos_de_E4_en_E3E4+$Gol_Average_de_E4+$Gol_Afavor_de_E4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS E1	
	
	if($Total_Puntos_de_E1==$Total_Puntos_de_E2){$Gran_Total_de_E1=$Total_Puntos_de_E1+0.0000001*($Puntos_de_E1_en_E1E2-$Puntos_de_E2_en_E1E2)+0.000000001*($gol_E1E2_E1-$gol_E1E2_E2)+0.00000000001*($gol_E1E2_E1);}
	else {if($Total_Puntos_de_E1==$Total_Puntos_de_E3){$Gran_Total_de_E1=$Total_Puntos_de_E1+0.0000001*($Puntos_de_E1_en_E1E3-$Puntos_de_E3_en_E1E3)+0.000000001*($gol_E1E3_E1-$gol_E1E3_E3)+0.00000000001*($gol_E1E3_E1);}
	else {if($Total_Puntos_de_E1==$Total_Puntos_de_E4){$Gran_Total_de_E1=$Total_Puntos_de_E1+0.0000001*($Puntos_de_E1_en_E1E4-$Puntos_de_E4_en_E1E4)+0.000000001*($gol_E1E4_E1-$gol_E1E4_E4)+0.00000000001*($gol_E1E4_E1);}
	else{$Gran_Total_de_E1=$Total_Puntos_de_E1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS E2	
	
	if($Total_Puntos_de_E2==$Total_Puntos_de_E1){$Gran_Total_de_E2=$Total_Puntos_de_E2+0.0000001*($Puntos_de_E2_en_E1E2-$Puntos_de_E1_en_E1E2)+0.000000001*($gol_E1E2_E2-$gol_E1E2_E1)+0.00000000001*($gol_E1E2_E2);}
	else {if($Total_Puntos_de_E2==$Total_Puntos_de_E3){$Gran_Total_de_E2=$Total_Puntos_de_E2+0.0000001*($Puntos_de_E2_en_E2E3-$Puntos_de_E3_en_E2E3)+0.000000001*($gol_E2E3_E2-$gol_E2E3_E3)+0.00000000001*($gol_E2E3_E2);}
	else {if($Total_Puntos_de_E2==$Total_Puntos_de_E4){$Gran_Total_de_E2=$Total_Puntos_de_E2+0.0000001*($Puntos_de_E2_en_E2E4-$Puntos_de_E4_en_E2E4)+0.000000001*($gol_E2E4_E2-$gol_E2E4_E4)+0.00000000001*($gol_E2E4_E2);}
	else{$Gran_Total_de_E2=$Total_Puntos_de_E2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS E3	
	
	if($Total_Puntos_de_E3==$Total_Puntos_de_E1){$Gran_Total_de_E3=$Total_Puntos_de_E3+0.0000001*($Puntos_de_E3_en_E1E3-$Puntos_de_E1_en_E1E3)+0.000000001*($gol_E1E3_E3-$gol_E1E3_E1)+0.00000000001*($gol_E1E3_E3);}
	else {if($Total_Puntos_de_E3==$Total_Puntos_de_E2){$Gran_Total_de_E3=$Total_Puntos_de_E3+0.0000001*($Puntos_de_E3_en_E2E3-$Puntos_de_E2_en_E2E3)+0.000000001*($gol_E2E3_E3-$gol_E2E3_E2)+0.00000000001*($gol_E2E3_E3);}
	else {if($Total_Puntos_de_E3==$Total_Puntos_de_E4){$Gran_Total_de_E3=$Total_Puntos_de_E3+0.0000001*($Puntos_de_E3_en_E3E4-$Puntos_de_E4_en_E3E4)+0.000000001*($gol_E3E4_E3-$gol_E3E4_E4)+0.00000000001*($gol_E3E4_E3);}
	else{$Gran_Total_de_E3=$Total_Puntos_de_E3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS E4	
	
	if($Total_Puntos_de_E4==$Total_Puntos_de_E1){$Gran_Total_de_E4=$Total_Puntos_de_E4+0.0000001*($Puntos_de_E4_en_E1E4-$Puntos_de_E1_en_E1E4)+0.000000001*($gol_E1E4_E4-$gol_E1E4_E1)+0.00000000001*($gol_E1E4_E4);}
	else {if($Total_Puntos_de_E4==$Total_Puntos_de_E2){$Gran_Total_de_E4=$Total_Puntos_de_E4+0.0000001*($Puntos_de_E4_en_E2E4-$Puntos_de_E2_en_E2E4)+0.000000001*($gol_E2E4_E4-$gol_E2E4_E2)+0.00000000001*($gol_E2E4_E4);}
	else {if($Total_Puntos_de_E4==$Total_Puntos_de_E3){$Gran_Total_de_E4=$Total_Puntos_de_E4+0.0000001*($Puntos_de_E4_en_E3E4-$Puntos_de_E3_en_E3E4)+0.000000001*($gol_E3E4_E4-$gol_E3E4_E3)+0.00000000001*($gol_E3E4_E4);}
	else{$Gran_Total_de_E4=$Total_Puntos_de_E4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos E1)	
	
	if($Gran_Total_de_E1>$Gran_Total_de_E2 and $Gran_Total_de_E1>$Gran_Total_de_E3 and $Gran_Total_de_E1>$Gran_Total_de_E4){$Clasificado_E1=$grupo_E1;}
	else {if($Gran_Total_de_E2>$Gran_Total_de_E1 and $Gran_Total_de_E2>$Gran_Total_de_E3 and $Gran_Total_de_E2>$Gran_Total_de_E4){$Clasificado_E1=$grupo_E2;}
	else {if($Gran_Total_de_E3>$Gran_Total_de_E1 and $Gran_Total_de_E3>$Gran_Total_de_E2 and $Gran_Total_de_E3>$Gran_Total_de_E4){$Clasificado_E1=$grupo_E3;}
	else {if($Gran_Total_de_E4>$Gran_Total_de_E1 and $Gran_Total_de_E4>$Gran_Total_de_E2 and $Gran_Total_de_E4>$Gran_Total_de_E3){$Clasificado_E1=$grupo_E4;}
	else{$Clasificado_E1=$Empate_Tecnico_E1;}}}}
	
//Calculando los ganadores del grupo (Nuevos E2)	
	
	if(($Gran_Total_de_E1<$Gran_Total_de_E2 and $Gran_Total_de_E1>$Gran_Total_de_E3 and $Gran_Total_de_E1>$Gran_Total_de_E4) or ($Gran_Total_de_E1>$Gran_Total_de_E2 and $Gran_Total_de_E1<$Gran_Total_de_E3 and $Gran_Total_de_E1>$Gran_Total_de_E4) or ($Gran_Total_de_E1>$Gran_Total_de_E2 and $Gran_Total_de_E1>$Gran_Total_de_E3 and $Gran_Total_de_E1<$Gran_Total_de_E4)){$Clasificado_E2=$grupo_E1;}
	else {if(($Gran_Total_de_E2<$Gran_Total_de_E1 and $Gran_Total_de_E2>$Gran_Total_de_E3 and $Gran_Total_de_E2>$Gran_Total_de_E4) or ($Gran_Total_de_E2>$Gran_Total_de_E1 and $Gran_Total_de_E2<$Gran_Total_de_E3 and $Gran_Total_de_E2>$Gran_Total_de_E4) or ($Gran_Total_de_E2>$Gran_Total_de_E1 and $Gran_Total_de_E2>$Gran_Total_de_E3 and $Gran_Total_de_E2<$Gran_Total_de_E4)){$Clasificado_E2=$grupo_E2;}
	else {if(($Gran_Total_de_E3<$Gran_Total_de_E1 and $Gran_Total_de_E3>$Gran_Total_de_E2 and $Gran_Total_de_E3>$Gran_Total_de_E4) or ($Gran_Total_de_E3>$Gran_Total_de_E1 and $Gran_Total_de_E3<$Gran_Total_de_E2 and $Gran_Total_de_E3>$Gran_Total_de_E4) or ($Gran_Total_de_E3>$Gran_Total_de_E1 and $Gran_Total_de_E3>$Gran_Total_de_E2 and $Gran_Total_de_E3<$Gran_Total_de_E4)){$Clasificado_E2=$grupo_E3;}
	else {if(($Gran_Total_de_E4<$Gran_Total_de_E1 and $Gran_Total_de_E4>$Gran_Total_de_E2 and $Gran_Total_de_E4>$Gran_Total_de_E3) or($Gran_Total_de_E4>$Gran_Total_de_E1 and $Gran_Total_de_E4<$Gran_Total_de_E2 and $Gran_Total_de_E4>$Gran_Total_de_E3) or ($Gran_Total_de_E4>$Gran_Total_de_E1 and $Gran_Total_de_E4>$Gran_Total_de_E2 and $Gran_Total_de_E4<$Gran_Total_de_E3)){$Clasificado_E2=$grupo_E4;}
	else{$Clasificado_E2=$Empate_Tecnico_E1;}}}}
	
// Cálculo de puntos del equipo F1	
	
	if($gol_F1F2_F1>$gol_F1F2_F2){$Puntos_de_F1_en_F1F2=3;}
	if($gol_F1F2_F1==$gol_F1F2_F2){$Puntos_de_F1_en_F1F2=1;}
	if($gol_F1F2_F1<$gol_F1F2_F2){$Puntos_de_F1_en_F1F2=0;}
	if($gol_F1F3_F1>$gol_F1F3_F3){$Puntos_de_F1_en_F1F3=3;}
	if($gol_F1F3_F1==$gol_F1F3_F3){$Puntos_de_F1_en_F1F3=1;}
	if($gol_F1F3_F1<$gol_F1F3_F3){$Puntos_de_F1_en_F1F3=0;}
	if($gol_F1F4_F1>$gol_F1F4_F4){$Puntos_de_F1_en_F1F4=3;}
	if($gol_F1F4_F1==$gol_F1F4_F4){$Puntos_de_F1_en_F1F4=1;}
	if($gol_F1F4_F1<$gol_F1F4_F4){$Puntos_de_F1_en_F1F4=0;}
	$Gol_Average_de_F1=0.001*($gol_F1F2_F1+$gol_F1F3_F1+$gol_F1F4_F1-$gol_F1F2_F2-$gol_F1F3_F3-$gol_F1F4_F4);
	$Gol_Afavor_de_F1=0.00001*($gol_F1F2_F1+$gol_F1F3_F1+$gol_F1F4_F1);
	$Total_Puntos_de_F1=$Puntos_de_F1_en_F1F2+$Puntos_de_F1_en_F1F3+$Puntos_de_F1_en_F1F4+$Gol_Average_de_F1+$Gol_Afavor_de_F1;
	
//Cálculo de puntos del equipo F2	
	
	if($gol_F1F2_F2>$gol_F1F2_F1){$Puntos_de_F2_en_F1F2=3;}
	if($gol_F1F2_F2==$gol_F1F2_F1){$Puntos_de_F2_en_F1F2=1;}
	if($gol_F1F2_F2<$gol_F1F2_F1){$Puntos_de_F2_en_F1F2=0;}
	if($gol_F2F3_F2>$gol_F2F3_F3){$Puntos_de_F2_en_F2F3=3;}
	if($gol_F2F3_F2==$gol_F2F3_F3){$Puntos_de_F2_en_F2F3=1;}
	if($gol_F2F3_F2<$gol_F2F3_F3){$Puntos_de_F2_en_F2F3=0;}
	if($gol_F2F4_F2>$gol_F2F4_F4){$Puntos_de_F2_en_F2F4=3;}
	if($gol_F2F4_F2==$gol_F2F4_F4){$Puntos_de_F2_en_F2F4=1;}
	if($gol_F2F4_F2<$gol_F2F4_F4){$Puntos_de_F2_en_F2F4=0;}
	$Gol_Average_de_F2=0.001*($gol_F1F2_F2+$gol_F2F3_F2+$gol_F2F4_F2-$gol_F1F2_F1-$gol_F2F3_F3-$gol_F2F4_F4);
	$Gol_Afavor_de_F2=0.00001*($gol_F1F2_F2+$gol_F2F3_F2+$gol_F2F4_F2);
	$Total_Puntos_de_F2=$Puntos_de_F2_en_F1F2+$Puntos_de_F2_en_F2F3+$Puntos_de_F2_en_F2F4+$Gol_Average_de_F2+$Gol_Afavor_de_F2;
	
//Cálculo de puntos del equipo F3	
	
	if($gol_F1F3_F3>$gol_F1F3_F1){$Puntos_de_F3_en_F1F3=3;}
	if($gol_F1F3_F3==$gol_F1F3_F1){$Puntos_de_F3_en_F1F3=1;}
	if($gol_F1F3_F3<$gol_F1F3_F1){$Puntos_de_F3_en_F1F3=0;}
	if($gol_F2F3_F3>$gol_F2F3_F2){$Puntos_de_F3_en_F2F3=3;}
	if($gol_F2F3_F3==$gol_F2F3_F2){$Puntos_de_F3_en_F2F3=1;}
	if($gol_F2F3_F3<$gol_F2F3_F2){$Puntos_de_F3_en_F2F3=0;}
	if($gol_F3F4_F3>$gol_F3F4_F4){$Puntos_de_F3_en_F3F4=3;}
	if($gol_F3F4_F3==$gol_F3F4_F4){$Puntos_de_F3_en_F3F4=1;}
	if($gol_F3F4_F3<$gol_F3F4_F4){$Puntos_de_F3_en_F3F4=0;}
	$Gol_Average_de_F3=0.001*($gol_F1F3_F3+$gol_F2F3_F3+$gol_F3F4_F3-$gol_F1F3_F1-$gol_F2F3_F2-$gol_F3F4_F4);
	$Gol_Afavor_de_F3=0.00001*($gol_F1F3_F3+$gol_F2F3_F3+$gol_F3F4_F3);
	$Total_Puntos_de_F3=$Puntos_de_F3_en_F1F3+$Puntos_de_F3_en_F2F3+$Puntos_de_F3_en_F3F4+$Gol_Average_de_F3+$Gol_Afavor_de_F3;
	
//Cálculo de puntos del equipo F4	
	
	if($gol_F1F4_F4>$gol_F1F4_F1){$Puntos_de_F4_en_F1F4=3;}
	if($gol_F1F4_F4==$gol_F1F4_F1){$Puntos_de_F4_en_F1F4=1;}
	if($gol_F1F4_F4<$gol_F1F4_F1){$Puntos_de_F4_en_F1F4=0;}
	if($gol_F2F4_F4>$gol_F2F4_F2){$Puntos_de_F4_en_F2F4=3;}
	if($gol_F2F4_F4==$gol_F2F4_F2){$Puntos_de_F4_en_F2F4=1;}
	if($gol_F2F4_F4<$gol_F2F4_F2){$Puntos_de_F4_en_F2F4=0;}
	if($gol_F3F4_F4>$gol_F3F4_F3){$Puntos_de_F4_en_F3F4=3;}
	if($gol_F3F4_F4==$gol_F3F4_F3){$Puntos_de_F4_en_F3F4=1;}
	if($gol_F3F4_F4<$gol_F3F4_F3){$Puntos_de_F4_en_F3F4=0;}
	$Gol_Average_de_F4=0.001*($gol_F1F4_F4+$gol_F2F4_F4+$gol_F3F4_F4-$gol_F1F4_F1-$gol_F2F4_F2-$gol_F3F4_F3);
	$Gol_Afavor_de_F4=0.00001*($gol_F1F4_F4+$gol_F2F4_F4+$gol_F3F4_F4);
	$Total_Puntos_de_F4=$Puntos_de_F4_en_F1F4+$Puntos_de_F4_en_F2F4+$Puntos_de_F4_en_F3F4+$Gol_Average_de_F4+$Gol_Afavor_de_F4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS F1	
	
	if($Total_Puntos_de_F1==$Total_Puntos_de_F2){$Gran_Total_de_F1=$Total_Puntos_de_F1+0.0000001*($Puntos_de_F1_en_F1F2-$Puntos_de_F2_en_F1F2)+0.000000001*($gol_F1F2_F1-$gol_F1F2_F2)+0.00000000001*($gol_F1F2_F1);}
	else {if($Total_Puntos_de_F1==$Total_Puntos_de_F3){$Gran_Total_de_F1=$Total_Puntos_de_F1+0.0000001*($Puntos_de_F1_en_F1F3-$Puntos_de_F3_en_F1F3)+0.000000001*($gol_F1F3_F1-$gol_F1F3_F3)+0.00000000001*($gol_F1F3_F1);}
	else {if($Total_Puntos_de_F1==$Total_Puntos_de_F4){$Gran_Total_de_F1=$Total_Puntos_de_F1+0.0000001*($Puntos_de_F1_en_F1F4-$Puntos_de_F4_en_F1F4)+0.000000001*($gol_F1F4_F1-$gol_F1F4_F4)+0.00000000001*($gol_F1F4_F1);}
	else{$Gran_Total_de_F1=$Total_Puntos_de_F1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS F2	
	
	if($Total_Puntos_de_F2==$Total_Puntos_de_F1){$Gran_Total_de_F2=$Total_Puntos_de_F2+0.0000001*($Puntos_de_F2_en_F1F2-$Puntos_de_F1_en_F1F2)+0.000000001*($gol_F1F2_F2-$gol_F1F2_F1)+0.00000000001*($gol_F1F2_F2);}
	else {if($Total_Puntos_de_F2==$Total_Puntos_de_F3){$Gran_Total_de_F2=$Total_Puntos_de_F2+0.0000001*($Puntos_de_F2_en_F2F3-$Puntos_de_F3_en_F2F3)+0.000000001*($gol_F2F3_F2-$gol_F2F3_F3)+0.00000000001*($gol_F2F3_F2);}
	else {if($Total_Puntos_de_F2==$Total_Puntos_de_F4){$Gran_Total_de_F2=$Total_Puntos_de_F2+0.0000001*($Puntos_de_F2_en_F2F4-$Puntos_de_F4_en_F2F4)+0.000000001*($gol_F2F4_F2-$gol_F2F4_F4)+0.00000000001*($gol_F2F4_F2);}
	else{$Gran_Total_de_F2=$Total_Puntos_de_F2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS F3	
	
	if($Total_Puntos_de_F3==$Total_Puntos_de_F1){$Gran_Total_de_F3=$Total_Puntos_de_F3+0.0000001*($Puntos_de_F3_en_F1F3-$Puntos_de_F1_en_F1F3)+0.000000001*($gol_F1F3_F3-$gol_F1F3_F1)+0.00000000001*($gol_F1F3_F3);}
	else {if($Total_Puntos_de_F3==$Total_Puntos_de_F2){$Gran_Total_de_F3=$Total_Puntos_de_F3+0.0000001*($Puntos_de_F3_en_F2F3-$Puntos_de_F2_en_F2F3)+0.000000001*($gol_F2F3_F3-$gol_F2F3_F2)+0.00000000001*($gol_F2F3_F3);}
	else {if($Total_Puntos_de_F3==$Total_Puntos_de_F4){$Gran_Total_de_F3=$Total_Puntos_de_F3+0.0000001*($Puntos_de_F3_en_F3F4-$Puntos_de_F4_en_F3F4)+0.000000001*($gol_F3F4_F3-$gol_F3F4_F4)+0.00000000001*($gol_F3F4_F3);}
	else{$Gran_Total_de_F3=$Total_Puntos_de_F3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS F4	
	
	if($Total_Puntos_de_F4==$Total_Puntos_de_F1){$Gran_Total_de_F4=$Total_Puntos_de_F4+0.0000001*($Puntos_de_F4_en_F1F4-$Puntos_de_F1_en_F1F4)+0.000000001*($gol_F1F4_F4-$gol_F1F4_F1)+0.00000000001*($gol_F1F4_F4);}
	else {if($Total_Puntos_de_F4==$Total_Puntos_de_F2){$Gran_Total_de_F4=$Total_Puntos_de_F4+0.0000001*($Puntos_de_F4_en_F2F4-$Puntos_de_F2_en_F2F4)+0.000000001*($gol_F2F4_F4-$gol_F2F4_F2)+0.00000000001*($gol_F2F4_F4);}
	else {if($Total_Puntos_de_F4==$Total_Puntos_de_F3){$Gran_Total_de_F4=$Total_Puntos_de_F4+0.0000001*($Puntos_de_F4_en_F3F4-$Puntos_de_F3_en_F3F4)+0.000000001*($gol_F3F4_F4-$gol_F3F4_F3)+0.00000000001*($gol_F3F4_F4);}
	else{$Gran_Total_de_F4=$Total_Puntos_de_F4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos F1)	
	
	if($Gran_Total_de_F1>$Gran_Total_de_F2 and $Gran_Total_de_F1>$Gran_Total_de_F3 and $Gran_Total_de_F1>$Gran_Total_de_F4){$Clasificado_F1=$grupo_F1;}
	else {if($Gran_Total_de_F2>$Gran_Total_de_F1 and $Gran_Total_de_F2>$Gran_Total_de_F3 and $Gran_Total_de_F2>$Gran_Total_de_F4){$Clasificado_F1=$grupo_F2;}
	else {if($Gran_Total_de_F3>$Gran_Total_de_F1 and $Gran_Total_de_F3>$Gran_Total_de_F2 and $Gran_Total_de_F3>$Gran_Total_de_F4){$Clasificado_F1=$grupo_F3;}
	else {if($Gran_Total_de_F4>$Gran_Total_de_F1 and $Gran_Total_de_F4>$Gran_Total_de_F2 and $Gran_Total_de_F4>$Gran_Total_de_F3){$Clasificado_F1=$grupo_F4;}
	else{$Clasificado_F1=$Empate_Tecnico_F1;}}}}
	
//Calculando los ganadores del grupo (Nuevos F2)	
	
	if(($Gran_Total_de_F1<$Gran_Total_de_F2 and $Gran_Total_de_F1>$Gran_Total_de_F3 and $Gran_Total_de_F1>$Gran_Total_de_F4) or ($Gran_Total_de_F1>$Gran_Total_de_F2 and $Gran_Total_de_F1<$Gran_Total_de_F3 and $Gran_Total_de_F1>$Gran_Total_de_F4) or ($Gran_Total_de_F1>$Gran_Total_de_F2 and $Gran_Total_de_F1>$Gran_Total_de_F3 and $Gran_Total_de_F1<$Gran_Total_de_F4)){$Clasificado_F2=$grupo_F1;}
	else {if(($Gran_Total_de_F2<$Gran_Total_de_F1 and $Gran_Total_de_F2>$Gran_Total_de_F3 and $Gran_Total_de_F2>$Gran_Total_de_F4) or ($Gran_Total_de_F2>$Gran_Total_de_F1 and $Gran_Total_de_F2<$Gran_Total_de_F3 and $Gran_Total_de_F2>$Gran_Total_de_F4) or ($Gran_Total_de_F2>$Gran_Total_de_F1 and $Gran_Total_de_F2>$Gran_Total_de_F3 and $Gran_Total_de_F2<$Gran_Total_de_F4)){$Clasificado_F2=$grupo_F2;}
	else {if(($Gran_Total_de_F3<$Gran_Total_de_F1 and $Gran_Total_de_F3>$Gran_Total_de_F2 and $Gran_Total_de_F3>$Gran_Total_de_F4) or ($Gran_Total_de_F3>$Gran_Total_de_F1 and $Gran_Total_de_F3<$Gran_Total_de_F2 and $Gran_Total_de_F3>$Gran_Total_de_F4) or ($Gran_Total_de_F3>$Gran_Total_de_F1 and $Gran_Total_de_F3>$Gran_Total_de_F2 and $Gran_Total_de_F3<$Gran_Total_de_F4)){$Clasificado_F2=$grupo_F3;}
	else {if(($Gran_Total_de_F4<$Gran_Total_de_F1 and $Gran_Total_de_F4>$Gran_Total_de_F2 and $Gran_Total_de_F4>$Gran_Total_de_F3) or($Gran_Total_de_F4>$Gran_Total_de_F1 and $Gran_Total_de_F4<$Gran_Total_de_F2 and $Gran_Total_de_F4>$Gran_Total_de_F3) or ($Gran_Total_de_F4>$Gran_Total_de_F1 and $Gran_Total_de_F4>$Gran_Total_de_F2 and $Gran_Total_de_F4<$Gran_Total_de_F3)){$Clasificado_F2=$grupo_F4;}
	else{$Clasificado_F2=$Empate_Tecnico_F1;}}}}
	
// Cálculo de puntos del equipo G1	
	
	if($gol_G1G2_G1>$gol_G1G2_G2){$Puntos_de_G1_en_G1G2=3;}
	if($gol_G1G2_G1==$gol_G1G2_G2){$Puntos_de_G1_en_G1G2=1;}
	if($gol_G1G2_G1<$gol_G1G2_G2){$Puntos_de_G1_en_G1G2=0;}
	if($gol_G1G3_G1>$gol_G1G3_G3){$Puntos_de_G1_en_G1G3=3;}
	if($gol_G1G3_G1==$gol_G1G3_G3){$Puntos_de_G1_en_G1G3=1;}
	if($gol_G1G3_G1<$gol_G1G3_G3){$Puntos_de_G1_en_G1G3=0;}
	if($gol_G1G4_G1>$gol_G1G4_G4){$Puntos_de_G1_en_G1G4=3;}
	if($gol_G1G4_G1==$gol_G1G4_G4){$Puntos_de_G1_en_G1G4=1;}
	if($gol_G1G4_G1<$gol_G1G4_G4){$Puntos_de_G1_en_G1G4=0;}
	$Gol_Average_de_G1=0.001*($gol_G1G2_G1+$gol_G1G3_G1+$gol_G1G4_G1-$gol_G1G2_G2-$gol_G1G3_G3-$gol_G1G4_G4);
	$Gol_Afavor_de_G1=0.00001*($gol_G1G2_G1+$gol_G1G3_G1+$gol_G1G4_G1);
	$Total_Puntos_de_G1=$Puntos_de_G1_en_G1G2+$Puntos_de_G1_en_G1G3+$Puntos_de_G1_en_G1G4+$Gol_Average_de_G1+$Gol_Afavor_de_G1;
	
//Cálculo de puntos del equipo G2	
	
	if($gol_G1G2_G2>$gol_G1G2_G1){$Puntos_de_G2_en_G1G2=3;}
	if($gol_G1G2_G2==$gol_G1G2_G1){$Puntos_de_G2_en_G1G2=1;}
	if($gol_G1G2_G2<$gol_G1G2_G1){$Puntos_de_G2_en_G1G2=0;}
	if($gol_G2G3_G2>$gol_G2G3_G3){$Puntos_de_G2_en_G2G3=3;}
	if($gol_G2G3_G2==$gol_G2G3_G3){$Puntos_de_G2_en_G2G3=1;}
	if($gol_G2G3_G2<$gol_G2G3_G3){$Puntos_de_G2_en_G2G3=0;}
	if($gol_G2G4_G2>$gol_G2G4_G4){$Puntos_de_G2_en_G2G4=3;}
	if($gol_G2G4_G2==$gol_G2G4_G4){$Puntos_de_G2_en_G2G4=1;}
	if($gol_G2G4_G2<$gol_G2G4_G4){$Puntos_de_G2_en_G2G4=0;}
	$Gol_Average_de_G2=0.001*($gol_G1G2_G2+$gol_G2G3_G2+$gol_G2G4_G2-$gol_G1G2_G1-$gol_G2G3_G3-$gol_G2G4_G4);
	$Gol_Afavor_de_G2=0.00001*($gol_G1G2_G2+$gol_G2G3_G2+$gol_G2G4_G2);
	$Total_Puntos_de_G2=$Puntos_de_G2_en_G1G2+$Puntos_de_G2_en_G2G3+$Puntos_de_G2_en_G2G4+$Gol_Average_de_G2+$Gol_Afavor_de_G2;
	
//Cálculo de puntos del equipo G3	
	
	if($gol_G1G3_G3>$gol_G1G3_G1){$Puntos_de_G3_en_G1G3=3;}
	if($gol_G1G3_G3==$gol_G1G3_G1){$Puntos_de_G3_en_G1G3=1;}
	if($gol_G1G3_G3<$gol_G1G3_G1){$Puntos_de_G3_en_G1G3=0;}
	if($gol_G2G3_G3>$gol_G2G3_G2){$Puntos_de_G3_en_G2G3=3;}
	if($gol_G2G3_G3==$gol_G2G3_G2){$Puntos_de_G3_en_G2G3=1;}
	if($gol_G2G3_G3<$gol_G2G3_G2){$Puntos_de_G3_en_G2G3=0;}
	if($gol_G3G4_G3>$gol_G3G4_G4){$Puntos_de_G3_en_G3G4=3;}
	if($gol_G3G4_G3==$gol_G3G4_G4){$Puntos_de_G3_en_G3G4=1;}
	if($gol_G3G4_G3<$gol_G3G4_G4){$Puntos_de_G3_en_G3G4=0;}
	$Gol_Average_de_G3=0.001*($gol_G1G3_G3+$gol_G2G3_G3+$gol_G3G4_G3-$gol_G1G3_G1-$gol_G2G3_G2-$gol_G3G4_G4);
	$Gol_Afavor_de_G3=0.00001*($gol_G1G3_G3+$gol_G2G3_G3+$gol_G3G4_G3);
	$Total_Puntos_de_G3=$Puntos_de_G3_en_G1G3+$Puntos_de_G3_en_G2G3+$Puntos_de_G3_en_G3G4+$Gol_Average_de_G3+$Gol_Afavor_de_G3;
	
//Cálculo de puntos del equipo G4	
	
	if($gol_G1G4_G4>$gol_G1G4_G1){$Puntos_de_G4_en_G1G4=3;}
	if($gol_G1G4_G4==$gol_G1G4_G1){$Puntos_de_G4_en_G1G4=1;}
	if($gol_G1G4_G4<$gol_G1G4_G1){$Puntos_de_G4_en_G1G4=0;}
	if($gol_G2G4_G4>$gol_G2G4_G2){$Puntos_de_G4_en_G2G4=3;}
	if($gol_G2G4_G4==$gol_G2G4_G2){$Puntos_de_G4_en_G2G4=1;}
	if($gol_G2G4_G4<$gol_G2G4_G2){$Puntos_de_G4_en_G2G4=0;}
	if($gol_G3G4_G4>$gol_G3G4_G3){$Puntos_de_G4_en_G3G4=3;}
	if($gol_G3G4_G4==$gol_G3G4_G3){$Puntos_de_G4_en_G3G4=1;}
	if($gol_G3G4_G4<$gol_G3G4_G3){$Puntos_de_G4_en_G3G4=0;}
	$Gol_Average_de_G4=0.001*($gol_G1G4_G4+$gol_G2G4_G4+$gol_G3G4_G4-$gol_G1G4_G1-$gol_G2G4_G2-$gol_G3G4_G3);
	$Gol_Afavor_de_G4=0.00001*($gol_G1G4_G4+$gol_G2G4_G4+$gol_G3G4_G4);
	$Total_Puntos_de_G4=$Puntos_de_G4_en_G1G4+$Puntos_de_G4_en_G2G4+$Puntos_de_G4_en_G3G4+$Gol_Average_de_G4+$Gol_Afavor_de_G4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS G1	
	
	if($Total_Puntos_de_G1==$Total_Puntos_de_G2){$Gran_Total_de_G1=$Total_Puntos_de_G1+0.0000001*($Puntos_de_G1_en_G1G2-$Puntos_de_G2_en_G1G2)+0.000000001*($gol_G1G2_G1-$gol_G1G2_G2)+0.00000000001*($gol_G1G2_G1);}
	else {if($Total_Puntos_de_G1==$Total_Puntos_de_G3){$Gran_Total_de_G1=$Total_Puntos_de_G1+0.0000001*($Puntos_de_G1_en_G1G3-$Puntos_de_G3_en_G1G3)+0.000000001*($gol_G1G3_G1-$gol_G1G3_G3)+0.00000000001*($gol_G1G3_G1);}
	else {if($Total_Puntos_de_G1==$Total_Puntos_de_G4){$Gran_Total_de_G1=$Total_Puntos_de_G1+0.0000001*($Puntos_de_G1_en_G1G4-$Puntos_de_G4_en_G1G4)+0.000000001*($gol_G1G4_G1-$gol_G1G4_G4)+0.00000000001*($gol_G1G4_G1);}
	else{$Gran_Total_de_G1=$Total_Puntos_de_G1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS G2	
	
	if($Total_Puntos_de_G2==$Total_Puntos_de_G1){$Gran_Total_de_G2=$Total_Puntos_de_G2+0.0000001*($Puntos_de_G2_en_G1G2-$Puntos_de_G1_en_G1G2)+0.000000001*($gol_G1G2_G2-$gol_G1G2_G1)+0.00000000001*($gol_G1G2_G2);}
	else {if($Total_Puntos_de_G2==$Total_Puntos_de_G3){$Gran_Total_de_G2=$Total_Puntos_de_G2+0.0000001*($Puntos_de_G2_en_G2G3-$Puntos_de_G3_en_G2G3)+0.000000001*($gol_G2G3_G2-$gol_G2G3_G3)+0.00000000001*($gol_G2G3_G2);}
	else {if($Total_Puntos_de_G2==$Total_Puntos_de_G4){$Gran_Total_de_G2=$Total_Puntos_de_G2+0.0000001*($Puntos_de_G2_en_G2G4-$Puntos_de_G4_en_G2G4)+0.000000001*($gol_G2G4_G2-$gol_G2G4_G4)+0.00000000001*($gol_G2G4_G2);}
	else{$Gran_Total_de_G2=$Total_Puntos_de_G2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS G3	
	
	if($Total_Puntos_de_G3==$Total_Puntos_de_G1){$Gran_Total_de_G3=$Total_Puntos_de_G3+0.0000001*($Puntos_de_G3_en_G1G3-$Puntos_de_G1_en_G1G3)+0.000000001*($gol_G1G3_G3-$gol_G1G3_G1)+0.00000000001*($gol_G1G3_G3);}
	else {if($Total_Puntos_de_G3==$Total_Puntos_de_G2){$Gran_Total_de_G3=$Total_Puntos_de_G3+0.0000001*($Puntos_de_G3_en_G2G3-$Puntos_de_G2_en_G2G3)+0.000000001*($gol_G2G3_G3-$gol_G2G3_G2)+0.00000000001*($gol_G2G3_G3);}
	else {if($Total_Puntos_de_G3==$Total_Puntos_de_G4){$Gran_Total_de_G3=$Total_Puntos_de_G3+0.0000001*($Puntos_de_G3_en_G3G4-$Puntos_de_G4_en_G3G4)+0.000000001*($gol_G3G4_G3-$gol_G3G4_G4)+0.00000000001*($gol_G3G4_G3);}
	else{$Gran_Total_de_G3=$Total_Puntos_de_G3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS G4	
	
	if($Total_Puntos_de_G4==$Total_Puntos_de_G1){$Gran_Total_de_G4=$Total_Puntos_de_G4+0.0000001*($Puntos_de_G4_en_G1G4-$Puntos_de_G1_en_G1G4)+0.000000001*($gol_G1G4_G4-$gol_G1G4_G1)+0.00000000001*($gol_G1G4_G4);}
	else {if($Total_Puntos_de_G4==$Total_Puntos_de_G2){$Gran_Total_de_G4=$Total_Puntos_de_G4+0.0000001*($Puntos_de_G4_en_G2G4-$Puntos_de_G2_en_G2G4)+0.000000001*($gol_G2G4_G4-$gol_G2G4_G2)+0.00000000001*($gol_G2G4_G4);}
	else {if($Total_Puntos_de_G4==$Total_Puntos_de_G3){$Gran_Total_de_G4=$Total_Puntos_de_G4+0.0000001*($Puntos_de_G4_en_G3G4-$Puntos_de_G3_en_G3G4)+0.000000001*($gol_G3G4_G4-$gol_G3G4_G3)+0.00000000001*($gol_G3G4_G4);}
	else{$Gran_Total_de_G4=$Total_Puntos_de_G4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos G1)	
	
	if($Gran_Total_de_G1>$Gran_Total_de_G2 and $Gran_Total_de_G1>$Gran_Total_de_G3 and $Gran_Total_de_G1>$Gran_Total_de_G4){$Clasificado_G1=$grupo_G1;}
	else {if($Gran_Total_de_G2>$Gran_Total_de_G1 and $Gran_Total_de_G2>$Gran_Total_de_G3 and $Gran_Total_de_G2>$Gran_Total_de_G4){$Clasificado_G1=$grupo_G2;}
	else {if($Gran_Total_de_G3>$Gran_Total_de_G1 and $Gran_Total_de_G3>$Gran_Total_de_G2 and $Gran_Total_de_G3>$Gran_Total_de_G4){$Clasificado_G1=$grupo_G3;}
	else {if($Gran_Total_de_G4>$Gran_Total_de_G1 and $Gran_Total_de_G4>$Gran_Total_de_G2 and $Gran_Total_de_G4>$Gran_Total_de_G3){$Clasificado_G1=$grupo_G4;}
	else{$Clasificado_G1=$Empate_Tecnico_G1;}}}}
	
//Calculando los ganadores del grupo (Nuevos G2)	
	
	if(($Gran_Total_de_G1<$Gran_Total_de_G2 and $Gran_Total_de_G1>$Gran_Total_de_G3 and $Gran_Total_de_G1>$Gran_Total_de_G4) or ($Gran_Total_de_G1>$Gran_Total_de_G2 and $Gran_Total_de_G1<$Gran_Total_de_G3 and $Gran_Total_de_G1>$Gran_Total_de_G4) or ($Gran_Total_de_G1>$Gran_Total_de_G2 and $Gran_Total_de_G1>$Gran_Total_de_G3 and $Gran_Total_de_G1<$Gran_Total_de_G4)){$Clasificado_G2=$grupo_G1;}
	else {if(($Gran_Total_de_G2<$Gran_Total_de_G1 and $Gran_Total_de_G2>$Gran_Total_de_G3 and $Gran_Total_de_G2>$Gran_Total_de_G4) or ($Gran_Total_de_G2>$Gran_Total_de_G1 and $Gran_Total_de_G2<$Gran_Total_de_G3 and $Gran_Total_de_G2>$Gran_Total_de_G4) or ($Gran_Total_de_G2>$Gran_Total_de_G1 and $Gran_Total_de_G2>$Gran_Total_de_G3 and $Gran_Total_de_G2<$Gran_Total_de_G4)){$Clasificado_G2=$grupo_G2;}
	else {if(($Gran_Total_de_G3<$Gran_Total_de_G1 and $Gran_Total_de_G3>$Gran_Total_de_G2 and $Gran_Total_de_G3>$Gran_Total_de_G4) or ($Gran_Total_de_G3>$Gran_Total_de_G1 and $Gran_Total_de_G3<$Gran_Total_de_G2 and $Gran_Total_de_G3>$Gran_Total_de_G4) or ($Gran_Total_de_G3>$Gran_Total_de_G1 and $Gran_Total_de_G3>$Gran_Total_de_G2 and $Gran_Total_de_G3<$Gran_Total_de_G4)){$Clasificado_G2=$grupo_G3;}
	else {if(($Gran_Total_de_G4<$Gran_Total_de_G1 and $Gran_Total_de_G4>$Gran_Total_de_G2 and $Gran_Total_de_G4>$Gran_Total_de_G3) or($Gran_Total_de_G4>$Gran_Total_de_G1 and $Gran_Total_de_G4<$Gran_Total_de_G2 and $Gran_Total_de_G4>$Gran_Total_de_G3) or ($Gran_Total_de_G4>$Gran_Total_de_G1 and $Gran_Total_de_G4>$Gran_Total_de_G2 and $Gran_Total_de_G4<$Gran_Total_de_G3)){$Clasificado_G2=$grupo_G4;}
	else{$Clasificado_G2=$Empate_Tecnico_G1;}}}}
	
// Cálculo de puntos del equipo H1	
	
	if($gol_H1H2_H1>$gol_H1H2_H2){$Puntos_de_H1_en_H1H2=3;}
	if($gol_H1H2_H1==$gol_H1H2_H2){$Puntos_de_H1_en_H1H2=1;}
	if($gol_H1H2_H1<$gol_H1H2_H2){$Puntos_de_H1_en_H1H2=0;}
	if($gol_H1H3_H1>$gol_H1H3_H3){$Puntos_de_H1_en_H1H3=3;}
	if($gol_H1H3_H1==$gol_H1H3_H3){$Puntos_de_H1_en_H1H3=1;}
	if($gol_H1H3_H1<$gol_H1H3_H3){$Puntos_de_H1_en_H1H3=0;}
	if($gol_H1H4_H1>$gol_H1H4_H4){$Puntos_de_H1_en_H1H4=3;}
	if($gol_H1H4_H1==$gol_H1H4_H4){$Puntos_de_H1_en_H1H4=1;}
	if($gol_H1H4_H1<$gol_H1H4_H4){$Puntos_de_H1_en_H1H4=0;}
	$Gol_Average_de_H1=0.001*($gol_H1H2_H1+$gol_H1H3_H1+$gol_H1H4_H1-$gol_H1H2_H2-$gol_H1H3_H3-$gol_H1H4_H4);
	$Gol_Afavor_de_H1=0.00001*($gol_H1H2_H1+$gol_H1H3_H1+$gol_H1H4_H1);
	$Total_Puntos_de_H1=$Puntos_de_H1_en_H1H2+$Puntos_de_H1_en_H1H3+$Puntos_de_H1_en_H1H4+$Gol_Average_de_H1+$Gol_Afavor_de_H1;
	
//Cálculo de puntos del equipo H2	
	
	if($gol_H1H2_H2>$gol_H1H2_H1){$Puntos_de_H2_en_H1H2=3;}
	if($gol_H1H2_H2==$gol_H1H2_H1){$Puntos_de_H2_en_H1H2=1;}
	if($gol_H1H2_H2<$gol_H1H2_H1){$Puntos_de_H2_en_H1H2=0;}
	if($gol_H2H3_H2>$gol_H2H3_H3){$Puntos_de_H2_en_H2H3=3;}
	if($gol_H2H3_H2==$gol_H2H3_H3){$Puntos_de_H2_en_H2H3=1;}
	if($gol_H2H3_H2<$gol_H2H3_H3){$Puntos_de_H2_en_H2H3=0;}
	if($gol_H2H4_H2>$gol_H2H4_H4){$Puntos_de_H2_en_H2H4=3;}
	if($gol_H2H4_H2==$gol_H2H4_H4){$Puntos_de_H2_en_H2H4=1;}
	if($gol_H2H4_H2<$gol_H2H4_H4){$Puntos_de_H2_en_H2H4=0;}
	$Gol_Average_de_H2=0.001*($gol_H1H2_H2+$gol_H2H3_H2+$gol_H2H4_H2-$gol_H1H2_H1-$gol_H2H3_H3-$gol_H2H4_H4);
	$Gol_Afavor_de_H2=0.00001*($gol_H1H2_H2+$gol_H2H3_H2+$gol_H2H4_H2);
	$Total_Puntos_de_H2=$Puntos_de_H2_en_H1H2+$Puntos_de_H2_en_H2H3+$Puntos_de_H2_en_H2H4+$Gol_Average_de_H2+$Gol_Afavor_de_H2;
	
//Cálculo de puntos del equipo H3	
	
	if($gol_H1H3_H3>$gol_H1H3_H1){$Puntos_de_H3_en_H1H3=3;}
	if($gol_H1H3_H3==$gol_H1H3_H1){$Puntos_de_H3_en_H1H3=1;}
	if($gol_H1H3_H3<$gol_H1H3_H1){$Puntos_de_H3_en_H1H3=0;}
	if($gol_H2H3_H3>$gol_H2H3_H2){$Puntos_de_H3_en_H2H3=3;}
	if($gol_H2H3_H3==$gol_H2H3_H2){$Puntos_de_H3_en_H2H3=1;}
	if($gol_H2H3_H3<$gol_H2H3_H2){$Puntos_de_H3_en_H2H3=0;}
	if($gol_H3H4_H3>$gol_H3H4_H4){$Puntos_de_H3_en_H3H4=3;}
	if($gol_H3H4_H3==$gol_H3H4_H4){$Puntos_de_H3_en_H3H4=1;}
	if($gol_H3H4_H3<$gol_H3H4_H4){$Puntos_de_H3_en_H3H4=0;}
	$Gol_Average_de_H3=0.001*($gol_H1H3_H3+$gol_H2H3_H3+$gol_H3H4_H3-$gol_H1H3_H1-$gol_H2H3_H2-$gol_H3H4_H4);
	$Gol_Afavor_de_H3=0.00001*($gol_H1H3_H3+$gol_H2H3_H3+$gol_H3H4_H3);
	$Total_Puntos_de_H3=$Puntos_de_H3_en_H1H3+$Puntos_de_H3_en_H2H3+$Puntos_de_H3_en_H3H4+$Gol_Average_de_H3+$Gol_Afavor_de_H3;
	
//Cálculo de puntos del equipo H4	
	
	if($gol_H1H4_H4>$gol_H1H4_H1){$Puntos_de_H4_en_H1H4=3;}
	if($gol_H1H4_H4==$gol_H1H4_H1){$Puntos_de_H4_en_H1H4=1;}
	if($gol_H1H4_H4<$gol_H1H4_H1){$Puntos_de_H4_en_H1H4=0;}
	if($gol_H2H4_H4>$gol_H2H4_H2){$Puntos_de_H4_en_H2H4=3;}
	if($gol_H2H4_H4==$gol_H2H4_H2){$Puntos_de_H4_en_H2H4=1;}
	if($gol_H2H4_H4<$gol_H2H4_H2){$Puntos_de_H4_en_H2H4=0;}
	if($gol_H3H4_H4>$gol_H3H4_H3){$Puntos_de_H4_en_H3H4=3;}
	if($gol_H3H4_H4==$gol_H3H4_H3){$Puntos_de_H4_en_H3H4=1;}
	if($gol_H3H4_H4<$gol_H3H4_H3){$Puntos_de_H4_en_H3H4=0;}
	$Gol_Average_de_H4=0.001*($gol_H1H4_H4+$gol_H2H4_H4+$gol_H3H4_H4-$gol_H1H4_H1-$gol_H2H4_H2-$gol_H3H4_H3);
	$Gol_Afavor_de_H4=0.00001*($gol_H1H4_H4+$gol_H2H4_H4+$gol_H3H4_H4);
	$Total_Puntos_de_H4=$Puntos_de_H4_en_H1H4+$Puntos_de_H4_en_H2H4+$Puntos_de_H4_en_H3H4+$Gol_Average_de_H4+$Gol_Afavor_de_H4;
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS H1	
	
	if($Total_Puntos_de_H1==$Total_Puntos_de_H2){$Gran_Total_de_H1=$Total_Puntos_de_H1+0.0000001*($Puntos_de_H1_en_H1H2-$Puntos_de_H2_en_H1H2)+0.000000001*($gol_H1H2_H1-$gol_H1H2_H2)+0.00000000001*($gol_H1H2_H1);}
	else {if($Total_Puntos_de_H1==$Total_Puntos_de_H3){$Gran_Total_de_H1=$Total_Puntos_de_H1+0.0000001*($Puntos_de_H1_en_H1H3-$Puntos_de_H3_en_H1H3)+0.000000001*($gol_H1H3_H1-$gol_H1H3_H3)+0.00000000001*($gol_H1H3_H1);}
	else {if($Total_Puntos_de_H1==$Total_Puntos_de_H4){$Gran_Total_de_H1=$Total_Puntos_de_H1+0.0000001*($Puntos_de_H1_en_H1H4-$Puntos_de_H4_en_H1H4)+0.000000001*($gol_H1H4_H1-$gol_H1H4_H4)+0.00000000001*($gol_H1H4_H1);}
	else{$Gran_Total_de_H1=$Total_Puntos_de_H1;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS H2	
	
	if($Total_Puntos_de_H2==$Total_Puntos_de_H1){$Gran_Total_de_H2=$Total_Puntos_de_H2+0.0000001*($Puntos_de_H2_en_H1H2-$Puntos_de_H1_en_H1H2)+0.000000001*($gol_H1H2_H2-$gol_H1H2_H1)+0.00000000001*($gol_H1H2_H2);}
	else {if($Total_Puntos_de_H2==$Total_Puntos_de_H3){$Gran_Total_de_H2=$Total_Puntos_de_H2+0.0000001*($Puntos_de_H2_en_H2H3-$Puntos_de_H3_en_H2H3)+0.000000001*($gol_H2H3_H2-$gol_H2H3_H3)+0.00000000001*($gol_H2H3_H2);}
	else {if($Total_Puntos_de_H2==$Total_Puntos_de_H4){$Gran_Total_de_H2=$Total_Puntos_de_H2+0.0000001*($Puntos_de_H2_en_H2H4-$Puntos_de_H4_en_H2H4)+0.000000001*($gol_H2H4_H2-$gol_H2H4_H4)+0.00000000001*($gol_H2H4_H2);}
	else{$Gran_Total_de_H2=$Total_Puntos_de_H2;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS H3	
	
	if($Total_Puntos_de_H3==$Total_Puntos_de_H1){$Gran_Total_de_H3=$Total_Puntos_de_H3+0.0000001*($Puntos_de_H3_en_H1H3-$Puntos_de_H1_en_H1H3)+0.000000001*($gol_H1H3_H3-$gol_H1H3_H1)+0.00000000001*($gol_H1H3_H3);}
	else {if($Total_Puntos_de_H3==$Total_Puntos_de_H2){$Gran_Total_de_H3=$Total_Puntos_de_H3+0.0000001*($Puntos_de_H3_en_H2H3-$Puntos_de_H2_en_H2H3)+0.000000001*($gol_H2H3_H3-$gol_H2H3_H2)+0.00000000001*($gol_H2H3_H3);}
	else {if($Total_Puntos_de_H3==$Total_Puntos_de_H4){$Gran_Total_de_H3=$Total_Puntos_de_H3+0.0000001*($Puntos_de_H3_en_H3H4-$Puntos_de_H4_en_H3H4)+0.000000001*($gol_H3H4_H3-$gol_H3H4_H4)+0.00000000001*($gol_H3H4_H3);}
	else{$Gran_Total_de_H3=$Total_Puntos_de_H3;}}}
	
// CALCULO PARA REGLAS D, E y F. EQUIPOS H4	
	
	if($Total_Puntos_de_H4==$Total_Puntos_de_H1){$Gran_Total_de_H4=$Total_Puntos_de_H4+0.0000001*($Puntos_de_H4_en_H1H4-$Puntos_de_H1_en_H1H4)+0.000000001*($gol_H1H4_H4-$gol_H1H4_H1)+0.00000000001*($gol_H1H4_H4);}
	else {if($Total_Puntos_de_H4==$Total_Puntos_de_H2){$Gran_Total_de_H4=$Total_Puntos_de_H4+0.0000001*($Puntos_de_H4_en_H2H4-$Puntos_de_H2_en_H2H4)+0.000000001*($gol_H2H4_H4-$gol_H2H4_H2)+0.00000000001*($gol_H2H4_H4);}
	else {if($Total_Puntos_de_H4==$Total_Puntos_de_H3){$Gran_Total_de_H4=$Total_Puntos_de_H4+0.0000001*($Puntos_de_H4_en_H3H4-$Puntos_de_H3_en_H3H4)+0.000000001*($gol_H3H4_H4-$gol_H3H4_H3)+0.00000000001*($gol_H3H4_H4);}
	else{$Gran_Total_de_H4=$Total_Puntos_de_H4;}}}
	
	
//Calculando los ganadores del grupo (Nuevos H1)	
	
	if($Gran_Total_de_H1>$Gran_Total_de_H2 and $Gran_Total_de_H1>$Gran_Total_de_H3 and $Gran_Total_de_H1>$Gran_Total_de_H4){$Clasificado_H1=$grupo_H1;}
	else {if($Gran_Total_de_H2>$Gran_Total_de_H1 and $Gran_Total_de_H2>$Gran_Total_de_H3 and $Gran_Total_de_H2>$Gran_Total_de_H4){$Clasificado_H1=$grupo_H2;}
	else {if($Gran_Total_de_H3>$Gran_Total_de_H1 and $Gran_Total_de_H3>$Gran_Total_de_H2 and $Gran_Total_de_H3>$Gran_Total_de_H4){$Clasificado_H1=$grupo_H3;}
	else {if($Gran_Total_de_H4>$Gran_Total_de_H1 and $Gran_Total_de_H4>$Gran_Total_de_H2 and $Gran_Total_de_H4>$Gran_Total_de_H3){$Clasificado_H1=$grupo_H4;}
	else{$Clasificado_H1=$Empate_Tecnico_H1;}}}}
	
//Calculando los ganadores del grupo (Nuevos H2)	
	
	if(($Gran_Total_de_H1<$Gran_Total_de_H2 and $Gran_Total_de_H1>$Gran_Total_de_H3 and $Gran_Total_de_H1>$Gran_Total_de_H4) or ($Gran_Total_de_H1>$Gran_Total_de_H2 and $Gran_Total_de_H1<$Gran_Total_de_H3 and $Gran_Total_de_H1>$Gran_Total_de_H4) or ($Gran_Total_de_H1>$Gran_Total_de_H2 and $Gran_Total_de_H1>$Gran_Total_de_H3 and $Gran_Total_de_H1<$Gran_Total_de_H4)){$Clasificado_H2=$grupo_H1;}
	else {if(($Gran_Total_de_H2<$Gran_Total_de_H1 and $Gran_Total_de_H2>$Gran_Total_de_H3 and $Gran_Total_de_H2>$Gran_Total_de_H4) or ($Gran_Total_de_H2>$Gran_Total_de_H1 and $Gran_Total_de_H2<$Gran_Total_de_H3 and $Gran_Total_de_H2>$Gran_Total_de_H4) or ($Gran_Total_de_H2>$Gran_Total_de_H1 and $Gran_Total_de_H2>$Gran_Total_de_H3 and $Gran_Total_de_H2<$Gran_Total_de_H4)){$Clasificado_H2=$grupo_H2;}
	else {if(($Gran_Total_de_H3<$Gran_Total_de_H1 and $Gran_Total_de_H3>$Gran_Total_de_H2 and $Gran_Total_de_H3>$Gran_Total_de_H4) or ($Gran_Total_de_H3>$Gran_Total_de_H1 and $Gran_Total_de_H3<$Gran_Total_de_H2 and $Gran_Total_de_H3>$Gran_Total_de_H4) or ($Gran_Total_de_H3>$Gran_Total_de_H1 and $Gran_Total_de_H3>$Gran_Total_de_H2 and $Gran_Total_de_H3<$Gran_Total_de_H4)){$Clasificado_H2=$grupo_H3;}
	else {if(($Gran_Total_de_H4<$Gran_Total_de_H1 and $Gran_Total_de_H4>$Gran_Total_de_H2 and $Gran_Total_de_H4>$Gran_Total_de_H3) or($Gran_Total_de_H4>$Gran_Total_de_H1 and $Gran_Total_de_H4<$Gran_Total_de_H2 and $Gran_Total_de_H4>$Gran_Total_de_H3) or ($Gran_Total_de_H4>$Gran_Total_de_H1 and $Gran_Total_de_H4>$Gran_Total_de_H2 and $Gran_Total_de_H4<$Gran_Total_de_H3)){$Clasificado_H2=$grupo_H4;}
	else{$Clasificado_H2=$Empate_Tecnico_H1;}}}}

// CALCUlANDO EQUIPOS QUE PASAN A 4° DE FINAL

	if($Gol_Oct_A1>$Gol_Oct_B2){$Clasificado_81=$Clasificado_A1;}
	else{$Clasificado_81=$Clasificado_B2;}
	if($Gol_Oct_B1>$Gol_Oct_A2){$Clasificado_82=$Clasificado_B1;}
	else{$Clasificado_82=$Clasificado_A2;}
	if($Gol_Oct_C1>$Gol_Oct_D2){$Clasificado_83=$Clasificado_C1;}
	else{$Clasificado_83=$Clasificado_D2;}
	if($Gol_Oct_C2>$Gol_Oct_D1){$Clasificado_84=$Clasificado_C2;}
	else{$Clasificado_84=$Clasificado_D1;}
	if($Gol_Oct_E1>$Gol_Oct_F2){$Clasificado_85=$Clasificado_E1;}
	else{$Clasificado_85=$Clasificado_F2;}
	if($Gol_Oct_F1>$Gol_Oct_E2){$Clasificado_86=$Clasificado_F1;}
	else{$Clasificado_86=$Clasificado_E2;}
	if($Gol_Oct_G1>$Gol_Oct_H2){$Clasificado_87=$Clasificado_G1;}
	else{$Clasificado_87=$Clasificado_H2;}
	if($Gol_Oct_H1>$Gol_Oct_G2){$Clasificado_88=$Clasificado_H1;}
	else{$Clasificado_88=$Clasificado_G2;}

// CALCUlANDO EQUIPOS QUE PASAN A SEMIFINALES

	if($Gol_Cuart_81>$Gol_Cuart_83){$Clasificado_41=$Clasificado_81;}
	else{$Clasificado_41=$Clasificado_83;}
	if($Gol_Cuart_82>$Gol_Cuart_84){$Clasificado_42=$Clasificado_82;}
	else{$Clasificado_42=$Clasificado_84;}
	if($Gol_Cuart_85>$Gol_Cuart_87){$Clasificado_43=$Clasificado_85;}
	else{$Clasificado_43=$Clasificado_87;}
	if($Gol_Cuart_86>$Gol_Cuart_88){$Clasificado_44=$Clasificado_86;}
	else{$Clasificado_44=$Clasificado_88;}

// CALCUlANDO EQUIPOS QUE VAN A 3° LUGAR

	if($Gol_SF_41>$Gol_SF_43){$Clasificado_Tercero_1=$Clasificado_43;}
	else{$Clasificado_Tercero_1=$Clasificado_41;}
	if($Gol_SF_42>$Gol_SF_44){$Clasificado_Tercero_2=$Clasificado_44;}
	else{$Clasificado_Tercero_2=$Clasificado_42;}

// CALCUlANDO EQUIPOS QUE VAN A LA GRAN FINAL

	if($Gol_SF_41>$Gol_SF_43){$Clasificado_GF_1=$Clasificado_41;}
	else{$Clasificado_GF_1=$Clasificado_43;}
	if($Gol_SF_42>$Gol_SF_44){$Clasificado_GF_2=$Clasificado_42;}
	else{$Clasificado_GF_2=$Clasificado_44;}

// CALCUlANDO 1° 2° 3° Y 4° LUGAR

	if($Gol_GSF_1>$Gol_GSF_2){$primero=$Clasificado_GF_1;$segundo=$Clasificado_GF_2;}
	else{$primero=$Clasificado_GF_2;$segundo=$Clasificado_GF_1;}
	if($Gol_PSF_1>$Gol_PSF_2){$tercero=$Clasificado_Tercero_1;$cuarto=$Clasificado_Tercero_2;}
	else{$tercero=$Clasificado_Tercero_2;$cuarto=$Clasificado_Tercero_1;}

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

// PEGANDO EN LA BASE DE DATOS LOS DATOS DE USUARIO

	$consulta="UPDATE `datos_usuarios` SET USUARIO= '$nombre_usuario', CORREO= '$email_usuario', CONTRASENA= '$contrasena_usuario' WHERE CODIGO_INICIO= '$codigo_inicio';";
	$resultados=mysqli_query($conexion,$consulta);

// PEGANDO EN LA BASE DE DATOS LOS DATOS DE LA QUINIELA
	
	$consulta="INSERT INTO QUINIELAS (USUAIRO, J01_GOL_A1, J01_GOL_A2, J02_GOL_A1, J02_GOL_A3, J03_GOL_A1, J03_GOL_A4, J04_GOL_A2, J04_GOL_A3, J05_GOL_A2, J05_GOL_A4, J06_GOL_A3, J06_GOL_A4, J07_GOL_B1, J07_GOL_B2, J08_GOL_B1, J08_GOL_B3, J09_GOL_B1, J09_GOL_B4, J10_GOL_B2, J10_GOL_B3, J11_GOL_B2, J11_GOL_B4, J12_GOL_B3, J12_GOL_B4, J13_GOL_C1, J13_GOL_C2, J14_GOL_C1, J14_GOL_C3, J15_GOL_C1, J15_GOL_C4, J16_GOL_C2, J16_GOL_C3, J17_GOL_C2, J17_GOL_C4, J18_GOL_C3, J18_GOL_C4, J19_GOL_D1, J19_GOL_D2, J20_GOL_D1, J20_GOL_D3, J21_GOL_D1, J21_GOL_D4, J22_GOL_D2, J22_GOL_D3, J23_GOL_D2, J23_GOL_D4, J24_GOL_D3, J24_GOL_D4, J25_GOL_E1, J25_GOL_E2, J26_GOL_E1, J26_GOL_E3, J27_GOL_E1, J27_GOL_E4, J28_GOL_E2, J28_GOL_E3, J29_GOL_E2, J29_GOL_E4, J30_GOL_E3, J30_GOL_E4, J31_GOL_F1, J31_GOL_F2, J32_GOL_F1, J32_GOL_F3, J33_GOL_F1, J33_GOL_F4, J34_GOL_F2, J34_GOL_F3, J35_GOL_F2, J35_GOL_F4, J36_GOL_F3, J36_GOL_F4, J37_GOL_G1, J37_GOL_G2, J38_GOL_G1, J38_GOL_G3, J39_GOL_G1, J39_GOL_G4, J40_GOL_G2, J40_GOL_G3, J41_GOL_G2, J41_GOL_G4, J42_GOL_G3, J42_GOL_G4, J43_GOL_H1, J43_GOL_H2, J44_GOL_H1, J44_GOL_H3, J45_GOL_H1, J45_GOL_H4, J46_GOL_H2, J46_GOL_H3, J47_GOL_H2, J47_GOL_H4, J48_GOL_H3, J48_GOL_H4, OCT_1_A1, OCT_1_B2, GOL_A1, GOL_B2, OCT_2_B1, OCT_2_A2, GOL_B1, GOL_A2, OCT_3_C1, OCT_3_D2, GOL_C1, GOL_D2, OCT_4_D1, OCT_4_C2, GOL_D1, GOL_C2, OCT_5_E1, OCT_5_F2, GOL_E1, GOL_F2, OCT_6_F1, OCT_6_E2, GOL_F1, GOL_E2, OCT_7_G1, OCT_7_H2, GOL_G1, GOL_H2, OCT_8_H1, OCT_8_G2, GOL_H1, GOL_G2, CTO_1_OCT_1, CTO_1_OCT_3, GOL_OCT_1, GOL_OCT_3, CTO_2_OCT_2, CTO_2_OCT_4, GOL_OCT_2, GOL_OCT_4, CTO_3_OCT_5, CTO_3_OCT_7, GOL_OCT_5, GOL_OCT_7, CTO_4_OCT_6, CTO_4_OCT_8, GOL_OCT_6, GOL_OCT_8, SF1_CTO_1, SF1_CTO_3, GOL_CTO_1, GOL_CTO_3, SF2_CTO_2, SF2_CTO_4, GOL_CTO_2, GOL_CTO_4, TERCERO_PSF1, TERCERO_PSF2, GOL_PSF1, GOL_PSF2, G_F_GSF1, G_F_GSF2, GOL_GSF1, GOL_GSF2, CAMPEON, CODIGO_INICIO, EQUIPO_GOLEADOR) VALUES ('$nombre_usuario', $gol_A1A2_A1, $gol_A1A2_A2, $gol_A1A3_A1, $gol_A1A3_A3, $gol_A1A4_A1, $gol_A1A4_A4, $gol_A2A3_A2, $gol_A2A3_A3, $gol_A2A4_A2, $gol_A2A4_A4, $gol_A3A4_A3, $gol_A3A4_A4, $gol_B1B2_B1, $gol_B1B2_B2, $gol_B1B3_B1, $gol_B1B3_B3, $gol_B1B4_B1, $gol_B1B4_B4, $gol_B2B3_B2, $gol_B2B3_B3, $gol_B2B4_B2, $gol_B2B4_B4, $gol_B3B4_B3, $gol_B3B4_B4, $gol_C1C2_C1, $gol_C1C2_C2, $gol_C1C3_C1, $gol_C1C3_C3, $gol_C1C4_C1, $gol_C1C4_C4, $gol_C2C3_C2, $gol_C2C3_C3, $gol_C2C4_C2, $gol_C2C4_C4, $gol_C3C4_C3, $gol_C3C4_C4, $gol_D1D2_D1, $gol_D1D2_D2, $gol_D1D3_D1, $gol_D1D3_D3, $gol_D1D4_D1, $gol_D1D4_D4, $gol_D2D3_D2, $gol_D2D3_D3, $gol_D2D4_D2, $gol_D2D4_D4, $gol_D3D4_D3, $gol_D3D4_D4, $gol_E1E2_E1, $gol_E1E2_E2, $gol_E1E3_E1, $gol_E1E3_E3, $gol_E1E4_E1, $gol_E1E4_E4, $gol_E2E3_E2, $gol_E2E3_E3, $gol_E2E4_E2, $gol_E2E4_E4, $gol_E3E4_E3, $gol_E3E4_E4, $gol_F1F2_F1, $gol_F1F2_F2, $gol_F1F3_F1, $gol_F1F3_F3, $gol_F1F4_F1, $gol_F1F4_F4, $gol_F2F3_F2, $gol_F2F3_F3, $gol_F2F4_F2, $gol_F2F4_F4, $gol_F3F4_F3, $gol_F3F4_F4, $gol_G1G2_G1, $gol_G1G2_G2, $gol_G1G3_G1, $gol_G1G3_G3, $gol_G1G4_G1, $gol_G1G4_G4, $gol_G2G3_G2, $gol_G2G3_G3, $gol_G2G4_G2, $gol_G2G4_G4, $gol_G3G4_G3, $gol_G3G4_G4, $gol_H1H2_H1, $gol_H1H2_H2, $gol_H1H3_H1, $gol_H1H3_H3, $gol_H1H4_H1, $gol_H1H4_H4, $gol_H2H3_H2, $gol_H2H3_H3, $gol_H2H4_H2, $gol_H2H4_H4, $gol_H3H4_H3, $gol_H3H4_H4, '$Clasificado_A1', '$Clasificado_B2', $Gol_Oct_A1, $Gol_Oct_B2, '$Clasificado_B1', '$Clasificado_A2', $Gol_Oct_B1, $Gol_Oct_A2, '$Clasificado_C1', '$Clasificado_D2', $Gol_Oct_C1, $Gol_Oct_D2, '$Clasificado_D1', '$Clasificado_C2', $Gol_Oct_D1, $Gol_Oct_C2, '$Clasificado_E1', '$Clasificado_F2', $Gol_Oct_E1, $Gol_Oct_F2, '$Clasificado_F1', '$Clasificado_E2', $Gol_Oct_F1, $Gol_Oct_E2, '$Clasificado_G1', '$Clasificado_H2', $Gol_Oct_G1, $Gol_Oct_H2, '$Clasificado_H1', '$Clasificado_G2', $Gol_Oct_H1, $Gol_Oct_G2, '$Clasificado_81', '$Clasificado_83', $Gol_Cuart_81, $Gol_Cuart_83, '$Clasificado_82', '$Clasificado_84', $Gol_Cuart_82, $Gol_Cuart_84, '$Clasificado_85', '$Clasificado_87', $Gol_Cuart_85, $Gol_Cuart_87, '$Clasificado_86', '$Clasificado_88', $Gol_Cuart_86, $Gol_Cuart_88, '$Clasificado_41', '$Clasificado_43', $Gol_SF_41, $Gol_SF_43, '$Clasificado_42', '$Clasificado_44', $Gol_SF_42, $Gol_SF_44, '$Clasificado_Tercero_1', '$Clasificado_Tercero_2', $Gol_PSF_1, $Gol_PSF_2, '$Clasificado_GF_1', '$Clasificado_GF_2', $Gol_GSF_1, $Gol_GSF_2, '$primero', '$codigo_inicio', '$eq_goleador');";
	$resultados=mysqli_query($conexion,$consulta);

	echo "<h3>EL REGISTRO DE LA QUINIELA SE REALIZÓ CON ÉXITO</h3>";
	echo "<p>Por favor vuelva a la página de inicio para entrar en su seción de usuario...</p>";
	echo "<p><a href='QMF2016_Nuevo_Usuario.php'>Volver a la Página de Inicio</a><p>";

	}

	mysqli_close($conexion);

}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}

?>

</section>

<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>