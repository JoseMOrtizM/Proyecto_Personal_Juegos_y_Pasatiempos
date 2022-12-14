<!DOCTYPE HTML>

	<meta charset="utf-8"/>
	<meta name="description" content="Página de quiniela copa del mundo 2018"/>
	<meta name="keywords" content="quiniela, resultado, posiciones, mundial, football, futbol"/>

	<title>Quiniela_Mundial_2018/instructivo_nuevo_usuario</TITLE>
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
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/BANDERAS.png" id="imagen02"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/LOGOSTODOS.png" id="imagen05"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/MEJORESEQUIPOS01.png" id="imagen06"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/CAMPEONES01.png" id="imagen03"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/BALON01.png" id="imagen01"></div>
  <br>
  <div style="height:133px; width:185px; margin:auto; border:#060 ridge 7px; box-shadow:#333 10px 5px 10px;	border-radius:30px; background-color:#333333;"><img style="height:133px; width:185px; margin:auto; border-radius:30px; background-color:#333333;" width="185px" height="133px" src="IMAGENES2/ESTADIO01.png" id="imagen04"></div>
</aside>

<header>
  <h1>Quiniela RUSIA-2018</h1>
</header>

<nav>
<div id="usuario">Bienvenido josemortizm@gmial.com&nbsp;&nbsp;&nbsp;</div>
<div>
<blockquote><a href="QMF2016_Salir.php">Salir</a></blockquote>
<blockquote><a href="QMF2016_Nuevo_Usuario.php">Ir a la zona de registro</a></blockquote>
</div>
</nav>

<section>
<br>
<article>
<h2>El usuario debe hacer uso de este sitio web de la siguiente manera:</h2>
<br>
<h3>* Primer Paso, conoce las reglas del juego:</h3>


<table>
  <tr>
    <td style="width:200px" class="titulo">FASES</td>
    <td class="titulo">Ptos en Posición</td>
    <td class="titulo">Ptos en otra Posición</td>
    <td class="titulo">Goles</td>
    <td class="titulo">Acierto Ganador</td>
    <td class="titulo">Ganador Bono Extra</td>
    <td class="titulo">Equipo Goleador</td>
  </tr>
  
