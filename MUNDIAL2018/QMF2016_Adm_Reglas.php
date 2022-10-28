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
<title>Quiniela_Mundial_2018/Adm_reglas</title>
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
<blockquote><a href="QMF2016_Adm_Resultados.php">Cargar Resultados</a></blockquote>
<blockquote><a href="QMF2016_Adm_Calendario.php">Calendario</a></blockquote><blockquote><a href="QMF2016_Adm_Tabla_Usuarios.php">Usuarios</a></blockquote><blockquote><a href="QMF2016_Adm_Reglas.php">**Reglas**</a></blockquote>
<blockquote><a href="QMF2016_Adm_Grupos.php">Grupos</a></blockquote>
</div>
</nav>

<section>
<br>
<h2 style="margin-left:120px">Plantilla para modificar Puntos a Ganar en cada Fase</h2>

<table>
  <tr>
    <td>FASES</td>
    <td>Ptos en Posición</td>
    <td>Ptos en Otra Posición</td>
    <td>Goles</td>
    <td>Acierto Ganador</td>
    <td>Ganador Bono Extra</td>
    <td>Equipo Goleador</td>
    <td>ACCIÓN</td>
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
		$gol01=$fila['GOL'];
		$gana_res=$fila['GANA_RESULT'];
		$gana_ext=$fila['GANA_EXTRA'];
		$goleador_ext=$fila['EQUIPO_GOLEADOR'];

	echo "<form action='QMF2016_Adm_Reglas_Update.php' method='post'><tr><td>";
	echo "$fase<input type='hidden' name='fase' value='$fase'></td><td>";
	echo "<input type='text' name='en_pos' value='$en_pos'></td><td>";
	echo "<input type='text' name='otra_pos' value='$otra_pos'></td><td>";
	echo "<input type='text' name='gol01' value='$gol01'></td><td>";
	echo "<input type='text' name='gana_res' value='$gana_res'></td><td>";
	echo "<input type='text' name='gana_ext' value='$gana_ext'></td><td>";
	echo "<input type='text' name='goleador_ext' value='$goleador_ext'></td>";
	echo "<td><input type='submit' name='actualizar' value='Actualizar'></td></form>";
	echo "</tr>";
	}
	mysqli_close($conexion);
}catch(Exeption $e){
	die("Error: " . $e->getMessage()) . $e->getCode() . $e->getLine();
}
?>

</table>

</section>

<footer>
  <address>Tel&eacute;fono 0414-7881631&nbsp;&nbsp;&nbsp;&nbsp;
  Email: josemortizm@gmail.com</address>
</footer>

</body>
</html>