<?php
try{
	require ("conexion.php");
	$consulta="SELECT * FROM `reglas`";
	$resultados=mysqli_query($conexion,$consulta);
	while(($fila=mysqli_fetch_array($resultados))==true){
		$fase=$fila['FASE'];
		$en_pos=$fila['EN_SU_POS'];
		$otra_pos=$fila['OTRA_POS'];
		$gol=$fila['GOL'];
		$gana_res=$fila['GANA_RESULT'];
		$gana_ext=$fila['GANA_EXTRA'];
		$goleador_ext=$fila['EQUIPO_GOLEADOR'];

	echo "<tr><td>$fase</td>";
	echo "<td style='background-color:#FFF'>$en_pos</td>";
	echo "<td style='background-color:#FFF'>$otra_pos</td>";
	echo "<td style='background-color:#FFF'>$gol</td>";
	echo "<td style='background-color:#FFF'>$gana_res</td>";
	echo "<td style='background-color:#FFF'>$gana_ext</td>";
	echo "<td style='background-color:#FFF'>$goleador_ext</td></tr>";
	}
	$consulta="SELECT COUNT(USUAIRO) AS ID FROM `quinielas`";
	$resultados=mysqli_query($conexion,$consulta);
	$fila=mysqli_fetch_array($resultados);
	$quinielas_registradas=$fila['ID'];
	$bote_mmbs=0.1*$quinielas_registradas;	
	mysqli_close($conexion);
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>

</table>
<br>
<ol>
<li><h4>Ptos en Posición:</h4> Son los puntos a ganar si se acierta el equipo que pase a esta ronda en la posición correcta.</li>
<li><h4>Ptos en otra Posición:</h4> Son los puntos a ganar si se acierta el equipo que pase a esta ronda pero en una posición diferente.</li>
<li><h4>Ptos en otra Posición:</h4> Son los puntos a ganar si se acierta el equipo que pase a esta ronda pero en una posición diferente.</li>
<li><h4>Goles Equipo 1 / Goles Equipo 2:</h4> Son los puntos a ganar si se acierta la cantidad de goles marcados por un equipo.</li>
<li><h4>Acierto Ganador:</h4> Son los puntos a ganar si se acierta el equipo ganador del partido (en el caso de la primera ronda se ganan estos puntos en caso de que se acierte el resultado de empate).</li>
<li><h4>Ganador Bono Extra:</h4> Son los puntos a ganar si se acierta el equipo CAMPEÓN.</li>
</ol>
<br>
<h3>* Segundo Paso, regístrate:</h3>
<ol>
<li>Deberás adquirir tu "Código de Inicio".</li>
<li> Para ello realiza un deposito bancario o transferencia a: BANCO: MERCANTIL, CUENTA: CORRIENTE, A NOMBRE DE: XXXXX, C.I.: XX.XXX.XXX, N° CUENTA: XXXX-XXXX-XXXX-XX-XXXX, CORREO: XXXX@GMAIL.COM, TELEFONO: 04XX-XXXXXXX</li>
<li>Luego escribe un correo electrónico a xxxxx@xxx.com colocando el número de transferencia y tu correo electrónico</li>
<li>En el transcurso de las siguientes 48 horas recibirás a tu e-mail tu código de inicio</li>
<li>Una vez que hagas adquirido tu "Codigo de Inbicio" ingresas los datos personales solicitados y los resultados de los partidos.</li>
<li>A medida que vayas rellenando los resultados de los partidos de cada grupo pulsa sobre el boton de "CALCULAR PUNTOS DEL GRUPO".</li>
<li>Si es necesario, en el caso de que tengas un empate técnico debes colocar a mano los equipos que clasifican (ya sea el priemro, el segundo o ambos clasificados según corresponda).</li>
<li>Aplica el mismo procedimiento hasta llegar al partido de la GRAN FINAL y oprime el boton de "MOSTRAR RESUMEN FINAL, esto te permitirá ver los 4 primeros puestos y el equipo Goleador del torneo.</li>
<li>Finalmente pulsa el boton de "REGISTRAR".</li>
<li>IMPORTANTE 1: Recuerda no perder tu Código de Inicio, ya que es el único dato que te permitirar recuperar tus datos de usuario en el caso de que los olvides.</li>
<li>IMPORTANTE 2: El sistema quedará inavilitado para el ingreso de nuevas quinielas 2 días antes del inicio de la Copa del Mundo. Por lo que se recomienda que se tomen las previsiones de cargar los datos con tiempo.</li>
</ol>
<br>
<h3>* Tercer Paso, navega por el sitio:</h3>
<ol><h4>Una vez cargada tu quiniela accede desde la pagina de inicio, con tu Usuario y Contraseña, a los siguientes links:</h4>
<li>Instructivo de Uso.</li>
<li>Calendario.</li>
<li>Posiciones.</li>
</ol>
<br>
<h3>IMPORTANTE: Reglas de clasificación para pase a 8° de Final:</h3>
<ol><h4>(estas son las reglas de clasificación establecidas por la FIFA)</h4>
<li>Mayor número de puntos obtenidos en todos los partidos del grupo.</li>
<li>Diferencia de goles en todos los partidos de grupo.</li>
<li>Mayor número de goles marcados en todos los partidos de grupo.</li></ol>
<ol><h4>Si dos o más equipos tienen el mismo resultado conforme a los tres criterios arriba mencionados, sus lugares se determinarán de la siguiente forma:</h4>
<li>Mayor número de puntos obtenidos en los partidos de grupo (partidos directos) entre los equipos en cuestión.</li>
<li>Diferencia de goles en los partidos de grupo entre los equipos en cuestión.</li>
<li>Mayor número de goles marcados en los partidos de grupo entre los equipos en cuestión.</li></ol>
<ol><h4>Si aún así siguiera existiendo situación de empate, se realiza un Sorteo por parte de la Comisión Organizadora de la Copa Mundial de la FIFA con el cua se define al equipo clasificado.</h4></ol>
<h3>VALOR DE LA QUINIELA:</h3>
<ol><h4>La quiniela tendrá un valor de 100.000 BsF.</h4></ol>
<h3>GANADORES Y PREMIOS:</h3>
<ol><h4>EL 1° LUGAR SE GANA EL 45%, EL 2° LUGAR EL 25% Y EL TERCER LUGAR EL 15% DEL BOTE.</h4></ol>
<ol><h4>EL 15% restante será utilizado para seguir mejorando nuestros sistemas.</h4></ol>
<h3>EL BOTE AL DÍA DE HOY:</h3>
<ol><h4>Al día de hoy se tienen registradas <?php echo "$quinielas_registradas"; ?> Quinielas lo que se traduce en un Bote de <?php echo "$bote_mmbs"; ?> MMBsF (1° Lugar = <?php echo $quinielas_registradas*$bote_mmbs*.45; ?> MMBsf, 2° Lugar = <?php echo $quinielas_registradas*$bote_mmbs*.25; ?> MMBsf y 3° Lugar = <?php echo $quinielas_registradas*$bote_mmbs*.15; ?> MMBsf.)</h4></ol>
</article>
<br>
</section>

<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>
